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
                <!-- 1. Current Password -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Current Password <span style="color: red;">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="current_password" name="current_password" class="dc-search-input" style="width: 100%; height: 40px; padding-right: 42px;" placeholder="••••••••" required>
                        <button type="button" class="toggle-pwd-btn" data-target="current_password" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--dc-light-gray); cursor: pointer; padding: 4px;" title="Show/Hide Password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- 2. New Password -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">New Password <span style="color: red;">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="new_password" name="new_password" class="dc-search-input" style="width: 100%; height: 40px; padding-right: 42px;" placeholder="At least 8 characters" oninput="checkPasswordStrength(this.value)" required>
                        <button type="button" class="toggle-pwd-btn" data-target="new_password" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--dc-light-gray); cursor: pointer; padding: 4px;" title="Show/Hide Password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>

                    <!-- Password Strength Progress Bar -->
                    <div id="strengthContainer" style="display: none; margin-top: 10px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                            <span style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--dc-light-gray);">Password Strength:</span>
                            <span id="strengthText" style="font-size: 11px; font-weight: 800; color: #ef4444;">Weak 🔴</span>
                        </div>
                        <div style="height: 6px; width: 100%; background: var(--dc-border); border-radius: 3px; overflow: hidden; margin-bottom: 12px;">
                            <div id="strengthProgressBar" style="height: 100%; width: 0%; background: #ef4444; transition: all 0.3s ease;"></div>
                        </div>

                        <!-- Requirements Checklist -->
                        <div style="padding: 12px; background: var(--dc-bg); border-radius: var(--radius-std); border: 1px solid var(--dc-border); space-y: 6px;">
                            <h6 style="font-size: 11px; font-weight: 700; margin-bottom: 8px; color: var(--dc-dark); display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-list-check" style="color: var(--dc-green);"></i> Password Requirements Checklist:
                            </h6>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 6px; font-size: 11px;">
                                <div id="req-length" style="color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-circle-xmark req-icon" style="color: #ef4444;"></i> <span>At least 8 characters</span>
                                </div>
                                <div id="req-uppercase" style="color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-circle-xmark req-icon" style="color: #ef4444;"></i> <span>Uppercase letter (A-Z)</span>
                                </div>
                                <div id="req-lowercase" style="color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-circle-xmark req-icon" style="color: #ef4444;"></i> <span>Lowercase letter (a-z)</span>
                                </div>
                                <div id="req-number" style="color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-circle-xmark req-icon" style="color: #ef4444;"></i> <span>Contains Number (0-9)</span>
                                </div>
                                <div id="req-special" style="grid-column: span 2; color: #94a3b8; display: flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-circle-xmark req-icon" style="color: #ef4444;"></i> <span>Special character (!@#$%^&*)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Confirm New Password -->
                <div style="margin-bottom: 24px;">
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Confirm New Password <span style="color: red;">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="dc-search-input" style="width: 100%; height: 40px; padding-right: 42px;" placeholder="Repeat new password" oninput="checkPasswordMatch()" required>
                        <button type="button" class="toggle-pwd-btn" data-target="new_password_confirmation" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; color: var(--dc-light-gray); cursor: pointer; padding: 4px;" title="Show/Hide Password">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                    <div id="passwordMatchMsg" style="display: none; font-size: 11px; font-weight: 600; margin-top: 4px;"></div>
                </div>

                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit" id="updatePasswordSubmitBtn" class="dc-btn dc-btn-orange" style="height: 40px; padding: 0 24px; font-weight: 700;">
                        <i class="fa-solid fa-key"></i>
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

    // Show/Hide Password Eye Toggle Feature
    document.querySelectorAll('.toggle-pwd-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const pwdInput = document.getElementById(targetId);
            const icon = this.querySelector('i');

            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                pwdInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });

    // Password Strength & Live Requirements Checker
    function checkPasswordStrength(password) {
        const container = document.getElementById('strengthContainer');
        const bar = document.getElementById('strengthProgressBar');
        const text = document.getElementById('strengthText');

        if (!password || password.length === 0) {
            container.style.display = 'none';
            resetRequirements();
            return;
        }

        container.style.display = 'block';

        // Requirement criteria rules
        const hasLength = password.length >= 8;
        const hasUpper = /[A-Z]/.test(password);
        const hasLower = /[a-z]/.test(password);
        const hasNumber = /[0-9]/.test(password);
        const hasSpecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);

        // Update individual checklist UI
        updateReqItem('req-length', hasLength);
        updateReqItem('req-uppercase', hasUpper);
        updateReqItem('req-lowercase', hasLower);
        updateReqItem('req-number', hasNumber);
        updateReqItem('req-special', hasSpecial);

        // Calculate score (0-5)
        let score = 0;
        if (hasLength) score++;
        if (hasUpper) score++;
        if (hasLower) score++;
        if (hasNumber) score++;
        if (hasSpecial) score++;

        // Update Progress Bar UI
        let percentage = (score / 5) * 100;
        bar.style.width = percentage + '%';

        if (score <= 2) {
            bar.style.background = '#ef4444';
            text.textContent = 'Weak 🔴';
            text.style.color = '#ef4444';
        } else if (score === 3) {
            bar.style.background = '#f59e0b';
            text.textContent = 'Medium 🟡';
            text.style.color = '#f59e0b';
        } else if (score === 4) {
            bar.style.background = '#0284c7';
            text.textContent = 'Strong 🔵';
            text.style.color = '#0284c7';
        } else {
            bar.style.background = '#00A651';
            text.textContent = 'Very Strong & Secure 🟢';
            text.style.color = '#00A651';
        }

        checkPasswordMatch();
    }

    function updateReqItem(elementId, isMet) {
        const el = document.getElementById(elementId);
        const icon = el.querySelector('.req-icon');

        if (isMet) {
            el.style.color = '#00A651';
            el.style.fontWeight = '600';
            icon.className = 'fa-solid fa-circle-check req-icon';
            icon.style.color = '#00A651';
        } else {
            el.style.color = '#94a3b8';
            el.style.fontWeight = '400';
            icon.className = 'fa-solid fa-circle-xmark req-icon';
            icon.style.color = '#ef4444';
        }
    }

    function resetRequirements() {
        ['req-length', 'req-uppercase', 'req-lowercase', 'req-number', 'req-special'].forEach(id => {
            updateReqItem(id, false);
        });
    }

    function checkPasswordMatch() {
        const newPwd = document.getElementById('new_password').value;
        const confirmPwd = document.getElementById('new_password_confirmation').value;
        const matchMsg = document.getElementById('passwordMatchMsg');

        if (!confirmPwd) {
            matchMsg.style.display = 'none';
            return;
        }

        matchMsg.style.display = 'block';
        if (newPwd === confirmPwd) {
            matchMsg.style.color = '#00A651';
            matchMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i> Passwords match!';
        } else {
            matchMsg.style.color = '#ef4444';
            matchMsg.innerHTML = '<i class="fa-solid fa-circle-xmark"></i> Passwords do not match';
        }
    }
</script>
@endpush
@endsection
