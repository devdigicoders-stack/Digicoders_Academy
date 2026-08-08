<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of admissions with search, filters, & pagination.
     */
    public function index(Request $request)
    {
        $query = Admission::query();

        // 1. Search keyword (Name, Email, Aadhaar Number, School/College)
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('aadhaar_number', 'like', "%{$search}%")
                    ->orWhere('school_college_name', 'like', "%{$search}%");
            });
        }

        // 2. Mobile Filter (Phone, WhatsApp, Guardian Mobile)
        if ($request->filled('mobile')) {
            $mobile = trim($request->mobile);
            $query->where(function ($q) use ($mobile) {
                $q->where('phone', 'like', "%{$mobile}%")
                    ->orWhere('whatsapp_number', 'like', "%{$mobile}%")
                    ->orWhere('guardian_mobile', 'like', "%{$mobile}%");
            });
        }

        // 3. Admission Mode / Branch Filter
        if ($request->filled('mode')) {
            $query->where('mode', $request->mode);
        }

        // 4. Status Filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // 5. Date From & Date To Filter
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Statistics for summary badges
        $stats = [
            'total' => Admission::count(),
            'new' => Admission::where('status', 'new')->count(),
            'contacted' => Admission::where('status', 'contacted')->count(),
            'follow_up' => Admission::where('status', 'follow_up')->count(),
            'enrolled' => Admission::where('status', 'enrolled')->count(),
            'online' => Admission::where('mode', 'Online')->count(),
            'lucknow' => Admission::where('mode', 'Lucknow')->count(),
            'kanpur' => Admission::where('mode', 'Kanpur')->count(),
            'gorakhpur' => Admission::where('mode', 'Gorakhpur')->count(),
        ];

        $admissions = $query->latest()->paginate(15)->withQueryString();

        return view('admin.admissions.index', compact('admissions', 'stats'));
    }

    /**
     * Store a newly created admission from Public Form.
     */
    public function store(Request $request)
    {
        $validated = $this->validateAdmission($request);

        $uploadPath = public_path('uploads/admissions');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($request->hasFile('student_photo')) {
            $photoName = 'photo_' . time() . '_' . uniqid() . '.' . $request->file('student_photo')->getClientOriginalExtension();
            $request->file('student_photo')->move($uploadPath, $photoName);
            $validated['student_photo'] = 'uploads/admissions/' . $photoName;
        }

        $validated['source'] = 'Online Admission Form';
        $validated['status'] = 'new';

        $admission = Admission::create($validated);

        \App\Services\NotificationService::notifyAdmission($admission->name, $admission->course_name ?? 'Course');

        return redirect()->back()->with('success', 'Congratulations! Your admission form has been submitted successfully. Our admission team will contact you shortly.');
    }

    /**
     * Store a newly created admission from Admin Panel.
     */
    public function adminStore(Request $request)
    {
        $validated = $this->validateAdmission($request);

        $uploadPath = public_path('uploads/admissions');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        if ($request->hasFile('student_photo')) {
            $photoName = 'photo_' . time() . '_' . uniqid() . '.' . $request->file('student_photo')->getClientOriginalExtension();
            $request->file('student_photo')->move($uploadPath, $photoName);
            $validated['student_photo'] = 'uploads/admissions/' . $photoName;
        }

        $validated['source'] = 'Admin Dashboard';
        $validated['status'] = 'new';

        $admission = Admission::create($validated);

        \App\Services\NotificationService::notifyAdmission($admission->name, $admission->course_name ?? 'Course');

        return redirect()->route('admin.admissions.index')->with('success', 'Student admission recorded successfully.');
    }

    /**
     * Display the specified admission JSON for view modal.
     */
    public function show(Admission $admission)
    {
        return response()->json($admission);
    }

    /**
     * Update the specified admission record from Admin Panel.
     */
    public function update(Request $request, Admission $admission)
    {
        $validated = $this->validateAdmission($request);

        if ($request->hasFile('student_photo')) {
            $uploadPath = public_path('uploads/admissions');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            if ($admission->student_photo && file_exists(public_path($admission->student_photo))) {
                @unlink(public_path($admission->student_photo));
            }

            $photoName = 'photo_' . time() . '_' . uniqid() . '.' . $request->file('student_photo')->getClientOriginalExtension();
            $request->file('student_photo')->move($uploadPath, $photoName);
            $validated['student_photo'] = 'uploads/admissions/' . $photoName;
        }

        if ($request->has('status')) {
            $validated['status'] = $request->status;
        }

        $admission->update($validated);

        return redirect()->route('admin.admissions.index')->with('success', 'Admission details updated successfully!');
    }

    /**
     * Update status of an admission.
     */
    public function updateStatus(Request $request, Admission $admission)
    {
        $request->validate([
            'status' => 'required|string|in:new,contacted,follow_up,enrolled,rejected',
        ]);

        $admission->update(['status' => $request->status]);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Status updated successfully!']);
        }

        return redirect()->back()->with('success', 'Admission status updated to ' . strtoupper($request->status) . '!');
    }

    /**
     * Remove the specified admission record.
     */
    public function destroy(Admission $admission)
    {
        if ($admission->student_photo && file_exists(public_path($admission->student_photo))) {
            @unlink(public_path($admission->student_photo));
        }

        $admission->delete();

        return redirect()->route('admin.admissions.index')->with('success', 'Admission record deleted successfully!');
    }

    /**
     * Helper validation method for admission fields.
     */
    private function validateAdmission(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'whatsapp_number' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'email' => 'nullable|email|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string|max:20',
            'address' => 'required|string',
            'qualification' => 'required|string|max:100',
            'school_college_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'guardian_mobile' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'aadhaar_number' => ['required', 'string', 'regex:/^\d{12}$/'],
            'mode' => 'required|string|max:50',
            'student_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ], [
            'phone.regex' => 'Mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits.',
            'whatsapp_number.regex' => 'WhatsApp number must start with 6, 7, 8, or 9 and be exactly 10 digits.',
            'guardian_mobile.regex' => 'Guardian mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits.',
            'aadhaar_number.regex' => 'Aadhaar card number must be exactly 12 numeric digits.',
        ]);
    }
}
