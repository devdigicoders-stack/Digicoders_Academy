@extends('layouts.admin')

@section('title', 'Course Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Course Management <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage DigiCoders Academy official diploma programs, IT curricula, and fee structures.</p>
        </div>
        <div class="dc-quick-action-group">
            <a href="{{ route('admin.courses.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Add New Course</span>
            </a>
        </div>
    </div>

    <!-- Stats Header -->
    <div class="dc-stats-grid">
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Total Active Courses</span>
                <div class="dc-stat-icon green"><i class="fa-solid fa-graduation-cap"></i></div>
            </div>
            <div class="dc-stat-number">{{ count($courses) }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">Website Sync</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">6 Month Diplomas</span>
                <div class="dc-stat-icon blue"><i class="fa-solid fa-certificate"></i></div>
            </div>
            <div class="dc-stat-number">{{ $courses->where('category', '6 Month Diploma')->count() }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">Short-Term</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">1 Year Diplomas</span>
                <div class="dc-stat-icon orange"><i class="fa-solid fa-award"></i></div>
            </div>
            <div class="dc-stat-number">{{ $courses->where('category', '1 Year Diploma')->count() }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">Career Track</span></div>
        </div>
        <div class="dc-stat-card">
            <div class="dc-stat-header">
                <span class="dc-stat-title">Total Enrolled</span>
                <div class="dc-stat-icon green"><i class="fa-solid fa-users"></i></div>
            </div>
            <div class="dc-stat-number">{{ $courses->sum('students_count') }}</div>
            <div class="dc-stat-footer"><span class="dc-trend up">100% Placements</span></div>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="dc-card">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">All Website Courses</h2>
            <div style="display: flex; gap: 12px;">
                <input type="text" id="courseSearchInput" class="dc-search-input" style="width: 260px;" placeholder="Search course by name or code..." oninput="filterCoursesTable()">
                <select id="courseCategorySelect" class="dc-select-sm" onchange="filterCoursesTable()">
                    <option value="">All Categories</option>
                    <option value="6 Month Diploma">6 Month Diploma</option>
                    <option value="1 Year Diploma">1 Year Diploma</option>
                </select>
            </div>
        </div>

        <div class="dc-table-responsive">
            <table class="dc-table">
                <thead>
                    <tr>
                        <th>Course Title</th>
                        <th>Course Code</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Fee (INR)</th>
                        <th>Students</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                    <tr>
                        <td>
                            <strong style="display: block; font-size: 13.5px;">{{ $course->title }}</strong>
                            <span style="font-size: 11px; color: var(--dc-light-gray);">Badge: {{ $course->badge ?? 'Official' }}</span>
                        </td>
                        <td><span style="font-family: monospace; font-weight: 700; color: var(--dc-blue);">{{ $course->code }}</span></td>
                        <td>
                            @if($course->category === '6 Month Diploma')
                                <span class="dc-badge-pill dc-badge-orange">6 Month Diploma</span>
                            @else
                                <span class="dc-badge-pill dc-badge-green">1 Year Diploma</span>
                            @endif
                        </td>
                        <td>{{ $course->duration }}</td>
                        <td><strong>₹{{ number_format($course->fee, 0) }}</strong></td>
                        <td><strong>{{ $course->students_count }} Active</strong></td>
                        <td><span style="color: #f59e0b;"><i class="fa-solid fa-star"></i> {{ $course->rating }}</span></td>
                        <td><span class="dc-badge-pill dc-badge-green">Active</span></td>
                        <td>
                            <div class="dc-action-group">
                                <a href="{{ route('admin.courses.edit', $course->id) }}" class="dc-action-btn dc-action-edit" title="Edit Course">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="delete-form" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Course">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" style="text-align: center; color: var(--dc-light-gray); padding: 20px;">No courses found in database.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
function filterCoursesTable() {
    const query = (document.getElementById('courseSearchInput').value || '').toLowerCase().trim();
    const category = (document.getElementById('courseCategorySelect').value || '').toLowerCase().trim();
    const rows = document.querySelectorAll('.dc-table tbody tr');

    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        const matchesQuery = !query || text.includes(query);
        const matchesCategory = !category || text.includes(category);

        if (matchesQuery && matchesCategory) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}
</script>
@endpush
@endsection
