<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal Login | DigiCoders Academy</title>
    <meta name="description" content="DigiCoders Academy central admin portal login.">

    <!-- Favicon -->
    @if(!empty($settings['site_favicon']))
        <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    @endif
    @if(!empty($settings['site_favicon_ico']))
        <link rel="shortcut icon" href="{{ asset($settings['site_favicon_ico']) }}" type="image/x-icon">
    @endif

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Google Maps JS API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEss4wpsQ0o9WPBjDgHsSByUzFuo2oSNE"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: #E8EFF7;
            color: #1E293B;
            font-family: 'Inter', sans-serif;
            height: 100%;
        }

        @media (min-width: 768px) {

            html,
            body {
                overflow: hidden;
            }
        }

        .login-wrapper {
            min-height: 100vh;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            position: relative;
            z-index: 10;
            box-sizing: border-box;
        }

        .login-card {
            width: 100%;
            max-width: 980px;
            background-color: #ffffff;
            border-radius: 28px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        @media (min-width: 768px) {
            .login-card {
                flex-direction: row;
                min-height: 560px;
            }

            .left-panel {
                width: 50%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                background-color: #EBF4FC;
                padding: 40px;
                position: relative;
            }

            .right-panel {
                width: 50%;
                padding: 40px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
        }

        @media (max-width: 767px) {
            .left-panel {
                display: none;
            }

            .right-panel {
                width: 100%;
                padding: 32px 24px;
            }
        }

        .diagonal-bg {
            position: absolute;
            top: 0;
            right: 0;
            width: 280px;
            height: 280px;
            background-image: repeating-linear-gradient(-45deg,
                    rgba(148, 163, 184, 0.15),
                    rgba(148, 163, 184, 0.15) 1.5px,
                    transparent 1.5px,
                    transparent 10px);
            pointer-events: none;
            z-index: 1;
        }

        .input-field {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #E2E8F0;
            font-size: 14px;
            outline: none;
            transition: all 0.2s ease-in-out;
            color: #1E293B;
            font-weight: 500;
        }

        .input-field:focus {
            border-color: #1877F2;
            box-shadow: 0 0 0 3px rgba(24, 119, 242, 0.15);
        }

        .btn-submit {
            width: 100%;
            background-color: #1877F2;
            color: #ffffff;
            font-weight: 700;
            padding: 14px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 6px -1px rgba(24, 119, 242, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background-color: #166FE5;
            box-shadow: 0 10px 15px -3px rgba(24, 119, 242, 0.3);
        }

        .btn-submit.btn-loading {
            background: linear-gradient(135deg, #00A651 0%, #008742 100%);
            box-shadow: 0 6px 16px rgba(0, 166, 81, 0.35);
        }

        /* Top-Right Premium Toast Container */
        #loginToastContainer {
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width: 380px;
            width: calc(100% - 48px);
            pointer-events: none;
        }

        .login-toast {
            background: #ffffff;
            border: 1px solid #E2E8F0;
            border-radius: 14px;
            padding: 14px 16px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15);
            pointer-events: auto;
            transform: translateX(120%);
            opacity: 0;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }

        .login-toast.toast-show {
            transform: translateX(0);
            opacity: 1;
        }

        .login-toast-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .toast-success .login-toast-icon {
            background: rgba(0, 166, 81, 0.12);
            color: #00A651;
        }

        .toast-error .login-toast-icon {
            background: rgba(239, 68, 68, 0.12);
            color: #EF4444;
        }

        .login-toast-body {
            flex: 1;
        }

        .login-toast-title {
            font-size: 13.5px;
            font-weight: 700;
            color: #1E293B;
            margin-bottom: 2px;
        }

        .login-toast-message {
            font-size: 12px;
            color: #64748B;
            line-height: 1.35;
        }

        .login-toast-close {
            background: none;
            border: none;
            font-size: 16px;
            color: #94A3B8;
            cursor: pointer;
            padding: 0;
            line-height: 1;
        }

        .login-toast-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: #00A651;
            animation: toastProgress 4s linear forwards;
        }

        .toast-error .login-toast-progress {
            background: #EF4444;
        }

        @keyframes toastProgress {
            from {
                width: 100%;
            }

            to {
                width: 0%;
            }
        }
    </style>
</head>

<body>

    <!-- Top-Right Floating Toast Container -->
    <div id="loginToastContainer"></div>

    <!-- Striped Background and Blobs in main body -->
    <div class="diagonal-bg"></div>
    <div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full bg-[#C2DCFA]/50 blur-3xl pointer-events-none z-0">
    </div>

    <div class="login-wrapper">

        <!-- Card Container -->
        <div class="login-card">

            <!-- LEFT PANEL: 3D Illustration & Feature Highlights -->
            <div class="left-panel">
                <!-- Header Title -->
                <div style="z-index: 10;">
                    <div
                        style="display: inline-flex; align-items: center; gap: 8px; background: rgba(0, 166, 81, 0.12); color: #008742; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; margin-bottom: 14px;">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Secure Admin Management</span>
                    </div>
                    <h2 style="font-size: 22px; font-weight: 800; color: #1E293B; line-height: 1.4; margin: 0 0 8px 0;">
                        Simplify interaction between <span style="color: #00A651; font-weight: 800;">Trainers</span> &
                        <span style="color: #F58220; font-weight: 800;">Students</span> online!
                    </h2>
                    <p style="font-size: 13px; color: #64748B; margin: 0; line-height: 1.5;">
                        Empowering educational excellence with real-time admissions, course tracking, and secure access.
                    </p>
                </div>

                <!-- 3D Graphic Illustration -->
                <div
                    style="width: 100%; max-width: 380px; margin: 20px auto; display: flex; justify-content: center; z-index: 10; position: relative;">
                    <img src="{{ asset('images/login-illustration.jpg') }}" alt="DigiCoders Academy Login Graphic"
                        style="width: 100%; max-height: 270px; object-fit: contain; border-radius: 16px; filter: drop-shadow(0 12px 24px rgba(0, 166, 81, 0.15));"
                        onerror="this.src='{{ asset('images/loginillustraction.jpg') }}'">
                </div>

                <!-- Bottom Feature Chips -->
                <div style="z-index: 10; display: flex; gap: 10px; flex-wrap: wrap;">
                    <div
                        style="background: #ffffff; border: 1px solid #E2E8F0; padding: 8px 14px; border-radius: 10px; display: flex; align-items: center; gap: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
                        <i class="fa-solid fa-location-crosshairs" style="color: #00A651; font-size: 13px;"></i>
                        <span style="font-size: 12px; font-weight: 600; color: #334155;">Geolocation Protection</span>
                    </div>
                    <div
                        style="background: #ffffff; border: 1px solid #E2E8F0; padding: 8px 14px; border-radius: 10px; display: flex; align-items: center; gap: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.04);">
                        <i class="fa-solid fa-bolt" style="color: #F58220; font-size: 13px;"></i>
                        <span style="font-size: 12px; font-weight: 600; color: #334155;">Real-Time CMS</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL: Pure White 3-Step 2FA Login Form -->
            <div class="right-panel">

                @if(!empty($settings['site_logo']))
                    <div style="text-align: center; margin-bottom: 20px;">
                        <a href="{{ route('home') }}" style="display: inline-block;">
                            <img src="{{ asset($settings['site_logo']) }}" alt="DigiCoders Academy Logo"
                                style="height: 38px; width: auto; max-width: 100%; display: block; margin: 0 auto;">
                        </a>
                    </div>
                @endif

                <div style="text-align: center; margin-bottom: 20px;">
                    <h3 id="stepHeaderTitle"
                        style="font-size: 20px; font-weight: 700; color: #1E293B; margin: 0 0 4px 0; line-height: 1.2;">
                        Hi, welcome back!
                    </h3>
                    <p id="stepHeaderSubtitle" style="font-size: 12px; color: #64748B; margin: 0;">
                        Enter your email address
                    </p>
                </div>

                <!-- 3-Step Process Indicator Badges -->
                <div
                    style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 20px;">
                    <div id="stepBadge1"
                        style="padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 700; background: rgba(0, 166, 81, 0.12); color: #00A651; display: flex; align-items: center; gap: 4px;">
                        <i class="fa-solid fa-envelope"></i> <span>1. Email</span>
                    </div>
                    <i class="fa-solid fa-chevron-right" style="font-size: 10px; color: #cbd5e1;"></i>
                    <div id="stepBadge2"
                        style="padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 700; background: #f1f5f9; color: #94a3b8; display: flex; align-items: center; gap: 4px;">
                        <i class="fa-solid fa-shield-halved"></i> <span>2. OTP</span>
                    </div>
                    <i class="fa-solid fa-chevron-right" style="font-size: 10px; color: #cbd5e1;"></i>
                    <div id="stepBadge3"
                        style="padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 700; background: #f1f5f9; color: #94a3b8; display: flex; align-items: center; gap: 4px;">
                        <i class="fa-solid fa-key"></i> <span>3. Password</span>
                    </div>
                </div>

                @if (session('success'))
                    <div
                        style="padding: 12px 16px; background: rgba(0, 166, 81, 0.12); border: 1px solid #00A651; border-radius: 10px; color: #008742; font-weight: 600; font-size: 13px; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                        <i data-lucide="check-circle" style="width: 18px; height: 18px; flex-shrink: 0;"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <!-- FORM -->
                <form id="adminLoginForm" action="{{ route('admin.login.submit') }}" method="POST"
                    style="display: flex; flex-direction: column; gap: 14px;">
                    @csrf
                    <input type="hidden" name="latitude" id="loginLatitude" value="">
                    <input type="hidden" name="longitude" id="loginLongitude" value="">
                    <input type="hidden" name="location_address" id="loginLocationAddress" value="">

                    <!-- STEP 1: Email Input Container -->
                    <div id="authStep1">
                        <label
                            style="display: block; font-weight: 600; font-size: 12px; margin-bottom: 6px; color: #334155;">Admin
                            Email Address <span style="color: red;">*</span></label>
                        <input type="email" id="adminEmail" name="email" required placeholder="e.g. email@example.com"
                            class="input-field">

                        <button type="button" id="btnSendOtp" class="btn-submit" style="margin-top: 14px;">
                            <i id="btnSendIcon" class="fa-solid fa-paper-plane"></i>
                            <i id="btnSendSpinner" class="fa-solid fa-spinner fa-spin" style="display: none;"></i>
                            <span id="btnSendText">Send OTP</span>
                        </button>
                    </div>

                    <!-- STEP 2: OTP Verification Container -->
                    <div id="authStep2" style="display: none;">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                            <label style="font-weight: 600; font-size: 12px; color: #334155;">6-Digit Security OTP Code
                                <span style="color: red;">*</span></label>
                            <span id="otpTimerBadge"
                                style="font-size: 11px; font-weight: 700; color: #00A651; background: rgba(0,166,81,0.1); padding: 2px 8px; border-radius: 10px;">
                                ⏱️ 02:00
                            </span>
                        </div>
                        <input type="text" id="otpInput" maxlength="6" placeholder="• • • • • •" class="input-field"
                            style="text-align: center; font-size: 22px; font-weight: 800; letter-spacing: 12px; font-family: monospace;">

                        <div id="resendOtpContainer"
                            style="display: none; justify-content: space-between; align-items: center; margin-top: 8px; font-size: 11px;">
                            <span style="color: #64748b;">Didn't receive code?</span>
                            <button type="button" onclick="resendOtpCode()"
                                style="background: none; border: none; color: #1877F2; font-weight: 700; cursor: pointer; padding: 0;">
                                Resend OTP Code
                            </button>
                        </div>

                        <button type="button" id="btnVerifyOtp" class="btn-submit"
                            style="margin-top: 14px; background-color: #00A651;">
                            <i id="btnVerifyIcon" class="fa-solid fa-shield-check"></i>
                            <i id="btnVerifySpinner" class="fa-solid fa-spinner fa-spin" style="display: none;"></i>
                            <span id="btnVerifyText">Verify OTP & Proceed</span>
                        </button>

                        <button type="button" onclick="goToAuthStep(1)"
                            style="margin-top: 8px; background: none; border: none; color: #64748b; font-size: 12px; font-weight: 600; cursor: pointer; width: 100%; text-align: center;">
                            ← Change Email Address
                        </button>
                    </div>

                    <!-- STEP 3: Password Authentication Container -->
                    <div id="authStep3" style="display: none;">
                        <label
                            style="display: block; font-weight: 600; font-size: 12px; margin-bottom: 6px; color: #334155;">Account
                            Password <span style="color: red;">*</span></label>
                        <div style="position: relative;">
                            <input type="password" id="adminPassword" name="password" required 
                                placeholder="Enter your password" class="input-field" style="padding-right: 44px;">
                            <button type="button" onclick="togglePasswordVisibility()"
                                style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #94A3B8; cursor: pointer; padding: 4px; display: flex; align-items: center; justify-content: center; z-index: 10;">
                                <i class="fa-solid fa-eye-slash" id="adminToggleIcon" style="font-size: 16px;"></i>
                            </button>
                        </div>

                        <div style="margin-top: 14px;">
                            <button type="submit" id="loginSubmitBtn" class="btn-submit">
                                <i id="btnSubmitIcon" class="fa-solid fa-right-to-bracket"></i>
                                <i id="btnSubmitSpinner" class="fa-solid fa-spinner fa-spin" style="display: none;"></i>
                                <span id="loginSubmitText">Sign In to Admin Panel</span>
                            </button>
                        </div>
                    </div>

                    <!-- Footer Privacy/Terms -->
                    <div style="border-top: 1px solid #F1F5F9; margin-top: 14px; padding-top: 12px;">
                        <p style="font-size: 11px; color: #94A3B8; line-height: 1.5; margin: 0; text-align: left;">
                            By continuing, you accept our <a href="{{ route('terms') }}"
                                style="color: #1877F2; font-weight: 600; text-decoration: none;">Terms of Use</a> and <a
                                href="{{ route('privacy-policy') }}"
                                style="color: #1877F2; font-weight: 600; text-decoration: none;">Privacy Policy</a>.
                        </p>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <!-- Script for Top-Right Toast Notifications, 3-Step 2FA OTP & Geolocation Login -->
    <script>
        let locationPermissionGranted = false;
        let otpCountdownInterval = null;
        let currentAuthStep = 1;

        // Global Login Toast Helper
        function showLoginToast(type, title, message) {
            const container = document.getElementById("loginToastContainer");
            if (!container) return;

            const toast = document.createElement("div");
            toast.className = `login-toast toast-${type}`;

            let iconClass = "fa-circle-check";
            if (type === "error") iconClass = "fa-triangle-exclamation";

            toast.innerHTML = `
                <div class="login-toast-icon">
                    <i class="fa-solid ${iconClass}"></i>
                </div>
                <div class="login-toast-body">
                    <div class="login-toast-title">${title}</div>
                    <div class="login-toast-message">${message}</div>
                </div>
                <button class="login-toast-close" onclick="this.parentElement.remove()">&times;</button>
                <div class="login-toast-progress"></div>
            `;

            container.appendChild(toast);

            setTimeout(() => toast.classList.add("toast-show"), 50);

            setTimeout(() => {
                toast.classList.remove("toast-show");
                setTimeout(() => toast.remove(), 400);
            }, 4000);
        }

        // Step Navigation Switcher
        function goToAuthStep(step) {
            currentAuthStep = step;
            const step1 = document.getElementById('authStep1');
            const step2 = document.getElementById('authStep2');
            const step3 = document.getElementById('authStep3');

            const badge1 = document.getElementById('stepBadge1');
            const badge2 = document.getElementById('stepBadge2');
            const badge3 = document.getElementById('stepBadge3');

            const title = document.getElementById('stepHeaderTitle');
            const subtitle = document.getElementById('stepHeaderSubtitle');

            if (step === 1) {
                step1.style.display = 'block';
                step2.style.display = 'none';
                step3.style.display = 'none';

                badge1.style.background = 'rgba(0, 166, 81, 0.12)';
                badge1.style.color = '#00A651';
                badge2.style.background = '#f1f5f9';
                badge2.style.color = '#94a3b8';
                badge3.style.background = '#f1f5f9';
                badge3.style.color = '#94a3b8';

                title.textContent = 'Hi, welcome back!';
                subtitle.textContent = 'Enter your email address to receive a security OTP.';
            } else if (step === 2) {
                step1.style.display = 'none';
                step2.style.display = 'block';
                step3.style.display = 'none';

                badge1.style.background = '#f1f5f9';
                badge1.style.color = '#94a3b8';
                badge2.style.background = 'rgba(0, 166, 81, 0.12)';
                badge2.style.color = '#00A651';
                badge3.style.background = '#f1f5f9';
                badge3.style.color = '#94a3b8';

                title.textContent = 'Enter 6-Digit OTP Code 🛡️';
                subtitle.textContent = 'Check your email inbox for the security code.';

                startOtpTimer(120);
                document.getElementById('otpInput').focus();
            } else if (step === 3) {
                step1.style.display = 'none';
                step2.style.display = 'none';
                step3.style.display = 'block';

                badge1.style.background = '#f1f5f9';
                badge1.style.color = '#94a3b8';
                badge2.style.background = '#f1f5f9';
                badge2.style.color = '#94a3b8';
                badge3.style.background = 'rgba(0, 166, 81, 0.12)';
                badge3.style.color = '#00A651';

                title.textContent = 'Enter Password 🔑';
                subtitle.textContent = 'OTP verified! Enter your admin password to complete sign in.';

                document.getElementById('adminPassword').focus();
            }
        }

        function startOtpTimer(seconds) {
            clearInterval(otpCountdownInterval);
            let timeLeft = seconds;
            const badge = document.getElementById('otpTimerBadge');
            const resendBox = document.getElementById('resendOtpContainer');

            // Hide Resend Button while timer is running
            if (resendBox) {
                resendBox.style.display = 'none';
            }

            function updateTimerDisplay() {
                const m = Math.floor(timeLeft / 60);
                const s = timeLeft % 60;
                const mStr = m < 10 ? '0' + m : m;
                const sStr = s < 10 ? '0' + s : s;
                if (badge) {
                    badge.textContent = `⏱️ ${mStr}:${sStr}`;
                    if (timeLeft <= 30) {
                        badge.style.color = '#ef4444';
                        badge.style.background = 'rgba(239, 68, 68, 0.1)';
                    } else {
                        badge.style.color = '#00A651';
                        badge.style.background = 'rgba(0, 166, 81, 0.1)';
                    }
                }
            }

            updateTimerDisplay();
            otpCountdownInterval = setInterval(() => {
                timeLeft--;
                if (timeLeft <= 0) {
                    clearInterval(otpCountdownInterval);
                    if (badge) {
                        badge.textContent = '⏱️ Expired';
                        badge.style.color = '#ef4444';
                    }
                    // Show Resend Button ONLY when OTP timer has expired
                    if (resendBox) {
                        resendBox.style.display = 'flex';
                    }
                    showLoginToast('error', 'OTP Expired ⏰', 'The OTP code has expired. Click resend to get a new code.');
                } else {
                    updateTimerDisplay();
                }
            }, 1000);
        }

        function resendOtpCode() {
            const resendBox = document.getElementById('resendOtpContainer');
            if (resendBox) {
                resendBox.style.display = 'none';
            }
            document.getElementById('btnSendOtp').click();
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Bind Enter keypress for Email and OTP inputs to trigger corresponding step action
            const adminEmailInput = document.getElementById('adminEmail');
            if (adminEmailInput) {
                adminEmailInput.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        document.getElementById('btnSendOtp').click();
                    }
                });
            }

            const otpInput = document.getElementById('otpInput');
            if (otpInput) {
                otpInput.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        document.getElementById('btnVerifyOtp').click();
                    }
                });
            }

            // Silent Pre-Capture Geolocation & Google Reverse Geocoding on Page Load
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    const latInput = document.getElementById('loginLatitude');
                    const lngInput = document.getElementById('loginLongitude');
                    const addrInput = document.getElementById('loginLocationAddress');

                    if (latInput) latInput.value = lat;
                    if (lngInput) lngInput.value = lng;

                    if (window.google && window.google.maps && window.google.maps.Geocoder) {
                        const geocoder = new google.maps.Geocoder();
                        geocoder.geocode({ 'location': { lat: parseFloat(lat), lng: parseFloat(lng) } }, function (results, status) {
                            if (status === 'OK' && results && results[0] && results[0].formatted_address) {
                                if (addrInput) addrInput.value = results[0].formatted_address;
                            }
                        });
                    }
                }, function (err) { }, { timeout: 10000, enableHighAccuracy: true });
            }

            function resetSendBtn() {
                const btnSendOtp = document.getElementById('btnSendOtp');
                const btnSendIcon = document.getElementById('btnSendIcon');
                const btnSendSpinner = document.getElementById('btnSendSpinner');
                const btnSendText = document.getElementById('btnSendText');

                if (btnSendOtp) btnSendOtp.disabled = false;
                if (btnSendIcon) btnSendIcon.style.display = 'inline-block';
                if (btnSendSpinner) btnSendSpinner.style.display = 'none';
                if (btnSendText) btnSendText.textContent = 'Send OTP';
            }

            // Step 1: Send OTP Button Event Listener
            const btnSendOtp = document.getElementById('btnSendOtp');
            btnSendOtp.addEventListener('click', async function () {
                const emailInput = document.getElementById('adminEmail');
                const email = emailInput.value.trim();

                if (!email) {
                    showLoginToast('error', 'Email Required 📧', 'Please enter your admin email address.');
                    emailInput.focus();
                    return;
                }

                const btnSendIcon = document.getElementById('btnSendIcon');
                const btnSendSpinner = document.getElementById('btnSendSpinner');
                const btnSendText = document.getElementById('btnSendText');

                btnSendOtp.disabled = true;
                btnSendIcon.style.display = 'none';
                btnSendSpinner.style.display = 'inline-block';
                btnSendText.textContent = 'Sending 2-Min OTP...';

                // Mandatory Geolocation Check for OTP Generation
                let lat = document.getElementById('loginLatitude').value;
                let lng = document.getElementById('loginLongitude').value;
                let address = document.getElementById('loginLocationAddress').value;

                if (!lat || !lng) {
                    if (!navigator.geolocation) {
                        showLoginToast('error', 'Location Access Required 📍', 'Browser location permission is strictly required to receive 2FA OTP.');
                        resetSendBtn();
                        return;
                    }

                    try {
                        const pos = await new Promise((resolve, reject) => {
                            navigator.geolocation.getCurrentPosition(resolve, reject, { timeout: 10000, enableHighAccuracy: true });
                        });
                        lat = pos.coords.latitude;
                        lng = pos.coords.longitude;
                        document.getElementById('loginLatitude').value = lat;
                        document.getElementById('loginLongitude').value = lng;
                    } catch (geoErr) {
                        showLoginToast('error', 'Location Access Mandatory 📍', 'Browser location permission is strictly required to receive 2FA OTP. Please allow browser location access in your browser settings.');
                        resetSendBtn();
                        return;
                    }
                }

                if (!lat || !lng) {
                    showLoginToast('error', 'Location Access Mandatory 📍', 'Browser location permission is strictly required to receive 2FA OTP. Please allow browser location access in your browser settings.');
                    resetSendBtn();
                    return;
                }

                try {
                    const res = await fetch("{{ route('admin.sendOtp') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            email: email,
                            latitude: lat,
                            longitude: lng,
                            location_address: address
                        })
                    });

                    const data = await res.json();

                    if (!res.ok || data.status === 'error') {
                        showLoginToast('error', data.title || 'OTP Failed', data.message || 'Failed to send OTP code.');
                        btnSendOtp.disabled = false;
                        btnSendIcon.style.display = 'inline-block';
                        btnSendSpinner.style.display = 'none';
                        btnSendText.textContent = 'Send OTP';
                        return;
                    }

                    const recipientDisplay = data.recipient_email || data.email || email;
                    showLoginToast('success', data.title || 'OTP Sent 📬', data.message || `OTP sent to ${recipientDisplay}! Valid for 2 minutes.`);

                    btnSendOtp.disabled = false;
                    btnSendIcon.style.display = 'inline-block';
                    btnSendSpinner.style.display = 'none';
                    btnSendText.textContent = 'Send OTP';

                    document.getElementById('otpInput').value = '';
                    goToAuthStep(2);

                } catch (err) {
                    showLoginToast('error', 'Network Error 🌐', 'Unable to send OTP request. Please check connection.');
                    btnSendOtp.disabled = false;
                    btnSendIcon.style.display = 'inline-block';
                    btnSendSpinner.style.display = 'none';
                    btnSendText.textContent = 'Send OTP';
                }
            });

            // Step 2: Verify OTP Button Event Listener
            const btnVerifyOtp = document.getElementById('btnVerifyOtp');
            btnVerifyOtp.addEventListener('click', async function () {
                const emailInput = document.getElementById('adminEmail');
                const otpInput = document.getElementById('otpInput');
                const email = emailInput.value.trim();
                const otp = otpInput.value.trim();

                if (!otp || otp.length !== 6) {
                    showLoginToast('error', 'Invalid OTP 🔑', 'Please enter a valid 6-digit OTP code.');
                    otpInput.focus();
                    return;
                }

                const btnVerifyIcon = document.getElementById('btnVerifyIcon');
                const btnVerifySpinner = document.getElementById('btnVerifySpinner');
                const btnVerifyText = document.getElementById('btnVerifyText');

                btnVerifyOtp.disabled = true;
                btnVerifyIcon.style.display = 'none';
                btnVerifySpinner.style.display = 'inline-block';
                btnVerifyText.textContent = 'Verifying OTP...';

                try {
                    const res = await fetch("{{ route('admin.verifyOtp') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({ email: email, otp: otp })
                    });

                    const data = await res.json();

                    if (!res.ok || data.status === 'error') {
                        showLoginToast('error', data.title || 'OTP Failed', data.message || 'Invalid OTP code.');
                        btnVerifyOtp.disabled = false;
                        btnVerifyIcon.style.display = 'inline-block';
                        btnVerifySpinner.style.display = 'none';
                        btnVerifyText.textContent = 'Verify OTP & Proceed';
                        return;
                    }

                    showLoginToast('success', data.title || 'OTP Verified ✅', data.message || 'OTP verified! Enter password to complete login.');

                    btnVerifyOtp.disabled = false;
                    btnVerifyIcon.style.display = 'inline-block';
                    btnVerifySpinner.style.display = 'none';
                    btnVerifyText.textContent = 'Verify OTP & Proceed';

                    goToAuthStep(3);

                } catch (err) {
                    showLoginToast('error', 'Network Error 🌐', 'Unable to verify OTP code.');
                    btnVerifyOtp.disabled = false;
                    btnVerifyIcon.style.display = 'inline-block';
                    btnVerifySpinner.style.display = 'none';
                    btnVerifyText.textContent = 'Verify OTP & Proceed';
                }
            });

            // Step 3: Login Submit Event Listener
            const loginForm = document.getElementById('adminLoginForm');
            const submitBtn = document.getElementById('loginSubmitBtn');

            if (loginForm) {
                loginForm.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    if (currentAuthStep === 1) {
                        document.getElementById('btnSendOtp').click();
                        return;
                    }
                    if (currentAuthStep === 2) {
                        document.getElementById('btnVerifyOtp').click();
                        return;
                    }

                    if (locationPermissionGranted) {
                        loginForm.submit();
                        return true;
                    }

                    const btnSubmitIcon = document.getElementById('btnSubmitIcon');
                    const btnSubmitSpinner = document.getElementById('btnSubmitSpinner');
                    const loginSubmitText = document.getElementById('loginSubmitText');

                    if (submitBtn) {
                        submitBtn.disabled = true;
                        if (btnSubmitIcon) btnSubmitIcon.style.display = 'none';
                        if (btnSubmitSpinner) btnSubmitSpinner.style.display = 'inline-block';
                        if (loginSubmitText) loginSubmitText.textContent = 'Verifying credentials...';
                    }

                    const verifyData = new FormData(loginForm);
                    verifyData.append('verify_only', '1');

                    try {
                        const verifyRes = await fetch("{{ route('admin.login.submit') }}", {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: verifyData
                        });

                        const verifyResult = await verifyRes.json();

                        if (!verifyRes.ok || verifyResult.status === 'error') {
                            showLoginToast('error', verifyResult.title || 'Invalid Credentials ❌', verifyResult.message || 'Authentication failed.');
                            resetSubmitBtn();
                            return;
                        }

                        showLoginToast('success', verifyResult.title || 'Login Successful! 🎉', verifyResult.message || 'Welcome back! Redirecting to CMS Dashboard...');

                        sessionStorage.setItem("tab_session_active", "true");
                        locationPermissionGranted = true;

                        if (loginSubmitText) loginSubmitText.textContent = 'Redirecting...';

                        setTimeout(function () {
                            loginForm.submit();
                        }, 600);

                    } catch (verifyErr) {
                        console.warn('Credential verification error:', verifyErr);
                        resetSubmitBtn();
                    }
                });
            }

            function resetSubmitBtn() {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    const btnSubmitIcon = document.getElementById('btnSubmitIcon');
                    const btnSubmitSpinner = document.getElementById('btnSubmitSpinner');
                    const loginSubmitText = document.getElementById('loginSubmitText');

                    if (btnSubmitIcon) btnSubmitIcon.style.display = 'inline-block';
                    if (btnSubmitSpinner) btnSubmitSpinner.style.display = 'none';
                    if (loginSubmitText) loginSubmitText.textContent = 'Sign In to Admin Panel';
                }
            }
        });

        function togglePasswordVisibility() {
            const input = document.getElementById('adminPassword');
            const icon = document.getElementById('adminToggleIcon');
            if (input && icon) {
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.className = 'fa-solid fa-eye';
                } else {
                    input.type = 'password';
                    icon.className = 'fa-solid fa-eye-slash';
                }
            }
        }
    </script>
</body>

</html>