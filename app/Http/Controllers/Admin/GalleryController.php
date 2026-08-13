<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Setting;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display listing of gallery items with optional album & search filters.
     */
    public function index(Request $request)
    {
        $query = Gallery::query();

        if ($request->filled('album')) {
            $query->where('album', $request->album);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('alt_text', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $galleries = $query->latest()->paginate(10)->withQueryString();
        $totalCount = Gallery::count();
        $activeCount = Gallery::where('status', true)->count();
        $albums = Gallery::select('album')->distinct()->pluck('album');

        return view('admin.gallery.index', compact('galleries', 'albums', 'totalCount', 'activeCount'));
    }

    /**
     * Show form for uploading a new gallery photo.
     */
    public function create()
    {
        $albums = [
            'Campus',
            'Classrooms',
            'Computer Labs',
            'Workshops',
            'Seminars',
            'Industrial Visits',
            'Events',
            'Certificates',
            'Placement',
        ];

        return view('admin.gallery.create', compact('albums'));
    }

    /**
     * Store a newly created gallery item into database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'album' => 'required|string|max:100',
            'description' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'status' => 'nullable|boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = public_path('uploads/gallery');

            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $filename = $this->generateSeoFilename($destinationPath, $request->title, $file->getClientOriginalExtension());
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/gallery/'.$filename;
        }

        $gallery = Gallery::create([
            'title' => $request->title,
            'alt_text' => $request->alt_text ?? $request->title,
            'album' => $request->album,
            'description' => $request->description,
            'image_path' => $imagePath,
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        NotificationService::notifyGallery($gallery->title);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery photo uploaded successfully.');
    }

    /**
     * Show form for editing an existing gallery item.
     */
    public function edit(Gallery $gallery)
    {
        $albums = [
            'Campus',
            'Classrooms',
            'Computer Labs',
            'Workshops',
            'Seminars',
            'Industrial Visits',
            'Events',
            'Certificates',
            'Placement',
        ];

        return view('admin.gallery.edit', compact('gallery', 'albums'));
    }

    /**
     * Update gallery item in database.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'alt_text' => 'nullable|string|max:255',
            'album' => 'required|string|max:100',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'status' => 'nullable|boolean',
        ]);

        $imagePath = $gallery->image_path;

        if ($request->hasFile('image')) {
            // Delete old image file from public/uploads/gallery
            if ($gallery->image_path && Str::startsWith($gallery->image_path, 'uploads/') && file_exists(public_path($gallery->image_path)) && is_file(public_path($gallery->image_path))) {
                @unlink(public_path($gallery->image_path));
            }

            $file = $request->file('image');
            $destinationPath = public_path('uploads/gallery');

            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $filename = $this->generateSeoFilename($destinationPath, $request->title, $file->getClientOriginalExtension());
            $file->move($destinationPath, $filename);
            $imagePath = 'uploads/gallery/'.$filename;
        }

        $gallery->update([
            'title' => $request->title,
            'alt_text' => $request->alt_text ?? $request->title,
            'album' => $request->album,
            'description' => $request->description,
            'image_path' => $imagePath,
            'status' => $request->has('status') ? $request->boolean('status') : true,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated successfully!');
    }

    /**
     * Remove gallery item from database and unlink file.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image_path && Str::startsWith($gallery->image_path, 'uploads/') && file_exists(public_path($gallery->image_path)) && is_file(public_path($gallery->image_path))) {
            @unlink(public_path($gallery->image_path));
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted successfully!');
    }

    /**
     * Render dynamic public frontend gallery page.
     */
    public function frontendIndex()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $galleries = Gallery::where('status', true)->latest()->get();
        $albums = Gallery::where('status', true)->select('album')->distinct()->pluck('album');

        return view('gallery', compact('settings', 'galleries', 'albums'));
    }

    /**
     * Helper for Clean SEO Image Filename (e.g. annual-tech-fest-2026.jpg)
     */
    private function generateSeoFilename(string $destinationPath, string $title, string $extension): string
    {
        $baseName = Str::slug($title) ?: 'gallery-photo';
        $filename = $baseName.'.'.$extension;
        $counter = 1;

        while (file_exists($destinationPath.'/'.$filename)) {
            $filename = $baseName.'-'.$counter.'.'.$extension;
            $counter++;
        }

        return $filename;
    }
}
