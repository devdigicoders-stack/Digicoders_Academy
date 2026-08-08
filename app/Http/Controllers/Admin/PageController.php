<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();

        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $slugInput = $request->input('slug') ? $request->input('slug') : $request->input('title');
        $slug = Str::slug($slugInput);

        Page::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'content' => $request->input('content'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'status' => 'published',
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Custom page created successfully!');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $slugInput = $request->input('slug') ? $request->input('slug') : $request->input('title');

        $page->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($slugInput),
            'content' => $request->input('content'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Custom page updated successfully!');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Custom page deleted successfully!');
    }
}
