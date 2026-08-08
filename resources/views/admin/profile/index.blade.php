@extends('layouts.admin')

@section('title', 'Admin Profile & Security Settings')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Account & Security Settings <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage your administrator profile info, update credentials, upload avatar image, and change login password.</p>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="dc-btn dc-btn-outline">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
        <!-- Card 1: Profile Information -->
        <div class="dc-card" style="padding: 28px;">
            <div class="dc-card-title-wrap" style="margin-bottom: 20px;">
                <h2 class="dc-card-title" style="display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-user-gear" style="color: var(--dc-green);"></i>
                    <span>Profile Details</span>
                </h2>
                <span class="dc-badge-pill dc-badge-green">Super Administrator</span>
            </div>

            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 16px; background: var(--dc-bg); padding: 16px; border-radius: var(--radius-std); border: 1px solid var(--dc-border);">
                    <div style="position: relative;">
                        <img id="avatarPreview" src="{{ $admin->profile_image }}" style="width: 68px; height: 68px; border-radius: var(--radius-std); object-fit: cover; border: 2.5px solid var(--dc-green); box-shadow: 0 4px 10px rgba(0,0,0,0.08);" alt="Avatar">
                    </div>
                    <div style="flex: 1;">
                        <strong style="display: block; font-family: var(--font-heading); font-size: 15px; color: var(--dc-dark);">{{ $admin->name ?? 'Admin User' }}</strong>
                        <span style="font-size: 12px; color: var(--dc-light-gray); display: block; margin-bottom: 8px;">{{ $admin->email ?? 'admin@digicoders.in' }}</span>
                        
                        <label for="adminProfileImageInput" class="dc-btn" style="padding: 6px 14px; font-size: 12px; font-weight: 600; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; background: var(--dc-card-bg); color: var(--dc-dark); border: 1px solid var(--dc-border);">
                            <i class="fa-solid fa-camera" style="color: var(--dc-green);"></i>
                            <span>Change Photo</span>
                        </label>
                        <input type="file" id="adminProfileImageInput" name="image" accept="image/*" style="display: none;" onchange="previewAdminAvatar(this)">
                    </div>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Full Administrator Name <span style="color: red;">*</span></label>
                    <input type="text" name="name" class="dc-search-input" style="width: 100%; height: 38px;" value="{{ old('name', $admin->name ?? 'Admin User') }}" required>
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Official Email Address <span style="color: red;">*</span></label>
                    <input type="email" name="email" class="dc-search-input" style="width: 100%; height: 38px;" value="{{ old('email', $admin->email ?? 'admin@digicoders.in') }}" required>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="dc-btn dc-btn-green" style="height: 38px; padding: 0 20px; font-weight: 700;">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save Profile Changes</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Card 2: Change Password Studio -->
        <div class="dc-card" style="padding: 28px; border-left: 4px solid var(--dc-orange);" id="passwordSection">
            <div class="dc-card-title-wrap" style="margin-bottom: 20px;">
                <h2 class="dc-card-title" style="display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-key" style="color: var(--dc-orange);"></i>
                    <span>Change Password</span>
                </h2>
                <span style="font-size: 12px; color: var(--dc-light-gray);">Ensure strong security</span>
            </div>

            <form action="{{ route('admin.profile.password') }}" method="POST">
                @csrf
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Current Password <span style="color: red;">*</span></label>
                    <input type="password" name="current_password" class="dc-search-input" style="width: 100%; height: 38px;" placeholder="••••••••" required>
                </div>

                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">New Password <span style="color: red;">*</span></label>
                    <input type="password" name="new_password" class="dc-search-input" style="width: 100%; height: 38px;" placeholder="At least 6 characters" required>
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Confirm New Password <span style="color: red;">*</span></label>
                    <input type="password" name="new_password_confirmation" class="dc-search-input" style="width: 100%; height: 38px;" placeholder="Repeat new password" required>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="dc-btn dc-btn-orange" style="height: 38px; padding: 0 20px; font-weight: 700;">
                        <i class="fa-solid fa-lock"></i>
                        <span>Update Password</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function previewAdminAvatar(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById('avatarPreview');
                if (img) img.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
@endsection

