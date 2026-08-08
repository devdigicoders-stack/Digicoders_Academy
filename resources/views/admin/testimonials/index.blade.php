@extends('layouts.admin')

@section('title', 'Testimonials & Student Reviews')

@section('content')
<div class="dc-container">
    <!-- Welcome Header Banner -->
    <div class="dc-welcome-banner" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div class="dc-welcome-title">
            <h1>Testimonials & Placed Students 💬</h1>
            <p>Manage student reviews, video feedback, company placement records, and ratings.</p>
        </div>
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('admin.testimonials.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Add New Testimonial</span>
            </a>
        </div>
    </div>

    <!-- Statistics Summary Cards -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px;">
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-quote-right"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Total Reviews</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $totalCount }}</h3>
            </div>
        </div>
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Placed Students</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $placedCount }}</h3>
            </div>
        </div>
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(245, 158, 11, 0.1); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-star"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Avg Rating</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">
                    {{ number_format($avgRating, 1) }} ★
                </h3>
            </div>
        </div>
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(245, 130, 32, 0.1); color: var(--dc-orange); display: flex; align-items: center; justify-content: center; font-size: 22px;">
                <i class="fa-solid fa-award"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Featured Reviews</span>
                <h3 style="font-size: 22px; font-weight: 800; margin: 0; color: var(--dc-dark);">{{ $featuredCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Filter & Search Toolbar + View Switcher -->
    <div class="dc-card" style="padding: 16px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <form action="{{ route('admin.testimonials.index') }}" method="GET" style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap; flex: 1;">
            <div style="flex: 1; min-width: 220px;">
                <input type="text" name="search" value="{{ request('search') }}" class="dc-search-input" style="width: 100%;" placeholder="Search student name, company, role or review quote...">
            </div>
            <div style="width: 160px;">
                <select name="rating" class="dc-select-sm" style="width: 100%; height: 38px;" onchange="this.form.submit()">
                    <option value="">All Ratings</option>
                    <option value="5.0" {{ request('rating') == '5.0' ? 'selected' : '' }}>5 Stars Only</option>
                    <option value="4.5" {{ request('rating') == '4.5' ? 'selected' : '' }}>4.5+ Stars</option>
                    <option value="4.0" {{ request('rating') == '4.0' ? 'selected' : '' }}>4.0+ Stars</option>
                </select>
            </div>
            <div style="width: 160px;">
                <select name="placed" class="dc-select-sm" style="width: 100%; height: 38px;" onchange="this.form.submit()">
                    <option value="">All Students</option>
                    <option value="1" {{ request('placed') == '1' ? 'selected' : '' }}>Placed Students</option>
                    <option value="0" {{ request('placed') == '0' ? 'selected' : '' }}>Non-Placed</option>
                </select>
            </div>
            <button type="submit" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Filter</span>
            </button>
            @if(request('search') || request('rating') || request('placed'))
            <a href="{{ route('admin.testimonials.index') }}" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-xmark"></i>
                <span>Reset</span>
            </a>
            @endif
        </form>

        <!-- Dual View Mode Switcher Buttons (Grid View vs Table View) -->
        <div style="display: flex; gap: 6px; background: var(--dc-bg); padding: 4px; border-radius: var(--radius-std); border: 1px solid var(--dc-border);">
            <button type="button" id="btnGridView" onclick="switchTestimonialView('grid')" class="dc-btn dc-btn-outline" style="padding: 6px 12px; height: 32px; font-size: 12px;">
                <i class="fa-solid fa-border-all"></i>
                <span>Grid View</span>
            </button>
            <button type="button" id="btnTableView" onclick="switchTestimonialView('table')" class="dc-btn dc-btn-outline" style="padding: 6px 12px; height: 32px; font-size: 12px;">
                <i class="fa-solid fa-table-list"></i>
                <span>Table View</span>
            </button>
        </div>
    </div>

    <!-- 1. TESTIMONIALS GRID VIEW CONTAINER -->
    <div id="testimonialGridView" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px;">
        @forelse($testimonials as $testimonial)
        <div class="dc-card" style="padding: 18px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <!-- User Header -->
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                    <div class="dc-user-cell" style="display: flex; align-items: center; gap: 12px;">
                        <img src="{{ $testimonial->avatar ? asset($testimonial->avatar) : asset('images/gopal-singh-director.png') }}" 
                             alt="{{ $testimonial->student_name }}" 
                             style="width: 46px; height: 46px; border-radius: 50%; object-fit: cover; border: 2px solid var(--dc-green);"
                             onerror="this.src='{{ asset('images/gopal-singh-director.png') }}'">
                        <div>
                            <strong style="display: block; font-size: 14.5px; color: var(--dc-dark);">{{ $testimonial->student_name }}</strong>
                            <span style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 500;">
                                {{ $testimonial->role ?? 'Software Engineer' }} @ <strong style="color: var(--dc-orange);">{{ $testimonial->company ?? 'IT Company' }}</strong>
                            </span>
                            @if($testimonial->course_name)
                            <div style="margin-top: 4px;">
                                <span class="dc-badge-pill" style="font-size: 10px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green);">
                                    <i class="fa-solid fa-graduation-cap" style="margin-right: 3px;"></i> {{ $testimonial->course_name }}
                                </span>
                            </div>
                            @endif
                        </div>
                    </div>
                    <span style="color: #f59e0b; font-weight: 700; font-size: 13px; background: rgba(245, 158, 11, 0.1); padding: 4px 8px; border-radius: 6px; white-space: nowrap;">
                        <i class="fa-solid fa-star"></i> {{ number_format($testimonial->rating, 1) }}
                    </span>
                </div>

                <!-- Review Quote -->
                <p style="color: var(--dc-dark-muted); font-size: 13px; line-height: 1.5; margin-bottom: 14px; font-style: italic;">
                    "{{ Str::limit($testimonial->review, 140) }}"
                </p>
            </div>

            <!-- Footer Meta & Actions -->
            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--dc-border); padding-top: 12px; margin-top: 10px;">
                <div style="display: flex; gap: 6px; flex-wrap: wrap; align-items: center;">
                    @if($testimonial->is_placed)
                    <span class="dc-badge-pill dc-badge-green" style="font-size: 10px;">Placed Student</span>
                    @endif
                    @if($testimonial->is_featured)
                    <span class="dc-badge-pill dc-badge-orange" style="font-size: 10px;">★ Featured</span>
                    @endif
                    @if(!$testimonial->status)
                    <span class="dc-badge-pill" style="font-size: 10px; background: #ef4444; color: white;">Hidden</span>
                    @endif
                </div>

                <div class="dc-action-group">
                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="dc-action-btn dc-action-edit" title="Edit Testimonial">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="delete-form" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Testimonial">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="dc-card" style="grid-column: 1 / -1; text-align: center; padding: 50px; color: var(--dc-light-gray);">
            <i class="fa-solid fa-quote-right" style="font-size: 40px; margin-bottom: 15px; color: var(--dc-light-gray); display: block;"></i>
            <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 6px;">No student testimonials found</h3>
            <p style="font-size: 13px; margin-bottom: 16px;">Add student reviews and placement feedback.</p>
            <a href="{{ route('admin.testimonials.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Add First Testimonial</span>
            </a>
        </div>
        @endforelse
    </div>

    <!-- 2. TESTIMONIALS TABLE VIEW CONTAINER -->
    <div id="testimonialTableView" style="display: none;">
        <div class="dc-card" style="padding: 0; overflow: hidden;">
            <div style="overflow-x: auto;">
                <table class="dc-table" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 60px; text-align: center;">Student</th>
                            <th style="min-width: 180px;">Student Name & Company</th>
                            <th style="min-width: 160px;">Course Name</th>
                            <th style="width: 90px;">Rating</th>
                            <th style="min-width: 220px;">Review Quote</th>
                            <th style="min-width: 140px;">Badges</th>
                            <th style="text-align: right; width: 110px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                        <tr>
                            <td style="text-align: center; padding: 12px 10px;">
                                <img src="{{ $testimonial->avatar ? asset($testimonial->avatar) : asset('images/gopal-singh-director.png') }}" 
                                     alt="{{ $testimonial->student_name }}" 
                                     style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 1px solid var(--dc-border);"
                                     onerror="this.src='{{ asset('images/gopal-singh-director.png') }}'">
                            </td>
                            <td style="padding: 12px 10px;">
                                <strong style="font-size: 13.5px; color: var(--dc-dark); display: block;">{{ $testimonial->student_name }}</strong>
                                <span style="font-size: 11px; color: var(--dc-light-gray);">{{ $testimonial->role ?? 'Software Engineer' }} @ {{ $testimonial->company ?? 'IT Company' }}</span>
                            </td>
                            <td style="padding: 12px 10px;">
                                <span class="dc-badge-pill" style="font-size: 11px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); white-space: nowrap;">
                                    {{ $testimonial->course_name ?? 'General Course' }}
                                </span>
                            </td>
                            <td style="padding: 12px 10px;">
                                <span style="color: #f59e0b; font-weight: 700; font-size: 12px; background: rgba(245, 158, 11, 0.1); padding: 3px 8px; border-radius: 6px; white-space: nowrap;">
                                    <i class="fa-solid fa-star"></i> {{ number_format($testimonial->rating, 1) }}
                                </span>
                            </td>
                            <td style="padding: 12px 10px; min-width: 220px;">
                                <span style="font-size: 12px; color: var(--dc-dark-muted); font-style: italic; display: block; line-height: 1.4;">"{{ $testimonial->review }}"</span>
                            </td>
                            <td style="padding: 12px 10px; min-width: 140px;">
                                <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                                    @if($testimonial->is_placed)
                                    <span class="dc-badge-pill dc-badge-green" style="font-size: 10px;">Placed</span>
                                    @endif
                                    @if($testimonial->is_featured)
                                    <span class="dc-badge-pill dc-badge-orange" style="font-size: 10px;">Featured</span>
                                    @endif
                                    @if(!$testimonial->status)
                                    <span class="dc-badge-pill" style="font-size: 10px; background: #ef4444; color: white;">Hidden</span>
                                    @endif
                                </div>
                            </td>
                            <td style="text-align: right; padding: 12px 10px; white-space: nowrap;">
                                <div class="dc-action-group" style="justify-content: flex-end;">
                                    <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="dc-action-btn dc-action-edit" title="Edit Testimonial">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" class="delete-form" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Testimonial">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 40px; color: var(--dc-light-gray);">
                                No testimonial records found in database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination Links -->
    @if($testimonials->hasPages())
        <div style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--dc-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <span style="font-size: 12.5px; color: var(--dc-light-gray); font-weight: 500;">
                Showing <strong>{{ $testimonials->firstItem() ?? 0 }}</strong> to <strong>{{ $testimonials->lastItem() ?? 0 }}</strong> of <strong>{{ $testimonials->total() }}</strong> student reviews
            </span>
            <div class="dc-pagination-wrapper">
                {{ $testimonials->links() }}
            </div>
        </div>
    @endif
</div>

<script>
    // View Switcher Handler (Grid View vs Table View)
    function switchTestimonialView(view) {
        const gridEl = document.getElementById('testimonialGridView');
        const tableEl = document.getElementById('testimonialTableView');
        const btnGrid = document.getElementById('btnGridView');
        const btnTable = document.getElementById('btnTableView');

        if (view === 'table') {
            gridEl.style.display = 'none';
            tableEl.style.display = 'block';
            btnTable.classList.add('dc-btn-green');
            btnTable.classList.remove('dc-btn-outline');
            btnGrid.classList.add('dc-btn-outline');
            btnGrid.classList.remove('dc-btn-green');
            localStorage.setItem('dc_testimonial_view', 'table');
        } else {
            tableEl.style.display = 'none';
            gridEl.style.display = 'grid';
            btnGrid.classList.add('dc-btn-green');
            btnGrid.classList.remove('dc-btn-outline');
            btnTable.classList.add('dc-btn-outline');
            btnTable.classList.remove('dc-btn-green');
            localStorage.setItem('dc_testimonial_view', 'grid');
        }
    }

    // Restore user view preference on load
    document.addEventListener('DOMContentLoaded', function() {
        const savedView = localStorage.getItem('dc_testimonial_view') || 'grid';
        switchTestimonialView(savedView);
    });
</script>
@endsection
