@extends('layouts.admin')

@section('title', 'Add New FAQ')

@section('content')
<div class="dc-container">
    <!-- Header Banner -->
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Add New FAQ Item <i class="fa-solid fa-circle-question" style="color: var(--dc-green); margin-left: 4px;"></i></h1>
            <p>Create a new frequently asked question and assign it to a category & specific website page.</p>
        </div>
        <a href="{{ route('admin.faqs.index') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to FAQs</span>
        </a>
    </div>

    @if ($errors->any())
    <div style="background-color: rgba(239, 68, 68, 0.15); border: 1px solid #ef4444; color: #ef4444; padding: 12px 16px; border-radius: var(--radius-std); margin-bottom: 20px; font-weight: 600;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Card -->
    <div class="dc-card" style="padding: 24px;">
        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <!-- Question Input -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 6px;">Question Title <span style="color: #ef4444;">*</span></label>
                <input type="text" name="question" value="{{ old('question') }}" class="dc-search-input" style="width: 100%; font-size: 14px;" placeholder="e.g. What are the eligibility criteria for joining ADWD diploma course?" required>
            </div>

            <!-- Category & Page Target Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">FAQ Category <span style="color: #ef4444;">*</span></label>
                    <select name="category" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        @foreach($categories as $categoryOption)
                        <option value="{{ $categoryOption }}" {{ old('category') == $categoryOption ? 'selected' : '' }}>{{ $categoryOption }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Target Website Page <span style="color: #ef4444;">*</span></label>
                    <select name="page_slug" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        @foreach($pages as $slug => $label)
                        <option value="{{ $slug }}" {{ old('page_slug', 'all') == $slug ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Sort Position Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" class="dc-search-input" style="width: 100%;" placeholder="0">
                </div>
            </div>

            <!-- Answer Textarea -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 6px;">Answer Content <span style="color: #ef4444;">*</span></label>
                <textarea name="answer" rows="5" class="dc-search-input" style="width: 100%; font-family: inherit; line-height: 1.6;" placeholder="Provide a detailed, clear answer to the student query..." required>{{ old('answer') }}</textarea>
            </div>

            <!-- Checkbox Toggles -->
            <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 28px; flex-wrap: wrap;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="status" value="1" {{ old('status', '1') ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-eye" style="color: var(--dc-green); margin-right: 4px;"></i> Visible on Public Website</span>
                </label>
            </div>

            <!-- Submit Button Footer -->
            <div style="display: flex; justify-content: flex-end; gap: 12px; border-top: 1px solid var(--dc-border); padding-top: 20px;">
                <a href="{{ route('admin.faqs.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Save FAQ Item</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
