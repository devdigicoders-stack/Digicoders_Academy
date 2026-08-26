<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\BlogView;
use App\Models\Setting;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('tags')->latest()->get();

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = BlogCategory::where('status', true)->get();
        $tags = BlogTag::all();

        return view('admin.blogs.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $isDraft = $request->input('status') === 'draft';

        $request->validate([
            'title' => $isDraft ? 'nullable|string|max:255' : 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:blog_tags,id',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'author' => 'nullable|string',
            'status' => 'required|string|in:published,draft',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);

        $rawTitle = $request->input('title');
        $title = $rawTitle ? $rawTitle : ($isDraft ? 'Untitled Draft ('.date('d M H:i').')' : 'Untitled Article');

        $slugInput = $request->input('slug') ? $request->input('slug') : $title;
        $slug = Str::slug($slugInput);
        if (! $slug) {
            $slug = 'draft-'.time();
        }

        // Ensure unique slug
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $featuredImagePath = null;
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $destinationPath = public_path('uploads/blogs');

            if (! File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $imageName = $this->generateSeoFilename($destinationPath, $slug, $image->getClientOriginalExtension());
            $image->move($destinationPath, $imageName);
            $featuredImagePath = 'uploads/blogs/'.$imageName;
        }

        $blog = Blog::create([
            'title' => $title,
            'slug' => $slug,
            'category' => $request->input('category', 'Web Development'),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
            'author' => $request->input('author', 'Admin'),
            'status' => $request->input('status', 'published'),
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'canonical_url' => $request->input('canonical_url'),
            'faqs' => $this->processFaqsInput($request->input('faqs')),
            'views_count' => 0,
            'comments_count' => 0,
        ]);

        if ($request->has('tags')) {
            $blog->tags()->sync($request->input('tags', []));
        }

        NotificationService::notifyBlog($blog->title);

        Cache::forget('admin_sidebar_counts');

        $msg = $isDraft ? 'Blog draft saved successfully.' : 'New blog post published successfully.';

        return redirect()->route('admin.blogs.index')->with('success', $msg);
    }

    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->orWhere('id', $slug)->with('tags')->firstOrFail();

        // Extract embedded summernote content images for display gallery
        $contentImages = [];
        if ($blog->content) {
            preg_match_all('/src="([^"]+)"/', $blog->content, $matches);
            $contentImages = array_values(array_unique($matches[1] ?? []));
        }

        return view('admin.blogs.show', compact('blog', 'contentImages'));
    }

    public function edit(string $id)
    {
        $blog = Blog::where('id', $id)->orWhere('slug', $id)->with('tags')->first();

        if (! $blog) {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog article not found or has been removed.');
        }

        $categories = BlogCategory::where('status', true)->get();
        $tags = BlogTag::all();

        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::where('id', $id)->orWhere('slug', $id)->first();

        if (! $blog) {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog article not found or has been removed.');
        }

        $isDraft = $request->input('status') === 'draft';

        $request->validate([
            'title' => $isDraft ? 'nullable|string|max:255' : 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'nullable|string',
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:blog_tags,id',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'status' => 'required|string|in:published,draft',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
        ]);

        $rawTitle = $request->input('title');
        $title = $rawTitle ? $rawTitle : ($isDraft ? 'Untitled Draft ('.date('d M H:i').')' : $blog->title);

        $slugInput = $request->input('slug') ? $request->input('slug') : $title;
        $slug = Str::slug($slugInput);
        if (! $slug) {
            $slug = $blog->slug;
        }

        $featuredImagePath = $blog->featured_image;

        // Handle featured image update & delete old image file
        if ($request->hasFile('featured_image')) {
            if ($blog->featured_image && File::exists(public_path($blog->featured_image))) {
                File::delete(public_path($blog->featured_image));
            }

            $image = $request->file('featured_image');
            $destinationPath = public_path('uploads/blogs');

            if (! File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $imageName = $this->generateSeoFilename($destinationPath, $slug, $image->getClientOriginalExtension());
            $image->move($destinationPath, $imageName);
            $featuredImagePath = 'uploads/blogs/'.$imageName;
        }

        // Delete removed summernote inline content images
        if ($blog->content) {
            preg_match_all('/src="([^"]+)"/', $blog->content, $oldMatches);
            preg_match_all('/src="([^"]+)"/', $request->input('content', ''), $newMatches);

            $oldImages = $oldMatches[1] ?? [];
            $newImages = $newMatches[1] ?? [];

            $removedImages = array_diff($oldImages, $newImages);

            foreach ($removedImages as $removedImg) {
                if (str_contains($removedImg, 'uploads/blogs/content/')) {
                    $parsedPath = parse_url($removedImg, PHP_URL_PATH);
                    $localPath = public_path(ltrim($parsedPath, '/'));
                    if (File::exists($localPath)) {
                        File::delete($localPath);
                    }
                }
            }
        }

        $blog->update([
            'title' => $title,
            'slug' => $slug,
            'category' => $request->input('category', $blog->category),
            'summary' => $request->input('summary'),
            'content' => $request->input('content'),
            'author' => $request->input('author', $blog->author),
            'status' => $request->input('status', 'published'),
            'featured_image' => $featuredImagePath,
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'canonical_url' => $request->input('canonical_url'),
            'faqs' => $this->processFaqsInput($request->input('faqs')),
        ]);

        $blog->tags()->sync($request->input('tags', []));

        $msg = $isDraft ? 'Draft updated successfully!' : 'Blog article updated and published successfully!';

        return redirect()->route('admin.blogs.index')->with('success', $msg);
    }

    public function destroy(string $id)
    {
        $blog = Blog::where('id', $id)->orWhere('slug', $id)->first();

        if (! $blog) {
            return redirect()->route('admin.blogs.index')->with('error', 'Blog article not found or has been removed.');
        }

        // 1. Delete featured cover image from folder if exists
        if ($blog->featured_image && File::exists(public_path($blog->featured_image))) {
            File::delete(public_path($blog->featured_image));
        }

        // 2. Extract & delete summernote editor images from folder
        if ($blog->content) {
            preg_match_all('/src="([^"]+)"/', $blog->content, $matches);
            if (! empty($matches[1])) {
                foreach ($matches[1] as $imgUrl) {
                    if (str_contains($imgUrl, 'uploads/blogs/content/')) {
                        $parsedPath = parse_url($imgUrl, PHP_URL_PATH);
                        $localPath = public_path(ltrim($parsedPath, '/'));
                        if (File::exists($localPath)) {
                            File::delete($localPath);
                        }
                    }
                }
            }
        }

        $blog->tags()->detach();
        $blog->delete();

        Cache::forget('admin_sidebar_counts');

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article and all associated image files deleted successfully!');
    }

    /**
     * Public Website Blog Listing Page with Dynamic Filtering
     */
    public function frontendIndex(Request $request)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $query = Blog::where('status', 'published')->with('tags');

        // Filter by Search Keyword
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('summary', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Filter by Category (slug or name)
        if ($request->filled('category')) {
            $categorySlug = $request->input('category');
            $catObj = BlogCategory::where('slug', $categorySlug)->orWhere('name', $categorySlug)->first();
            if ($catObj) {
                $query->where('category', $catObj->name);
            } else {
                $query->where('category', $categorySlug);
            }
        }

        // Filter by Tag (slug or name)
        if ($request->filled('tag')) {
            $tagSlug = $request->input('tag');
            $query->whereHas('tags', function ($q) use ($tagSlug) {
                $q->where('slug', $tagSlug)->orWhere('name', $tagSlug);
            });
        }

        // Sorting
        $sort = $request->input('sort', 'newest');
        if ($sort === 'popular') {
            $query->orderBy('views_count', 'desc');
        } else {
            $query->latest();
        }

        $blogs = $query->paginate(9)->withQueryString();
        $featuredArticle = Blog::where('status', 'published')->latest()->first();
        $categories = BlogCategory::where('status', true)->withCount('blogs')->get();
        $tags = BlogTag::withCount('blogs')->get();

        return view('blogs.index', compact('blogs', 'settings', 'featuredArticle', 'categories', 'tags'));
    }

    /**
     * Public Website Blog Single Detail View (Unique Views Protection via IP & Session)
     */
    public function frontendShow(Request $request, string $slug)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $blog = Blog::where('status', 'published')
            ->where(function ($q) use ($slug) {
                $q->where('slug', $slug)->orWhere('id', $slug);
            })
            ->with('tags')
            ->firstOrFail();

        // Prevent Duplicate Views: Combination of Session + IP Cache (Valid 24 Hours)
        $ip = $request->ip();
        $cacheKey = "blog_viewed_{$blog->id}_{$ip}";
        $sessionKey = "viewed_blog_{$blog->id}";

        if (! session()->has($sessionKey) && ! Cache::has($cacheKey)) {
            $blog->increment('views_count');

            $displayIp = ($ip === '127.0.0.1' || $ip === '::1') ? '103.24.12.8 (Local Host)' : $ip;
            BlogView::create([
                'blog_id' => $blog->id,
                'ip_address' => $displayIp,
                'user_agent' => substr($request->userAgent() ?? '', 0, 500),
                'referer' => substr($request->header('referer') ?? '', 0, 500),
            ]);

            session()->put($sessionKey, true);
            Cache::put($cacheKey, true, now()->addHours(24));
        }

        $categories = BlogCategory::where('status', true)->withCount('blogs')->get();
        $tags = BlogTag::withCount('blogs')->get();
        $recentPosts = Blog::where('status', 'published')
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('blogs.show', compact('blog', 'settings', 'categories', 'tags', 'recentPosts'));
    }

    /**
     * AJAX endpoint to fetch IP address view logs for a blog post.
     */
    public function getViewsData(string $id)
    {
        $blog = Blog::where('id', $id)->orWhere('slug', $id)->firstOrFail();

        $views = BlogView::where('blog_id', $blog->id)
            ->latest()
            ->get()
            ->map(function ($view) {
                return [
                    'id' => $view->id,
                    'ip_address' => $view->ip_address,
                    'user_agent' => $view->user_agent ?: 'Unknown Device',
                    'browser' => $this->parseBrowser($view->user_agent),
                    'referer' => $view->referer ?: 'Direct Visit',
                    'viewed_at' => $view->created_at ? $view->created_at->format('d M Y, h:i A') : 'N/A',
                    'viewed_ago' => $view->created_at ? $view->created_at->diffForHumans() : 'Recently',
                ];
            });

        return response()->json([
            'status' => 'success',
            'blog_id' => $blog->id,
            'title' => $blog->title,
            'total_views' => $blog->views_count,
            'logged_views_count' => $views->count(),
            'views' => $views,
        ]);
    }

    /**
     * Parse Browser name from user agent.
     */
    private function parseBrowser(?string $userAgent): string
    {
        if (! $userAgent) {
            return 'Unknown Browser';
        }
        if (str_contains($userAgent, 'Edg')) {
            return 'Microsoft Edge';
        }
        if (str_contains($userAgent, 'Chrome')) {
            return 'Google Chrome';
        }
        if (str_contains($userAgent, 'Safari')) {
            return 'Apple Safari';
        }
        if (str_contains($userAgent, 'Firefox')) {
            return 'Mozilla Firefox';
        }

        return 'Web Browser';
    }

    /**
     * Summernote AJAX Editor Image Upload
     */
    public function uploadEditorImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $rawTitle = $request->input('title') ?: 'blog-editor';
            $destinationPath = public_path('uploads/blogs/content');

            if (! File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true, true);
            }

            $filename = $this->generateSeoFilename($destinationPath, $rawTitle, $file->getClientOriginalExtension());
            $file->move($destinationPath, $filename);

            return response()->json([
                'url' => asset('uploads/blogs/content/'.$filename),
            ]);
        }

        return response()->json(['error' => 'No image file uploaded'], 400);
    }

    /**
     * Helper for Clean Pure SEO Image Filename (e.g. master-full-stack-web-development-2026.jpg)
     */
    private function generateSeoFilename(string $destinationPath, string $titleSlug, string $extension): string
    {
        $baseName = Str::slug($titleSlug) ?: 'blog-image';
        $filename = $baseName.'.'.$extension;
        $counter = 1;
        while (File::exists($destinationPath.'/'.$filename)) {
            $filename = $baseName.'-'.$counter.'.'.$extension;
            $counter++;
        }

        return $filename;
    }

    /**
     * Clean and format FAQs input array.
     */
    protected function processFaqsInput(?array $rawFaqs): array
    {
        if (! is_array($rawFaqs)) {
            return [];
        }

        $processed = [];
        foreach ($rawFaqs as $item) {
            $q = trim($item['question'] ?? '');
            $a = trim($item['answer'] ?? '');

            if ($q !== '' || $a !== '') {
                $processed[] = [
                    'question' => $q,
                    'answer' => $a,
                ];
            }
        }

        return $processed;
    }
}
