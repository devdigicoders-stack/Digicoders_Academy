<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Login | DigiCoders Academy</title>
    <meta name="description"
        content="DigiCoders Academy student login portal. Access your dashboard, practical labs, attendance, and certificates.">

    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Outfit:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #FFF5F5; color: #111111; }
        .font-heading { font-family: 'Outfit', sans-serif; }
    </style>
</head>

<body class="antialiased text-[#111111] bg-gradient-to-br from-emerald-50/60 via-slate-50 to-orange-50/50 selection:bg-[#F58220] selection:text-white min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-10">

    <!-- Main 2-Column Split Box matching reference image -->
    <div class="w-full max-w-[1020px] bg-white/70 backdrop-blur-xl rounded-[28px] border border-slate-200/80 shadow-2xl p-6 sm:p-10 lg:p-12 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center relative overflow-hidden">

        <!-- Top Small Logo Header -->
        @if(!empty($settings['site_logo']))
            <div class="absolute top-5 left-6 sm:top-6 sm:left-10 z-20 flex items-center gap-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset($settings['site_logo']) }}" alt="DigiCoders Academy" class="h-8 sm:h-9 w-auto">
                </a>
            </div>
        @endif

        <!-- LEFT COLUMN: Online Education Heading & Vector Illustration -->
        <div class="lg:col-span-7 space-y-4 pt-10 lg:pt-6 text-center lg:text-left">
            <div class="space-y-2">
                <h1 class="text-3xl sm:text-4xl lg:text-[40px] font-black font-heading text-[#00A651] uppercase tracking-wide leading-tight">
                    Online Education
                </h1>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed max-w-md mx-auto lg:mx-0 font-medium">
                    Empowering students with practical coding skills, live industry projects and career-focused diploma education.
                </p>
            </div>

            <!-- Vector Illustration Graphic -->
            <div class="pt-2">
                <img src="{{ asset('images/education-illustration.svg') }}" alt="Online Education Illustration" class="w-full max-w-[460px] mx-auto lg:mx-0 drop-shadow-md hover:scale-[1.02] transition-transform duration-500">
            </div>
        </div>

        <!-- RIGHT COLUMN: Elegant White Vertical Login Card -->
        <div class="lg:col-span-5 w-full">
            <div class="w-full max-w-[360px] mx-auto bg-white rounded-[24px] border border-slate-200/90 shadow-xl p-6 sm:p-8 text-center space-y-6 relative">
                
                <!-- Title -->
                <div class="space-y-1">
                    <h2 class="text-xl sm:text-2xl font-black font-heading text-[#00A651] uppercase tracking-wider">
                        Student Login
                    </h2>
                    <p class="text-[11px] text-slate-400 font-semibold">Enter your account credentials</p>
                </div>

                <!-- Form -->
                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Student Login Successful!');" class="space-y-4 text-left">
                    @csrf

                    <!-- Email / Username Pill Input -->
                    <div class="relative flex items-center">
                        <i data-lucide="user" class="w-4 h-4 text-[#00A651] absolute left-4 pointer-events-none"></i>
                        <input type="text" required placeholder="Username or Email"
                            class="w-full pl-11 pr-4 py-3.5 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-xs sm:text-sm text-[#111111] placeholder:text-[#00A651]/70 font-semibold outline-none focus:bg-white focus:border-[#00A651] focus:ring-2 focus:ring-[#00A651]/20 transition-all">
                    </div>

                    <!-- Password Pill Input -->
                    <div class="relative flex items-center">
                        <i data-lucide="lock" class="w-4 h-4 text-[#00A651] absolute left-4 pointer-events-none"></i>
                        <input type="password" id="studentPassword" required placeholder="Password"
                            class="w-full pl-11 pr-11 py-3.5 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-xs sm:text-sm text-[#111111] placeholder:text-[#00A651]/70 font-semibold outline-none focus:bg-white focus:border-[#00A651] focus:ring-2 focus:ring-[#00A651]/20 transition-all">
                        <button type="button" onclick="togglePasswordVisibility('studentPassword', 'toggleIcon')" class="absolute right-4 text-[#00A651] hover:text-[#008d44] cursor-pointer">
                            <i data-lucide="eye" id="toggleIcon" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between text-[11px] pt-1 px-1">
                        <label class="flex items-center gap-1.5 text-slate-600 cursor-pointer font-medium">
                            <input type="checkbox" checked class="w-3.5 h-3.5 rounded border-slate-300 text-[#00A651] focus:ring-[#00A651] cursor-pointer">
                            <span>Remember me</span>
                        </label>
                        <a href="#" onclick="alert('Password reset link sent to your registered email!'); return false;" class="text-[#00A651] font-bold hover:underline">Forgot password?</a>
                    </div>

                    <!-- Pill Login Button -->
                    <button type="submit" class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-3.5 rounded-full text-xs font-black uppercase tracking-widest transition-all shadow-md hover:shadow-lg cursor-pointer flex items-center justify-center gap-2 mt-2">
                        <span>LOGIN</span>
                    </button>

                    <!-- Links below button -->
                    <div class="pt-2 text-center space-y-2 text-xs">
                        <div>
                            <a href="#admissions" onclick="alert('Redirecting to Admissions Registration Form...'); return false;" class="text-[#F58220] font-extrabold hover:underline">Create Account</a>
                        </div>
                        <div>
                            <a href="{{ route('home') }}" class="text-slate-400 hover:text-slate-600 font-medium text-[11px]">← Back to Website</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });

        function togglePasswordVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input && icon) {
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.setAttribute('data-lucide', 'eye-off');
                } else {
                    input.type = 'password';
                    icon.setAttribute('data-lucide', 'eye');
                }
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }
        }
    </script>
</body>

</html>
