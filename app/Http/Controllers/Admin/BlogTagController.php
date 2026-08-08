<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlogTagController extends Controller
{
    public function index()
    {
        $tags = BlogTag::withCount('blogs')->latest()->get();

        return view('admin.blog-tags.index', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_tags,name',
        ]);

        $name = trim(ltrim($request->input('name'), '#'));
        $slug = Str::slug($name);

        BlogTag::create([
            'name' => $name,
            'slug' => $slug,
        ]);

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-tags.index')->with('success', 'Blog Tag created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $tag = BlogTag::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:blog_tags,name,'.$tag->id,
        ]);

        $name = trim(ltrim($request->input('name'), '#'));

        $tag->update([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-tags.index')->with('success', 'Blog Tag updated successfully!');
    }

    public function destroy(string $id)
    {
        $tag = BlogTag::findOrFail($id);
        $tag->delete();

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blog-tags.index')->with('success', 'Blog Tag deleted successfully!');
    }
}
