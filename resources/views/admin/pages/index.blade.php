@extends('layouts.admin')

@section('title', 'Custom Dynamic Pages Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Custom Dynamic Pages <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage standalone website pages like Privacy Policy, Terms & Conditions, Refund Policy, and Franchise Info.</p>
        </div>
        <div class="dc-quick-action-group">
            <a href="{{ route('admin.pages.create') }}" class="dc-btn dc-btn-green">
                <i class="fa-solid fa-plus"></i>
                <span>Create New Custom Page</span>
            </a>
            <a href="{{ route('admin.cms.index') }}" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to CMS Studio</span>
            </a>
        </div>
    </div>

    <!-- Pages Table Card -->
    <div class="dc-card">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">All Custom Pages</h2>
        </div>

        <div class="dc-table-responsive">
            <table class="dc-table">
                <thead>
                    <tr>
                        <th>Page Title</th>
                        <th>URL Slug</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr>
                        <td><strong>{{ $page->title }}</strong></td>
                        <td><code>/{{ $page->slug }}</code></td>
                        <td><span class="dc-badge-pill dc-badge-green">{{ ucfirst($page->status) }}</span></td>
                        <td>{{ $page->created_at ? $page->created_at->format('d M Y') : 'Recent' }}</td>
                        <td>
                            <div class="dc-action-group">
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="dc-action-btn dc-action-edit" title="Edit Custom Page">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" class="delete-form" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dc-action-btn dc-action-delete" title="Delete Custom Page">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: var(--dc-light-gray); padding: 20px;">No custom pages found. Click 'Create New Custom Page' to add policy or franchise pages.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
