<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::withCount('blogs')->latest()->get();

        return view('admin.blog-categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'description' => 'nullable|string',
        ]);

        $name = trim($request->input('name'));
        $slug = Str::slug($name);

        BlogCategory::create([
            'name' => $name,
            'slug' => $slug,
            'description' => $request->input('description'),
            'status' => true,
        ]);

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog Category created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $category = BlogCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,'.$category->id,
            'description' => 'nullable|string',
        ]);

        $name = trim($request->input('name'));

        $category->update([
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $request->input('description'),
        ]);

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog Category updated successfully!');
    }

    public function destroy(string $id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-categories.index')->with('success', 'Blog Category deleted successfully!');
    }
}
