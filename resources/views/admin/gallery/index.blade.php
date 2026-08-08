@extends('layouts.admin')

@section('title', 'Gallery Management')

@section('content')
<div class="dc-container">
    <!-- Welcome Header Banner -->
    <div class="dc-welcome-banner" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div class="dc-welcome-title">
            <h1>Media & Placement Gallery 🖼️</h1>
            <p>Manage campus photos, events, placements, SEO alt metadata, and image uploads.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('admin.gallery.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <span>Upload New Media</span>
            </a>
        </div>
    </div>

    <!-- Statistics Cards (3 Cards - Total, Albums, Active) -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-images"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Total Media Uploads</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $totalCount }}</h3>
            </div>
        </div>

        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(0, 119, 200, 0.1); color: var(--dc-blue); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Albums / Categories</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $albums->count() }}</h3>
            </div>
        </div>

        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Active Public Photos</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $activeCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Filter & Search Toolbar + View Switcher -->
    <div class="dc-card" style="padding: 16px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <form action="{{ route('admin.gallery.index') }}" method="GET" style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; flex: 1;">
            <div style="flex: 1; min-width: 220px;">
                <input type="text" name="search" value="{{ request('search') }}" class="dc-search-input" style="width: 100%;" placeholder="Search title, description or SEO alt text...">
            </div>
            <div style="width: 200px;">
                <select name="album" class="dc-select-sm" style="width: 100%; height: 38px;" onchange="this.form.submit()">
                    <option value="">All Albums</option>
                    @foreach(['Campus', 'Classrooms', 'Computer Labs', 'Workshops', 'Seminars', 'Industrial Visits', 'Events', 'Certificates', 'Placement'] as $albumOpt)
                    <option value="{{ $albumOpt }}" {{ request('album') == $albumOpt ? 'selected' : '' }}>{{ $albumOpt }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Filter</span>
            </button>
            @if(request('search') || request('album'))
            <a href="{{ route('admin.gallery.index') }}" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-xmark"></i>
                <span>Reset</span>
            </a>
            @endif
        </form>

        <!-- Dual View Mode Switcher Buttons (Grid View vs Table View) -->
        <div style="display: flex; gap: 6px; background: var(--dc-bg); padding: 4px; border-radius: var(--radius-std); border: 1px solid var(--dc-border);">
            <button type="button" id="btnGridView" onclick="switchGalleryView('grid')" class="dc-btn dc-btn-outline" style="padding: 6px 12px; height: 32px; font-size: 12px;">
                <i class="fa-solid fa-border-all"></i>
                <span>Grid View</span>
            </button>
            <button type="button" id="btnTableView" onclick="switchGalleryView('table')" class="dc-btn dc-btn-outline" style="padding: 6px 12px; height: 32px; font-size: 12px;">
                <i class="fa-solid fa-table-list"></i>
                <span>Table View</span>
            </button>
        </div>
    </div>

    <!-- 1. GALLERY GRID VIEW CONTAINER -->
    <div id="galleryGridView" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
        @forelse($galleries as $item)
        <div class="dc-card" style="padding: 14px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <div style="position: relative; overflow: hidden; border-radius: var(--radius-std); margin-bottom: 12px; background: var(--dc-bg);">
                    <img src="{{ asset($item->image_path) }}" 
                         alt="{{ $item->seo_alt }}" 
                         title="{{ $item->title }}"
                         style="width: 100%; height: 180px; object-fit: cover; border-radius: var(--radius-std); transition: transform 0.3s ease;"
                         onmouseover="this.style.transform='scale(1.04)'"
                         onmouseout="this.style.transform='scale(1)'">
                    
                    <!-- Album Badge Overlay -->
                    <div style="position: absolute; top: 10px; left: 10px; display: flex; gap: 6px;">
                        <span class="dc-badge-pill dc-badge-orange" style="font-size: 10.5px; font-weight: 700;">{{ $item->album ?? 'General' }}</span>
                    </div>

                    @if(!$item->status)
                    <div style="position: absolute; top: 10px; right: 10px;">
                        <span class="dc-badge-pill" style="font-size: 10px; background: #ef4444; color: white;">Hidden</span>
                    </div>
                    @else
                    <div style="position: absolute; top: 10px; right: 10px;">
                        <span class="dc-badge-pill dc-badge-green" style="font-size: 10px;">Active</span>
                    </div>
                    @endif
                </div>

                <div style="margin-bottom: 12px;">
                    <strong style="display: block; font-size: 14px; color: var(--dc-dark); font-weight: 700; margin-bottom: 4px; line-height: 1.3;">
                        {{ $item->title }}
                    </strong>
                    @if($item->alt_text)
                    <div style="font-size: 11px; color: var(--dc-green); margin-bottom: 4px; font-weight: 600;" title="SEO Alt Text">
                        <i class="fa-solid fa-tag" style="margin-right: 4px;"></i> {{ Str::limit($item->alt_text, 40) }}
                    </div>
                    @endif
                    @if($item->description)
                    <p style="font-size: 12px; color: var(--dc-light-gray); margin: 0; line-height: 1.4;">
                        {{ Str::limit($item->description, 75) }}
                    </p>
                    @endif
                </div>
            </div>

            <!-- Footer Actions -->
            <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--dc-border); padding-top: 10px; margin-top: 8px;">
                <span style="font-size: 11px; color: var(--dc-light-gray);"><i class="fa-regular fa-calendar" style="margin-right: 4px;"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : 'N/A' }}</span>
                <div class="dc-action-group">
                    <button type="button" class="dc-action-btn dc-action-view" onclick="copyImageUrl('{{ asset($item->image_path) }}')" title="Copy Direct Link">
                        <i class="fa-solid fa-link"></i>
                    </button>
                    <a href="{{ route('admin.gallery.edit', $item->id) }}" class="dc-action-btn dc-action-edit" title="Edit Photo & Metadata">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="delete-form" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Photo">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="dc-card" style="grid-column: 1 / -1; text-align: center; padding: 50px; color: var(--dc-light-gray);">
            <i class="fa-solid fa-images" style="font-size: 40px; margin-bottom: 15px; color: var(--dc-light-gray); display: block;"></i>
            <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 6px;">No gallery media items found</h3>
            <p style="font-size: 13px; margin-bottom: 16px;">Try adjusting your search or upload a new photo to the database.</p>
            <a href="{{ route('admin.gallery.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Upload First Photo</span>
            </a>
        </div>
        @endforelse
    </div>

    <!-- 2. GALLERY TABLE VIEW CONTAINER -->
    <div id="galleryTableView" style="display: none;">
        <div class="dc-card" style="padding: 0; overflow: hidden;">
            <div style="overflow-x: auto;">
                <table class="dc-table" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 80px; text-align: center;">Thumbnail</th>
                            <th>Title & Details</th>
                            <th>Album</th>
                            <th>SEO Alt Text</th>
                            <th>Status</th>
                            <th>Upload Date</th>
                            <th style="text-align: right; width: 120px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galleries as $item)
                        <tr>
                            <td style="text-align: center; padding: 10px;">
                                <img src="{{ asset($item->image_path) }}" 
                                     alt="{{ $item->seo_alt }}" 
                                     style="width: 56px; height: 42px; object-fit: cover; border-radius: 6px; border: 1px solid var(--dc-border);"
                                     onerror="this.src='{{ asset('images/students.png') }}'">
                            </td>
                            <td>
                                <strong style="font-size: 13.5px; color: var(--dc-dark); display: block;">{{ $item->title }}</strong>
                                @if($item->description)
                                <span style="font-size: 11px; color: var(--dc-light-gray);">{{ Str::limit($item->description, 50) }}</span>
                                @endif
                            </td>
                            <td>
                                <span class="dc-badge-pill dc-badge-orange" style="font-size: 11px;">{{ $item->album ?? 'General' }}</span>
                            </td>
                            <td>
                                <span style="font-size: 12px; color: var(--dc-green); font-family: monospace;">{{ Str::limit($item->alt_text, 35) ?: $item->title }}</span>
                            </td>
                            <td>
                                @if($item->status)
                                <span class="dc-badge-pill dc-badge-green" style="font-size: 11px;">Active</span>
                                @else
                                <span class="dc-badge-pill" style="font-size: 11px; background: #ef4444; color: white;">Hidden</span>
                                @endif
                            </td>
                            <td style="font-size: 12px; color: var(--dc-light-gray);">
                                {{ $item->created_at ? $item->created_at->format('d M Y') : 'N/A' }}
                            </td>
                            <td style="text-align: right; padding: 12px 10px; white-space: nowrap;">
                                <div class="dc-action-group" style="justify-content: flex-end;">
                                    <button type="button" class="dc-action-btn dc-action-view" onclick="copyImageUrl('{{ asset($item->image_path) }}')" title="Copy Direct Link">
                                        <i class="fa-solid fa-link"></i>
                                    </button>
                                    <a href="{{ route('admin.gallery.edit', $item->id) }}" class="dc-action-btn dc-action-edit" title="Edit Photo">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="delete-form" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Photo">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 40px; color: var(--dc-light-gray);">
                                No media records found in database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination Links -->
    @if(method_exists($galleries, 'hasPages') && $galleries->hasPages())
        <div style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--dc-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <span style="font-size: 12.5px; color: var(--dc-light-gray); font-weight: 500;">
                Showing <strong>{{ $galleries->firstItem() ?? 0 }}</strong> to <strong>{{ $galleries->lastItem() ?? 0 }}</strong> of <strong>{{ $galleries->total() }}</strong> media items
            </span>
            <div class="dc-pagination-wrapper">
                {{ $galleries->links() }}
            </div>
        </div>
    @endif
</div>

<script>
    // Copy Direct Image URL Helper
    function copyImageUrl(url) {
        navigator.clipboard.writeText(url).then(function() {
            if (window.showToast) {
                window.showToast('success', 'URL Copied', 'Image URL copied to clipboard!');
            } else {
                alert('Image URL copied to clipboard: ' + url);
            }
        });
    }

    // View Switcher Handler (Grid View vs Table View)
    function switchGalleryView(view) {
        const gridEl = document.getElementById('galleryGridView');
        const tableEl = document.getElementById('galleryTableView');
        const btnGrid = document.getElementById('btnGridView');
        const btnTable = document.getElementById('btnTableView');

        if (view === 'table') {
            gridEl.style.display = 'none';
            tableEl.style.display = 'block';
            btnTable.classList.add('dc-btn-green');
            btnTable.classList.remove('dc-btn-outline');
            btnGrid.classList.add('dc-btn-outline');
            btnGrid.classList.remove('dc-btn-green');
            localStorage.setItem('dc_gallery_view', 'table');
        } else {
            tableEl.style.display = 'none';
            gridEl.style.display = 'grid';
            btnGrid.classList.add('dc-btn-green');
            btnGrid.classList.remove('dc-btn-outline');
            btnTable.classList.add('dc-btn-outline');
            btnTable.classList.remove('dc-btn-green');
            localStorage.setItem('dc_gallery_view', 'grid');
        }
    }

    // Restore user view preference on load
    document.addEventListener('DOMContentLoaded', function() {
        const savedView = localStorage.getItem('dc_gallery_view') || 'grid';
        switchGalleryView(savedView);
    });
</script>
@endsection
