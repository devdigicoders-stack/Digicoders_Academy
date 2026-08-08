@extends('layouts.admin')

@section('title', 'FAQ Management')

@section('content')
<div class="dc-container">
    <!-- Welcome Header Banner -->
    <div class="dc-welcome-banner" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div class="dc-welcome-title">
            <h1>FAQ Management <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage frequently asked questions, page assignments, course queries, admission details, and Schema.org structured data.</p>
        </div>
        <div>
            <a href="{{ route('admin.faqs.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Add New FAQ</span>
            </a>
        </div>
    </div>

    <!-- TOP SUMMARY BAR -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
        <div class="dc-card" style="padding: 16px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 20px;">
                <i class="fa-solid fa-circle-question"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Total FAQs</span>
                <h3 style="font-size: 20px; font-weight: 800; margin: 0;">{{ $faqs->total() }}</h3>
            </div>
        </div>
        <div class="dc-card" style="padding: 16px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(59, 130, 246, 0.1); color: #3b82f6; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                <i class="fa-solid fa-file-code"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Page Assignments</span>
                <h3 style="font-size: 20px; font-weight: 800; margin: 0;">{{ count($pages) }}</h3>
            </div>
        </div>
        <div class="dc-card" style="padding: 16px; display: flex; align-items: center; gap: 16px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div>
                <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Active Public</span>
                <h3 style="font-size: 20px; font-weight: 800; margin: 0;">{{ \App\Models\Faq::where('status', true)->count() }}</h3>
            </div>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="dc-card" style="padding: 16px; margin-bottom: 24px;">
        <form action="{{ route('admin.faqs.index') }}" method="GET" style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 200px;">
                <input type="text" name="search" value="{{ request('search') }}" class="dc-search-input" style="width: 100%;" placeholder="Search question text or answer content...">
            </div>
            <div style="width: 180px;">
                <select name="page_slug" class="dc-select-sm" style="width: 100%; height: 38px;" onchange="this.form.submit()">
                    <option value="">All Pages</option>
                    @foreach($pages as $slug => $label)
                    <option value="{{ $slug }}" {{ request('page_slug') == $slug ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div style="width: 180px;">
                <select name="category" class="dc-select-sm" style="width: 100%; height: 38px;" onchange="this.form.submit()">
                    <option value="">All Categories</option>
                    @foreach(['General', 'Admissions', 'Courses & Syllabus', 'Fees & Installments', 'Placements', 'Certificates'] as $catOpt)
                    <option value="{{ $catOpt }}" {{ request('category') == $catOpt ? 'selected' : '' }}>{{ $catOpt }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Filter</span>
            </button>
            @if(request('search') || request('page_slug') || request('category'))
            <a href="{{ route('admin.faqs.index') }}" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-xmark"></i>
                <span>Reset</span>
            </a>
            @endif
        </form>
    </div>

    <!-- Accordion List Card -->
    <div class="dc-card">
        <div class="dc-card-title-wrap" style="display: flex; justify-content: space-between; align-items: center;">
            <h2 class="dc-card-title">All FAQ Entries</h2>
            <span style="font-size: 12px; color: var(--dc-light-gray); font-weight: 600;">Ordered by sort position</span>
        </div>

        <div style="display: flex; flex-direction: column; gap: 16px;">
            @forelse($faqs as $faq)
            <div style="border: 1px solid var(--dc-border); border-radius: var(--radius-std); padding: 18px; background: var(--dc-white);">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 15px; margin-bottom: 10px;">
                    <div>
                        <strong style="font-family: var(--font-heading); font-size: 15px; color: var(--dc-heading); display: block; margin-bottom: 4px;">
                            {{ $faq->question }}
                        </strong>
                        <div style="display: flex; gap: 8px; align-items: center; flex-wrap: wrap;">
                            <span class="dc-badge-pill dc-badge-orange" style="font-size: 10px;">{{ $faq->category ?? 'General' }}</span>
                            <span class="dc-badge-pill" style="font-size: 10px; background: rgba(59, 130, 246, 0.1); color: #3b82f6;">
                                <i class="fa-solid fa-map-pin" style="margin-right: 3px;"></i> Page: {{ $pages[$faq->page_slug] ?? $faq->page_slug }}
                            </span>
                            @if(!$faq->status)
                            <span class="dc-badge-pill" style="font-size: 10px; background: rgba(239, 68, 68, 0.2); color: #ef4444;">Hidden</span>
                            @endif
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 8px; shrink-0;">
                        <span style="font-size: 11px; color: var(--dc-light-gray); font-weight: 600;">Order: #{{ $faq->sort_order }}</span>
                        <div class="dc-action-group">
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="dc-action-btn dc-action-edit" title="Edit FAQ">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" class="delete-form" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dc-action-btn dc-action-delete" title="Delete FAQ">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <p style="color: var(--dc-dark-muted); font-size: 13.5px; margin: 0; line-height: 1.6; border-top: 1px dashed var(--dc-border); padding-top: 10px;">
                    {{ $faq->answer }}
                </p>
            </div>
            @empty
            <div style="text-align: center; padding: 50px; color: var(--dc-light-gray);">
                <i class="fa-solid fa-circle-question" style="font-size: 40px; margin-bottom: 15px; color: var(--dc-light-gray); display: block;"></i>
                <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 6px;">No FAQ entries found</h3>
                <p style="font-size: 13px; margin-bottom: 16px;">Create frequently asked questions for your academy visitors.</p>
                <a href="{{ route('admin.faqs.create') }}" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-plus"></i>
                    <span>Create First FAQ</span>
                </a>
            @endforelse

            @if($faqs->hasPages())
            <div style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--dc-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <span style="font-size: 12.5px; color: var(--dc-light-gray); font-weight: 500;">
                    Showing <strong>{{ $faqs->firstItem() ?? 0 }}</strong> to <strong>{{ $faqs->lastItem() ?? 0 }}</strong> of <strong>{{ $faqs->total() }}</strong> FAQ items
                </span>
                <div class="dc-pagination-wrapper">
                    {{ $faqs->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
