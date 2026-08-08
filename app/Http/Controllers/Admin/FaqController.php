<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display listing of FAQs with optional search, category & page filters.
     */
    public function index(Request $request)
    {
        $query = Faq::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('question', 'like', "%{$search}%")
                  ->orWhere('answer', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('page_slug')) {
            $query->where(function ($q) use ($request) {
                $q->where('page_slug', $request->page_slug)
                  ->orWhere('page_slug', 'all');
            });
        }

        $faqs = $query->orderBy('sort_order', 'asc')->latest()->paginate(10)->withQueryString();
        $categories = Faq::select('category')->distinct()->pluck('category');
        $pages = [
            'all' => 'All Website Pages',
            'faq' => 'FAQ Center Page',
            'home' => 'Home Page',
            'admissions' => 'Admissions Page',
            'placements' => 'Placements Page',
            'courses' => 'Courses Overview Page',
            'about' => 'About Us Page',
        ];

        return view('admin.faqs.index', compact('faqs', 'categories', 'pages'));
    }

    /**
     * Show form for creating a new FAQ entry.
     */
    public function create()
    {
        $categories = [
            'General',
            'Admissions',
            'Courses & Syllabus',
            'Fees & Installments',
            'Placements',
            'Certificates',
        ];

        $pages = [
            'all' => 'All Website Pages (Universal)',
            'faq' => 'FAQ Center Page',
            'home' => 'Home Page',
            'admissions' => 'Admissions Page',
            'placements' => 'Placements Page',
            'courses' => 'Courses Overview Page',
            'about' => 'About Us Page',
        ];

        return view('admin.faqs.create', compact('categories', 'pages'));
    }

    /**
     * Store newly created FAQ into database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
            'page_slug' => 'required|string|max:100',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'category' => $request->category,
            'page_slug' => $request->page_slug,
            'sort_order' => $request->input('sort_order', 0),
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        return redirect()->route('admin.faqs.index')->with('success', 'New FAQ item created successfully!');
    }

    /**
     * Show form for editing an existing FAQ item.
     */
    public function edit(Faq $faq)
    {
        $categories = [
            'General',
            'Admissions',
            'Courses & Syllabus',
            'Fees & Installments',
            'Placements',
            'Certificates',
        ];

        $pages = [
            'all' => 'All Website Pages (Universal)',
            'faq' => 'FAQ Center Page',
            'home' => 'Home Page',
            'admissions' => 'Admissions Page',
            'placements' => 'Placements Page',
            'courses' => 'Courses Overview Page',
            'about' => 'About Us Page',
        ];

        return view('admin.faqs.edit', compact('faq', 'categories', 'pages'));
    }

    /**
     * Update FAQ in database.
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'category' => 'required|string|max:100',
            'page_slug' => 'required|string|max:100',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'category' => $request->category,
            'page_slug' => $request->page_slug,
            'sort_order' => $request->input('sort_order', $faq->sort_order),
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ entry updated successfully!');
    }

    /**
     * Remove FAQ item from database.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ entry deleted successfully!');
    }

    /**
     * Render dynamic public FAQ page.
     */
    public function frontendIndex()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        // Return ALL active FAQs regardless of assigned page_slug
        $faqs = Faq::where('status', true)->orderBy('sort_order', 'asc')->latest()->get();
        $categories = Faq::where('status', true)->select('category')->distinct()->pluck('category');

        return view('faq', compact('settings', 'faqs', 'categories'));
    }
}
