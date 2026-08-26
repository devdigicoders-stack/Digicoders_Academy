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
                        <td>
                            <button type="button" 
                                    onclick="openBlogViewsModal({{ $blog->id }}, '{{ addslashes($blog->title) }}', {{ $blog->views_count }})" 
                                    title="Click to view IP Address analytics & viewing history"
                                    style="background: rgba(245, 130, 32, 0.12); color: var(--dc-orange); border: 1px solid rgba(245, 130, 32, 0.3); border-radius: 20px; padding: 5px 12px; font-size: 12px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; transition: all 0.2s ease;">
                                <i class="fa-solid fa-eye"></i>
                                <span>{{ number_format($blog->views_count) }} Views</span>
                            </button>
                        </td>
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

<!-- Modal: Blog Article Views & IP Address Analytics -->
<div id="blogViewsModal" class="dc-modal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(4px); align-items: center; justify-content: center; padding: 20px;">
    <div class="dc-modal-card" style="background: #ffffff; width: 100%; max-width: 840px; border-radius: 18px; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); overflow: hidden; display: flex; flex-direction: column; max-height: 90vh;">
        <!-- Modal Header -->
        <div style="padding: 20px 24px; border-bottom: 1px solid var(--dc-border); display: flex; align-items: center; justify-content: space-between; background: #F8FAFC;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 6px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 12px; margin-bottom: 4px;">
                    <i class="fa-solid fa-chart-line"></i> IP Analytics & Viewer Logs
                </div>
                <h3 id="modalBlogTitle" style="font-size: 17px; font-weight: 800; color: var(--dc-dark); margin: 0;">Article Views History</h3>
            </div>
            <div style="display: flex; align-items: center; gap: 12px;">
                <span id="modalTotalViewsBadge" class="dc-badge-pill dc-badge-green" style="font-size: 12px; font-weight: 700; padding: 6px 12px;">
                    0 Total Views
                </span>
                <button type="button" onclick="closeBlogViewsModal()" style="background: none; border: none; font-size: 24px; color: var(--dc-light-gray); cursor: pointer; padding: 4px; line-height: 1;">
                    &times;
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <div style="padding: 20px 24px; overflow-y: auto; flex: 1;">
            <!-- Search & Info Bar -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; gap: 12px;">
                <div style="position: relative; width: 280px;">
                    <input type="text" id="modalIpSearchInput" onkeyup="filterViewsTable()" placeholder="Search IP address or browser..." style="width: 100%; padding: 8px 12px 8px 32px; border: 1px solid var(--dc-border); border-radius: 8px; font-size: 12.5px; outline: none;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: var(--dc-light-gray); font-size: 12px;"></i>
                </div>
                <div style="font-size: 12px; color: var(--dc-light-gray);">
                    Showing real-time IP visit logs
                </div>
            </div>

            <!-- Views Table -->
            <div class="dc-table-responsive" style="max-height: 420px; overflow-y: auto;">
                <table class="dc-table" id="modalViewsTable">
                    <thead>
                        <tr style="background: #F1F5F9;">
                            <th style="width: 40px; text-align: center;">#</th>
                            <th>IP Address</th>
                            <th>Browser / Device</th>
                            <th>Referer Source</th>
                            <th style="text-align: right;">Viewed Date & Time</th>
                        </tr>
                    </thead>
                    <tbody id="modalViewsTableBody">
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 30px; color: var(--dc-light-gray);">
                                <i class="fa-solid fa-spinner fa-spin" style="font-size: 20px; margin-bottom: 8px; display: block; color: var(--dc-green);"></i>
                                Loading IP analytics logs...
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Footer -->
        <div style="padding: 14px 24px; border-top: 1px solid var(--dc-border); background: #F8FAFC; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 11.5px; color: var(--dc-light-gray);">
                <i class="fa-solid fa-shield-halved" style="color: var(--dc-green);"></i> IP addresses tracked for unique view counting and security audits.
            </span>
            <button type="button" onclick="closeBlogViewsModal()" class="dc-btn" style="background: #E2E8F0; color: #334155; padding: 8px 18px; font-size: 13px;">
                Close Modal
            </button>
        </div>
    </div>
</div>

<script>
    async function openBlogViewsModal(blogId, blogTitle, totalViews) {
        const modal = document.getElementById('blogViewsModal');
        const titleEl = document.getElementById('modalBlogTitle');
        const badgeEl = document.getElementById('modalTotalViewsBadge');
        const tbody = document.getElementById('modalViewsTableBody');
        const searchInput = document.getElementById('modalIpSearchInput');

        if (titleEl) titleEl.textContent = blogTitle;
        if (badgeEl) badgeEl.textContent = `${totalViews} Total Views`;
        if (searchInput) searchInput.value = '';

        if (modal) modal.style.display = 'flex';

        // Fast-path: Instant empty state if total views is 0 (no network delay)
        if (!totalViews || totalViews == 0) {
            if (tbody) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 36px; color: var(--dc-light-gray);">
                            <i class="fa-solid fa-eye-slash" style="font-size: 28px; margin-bottom: 10px; display: block; color: #CBD5E1;"></i>
                            No IP view records logged for this article yet.<br>
                            <span style="font-size: 11px; opacity: 0.8;">New public visitors reading this article will automatically appear here with their IP.</span>
                        </td>
                    </tr>
                `;
            }
            return;
        }

        if (tbody) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" style="text-align: center; padding: 30px; color: var(--dc-light-gray);">
                        <i class="fa-solid fa-spinner fa-spin" style="font-size: 24px; margin-bottom: 10px; display: block; color: var(--dc-green);"></i>
                        Loading IP address logs for "${blogTitle}"...
                    </td>
                </tr>
            `;
        }

        try {
            const url = "{{ route('admin.blogs.viewsData', ':id') }}".replace(':id', blogId);
            const res = await fetch(url);
            const data = await res.json();

            if (!res.ok || data.status !== 'success' || !data.views || data.views.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 36px; color: var(--dc-light-gray);">
                            <i class="fa-solid fa-eye-slash" style="font-size: 28px; margin-bottom: 10px; display: block; color: #CBD5E1;"></i>
                            No IP view records logged for this article yet.<br>
                            <span style="font-size: 11px; opacity: 0.8;">New public visitors reading this article will automatically appear here with their IP.</span>
                        </td>
                    </tr>
                `;
                return;
            }

            let html = '';
            data.views.forEach((v, index) => {
                let browserIcon = 'fa-globe';
                if (v.browser.includes('Chrome')) browserIcon = 'fa-chrome';
                else if (v.browser.includes('Edge')) browserIcon = 'fa-edge';
                else if (v.browser.includes('Firefox')) browserIcon = 'fa-firefox';
                else if (v.browser.includes('Safari')) browserIcon = 'fa-safari';

                html += `
                    <tr>
                        <td style="text-align: center; font-weight: 700; color: var(--dc-light-gray);">${index + 1}</td>
                        <td>
                            <strong style="color: var(--dc-dark); font-family: monospace; font-size: 13px;">
                                <i class="fa-solid fa-location-dot" style="color: var(--dc-orange); font-size: 11px; margin-right: 4px;"></i>
                                ${v.ip_address}
                            </strong>
                        </td>
                        <td>
                            <span style="font-size: 12px; color: #334155; font-weight: 600;">
                                <i class="fa-brands ${browserIcon}" style="color: var(--dc-blue); margin-right: 4px;"></i>
                                ${v.browser}
                            </span>
                        </td>
                        <td>
                            <span style="font-size: 11.5px; color: var(--dc-light-gray);" title="${v.referer}">
                                ${v.referer}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <strong style="display: block; font-size: 12px; color: var(--dc-dark);">${v.viewed_at}</strong>
                            <span style="font-size: 10.5px; color: var(--dc-green); font-weight: 600;">${v.viewed_ago}</span>
                        </td>
                    </tr>
                `;
            });

            tbody.innerHTML = html;

        } catch (err) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" style="text-align: center; padding: 30px; color: #EF4444;">
                        <i class="fa-solid fa-triangle-exclamation" style="font-size: 24px; margin-bottom: 8px; display: block;"></i>
                        Failed to fetch IP analytics data. Please try again.
                    </td>
                </tr>
            `;
        }
    }

    function closeBlogViewsModal() {
        const modal = document.getElementById('blogViewsModal');
        if (modal) modal.style.display = 'none';
    }

    function filterViewsTable() {
        const input = document.getElementById('modalIpSearchInput');
        const filter = input.value.toLowerCase();
        const tbody = document.getElementById('modalViewsTableBody');
        const rows = tbody.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const text = rows[i].textContent || rows[i].innerText;
            if (text.toLowerCase().indexOf(filter) > -1) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }

    // Close modal when clicking backdrop
    window.addEventListener('click', function(e) {
        const modal = document.getElementById('blogViewsModal');
        if (e.target === modal) {
            closeBlogViewsModal();
        }
    });
</script>
@endsection
