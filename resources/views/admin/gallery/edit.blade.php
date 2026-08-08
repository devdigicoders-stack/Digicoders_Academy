@extends('layouts.admin')

@section('title', 'Edit Gallery Media')

@section('content')
<div class="dc-container">
    <!-- Header Banner -->
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Edit Gallery Media <i class="fa-solid fa-pen-to-square" style="color: var(--dc-green); margin-left: 4px;"></i></h1>
            <p>Update title, album category, description, and SEO alt metadata for {{ $gallery->title }}.</p>
        </div>
        <a href="{{ route('admin.gallery.index') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Gallery</span>
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
        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Current Image & Replace Upload Section -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 8px;">Media Image File</label>
                <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                    <div style="width: 220px; height: 150px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); overflow: hidden; position: relative; background: rgba(0,0,0,0.2);">
                        <img id="imagePreview" src="{{ $gallery->image_path ? asset($gallery->image_path) : asset('images/students.png') }}" alt="{{ $gallery->seo_alt }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="flex: 1; min-width: 240px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: var(--dc-light-gray); margin-bottom: 6px;">Replace Photo (Optional):</label>
                        <input type="file" name="image" id="imageInput" accept="image/*" class="dc-search-input" style="width: 100%; padding: 8px;" onchange="previewSelectedImage(this)">
                        <p style="font-size: 12px; color: var(--dc-light-gray); margin-top: 8px; line-height: 1.4;">
                            Leave empty if you wish to keep the existing photo.<br>
                            Supported formats: <strong>JPG, PNG, WEBP, JPEG</strong>. Max size: <strong>5MB</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Title & Album Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Image Title <span style="color: #ef4444;">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $gallery->title) }}" class="dc-search-input" style="width: 100%;" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Album / Category <span style="color: #ef4444;">*</span></label>
                    <select name="album" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        @foreach($albums as $albumOption)
                        <option value="{{ $albumOption }}" {{ old('album', $gallery->album) == $albumOption ? 'selected' : '' }}>{{ $albumOption }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Dynamic SEO Alt Text Input -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--dc-green); margin-right: 4px;"></i> SEO Image Alt Text
                    <span style="font-size: 11px; font-weight: 400; color: var(--dc-light-gray);">(Crucial for Google Search & Screen Readers)</span>
                </label>
                <input type="text" name="alt_text" value="{{ old('alt_text', $gallery->alt_text) }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. DigiCoders Academy Students Full Stack Web Development Placement Ceremony in Lucknow">
                <span style="font-size: 11px; color: var(--dc-light-gray); margin-top: 4px; display: block;">If left empty, title will automatically be used as the SEO alt text attribute.</span>
            </div>

            <!-- Description Textarea -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Description / Lightbox Caption</label>
                <textarea name="description" rows="3" class="dc-search-input" style="width: 100%; font-family: inherit;">{{ old('description', $gallery->description) }}</textarea>
            </div>

            <!-- Checkbox Toggles -->
            <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 28px; flex-wrap: wrap;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="status" value="1" {{ old('status', $gallery->status) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-eye" style="color: var(--dc-green); margin-right: 4px;"></i> Visible on Public Website</span>
                </label>
            </div>

            <!-- Submit Button Footer -->
            <div style="display: flex; justify-content: flex-end; gap: 12px; border-top: 1px solid var(--dc-border); padding-top: 20px;">
                <a href="{{ route('admin.gallery.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Update Gallery Media</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewSelectedImage(input) {
    const preview = document.getElementById('imagePreview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
