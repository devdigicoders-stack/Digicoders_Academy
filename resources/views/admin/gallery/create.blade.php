@extends('layouts.admin')

@section('title', 'Upload Gallery Media')

@section('content')
<div class="dc-container">
    <!-- Header Banner -->
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Upload New Media <i class="fa-solid fa-camera" style="color: var(--dc-green); margin-left: 4px;"></i></h1>
            <p>Add event photos, classroom sessions, placement drives, and SEO alt tags to the gallery.</p>
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
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Image File Upload Section with Live Preview -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 8px;">Select Media Image File <span style="color: #ef4444;">*</span></label>
                <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                    <div style="width: 220px; height: 150px; border: 2px dashed var(--dc-border); border-radius: var(--radius-std); display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.2); overflow: hidden; position: relative;" id="previewContainer">
                        <img id="imagePreview" src="" alt="Preview" style="display: none; width: 100%; height: 100%; object-fit: cover;">
                        <div id="uploadPlaceholder" style="text-align: center; color: var(--dc-light-gray); padding: 10px;">
                            <i class="fa-solid fa-cloud-arrow-up" style="font-size: 32px; margin-bottom: 6px; color: var(--dc-green); display: block;"></i>
                            <span style="font-size: 12px; font-weight: 600;">Click or drop image file here</span>
                        </div>
                    </div>
                    <div style="flex: 1; min-width: 240px;">
                        <input type="file" name="image" id="imageInput" accept="image/*" class="dc-search-input" style="width: 100%; padding: 8px;" required onchange="previewSelectedImage(this)">
                        <p style="font-size: 12px; color: var(--dc-light-gray); margin-top: 8px; line-height: 1.4;">
                            Supported formats: <strong>JPG, PNG, WEBP, JPEG</strong>. Max size: <strong>5MB</strong>.<br>
                            High-resolution photos (1200x800px or 16:9 ratio) work best for the frontend gallery grid.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Title & Album Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Image Title <span style="color: #ef4444;">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. ADWD Full Stack Batch Placement Ceremony" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Album / Category <span style="color: #ef4444;">*</span></label>
                    <select name="album" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        @foreach($albums as $albumOption)
                        <option value="{{ $albumOption }}" {{ old('album') == $albumOption ? 'selected' : '' }}>{{ $albumOption }}</option>
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
                <input type="text" name="alt_text" value="{{ old('alt_text') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. DigiCoders Academy Students Full Stack Web Development Placement Ceremony in Lucknow">
                <span style="font-size: 11px; color: var(--dc-light-gray); margin-top: 4px; display: block;">If left empty, title will automatically be used as the SEO alt text attribute.</span>
            </div>

            <!-- Description Textarea -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Description / Lightbox Caption</label>
                <textarea name="description" rows="3" class="dc-search-input" style="width: 100%; font-family: inherit;" placeholder="Brief details about what is happening in this photo for the frontend Lightbox modal view...">{{ old('description') }}</textarea>
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
                <a href="{{ route('admin.gallery.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Upload & Save Media</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewSelectedImage(input) {
    const preview = document.getElementById('imagePreview');
    const placeholder = document.getElementById('uploadPlaceholder');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            placeholder.style.display = 'none';
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = '';
        preview.style.display = 'none';
        placeholder.style.display = 'block';
    }
}
</script>
@endsection
