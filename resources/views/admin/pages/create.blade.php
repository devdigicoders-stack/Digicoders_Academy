@extends('layouts.admin')

@section('title', 'Create Custom Dynamic Page')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Create Custom Page ✍️</h1>
            <p>Publish custom terms, privacy policies, franchise, or landing pages.</p>
        </div>
        <a href="{{ route('admin.pages.index') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Custom Pages</span>
        </a>
    </div>

    <div class="dc-card">
        <form action="{{ route('admin.pages.store') }}" method="POST">
            @csrf
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Page Title <span style="color: red;">*</span></label>
                    <input type="text" id="pageTitleInput" name="title" class="dc-search-input" style="width: 100%;" placeholder="e.g. Terms & Conditions" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">URL Slug</label>
                    <input type="text" id="pageSlugInput" name="slug" class="dc-search-input" style="width: 100%; font-family: monospace;" placeholder="e.g. terms-and-conditions">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Page Content</label>
                <textarea name="content" class="dc-search-input" style="width: 100%; height: 250px; padding: 14px;" placeholder="Write rich HTML or text page content here..."></textarea>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 12px;">
                <a href="{{ route('admin.pages.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Publish Custom Page</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pageTitleInput').on('input', function() {
            let title = $(this).val();
            let slug = title.toLowerCase().trim().replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
            $('#pageSlugInput').val(slug);
        });
    });
</script>
@endsection
