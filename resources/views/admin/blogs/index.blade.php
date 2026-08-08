@extends('layouts.admin')

@section('title', 'Blog Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Blog & Articles Management <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage academy blog posts, tutorials, technology roadmaps, and SEO articles.</p>
        </div>
        <div class="dc-quick-action-group" style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
            <a href="{{ route('admin.blog-categories.index') }}" class="dc-btn" style="background: rgba(0, 166, 81, 0.15); color: var(--dc-green); border: 1px solid rgba(0, 166, 81, 0.3);">
                <i class="fa-solid fa-folder-tree"></i>
                <span>Blog Categories</span>
            </a>
            <a href="{{ route('admin.blog-tags.index') }}" class="dc-btn" style="background: rgba(14, 165, 233, 0.15); color: var(--dc-blue); border: 1px solid rgba(14, 165, 233, 0.3);">
                <i class="fa-solid fa-tags"></i>
                <span>Blog Tags</span>
            </a>
            <a href="{{ route('admin.blogs.create') }}" class="dc-btn dc-btn-orange">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Write New Article</span>
            </a>
        </div>
    </div>

    <!-- Stats Header -->
    <div class="dc-stats-grid">
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Total Articles</span>
                <div class="dc-stat-icon orange"><i class="fa-solid fa-newspaper"></i></div>
            </div>
            <div class="dc-stat-number">{{ $blogs->count() }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">Live</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Published Articles</span>
                <div class="dc-stat-icon green"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <div class="dc-stat-number">{{ $blogs->where('status', 'published')->count() }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">Live</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Drafts</span>
                <div class="dc-stat-icon blue"><i class="fa-solid fa-pencil"></i></div>
            </div>
            <div class="dc-stat-number">{{ $blogs->where('status', 'draft')->count() }}</div>
            <div class="dc-stat-footer"><span class="dc-trend down">Pending</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Total Views</span>
                <div class="dc-stat-icon orange"><i class="fa-solid fa-eye"></i></div>
            </div>
            <div class="dc-stat-number">{{ number_format($blogs->sum('views_count')) }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">+24% traffic</span></div>
        </div>
    </div>

    <!-- Articles Table Card -->
    <div class="dc-card">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">All Blog Articles</h2>
        </div>

        <div class="dc-table-responsive">
            <table class="dc-table">
                <thead>
                    <tr>
                        <th style="width: 70px; text-align: center;">Main Cover</th>
                        <th>Article Title & Slug</th>
                        <th>Category</th>
                        <th>Summernote Images</th>
                        <th>Views</th>
                        <th>Published Date</th>
                        <th>Status</th>
                        <th style="text-align: right; width: 130px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                    @php
                        preg_match_all('/src="([^"]+)"/', $blog->content ?? '', $contentImgMatches);
                        $contentImgs = $contentImgMatches[1] ?? [];
                    @endphp
                    <tr>
                        <td style="text-align: center; padding: 10px;">
                            @if($blog->featured_image)
                                <img src="{{ asset($blog->featured_image) }}" 
                                     alt="Cover" 
                                     style="width: 56px; height: 40px; object-fit: cover; border-radius: 6px; border: 1px solid var(--dc-border);"
                                     onerror="this.src='{{ asset('images/students.png') }}'">
                            @else
                                <span style="font-size: 10px; color: var(--dc-light-gray); font-style: italic;">No Cover</span>
                            @endif
                        </td>
                        <td>
                            <strong style="display: block; font-size: 13.5px; color: var(--dc-dark);">{{ $blog->title }}</strong>
                            <span style="font-size: 11px; color: var(--dc-light-gray);">slug: {{ $blog->slug }}</span>
                        </td>
                        <td>
                            <span class="dc-badge-pill dc-badge-green" style="display: inline-block; margin-bottom: 4px;">{{ $blog->category }}</span>
                            @if($blog->tags->count() > 0)
                                <div style="display: flex; flex-wrap: wrap; gap: 3px;">
                                    @foreach($blog->tags as $t)
                                        <span style="font-size: 10px; background: rgba(14, 165, 233, 0.1); color: var(--dc-blue); padding: 1px 6px; border-radius: 4px; font-weight: 600;">#{{ $t->name }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </td>
                        <td>
                            @if(count($contentImgs) > 0)
                                <div style="display: flex; align-items: center; gap: 4px;">
                                    @foreach(array_slice($contentImgs, 0, 3) as $cImg)
                                        <img src="{{ asset($cImg) }}" 
                                             alt="Inline" 
                                             style="width: 32px; height: 32px; object-fit: cover; border-radius: 6px; border: 1px solid var(--dc-border);"
                                             onerror="this.style.display='none'">
                                    @endforeach
                                    @if(count($contentImgs) > 3)
                                        <span class="dc-badge-pill" style="font-size: 10px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); font-weight: 700;">+{{ count($contentImgs) - 3 }}</span>
                                    @endif
                                </div>
                            @else
                                <span style="font-size: 11px; color: var(--dc-light-gray); font-style: italic;">0 Images</span>
                            @endif
                        </td>
                        <td><strong>{{ number_format($blog->views_count) }} Views</strong></td>
                        <td style="font-size: 12px; color: var(--dc-light-gray);">{{ $blog->created_at ? $blog->created_at->format('d M Y') : 'Recent' }}</td>
                        <td>
                            @if($blog->status === 'published')
                                <span class="dc-badge-pill dc-badge-green">Published</span>
                            @else
                                <span class="dc-badge-pill dc-badge-blue">Draft</span>
                            @endif
                        </td>
                        <td style="text-align: right; padding: 10px; white-space: nowrap;">
                            <div class="dc-action-group" style="justify-content: flex-end;">
                                <a href="{{ route('admin.blogs.show', $blog->slug ?: $blog->id) }}" class="dc-action-btn dc-action-view" title="View Full Article Details">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="dc-action-btn dc-action-edit" title="Edit Article">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="delete-form" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Article">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" style="text-align: center; color: var(--dc-light-gray); padding: 30px;">No blog articles found in database.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
