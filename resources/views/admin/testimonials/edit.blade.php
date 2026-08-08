@extends('layouts.admin')

@section('title', 'Edit Student Testimonial')

@section('content')
<div class="dc-container">
    <!-- Header Banner -->
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Edit Student Testimonial <i class="fa-solid fa-pen-to-square" style="color: var(--dc-green); margin-left: 4px;"></i></h1>
            <p>Update student review, rating score, and placement info for {{ $testimonial->student_name }}.</p>
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
        <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Avatar Photo Upload Section -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 700; font-size: 14px; margin-bottom: 8px;">Student Avatar / Photo</label>
                <div style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                    <div style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid var(--dc-green); overflow: hidden; position: relative; background: rgba(0,0,0,0.2);">
                        <img id="avatarPreview" src="{{ $testimonial->avatar ? asset($testimonial->avatar) : asset('images/gopal-singh-director.png') }}" alt="{{ $testimonial->student_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div style="flex: 1; min-width: 240px;">
                        <label style="display: block; font-size: 12px; font-weight: 600; color: var(--dc-light-gray); margin-bottom: 6px;">Replace Photo (Optional):</label>
                        <input type="file" name="avatar" id="avatarInput" accept="image/*" class="dc-search-input" style="width: 100%; padding: 8px;" onchange="previewSelectedAvatar(this)">
                        <p style="font-size: 12px; color: var(--dc-light-gray); margin-top: 6px; line-height: 1.4;">
                            Leave empty if you wish to keep the existing photo.<br>
                            Supported formats: <strong>JPG, PNG, WEBP</strong> max size: <strong>5MB</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Student Name, Company, Role Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Student Name <span style="color: #ef4444;">*</span></label>
                    <input type="text" name="student_name" value="{{ old('student_name', $testimonial->student_name) }}" class="dc-search-input" style="width: 100%;" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Company Placed At</label>
                    <input type="text" name="company" value="{{ old('company', $testimonial->company) }}" class="dc-search-input" style="width: 100%;">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Designation / Role</label>
                    <input type="text" name="role" value="{{ old('role', $testimonial->role) }}" class="dc-search-input" style="width: 100%;">
                </div>
            </div>

            <!-- Course Name & Star Rating Row -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Course Completed</label>
                    <input type="text" name="course_name" value="{{ old('course_name', $testimonial->course_name) }}" class="dc-search-input" style="width: 100%;">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Rating Score (1.0 to 5.0) <span style="color: #ef4444;">*</span></label>
                    <select name="rating" class="dc-select-sm" style="width: 100%; height: 38px;" required>
                        <option value="5.0" {{ old('rating', $testimonial->rating) == '5.0' ? 'selected' : '' }}>5.0 Stars (★★★★★)</option>
                        <option value="4.9" {{ old('rating', $testimonial->rating) == '4.9' ? 'selected' : '' }}>4.9 Stars (★★★★★)</option>
                        <option value="4.8" {{ old('rating', $testimonial->rating) == '4.8' ? 'selected' : '' }}>4.8 Stars (★★★★☆)</option>
                        <option value="4.5" {{ old('rating', $testimonial->rating) == '4.5' ? 'selected' : '' }}>4.5 Stars (★★★★☆)</option>
                        <option value="4.0" {{ old('rating', $testimonial->rating) == '4.0' ? 'selected' : '' }}>4.0 Stars (★★★★☆)</option>
                    </select>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Video Testimonial Link (Optional)</label>
                    <input type="url" name="video_url" value="{{ old('video_url', $testimonial->video_url) }}" class="dc-search-input" style="width: 100%;">
                </div>
            </div>

            <!-- Review Textarea -->
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Review Quote / Feedback <span style="color: #ef4444;">*</span></label>
                <textarea name="review" rows="4" class="dc-search-input" style="width: 100%; font-family: inherit;" required>{{ old('review', $testimonial->review) }}</textarea>
            </div>

            <!-- Checkbox Toggles -->
            <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 28px; flex-wrap: wrap;">
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="is_placed" value="1" {{ old('is_placed', $testimonial->is_placed) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-graduation-cap" style="color: var(--dc-green); margin-right: 4px;"></i> Placed Student Record</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $testimonial->is_featured) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-star" style="color: var(--dc-orange); margin-right: 4px;"></i> Feature on Website Homepage</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; user-select: none;">
                    <input type="checkbox" name="status" value="1" {{ old('status', $testimonial->status) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--dc-green);">
                    <span style="font-weight: 600; font-size: 13px;"><i class="fa-solid fa-eye" style="color: var(--dc-green); margin-right: 4px;"></i> Visible on Public Website</span>
                </label>
            </div>

            <!-- Submit Button Footer -->
            <div style="display: flex; justify-content: flex-end; gap: 12px; border-top: 1px solid var(--dc-border); padding-top: 20px;">
                <a href="{{ route('admin.testimonials.index') }}" class="dc-btn dc-btn-outline">Cancel</a>
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-check"></i>
                    <span>Update Testimonial</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewSelectedAvatar(input) {
    const preview = document.getElementById('avatarPreview');
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
