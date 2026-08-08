@extends('layouts.admin')

@section('title', 'Add Student Testimonial')

@section('content')
<div class="dc-container">
    <!-- Header Banner -->
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Add Student Testimonial <i class="fa-solid fa-quote-right" style="color: var(--dc-green); margin-left: 4px;"></i></h1>
            <p>Create placement review, rating score, and student feedback record.</p>
        </div>
        <a href="{{ route('admin.testimonials.index') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Testimonials</span>
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
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Avatar Photo Upload Section -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 8px;">Student Avatar / Photo</label>
                <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                    <div style="width: 100px; height: 100px; border-radius: 50%; border: 2px dashed var(--dc-border); display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.2); overflow: hidden; position: relative;" id="avatarContainer">
                        <img id="avatarPreview" src="" alt="Preview" style="display: none; width: 100%; height: 100%; object-fit: cover;">
                        <div id="uploadPlaceholder" style="text-align: center; color: var(--dc-light-gray); padding: 5px;">
                            <i class="fa-solid fa-user" style="font-size: 28px; color: var(--dc-green);"></i>
                        </div>
                    </div>
                    <div style="flex: 1; min-width: 240px;">
                        <input type="file" name="avatar" id="avatarInput" accept="image/*" class="dc-search-input" style="width: 100%; padding: 8px;" onchange="previewSelectedAvatar(this)">
                        <p style="font-size: 12px; color: var(--dc-light-gray); margin-top: 6px; line-height: 1.4;">
                            Upload student profile photo or placement photo (JPG, PNG, WEBP max 5MB).
                        </p>
                    </div>
                </div>
            </div>

            <!-- Student Name, Company, Role Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Student Name <span style="color: #ef4444;">*</span></label>
                    <input type="text" name="student_name" value="{{ old('student_name') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. Vikram Singh" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Company Placed At</label>
                    <input type="text" name="company" value="{{ old('company') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. TCS / Wipro / Infosys">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Designation / Role</label>
                    <input type="text" name="role" value="{{ old('role') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. Software Engineer">
                </div>
            </div>

            <!-- Course Name & Star Rating Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Course Completed</label>
                    <input type="text" name="course_name" value="{{ old('course_name') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. ADWD Full Stack Web Dev">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Rating Score (1.0 to 5.0) <span style="color: #ef4444;">*</span></label>
                    <select name="rating" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        <option value="5.0" {{ old('rating', '5.0') == '5.0' ? 'selected' : '' }}>5.0 Stars (★★★★★)</option>
                        <option value="4.9" {{ old('rating') == '4.9' ? 'selected' : '' }}>4.9 Stars (★★★★★)</option>
                        <option value="4.8" {{ old('rating') == '4.8' ? 'selected' : '' }}>4.8 Stars (★★★★☆)</option>
                        <option value="4.5" {{ old('rating') == '4.5' ? 'selected' : '' }}>4.5 Stars (★★★★☆)</option>
                        <option value="4.0" {{ old('rating') == '4.0' ? 'selected' : '' }}>4.0 Stars (★★★★☆)</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Video Testimonial Link (Optional)</label>
                    <input type="url" name="video_url" value="{{ old('video_url') }}" class="dc-search-input" style="width: 100%;" placeholder="e.g. https://youtube.com/watch?v=...">
                </div>
            </div>

            <!-- Review Textarea -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Review Quote / Feedback <span style="color: #ef4444;">*</span></label>
                <textarea name="review" rows="4" class="dc-search-input" style="width: 100%; font-family: inherit;" placeholder="Write the student's review quote..." required>{{ old('review') }}</textarea>
            </div>

            <!-- Checkbox Toggles -->
            <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 28px; flex-wrap: wrap;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="is_placed" value="1" {{ old('is_placed', '1') ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-graduation-cap" style="color: var(--dc-green); margin-right: 4px;"></i> Placed Student Record</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-star" style="color: var(--dc-orange); margin-right: 4px;"></i> Feature on Website Homepage</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="status" value="1" {{ old('status', '1') ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-eye" style="color: var(--dc-green); margin-right: 4px;"></i> Visible on Public Website</span>
                </label>
            </div>

            <!-- Submit Button Footer -->
            <div style="display: flex; justify-content: flex-end; gap: 12px; border-top: 1px solid var(--dc-border); padding-top: 20px;">
                <a href="{{ route('admin.testimonials.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Save Testimonial</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewSelectedAvatar(input) {
    const preview = document.getElementById('avatarPreview');
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
