<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class ContactEnquiryController extends Controller
{
    /**
     * Store a contact form submission from the public contact page.
     */
    public function store(Request $request)
    {
        // Sanitize phone number (strip spaces, dashes, +91, or leading 0)
        if ($request->has('phone')) {
            $phone = preg_replace('/\D/', '', (string) $request->input('phone'));
            if (strlen($phone) === 12 && str_starts_with($phone, '91')) {
                $phone = substr($phone, 2);
            } elseif (strlen($phone) === 11 && str_starts_with($phone, '0')) {
                $phone = substr($phone, 1);
            }
            $request->merge(['phone' => $phone]);
        }

        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'email'   => 'nullable|email|max:255',
            'course'  => 'nullable|string|max:255',
            'city'    => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required'    => 'Full Name is required (Kripya naam bharein).',
            'phone.required'   => 'Mobile number is required.',
            'phone.regex'      => 'Mobile number must be 10 digits and start with 6, 7, 8, or 9.',
            'email.email'      => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message/question.',
        ]);

        $enquiry = ContactEnquiry::create($validated);

        NotificationService::notifyContact(
            $enquiry->name,
            $enquiry->course ?? 'General Enquiry',
            route('admin.contact-enquiries.index')
        );

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully. Our counsellor will get back to you within 2 hours.');
    }

    /**
     * Display all contact enquiries in admin panel with search & filters.
     */
    public function index(Request $request)
    {
        $query = ContactEnquiry::query();

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $stats = [
            'total'     => ContactEnquiry::count(),
            'new'       => ContactEnquiry::where('status', 'new')->count(),
            'contacted' => ContactEnquiry::where('status', 'contacted')->count(),
            'resolved'  => ContactEnquiry::where('status', 'resolved')->count(),
            'unread'    => ContactEnquiry::where('is_read', false)->count(),
        ];

        $enquiries = $query->latest()->paginate(15)->withQueryString();

        return view('admin.contact-enquiries.index', compact('enquiries', 'stats'));
    }

    /**
     * Mark an enquiry as read.
     */
    public function markAsRead(ContactEnquiry $contactEnquiry)
    {
        $contactEnquiry->update(['is_read' => true]);

        return redirect()->back()->with('success', 'Enquiry marked as read.');
    }

    /**
     * Update status of a contact enquiry.
     */
    public function updateStatus(Request $request, ContactEnquiry $contactEnquiry)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,resolved',
        ]);

        $contactEnquiry->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated to '.ucfirst($request->status).'.');
    }

    /**
     * Delete a single contact enquiry.
     */
    public function destroy(ContactEnquiry $contactEnquiry)
    {
        $contactEnquiry->delete();

        return redirect()->route('admin.contact-enquiries.index')->with('success', 'Enquiry deleted successfully.');
    }

    /**
     * Bulk delete selected contact enquiries.
     */
    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array']);
        ContactEnquiry::whereIn('id', $request->ids)->delete();

        return redirect()->route('admin.contact-enquiries.index')->with('success', 'Selected enquiries deleted successfully.');
    }
}
