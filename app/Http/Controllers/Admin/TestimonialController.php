<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display listing of testimonials with optional search & filter.
     */
    public function index(Request $request)
    {
        $query = Testimonial::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('student_name', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('role', 'like', "%{$search}%")
                  ->orWhere('course_name', 'like', "%{$search}%")
                  ->orWhere('review', 'like', "%{$search}%");
            });
        }

        if ($request->filled('rating')) {
            $query->where('rating', '>=', (float) $request->rating);
        }

        if ($request->filled('placed')) {
            $query->where('is_placed', $request->placed === '1');
        }

        $testimonials = $query->latest()->paginate(10)->withQueryString();
        $totalCount = Testimonial::count();
        $placedCount = Testimonial::where('is_placed', true)->count();
        $avgRating = Testimonial::count() > 0 ? Testimonial::avg('rating') : 5.0;
        $featuredCount = Testimonial::where('is_featured', true)->count();

        return view('admin.testimonials.index', compact('testimonials', 'totalCount', 'placedCount', 'avgRating', 'featuredCount'));
    }

    /**
     * Show form for creating a new student testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store newly created testimonial into database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'course_name' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'video_url' => 'nullable|url|max:255',
            'is_placed' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = time() . '_' . Str::slug($request->student_name) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/testimonials');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            $avatarPath = 'uploads/testimonials/' . $filename;
        }

        $testimonial = Testimonial::create([
            'student_name' => $request->student_name,
            'company' => $request->company ?? 'Software Company',
            'role' => $request->role ?? 'Software Engineer',
            'course_name' => $request->course_name,
            'rating' => $request->rating,
            'review' => $request->review,
            'avatar' => $avatarPath,
            'video_url' => $request->video_url,
            'is_placed' => $request->has('is_placed'),
            'is_featured' => $request->has('is_featured'),
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        \App\Services\NotificationService::notifyTestimonial($testimonial->student_name, $testimonial->company);

        return redirect()->route('admin.testimonials.index')->with('success', 'Student testimonial added successfully!');
    }

    /**
     * Show form for editing an existing testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update testimonial in database with strict old image unlinking.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'course_name' => 'nullable|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
            'review' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'video_url' => 'nullable|url|max:255',
            'is_placed' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $avatarPath = $testimonial->avatar;

        if ($request->hasFile('avatar')) {
            // Strictly delete old avatar file from disk if present in uploads folder
            if ($testimonial->avatar && file_exists(public_path($testimonial->avatar)) && is_file(public_path($testimonial->avatar))) {
                @unlink(public_path($testimonial->avatar));
            }

            $file = $request->file('avatar');
            $filename = time() . '_' . Str::slug($request->student_name) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/testimonials');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            $avatarPath = 'uploads/testimonials/' . $filename;
        }

        $testimonial->update([
            'student_name' => $request->student_name,
            'company' => $request->company ?? 'Software Company',
            'role' => $request->role ?? 'Software Engineer',
            'course_name' => $request->course_name,
            'rating' => $request->rating,
            'review' => $request->review,
            'avatar' => $avatarPath,
            'video_url' => $request->video_url,
            'is_placed' => $request->has('is_placed'),
            'is_featured' => $request->has('is_featured'),
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Student testimonial updated successfully!');
    }

    /**
     * Delete testimonial and unlinks physical avatar file from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Strictly delete physical avatar file from disk
        if ($testimonial->avatar && file_exists(public_path($testimonial->avatar)) && is_file(public_path($testimonial->avatar))) {
            @unlink(public_path($testimonial->avatar));
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Student testimonial deleted successfully!');
    }
}
