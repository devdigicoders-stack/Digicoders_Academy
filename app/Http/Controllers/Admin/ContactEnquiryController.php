<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactEnquiry;
use App\Services\NotificationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEnquiryController extends Controller
{
    /**
     * Store a contact form or home page enquiry submission.
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
            'name' => 'required|string|max:255',
            'phone' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'email' => 'nullable|email|max:255',
            'course' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ], [
            'name.required' => 'Full Name is required (Kripya naam bharein).',
            'phone.required' => 'Mobile number is required.',
            'phone.regex' => 'Mobile number must be 10 digits and start with 6, 7, 8, or 9.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        // Save enquiry to database table `contact_enquiries`
        $enquiry = ContactEnquiry::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'course' => $validated['course'] ?? 'General Enquiry',
            'message' => $validated['message'] ?? $request->input('subject', 'Home Page Quick Enquiry'),
            'status' => 'new',
            'is_read' => false,
        ]);

        // 1. Dispatch real-time Admin Panel System Notification
        NotificationService::notifyContact(
            $enquiry->name,
            $enquiry->course ?? 'General Enquiry',
            route('admin.contact-enquiries.index')
        );

        // 2. Send Rich HTML Email Notification to Admin
        $recipientEmail = env('ADMIN_OTP_EMAIL') ?: (Admin::first()?->email ?: 'admin@digicoders.in');
        $mailData = [
            'name' => $enquiry->name,
            'phone' => $enquiry->phone,
            'email' => $enquiry->email,
            'course' => $enquiry->course,
            'enquiryMessage' => $enquiry->message,
            'requestTime' => Carbon::now()->format('M d, Y h:i A'),
            'adminUrl' => route('admin.contact-enquiries.index'),
        ];

        try {
            Mail::send('emails.contact-enquiry', $mailData, function ($message) use ($recipientEmail, $enquiry) {
                $message->to($recipientEmail)
                    ->subject("📩 New Enquiry: {$enquiry->name} ({$enquiry->course}) - DigiCoders Academy");
            });
        } catch (\Throwable $e) {
            // Mailer exception fallback for local dev
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been received successfully. Our counsellor will get back to you within 2 hours.',
                'data' => $enquiry,
            ]);
        }

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
            'total' => ContactEnquiry::count(),
            'new' => ContactEnquiry::where('status', 'new')->count(),
            'contacted' => ContactEnquiry::where('status', 'contacted')->count(),
            'resolved' => ContactEnquiry::where('status', 'resolved')->count(),
            'unread' => ContactEnquiry::where('is_read', false)->count(),
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
