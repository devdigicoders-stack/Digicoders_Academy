<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us & Campus Location | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Contact DigiCoders Academy Lucknow. Phone: +91 9140967607, Email: info@digicodersacademy.com. Visit our campus near Polytechnic Chauraha, Indiranagar, Lucknow.">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / WhatsApp / Facebook Link Sharing Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Contact Us & Campus Location | DigiCoders Academy Lucknow">
    <meta property="og:description"
        content="Get in touch with DigiCoders Academy Lucknow. Call +91 9140967607 or visit our campus for course counseling & admissions.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="DigiCoders Academy">
    <link rel="image_src" href="{{ asset('images/logo.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Contact Us | DigiCoders Academy Lucknow">
    <meta name="twitter:description"
        content="Contact DigiCoders Academy Lucknow. Call +91 9140967607 or visit our campus for course counseling.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF;
            color: #111111;
        }

        .font-heading {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="antialiased text-[#111111] bg-white selection:bg-[#F58220] selection:text-white">

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <!-- MAIN Contact CONTENT -->
    <main class="pt-[110px] sm:pt-[130px]">

        <!-- 1️⃣ HERO SECTION (320px Height Aesthetic, Apple/Framer/Linear Style) -->
        <section id="hero" class="relative py-12 sm:py-16 bg-white overflow-hidden border-b border-slate-200/60">
            <!-- Subtle Blur Blobs & Glass Shapes -->
            <div class="absolute -top-24 -left-20 w-96 h-96 bg-emerald-50 rounded-full blur-3xl opacity-70 pointer-events-none z-0"></div>
            <div class="absolute top-1/2 right-0 w-[450px] h-[450px] bg-orange-50/80 rounded-full blur-3xl opacity-70 pointer-events-none z-0"></div>

            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left Column: Breadcrumb, Badge, Heading, Desc -->
                    <div class="lg:col-span-6 space-y-5 text-left">
                        
                        <!-- Breadcrumb -->
                        <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                            <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span class="text-[#00A651] font-bold">Contact Us</span>
                        </nav>

                        <!-- Small Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>CONTACT DIGICODERS ACADEMY</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Let's Build <br class="hidden sm:inline">
                            <span class="text-[#00A651]">Your Future Together.</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Need guidance about admissions, courses or career opportunities? Our expert team is here to help you.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#contact-form"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Send Message</span>
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </a>

                            <a href="tel:{{ str_replace(' ', '', $settings['site_phone'] ?? '+91 91409 67607') }}"
                                class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300 px-6 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-2xs flex items-center gap-2 cursor-pointer">
                                <i data-lucide="phone" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Call {{ $settings['site_phone'] ?? 'N/A' }}</span>
                            </a>
                        </div>

                    </div>

                    <!-- Right Column: Larger Responsive Image (Badge Removed) -->
                    <div class="lg:col-span-6 relative w-full">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 group">
                            <img src="{{ asset('images/contact-support.jpg') }}"
                                alt="DigiCoders Academy Support Executive"
                                class="w-full h-auto max-h-[460px] sm:max-h-[500px] object-cover rounded-[6px] group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- OUR CAMPUS & BRANCH LOCATIONS SECTION -->
        <section class="py-14 sm:py-20 bg-slate-50 relative border-b border-slate-200/80">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100/60 border border-emerald-200 text-[#00A651] text-xs font-bold uppercase tracking-wider mb-3">
                        <i data-lucide="building-2" class="w-3.5 h-3.5"></i>
                        <span>Our Office Locations</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Our Campuses & Head Office</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Visit any of our state-of-the-art learning campuses across Uttar Pradesh.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- 1. Lucknow Head Office Card -->
                    @if(!empty($settings['office_lucknow_address']) || !empty($settings['office_lucknow_title']))
                    <div class="p-6 sm:p-8 rounded-[12px] bg-white border border-slate-200 shadow-lg hover:shadow-xl transition-all space-y-4 flex flex-col justify-between relative overflow-hidden group">
                        <div class="absolute top-0 right-0 bg-[#00A651] text-white text-[10px] font-black uppercase px-3 py-1 rounded-bl-lg tracking-wider">
                            Head Office
                        </div>
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0 shadow-inner">
                                <i data-lucide="building" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black text-[#111111] font-heading">{{ $settings['office_lucknow_title'] ?? 'Lucknow Head Office' }}</h3>
                                @if(!empty($settings['office_lucknow_address']))
                                    <p class="text-xs text-[#555555] mt-1 leading-relaxed">
                                        {{ $settings['office_lucknow_address'] }}
                                    </p>
                                @endif
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-slate-100 text-xs text-slate-600">
                                @if(!empty($settings['office_lucknow_phone']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="phone" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                        <span class="font-semibold">{{ $settings['office_lucknow_phone'] }}</span>
                                    </div>
                                @endif
                                @if(!empty($settings['office_lucknow_email']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="mail" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                        <span>{{ $settings['office_lucknow_email'] }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if(!empty($settings['office_lucknow_map_link']))
                        <div class="pt-4">
                            <a href="{{ $settings['office_lucknow_map_link'] }}" target="_blank"
                                class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-[6px] bg-[#00A651] hover:bg-[#008d44] text-white text-xs font-bold transition-all shadow-sm group-hover:shadow-md">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <span>Get Directions / View Map</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    @endif

                    <!-- 2. Gorakhpur Branch Office Card -->
                    @if(!empty($settings['office_gorakhpur_address']) || !empty($settings['office_gorakhpur_title']))
                    <div class="p-6 sm:p-8 rounded-[12px] bg-white border border-slate-200 shadow-lg hover:shadow-xl transition-all space-y-4 flex flex-col justify-between relative overflow-hidden group">
                        <div class="absolute top-0 right-0 bg-[#F58220] text-white text-[10px] font-black uppercase px-3 py-1 rounded-bl-lg tracking-wider">
                            Branch Office
                        </div>
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0 shadow-inner">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black text-[#111111] font-heading">{{ $settings['office_gorakhpur_title'] ?? 'Gorakhpur Branch Office' }}</h3>
                                @if(!empty($settings['office_gorakhpur_address']))
                                    <p class="text-xs text-[#555555] mt-1 leading-relaxed">
                                        {{ $settings['office_gorakhpur_address'] }}
                                    </p>
                                @endif
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-slate-100 text-xs text-slate-600">
                                @if(!empty($settings['office_gorakhpur_phone']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="phone" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                        <span class="font-semibold">{{ $settings['office_gorakhpur_phone'] }}</span>
                                    </div>
                                @endif
                                @if(!empty($settings['office_gorakhpur_email']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="mail" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                        <span>{{ $settings['office_gorakhpur_email'] }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if(!empty($settings['office_gorakhpur_map_link']))
                        <div class="pt-4">
                            <a href="{{ $settings['office_gorakhpur_map_link'] }}" target="_blank"
                                class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-[6px] bg-[#F58220] hover:bg-[#d96f14] text-white text-xs font-bold transition-all shadow-sm group-hover:shadow-md">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <span>Get Directions / View Map</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    @endif

                    <!-- 3. Kanpur Branch Office Card -->
                    @if(!empty($settings['office_kanpur_address']) || !empty($settings['office_kanpur_title']))
                    <div class="p-6 sm:p-8 rounded-[12px] bg-white border border-slate-200 shadow-lg hover:shadow-xl transition-all space-y-4 flex flex-col justify-between relative overflow-hidden group">
                        <div class="absolute top-0 right-0 bg-[#0ea5e9] text-white text-[10px] font-black uppercase px-3 py-1 rounded-bl-lg tracking-wider" style="background-color: #0ea5e9; color: #ffffff;">
                            Branch Office
                        </div>
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 text-[#0ea5e9] flex items-center justify-center shrink-0 shadow-inner" style="background-color: #f0f9ff; color: #0ea5e9;">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black text-[#111111] font-heading">{{ $settings['office_kanpur_title'] ?? 'N/A' }}</h3>
                                @if(!empty($settings['office_kanpur_address']))
                                    <p class="text-xs text-[#555555] mt-1 leading-relaxed">
                                        {{ $settings['office_kanpur_address'] }}
                                    </p>
                                @endif
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-slate-100 text-xs text-slate-600">
                                @if(!empty($settings['office_kanpur_phone']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="phone" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                        <span class="font-semibold">{{ $settings['office_kanpur_phone'] }}</span>
                                    </div>
                                @endif
                                @if(!empty($settings['office_kanpur_email']))
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="mail" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                        <span>{{ $settings['office_kanpur_email'] }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if(!empty($settings['office_kanpur_map_link']))
                        <div class="pt-4">
                            <a href="{{ $settings['office_kanpur_map_link'] }}" target="_blank"
                                class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-[6px] bg-[#0ea5e9] hover:bg-[#0284c7] text-white text-xs font-bold transition-all shadow-sm group-hover:shadow-md" style="background-color: #0ea5e9; color: #ffffff;">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <span>Get Directions / View Map</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    @endif

                </div>

            </div>
        </section>


        <!-- 3️⃣ GET IN TOUCH (Split Layout: Form + Map & Details) -->
        <section id="contact-form" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Get In Touch</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Send us a message and our counsellor will reach out within 2 hours.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- Left: Premium Contact Form (7 cols) -->
                    <div class="lg:col-span-7 p-6 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-xl">

                        {{-- Success / Error Flash Messages --}}
                        @if(session('success'))
                            <div style="background: rgba(0,166,81,0.08); border: 1px solid rgba(0,166,81,0.3); color: #007a3d; padding: 12px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                                <i data-lucide="check-circle" class="w-4 h-4"></i> {{ session('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div style="background: rgba(239,68,68,0.07); border: 1px solid rgba(239,68,68,0.25); color: #dc2626; padding: 12px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; margin-bottom: 20px;">
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="name" required value="{{ old('name') }}" placeholder="Enter your full name"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none {{ $errors->has('name') ? 'border-red-400' : '' }}">
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Phone Number <span class="text-red-500">*</span></label>
                                    <input type="tel" name="phone" id="contactPhone" required value="{{ old('phone') }}"
                                        placeholder="10-digit mobile number" maxlength="10" inputmode="numeric"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none {{ $errors->has('phone') ? 'border-red-400' : '' }}">
                                    <p id="phoneError" class="text-red-500 text-[11px] font-semibold hidden">Must be 10 digits and start with 6, 7, 8, or 9.</p>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="your.email@gmail.com"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none">
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Course Interested In <span class="text-red-500">*</span></label>
                                    <select name="course" class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none">
                                        <option value="" disabled {{ old('course') ? '' : 'selected' }}>Select Course</option>
                                        <option value="DCA (6 Months)"          {{ old('course') === 'DCA (6 Months)'          ? 'selected' : '' }}>DCA (6 Months)</option>
                                        <option value="ADCA (1 Year)"           {{ old('course') === 'ADCA (1 Year)'           ? 'selected' : '' }}>ADCA (1 Year)</option>
                                        <option value="ADWD Web Dev (1 Year)"   {{ old('course') === 'ADWD Web Dev (1 Year)'   ? 'selected' : '' }}>ADWD Web Dev (1 Year)</option>
                                        <option value="ADDM Digital Marketing"  {{ old('course') === 'ADDM Digital Marketing'  ? 'selected' : '' }}>ADDM Digital Marketing (1 Year)</option>
                                        <option value="Advanced Excel & MIS"    {{ old('course') === 'Advanced Excel & MIS'    ? 'selected' : '' }}>Advanced Excel &amp; MIS</option>
                                        <option value="Web Designing UI/UX"     {{ old('course') === 'Web Designing UI/UX'     ? 'selected' : '' }}>Web Designing UI/UX</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-extrabold text-[#111111]">Your City / Location</label>
                                <input type="text" name="city" value="{{ old('city') }}" placeholder="e.g. Lucknow, Kanpur"
                                    class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-xs font-extrabold text-[#111111]">Your Message / Question <span class="text-red-500">*</span></label>
                                <textarea name="message" rows="4" required placeholder="How can we help you?"
                                    class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] outline-none resize-none {{ $errors->has('message') ? 'border-red-400' : '' }}">{{ old('message') }}</textarea>
                            </div>

                            <div class="flex items-center gap-2">
                                <input type="checkbox" id="consent" required class="rounded border-slate-300 text-[#00A651]">
                                <label for="consent" class="text-xs text-[#555555]">I agree to receive course updates &amp; callback from DigiCoders team.</label>
                            </div>

                            <button type="submit" id="contactSubmitBtn"
                                class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-4 rounded-[6px] text-sm font-extrabold transition-all shadow-md cursor-pointer flex items-center justify-center gap-2">
                                <span>Send Message</span>
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </form>

                        <script>
                            (function () {
                                const phoneInput = document.getElementById('contactPhone');
                                const phoneError = document.getElementById('phoneError');
                                const form       = document.getElementById('contactForm');

                                if (phoneInput) {
                                    // Allow only numeric digits
                                    phoneInput.addEventListener('input', function () {
                                        this.value = this.value.replace(/\D/g, '').slice(0, 10);
                                        validatePhone();
                                    });

                                    function validatePhone() {
                                        const val = phoneInput.value.trim();
                                        const isValidPattern = /^[6-9]\d{9}$/.test(val);

                                        if (val.length > 0 && !isValidPattern) {
                                            phoneError.classList.remove('hidden');
                                            phoneInput.style.borderColor = '#f87171';
                                            return false;
                                        } else if (val.length === 0) {
                                            phoneError.classList.add('hidden');
                                            phoneInput.style.borderColor = '';
                                            return false;
                                        } else {
                                            phoneError.classList.add('hidden');
                                            phoneInput.style.borderColor = '';
                                            return true;
                                        }
                                    }

                                    if (form) {
                                        form.addEventListener('submit', function (e) {
                                            const val = phoneInput.value.trim();
                                            if (!/^[6-9]\d{9}$/.test(val)) {
                                                e.preventDefault();
                                                phoneError.classList.remove('hidden');
                                                phoneInput.style.borderColor = '#f87171';
                                                phoneInput.focus();
                                            }
                                        });
                                    }
                                }
                            })();
                        </script>
                    </div>

                    <!-- Right: Google Map & Campus Location Info (5 cols) -->
                    <div class="lg:col-span-5 space-y-6">
                        
                        <!-- Dynamic Google Map Embed -->
                        <div class="w-full h-64 sm:h-72 rounded-[6px] bg-white border border-slate-200/90 shadow-md overflow-hidden relative">
                            @if(!empty($settings['site_map_iframe']))
                                @if(str_contains($settings['site_map_iframe'], '<iframe'))
                                    <div class="w-full h-full [&_iframe]:w-full [&_iframe]:h-full [&_iframe]:border-0">
                                        {!! $settings['site_map_iframe'] !!}
                                    </div>
                                @else
                                    <iframe
                                        src="{{ $settings['site_map_iframe'] }}"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                @endif
                            @elseif(!empty($settings['office_lucknow_map_link']))
                                <iframe
                                    src="{{ $settings['office_lucknow_map_link'] }}"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400 text-xs font-semibold p-4 text-center bg-slate-100">
                                    <span>Map Location Not Configured</span>
                                </div>
                            @endif
                        </div>

                        <!-- Dynamic Contact & Location Details -->
                        <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 space-y-4 text-xs">
                            <!-- 1. Head Office Address -->
                            <div class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#00A651] shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-extrabold text-[#111111]">Academy Head Office</p>
                                    <p class="text-[#555555] mt-0.5 leading-relaxed">{{ $settings['office_lucknow_address'] ?? $settings['site_address'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                            <!-- 2. Helplines & Landline -->
                            <div class="flex items-start gap-3">
                                <i data-lucide="phone-call" class="w-4 h-4 text-[#F58220] shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-extrabold text-[#111111]">Helplines & Contact Numbers</p>
                                    @php
                                        $helplines = array_filter([
                                            $settings['site_phone'] ?? null,
                                            $settings['site_phone_2'] ?? null,
                                            $settings['site_phone_3'] ?? null,
                                        ]);
                                    @endphp
                                    <p class="text-[#555555] mt-0.5 font-semibold">
                                        {{ !empty($helplines) ? implode(' / ', $helplines) : 'N/A' }}
                                    </p>
                                    @if(!empty($settings['site_landline']))
                                        <p class="text-[#555555] mt-0.5 font-medium">Landline: {{ $settings['site_landline'] }}</p>
                                    @endif
                                    @if(!empty($settings['site_whatsapp']))
                                        <p class="text-[#00A651] mt-0.5 font-semibold">WhatsApp: {{ $settings['site_whatsapp'] }}</p>
                                    @endif
                                </div>
                            </div>

                            <!-- 3. Emails & Hours -->
                            <div class="flex items-start gap-3">
                                <i data-lucide="mail" class="w-4 h-4 text-[#0ea5e9] shrink-0 mt-0.5"></i>
                                <div>
                                    <p class="font-extrabold text-[#111111]">Support Email & Hours</p>
                                    @php
                                        $emails = array_filter([
                                            $settings['site_email'] ?? null,
                                            $settings['site_email_2'] ?? null,
                                        ]);
                                    @endphp
                                    <p class="text-[#555555] mt-0.5">
                                        {{ !empty($emails) ? implode(' / ', $emails) : 'N/A' }}
                                    </p>
                                    <p class="text-[#555555] mt-0.5 font-medium">Working Hours: {{ $settings['site_working_hours'] ?? 'N/A' }}</p>
                                </div>
                            </div>

                           
                        </div>

                    </div>

                </div>

            </div>
        </section>





        <!-- 6️⃣ WHY CONTACT DIGICODERS (4 Cards) -->
        <section id="why-contact" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Why Connect With Us?</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md text-center space-y-3">
                        <i data-lucide="compass" class="w-8 h-8 text-[#00A651] mx-auto"></i>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Career Counselling</h3>
                        <p class="text-xs text-[#555555]">Clear career guidance to pick the right diploma course.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md text-center space-y-3">
                        <i data-lucide="user-check" class="w-8 h-8 text-[#F58220] mx-auto"></i>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Admission Support</h3>
                        <p class="text-xs text-[#555555]">Hassle-free document verification & fee installment setup.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md text-center space-y-3">
                        <i data-lucide="book-open" class="w-8 h-8 text-blue-600 mx-auto"></i>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Course Guidance</h3>
                        <p class="text-xs text-[#555555]">Detailed syllabus breakdown & batch timing options.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md text-center space-y-3">
                        <i data-lucide="award" class="w-8 h-8 text-purple-600 mx-auto"></i>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Placement Assistance</h3>
                        <p class="text-xs text-[#555555]">Information about campus placement drives & corporate tie-ups.</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 7️⃣ FREQUENTLY ASKED QUESTIONS -->
        <section id="faq" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Frequently Asked Questions</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    @forelse($faqs ?? [] as $index => $fItem)
                    @if(!empty($fItem) && (is_object($fItem) || is_array($fItem)))
                    <div class="rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 overflow-hidden shadow-2xs">
                        <button onclick="toggleFaq('cnt-{{ data_get($fItem, 'id') }}')" class="w-full p-5 text-left flex items-center justify-between font-extrabold text-sm text-[#111111] font-heading cursor-pointer">
                            <span>{{ data_get($fItem, 'question') }}</span>
                            <i data-lucide="chevron-down" id="faq-icon-cnt-{{ data_get($fItem, 'id') }}" class="w-4 h-4 text-[#F58220] transition-transform duration-300"></i>
                        </button>
                        <div id="faq-ans-cnt-{{ data_get($fItem, 'id') }}" class="hidden px-5 pb-5 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-200/60 pt-3">
                            {{ data_get($fItem, 'answer') }}
                        </div>
                    </div>
                    @endif
                    @empty
                    <div class="p-6 text-center text-xs text-slate-400">No contact FAQs available right now.</div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- 8️⃣ FINAL CTA (Large Premium Glass Section) -->
        <section id="final-cta" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="relative rounded-[6px] bg-white border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 max-w-4xl mx-auto shadow-xl">
                    <div class="space-y-3">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                            TAKE THE FIRST STEP
                        </span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#111111]">Ready To Start Your Journey?</h2>
                        <p class="text-xs sm:text-sm text-[#555555]">Connect with DigiCoders Academy today and transform your career.</p>
                    </div>

                    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="{{ route('admissions') }}"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-8 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md cursor-pointer inline-block">
                            Apply Now
                        </a>
                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all cursor-pointer inline-block">
                            Talk to Expert
                        </a>
                        <a href="tel:{{ str_replace(' ', '', $settings['site_phone'] ?? '9140967607') }}"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md cursor-pointer inline-block">
                            Call Now ({{ $settings['site_phone'] ?? '+91 91409 67607' }})
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <script>
        function toggleFaq(id) {
            const ans = document.getElementById(`faq-ans-${id}`);
            const icon = document.getElementById(`faq-icon-${id}`);
            if (ans.classList.contains('hidden')) {
                ans.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                ans.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>
