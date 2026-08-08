@extends('layouts.admin')

@section('title', 'Add New Course')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Add New Course 🎓</h1>
            <p>Create a new official DigiCoders Academy training program or diploma course.</p>
        </div>
        <a href="{{ route('admin.courses.index') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Courses</span>
        </a>
    </div>

    <!-- Form Body Card -->
    <div class="dc-card">
        <form action="{{ route('admin.courses.store') }}" method="POST">
            @csrf
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Course Title</label>
                    <input type="text" name="title" class="dc-search-input" style="width: 100%;" placeholder="e.g. Full Stack Web Development (Laravel & React)" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Course Code</label>
                    <input type="text" name="code" class="dc-search-input" style="width: 100%; font-family: monospace;" placeholder="e.g. ADWD-2026" required>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 16px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Category</label>
                    <select name="category" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        <option value="6 Month Diploma">6 Month Diploma</option>
                        <option value="1 Year Diploma">1 Year Diploma</option>
                        <option value="Certificate">Certificate Course</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Duration</label>
                    <input type="text" name="duration" class="dc-search-input" style="width: 100%;" placeholder="e.g. 6 Months / 12 Months" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Total Fee (₹)</label>
                    <input type="number" step="0.01" name="fee" class="dc-search-input" style="width: 100%;" placeholder="e.g. 25000" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Badge Tag</label>
                    <input type="text" name="badge" class="dc-search-input" style="width: 100%;" placeholder="e.g. 100% Placement">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Initial Students Count</label>
                    <input type="number" name="students_count" class="dc-search-input" style="width: 100%;" value="50">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Course Rating</label>
                    <input type="number" step="0.1" name="rating" class="dc-search-input" style="width: 100%;" value="4.9">
                </div>
            </div>

            <div style="margin-bottom: 24px;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="is_featured" value="1" checked style="width: 16px; height: 16px;">
                    <span style="font-weight: 600; font-size: 13px;">Show as Featured Course on Home Page</span>
                </label>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 12px;">
                <a href="{{ route('admin.courses.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Save New Course</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
