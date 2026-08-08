<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display listing of all courses from database.
     */
    public function index()
    {
        $courses = Course::latest()->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show form for creating a new course.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store newly created course into database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'category' => 'required|string',
            'duration' => 'required|string',
            'fee' => 'required|numeric',
            'badge' => 'nullable|string',
            'rating' => 'nullable|numeric',
        ]);

        $slug = Str::slug($request->input('title'));

        Course::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'code' => $request->input('code'),
            'category' => $request->input('category'),
            'duration' => $request->input('duration'),
            'fee' => $request->input('fee'),
            'badge' => $request->input('badge', 'Official'),
            'students_count' => $request->input('students_count', 0),
            'rating' => $request->input('rating', 4.9),
            'is_featured' => $request->has('is_featured'),
            'status' => 'active',
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'New course created successfully!');
    }

    /**
     * Show form for editing an existing course.
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update course in database.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'category' => 'required|string',
            'duration' => 'required|string',
            'fee' => 'required|numeric',
            'badge' => 'nullable|string',
            'rating' => 'nullable|numeric',
        ]);

        $course->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'code' => $request->input('code'),
            'category' => $request->input('category'),
            'duration' => $request->input('duration'),
            'fee' => $request->input('fee'),
            'badge' => $request->input('badge'),
            'students_count' => $request->input('students_count', $course->students_count),
            'rating' => $request->input('rating', $course->rating),
            'is_featured' => $request->has('is_featured'),
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully!');
    }

    /**
     * Delete course from database.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully!');
    }
}
