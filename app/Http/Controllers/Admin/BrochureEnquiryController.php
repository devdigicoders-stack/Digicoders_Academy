<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrochureEnquiry;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BrochureEnquiryController extends Controller
{
    /**
     * Store a brochure/prospectus request from the public website modal via AJAX or form post.
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
            'name'   => 'required|string|max:255',
            'phone'  => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'email'  => 'nullable|email|max:255',
            'course' => 'nullable|string|max:255',
        ], [
            'name.required'  => 'Full Name is required (Kripya naam bharein).',
            'phone.required' => 'WhatsApp Mobile number is required.',
            'phone.regex'    => 'Mobile number must be 10 digits and start with 6, 7, 8, or 9.',
            'email.email'    => 'Please enter a valid email address.',
        ]);

        $enquiry = BrochureEnquiry::create([
            'name'   => $validated['name'],
            'phone'  => $validated['phone'],
            'email'  => $validated['email'] ?? null,
            'course' => $validated['course'] ?? 'All Courses / General Prospectus',
            'status' => 'new',
        ]);

        // Invalidate sidebar counts cache so badge updates instantly
        Cache::forget('admin_sidebar_counts');

        // Send notification if service is available
        if (class_exists(NotificationService::class)) {
            NotificationService::notifyContact(
                $enquiry->name,
                'Brochure Download Request ('.$enquiry->course.')',
                route('admin.brochure-requests.index')
            );
        }

        $pdfPath = asset('pdf/DigiCoders_2026_Placement_Brochure.pdf');

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Prospectus request recorded successfully.',
                'pdf_url' => $pdfPath,
            ]);
        }

        return redirect()->back()->with('success', 'Prospectus request recorded successfully. Download starting...')->with('download_pdf', $pdfPath);
    }

    /**
     * Display all brochure requests in admin panel with search & filters.
     */
    public function index(Request $request)
    {
        $query = BrochureEnquiry::query();

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('course', 'like', "%{$search}%");
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
            'total'     => BrochureEnquiry::count(),
            'new'       => BrochureEnquiry::where('status', 'new')->count(),
            'contacted' => BrochureEnquiry::where('status', 'contacted')->count(),
            'resolved'  => BrochureEnquiry::where('status', 'resolved')->count(),
            'unread'    => BrochureEnquiry::where('is_read', false)->count(),
        ];

        $enquiries = $query->latest()->paginate(15)->withQueryString();

        return view('admin.brochure-requests.index', compact('enquiries', 'stats'));
    }

    /**
     * Mark a brochure request as read.
     */
    public function markAsRead(BrochureEnquiry $brochureEnquiry)
    {
        $brochureEnquiry->update(['is_read' => true]);
        Cache::forget('admin_sidebar_counts');

        return redirect()->back()->with('success', 'Request marked as read.');
    }

    /**
     * Update status of a brochure request.
     */
    public function updateStatus(Request $request, BrochureEnquiry $brochureEnquiry)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,resolved',
        ]);

        $brochureEnquiry->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status updated to '.ucfirst($request->status).'.');
    }

    /**
     * Delete a single brochure request.
     */
    public function destroy(BrochureEnquiry $brochureEnquiry)
    {
        $brochureEnquiry->delete();
        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.brochure-requests.index')->with('success', 'Brochure request deleted successfully.');
    }

    /**
     * Bulk delete selected brochure requests.
     */
    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array']);
        BrochureEnquiry::whereIn('id', $request->ids)->delete();
        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.brochure-requests.index')->with('success', 'Selected brochure requests deleted successfully.');
    }
}
