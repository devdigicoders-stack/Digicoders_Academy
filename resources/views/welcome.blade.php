<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>DigiCoders Academy | Best Computer & IT Software Training Institute in Lucknow | 100% Placement</title>
    <meta name="title" content="DigiCoders Academy | Best Computer & IT Software Training Institute in Lucknow">
    <meta name="description"
        content="DigiCoders Academy is the top computer institute & software training center in Lucknow. Learn Web Development, Python, Full Stack MERN, Java, DCA, ADCA, Digital Marketing & Data Science with live project training and 100% placement support.">
    <meta name="keywords"
        content="DigiCoders Academy, Best Computer Institute in Lucknow, Software Training Institute in Lucknow, IT Training Institute Lucknow, Web Development Course in Lucknow, Python Training in Lucknow, Full Stack Developer Course Lucknow, DCA Course Lucknow, ADCA Course Lucknow, ADWD Course, ADDM Course, Digital Marketing Institute in Lucknow, Summer Training Lucknow, Industrial Training Lucknow, 6 Months Internship Lucknow, Advanced Excel Course Lucknow, MERN Stack Course Lucknow, Java Training Lucknow, Computer Coaching near me, Best IT Coaching Lucknow">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="author" content="DigiCoders Technologies Pvt. Ltd.">
    <meta name="publisher" content="DigiCoders Academy">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="General">

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn Link Sharing Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DigiCoders Academy | Best Computer & IT Software Training Institute in Lucknow">
    <meta property="og:description"
        content="DigiCoders Academy is Lucknow's premier IT & Software Training Institute. Learn Web Development, Python, Full Stack MERN, Java, DCA, ADCA, Digital Marketing & Data Science with 100% placement support.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/logo.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="DigiCoders Academy Lucknow - A Unit of DigiCoders Technologies">
    <meta property="og:site_name" content="DigiCoders Academy">
    <meta property="og:locale" content="en_US">
    <link rel="image_src" href="{{ asset('images/logo.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="DigiCoders Academy | Best IT & Computer Training Institute Lucknow">
    <meta name="twitter:description"
        content="Join DigiCoders Academy Lucknow for top job-oriented tech courses: Web Development, Python, MERN Stack, ADCA, DCA & Digital Marketing with 100% Placement.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Local & Geo SEO Tags (Lucknow, UP, India) -->
    <meta name="geo.region" content="IN-UP">
    <meta name="geo.placename" content="Lucknow">
    <meta name="geo.position" content="26.8467;80.9462">
    <meta name="ICBM" content="26.8467, 80.9462">

    <!-- Schema.org JSON-LD Structured Data for Google Search -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "EducationalOrganization",
          "@@id": "https://digicodersacademy.com#organization",
          "name": "DigiCoders Academy",
          "legalName": "DigiCoders Technologies Pvt. Ltd.",
          "url": "https://digicodersacademy.com",
          "logo": "{{ asset('images/logo.png') }}",
          "image": "{{ asset('images/hero-bg.png') }}",
          "description": "DigiCoders Academy is Lucknow's leading IT & Software Training Institute offering job-oriented training in Web Development, Full Stack Development, Python, DCA, ADCA, and Digital Marketing with 100% placement assistance.",
          "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Lucknow",
            "addressRegion": "Uttar Pradesh",
            "addressCountry": "IN"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": "26.8467",
            "longitude": "80.9462"
          },
          "telephone": "+91-9140967607",
          "priceRange": "₹₹",
          "sameAs": [
            "https://digiacademy.in",
            "https://www.facebook.com/digicodersacademy",
            "https://www.instagram.com/digicodersacademy",
            "https://www.linkedin.com/company/digicoders"
          ]
        },
        {
          "@@type": "WebSite",
          "@@id": "https://digicodersacademy.com#website",
          "url": "https://digicodersacademy.com",
          "name": "DigiCoders Academy",
          "alternateName": "DigiAcademy",
          "publisher": {
            "@@id": "https://digicodersacademy.com#organization"
          },
          "potentialAction": {
            "@@type": "SearchAction",
            "target": "https://digicodersacademy.com/courses?search={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>

    <!-- Favicon -->
    @if(!empty($settings['site_favicon']))
        <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    @endif
    @if(!empty($settings['site_favicon_ico']))
        <link rel="shortcut icon" href="{{ asset($settings['site_favicon_ico']) }}" type="image/x-icon">
    @endif

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Swiper.js Slider CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#F4F7FB] text-[#18181B] font-body selection:bg-[#F58220] selection:text-white antialiased relative min-h-screen">



    <!-- HEADER LAYOUT INCLUDE (Fixed on top of background image) -->
    @include('layouts.header')

    <!-- MAIN CONTENT -->
    <main class="relative z-10">

        <!-- 1. LUXURY HERO SECTION (BACKGROUND EXTENDS ALL THE WAY TO TOP 0PX BEHIND TOPBAR & NAVBAR) -->
        <section id="hero"
            class="relative w-full min-h-screen lg:h-[100vh] flex flex-col justify-between pt-[122px] sm:pt-[145px] pb-5 overflow-hidden bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/hero-bg.png') }}');">

            <!-- 1400px Main Container -->
            <div
                class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 h-full flex flex-col justify-between flex-1">

                <!-- Top Split Grid: 45% Left Content | 55% Right Visual -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center flex-1">

                    <!-- LEFT CONTENT (45% Width -> 5 columns, perfectly below floating navbar) -->
                    <div class="lg:col-span-5 space-y-3 sm:space-y-4 pt-1 sm:pt-2">

                        <!-- Small Badge: Admissions Open 2026 -->
                        <div
                            class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-1 rounded-[6px] bg-white/85 backdrop-blur-md border border-white/90 shadow-xs text-[10px] sm:text-[11px] font-semibold">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span class="text-[#18181B] font-bold uppercase tracking-wider">{{ $settings['home_hero_badge'] ?? 'Admissions Open 2026' }}</span>
                        </div>

                        <!-- Huge Heading: Build Skills That Build Careers. -->
                        <h1
                            class="text-3xl sm:text-4xl lg:text-[50px] font-bold text-[#18181B] font-heading tracking-tight leading-[1.08] sm:leading-[1.06]">
                            {!! $settings['home_hero_title'] ?? 'Build Skills <br class="hidden sm:block"> That Build <span class="text-[#00A651]">Careers.</span>' !!}
                        </h1>

                        <!-- Short Description -->
                        <p class="text-xs sm:text-sm text-[#64748B] font-medium max-w-lg leading-relaxed">
                            {{ $settings['home_hero_subtitle'] ?? 'Join DigiCoders Academy for industry-focused diploma programmes with practical learning, experienced trainers and recognised certification.' }}
                        </p>

                        <!-- 3 Action Buttons (Glass Style Mobile Friendly) -->
                        <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 pt-1">
                            <!-- Apply Now -->
                            <a href="{{ route('admissions') }}"
                                class="btn-glass-primary px-4 sm:px-5 py-2.5 sm:py-3 rounded-full text-xs font-bold flex items-center gap-1.5 cursor-pointer">
                                <span>Apply Now</span>
                                <i data-lucide="arrow-right" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                            </a>

                            <!-- Download Brochure -->
                            <button onclick="openModal('brochureModal')"
                                class="btn-glass-secondary px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-full text-xs font-bold flex items-center gap-1.5 cursor-pointer">
                                <span>Brochure</span>
                                <i data-lucide="download" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#00A651]"></i>
                            </button>

                            <!-- Book Free Counselling -> Talk to Expert -->
                            <a href="{{ route('contact') }}"
                                class="btn-glass-secondary px-3.5 sm:px-4 py-2.5 sm:py-3 rounded-full text-xs font-bold flex items-center gap-1.5 cursor-pointer">
                                <i data-lucide="sparkles" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-[#F58220]"></i>
                                <span>Talk to Expert</span>
                            </a>
                        </div>

                        <!-- 4 Feature Pills (Glass Capsules) -->
                        <div
                            class="flex flex-wrap items-center gap-1.5 sm:gap-2 pt-2 text-[10px] sm:text-[11px] font-semibold text-[#18181B]">
                            <div
                                class="px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-[6px] bg-white/75 backdrop-blur-md border border-white/90 shadow-xs flex items-center gap-1.5">
                                <i data-lucide="target" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                <span>Industry Curriculum</span>
                            </div>
                            <div
                                class="px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-[6px] bg-white/75 backdrop-blur-md border border-white/90 shadow-xs flex items-center gap-1.5">
                                <i data-lucide="laptop" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                <span>Live Projects</span>
                            </div>
                            <div
                                class="px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-[6px] bg-white/75 backdrop-blur-md border border-white/90 shadow-xs flex items-center gap-1.5">
                                <i data-lucide="handshake" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                <span>Placement Support</span>
                            </div>
                            <div
                                class="px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-[6px] bg-white/75 backdrop-blur-md border border-white/90 shadow-xs flex items-center gap-1.5">
                                <i data-lucide="award" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                <span>Recognized Certification</span>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT VISUAL (55% Width -> 7 columns with Stationary Student Visual) -->
                    <div
                        class="lg:col-span-7 relative h-[320px] sm:h-[420px] lg:h-[450px] flex items-end justify-center">

                        <!-- CENTER CIRCLE RINGS BEHIND STUDENTS -->
                        <!-- 1. Center Frosted Circle Ring -->
                        <div
                            class="absolute w-[260px] h-[260px] sm:w-[400px] sm:h-[400px] lg:w-[430px] lg:h-[430px] rounded-full bg-white/45 backdrop-blur-2xl border border-white/80 shadow-inner top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none z-0">
                        </div>

                        <!-- 2. Thin Dashed Orbit Ring -->
                        <div
                            class="absolute w-[300px] h-[300px] sm:w-[460px] sm:h-[460px] lg:w-[490px] lg:h-[490px] rounded-full border-2 border-dashed border-white/80 animate-spin-slow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none z-0">
                        </div>

                        <!-- MAIN STUDENTS TRANSPARENT PNG IMAGE (Stationary / Fixed, no floating motion!) -->
                        <div class="relative z-10 h-[95%] lg:h-[98%] flex items-end justify-center">
                            <img src="{{ asset('images/students.png') }}" alt="DigiCoders Academy Successful Students"
                                class="h-full w-auto object-contain drop-shadow-[0_20px_30px_rgba(0,0,0,0.12)]">
                        </div>

                        <!-- 5 FLOATING BADGES ARRANGED IN A PERFECT CIRCULAR ORBIT SAFELY BELOW NAVBAR -->

                        <!-- Card 1: 100+ Live Projects (Top-Left 10 o'clock position) -->
                        <div
                            class="absolute top-1 left-0 sm:left-4 lg:left-6 z-20 glass-hero-card p-2 sm:p-3 rounded-[18px] sm:rounded-[22px] flex items-center gap-1.5 sm:gap-2 animate-float shadow-lg">
                            <div
                                class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg sm:rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                <i data-lucide="laptop" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                            </div>
                            <div>
                                <p class="text-[11px] sm:text-xs font-black text-[#18181B] font-heading leading-tight">
                                    100+</p>
                                <p class="text-[8px] sm:text-[9px] font-semibold text-[#64748B]">Live Projects</p>
                            </div>
                        </div>

                        <!-- Card 2: 50+ Expert Trainers (Top-Right 2 o'clock position) -->
                        <div
                            class="absolute top-2 right-0 sm:right-4 lg:right-6 z-20 glass-hero-card p-2 sm:p-3 rounded-[18px] sm:rounded-[22px] flex items-center gap-1.5 sm:gap-2 animate-float-reverse shadow-lg">
                            <div
                                class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg sm:rounded-xl bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                <i data-lucide="award" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                            </div>
                            <div>
                                <p class="text-[11px] sm:text-xs font-black text-[#18181B] font-heading leading-tight">
                                    50+</p>
                                <p class="text-[8px] sm:text-[9px] font-semibold text-[#64748B]">Expert Trainers</p>
                            </div>
                        </div>

                        <!-- Card 3: 5000+ Students Trained (Mid-Left 9 o'clock position) -->
                        <div
                            class="absolute top-[42%] -left-2 sm:-left-2 lg:left-0 -translate-y-1/2 z-20 glass-hero-card p-2 sm:p-3 rounded-[18px] sm:rounded-[22px] animate-float shadow-lg">
                            <p class="text-[11px] sm:text-xs font-black text-[#F58220] font-heading leading-tight">5000+
                            </p>
                            <p class="text-[8px] sm:text-[9px] font-semibold text-[#64748B]">Students Trained</p>
                        </div>

                        <!-- Card 4: 95% Placement Support (Bottom-Left 7 o'clock position) -->
                        <div
                            class="absolute bottom-6 left-0 sm:left-4 lg:left-6 z-20 glass-hero-card p-2 sm:p-3 rounded-[18px] sm:rounded-[22px] flex items-center gap-1.5 sm:gap-2 animate-float-reverse shadow-lg">
                            <div
                                class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg sm:rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                <i data-lucide="trending-up" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                            </div>
                            <div>
                                <p class="text-[11px] sm:text-xs font-black text-[#18181B] font-heading leading-tight">
                                    95%</p>
                                <p class="text-[8px] sm:text-[9px] font-semibold text-[#64748B]">Placement Support</p>
                            </div>
                        </div>

                        <!-- Card 5: 100% Practical Learning (Bottom-Right 5 o'clock position) -->
                        <div
                            class="absolute bottom-8 right-0 sm:right-4 lg:right-6 z-20 glass-hero-card p-2 sm:p-3 rounded-[18px] sm:rounded-[22px] flex items-center gap-1.5 sm:gap-2 animate-float shadow-lg">
                            <div
                                class="w-6 h-6 sm:w-8 sm:h-8 rounded-lg sm:rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                            </div>
                            <div>
                                <p class="text-[11px] sm:text-xs font-black text-[#18181B] font-heading leading-tight">
                                    100%</p>
                                <p class="text-[8px] sm:text-[9px] font-semibold text-[#64748B]">Practical Learning</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- BOTTOM STATISTICS FLOATING GLASS PANEL (TOUCHING STUDENTS FEET + SHINING GLASS BORDER & BLUR) -->
                <div class="-mt-4 relative z-20">
                    <div
                        class="p-3 sm:p-4 rounded-[6px] bg-white/80 backdrop-blur-2xl border-2 border-white/90 shadow-[0_20px_50px_rgba(0,166,81,0.12),0_0_30px_rgba(255,255,255,0.9)]">
                        <div
                            class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 divide-y md:divide-y-0 md:divide-x divide-black/5">

                            <!-- Stat 1: 5000+ Students -->
                            <div class="flex items-center justify-center gap-2.5 sm:gap-3 pt-1 md:pt-0">
                                <div
                                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="users" class="w-4 h-4 sm:w-4.5 sm:h-4.5"></i>
                                </div>
                                <div>
                                    <p class="text-lg sm:text-2xl font-black text-[#18181B] font-heading">5000+</p>
                                    <p class="text-[10px] sm:text-[11px] font-semibold text-[#64748B]">Students</p>
                                </div>
                            </div>

                            <!-- Stat 2: 50+ Expert Trainers -->
                            <div class="flex items-center justify-center gap-2.5 sm:gap-3 pt-1.5 md:pt-0">
                                <div
                                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="user-check" class="w-4 h-4 sm:w-4.5 sm:h-4.5"></i>
                                </div>
                                <div>
                                    <p class="text-lg sm:text-2xl font-black text-[#18181B] font-heading">50+</p>
                                    <p class="text-[10px] sm:text-[11px] font-semibold text-[#64748B]">Expert Trainers
                                    </p>
                                </div>
                            </div>

                            <!-- Stat 3: 95% Placement -->
                            <div class="flex items-center justify-center gap-2.5 sm:gap-3 pt-1.5 md:pt-0">
                                <div
                                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="line-chart" class="w-4 h-4 sm:w-4.5 sm:h-4.5"></i>
                                </div>
                                <div>
                                    <p class="text-lg sm:text-2xl font-black text-[#18181B] font-heading">95%</p>
                                    <p class="text-[10px] sm:text-[11px] font-semibold text-[#64748B]">Placement</p>
                                </div>
                            </div>

                            <!-- Stat 4: 10+ Years -->
                            <div class="flex items-center justify-center gap-2.5 sm:gap-3 pt-1.5 md:pt-0">
                                <div
                                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="award" class="w-4 h-4 sm:w-4.5 sm:h-4.5"></i>
                                </div>
                                <div>
                                    <p class="text-lg sm:text-2xl font-black text-[#18181B] font-heading">10+</p>
                                    <p class="text-[10px] sm:text-[11px] font-semibold text-[#64748B]">Years</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- 2. WHY CHOOSE DIGICODERS ACADEMY -->
        <section id="why-us" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                <!-- Left Column Header -->
                <div class="lg:col-span-4 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#64748B]">WHY CHOOSE</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#18181B] font-heading leading-tight">
                        Digi<span class="text-[#00A651]">Coders</span> <span class="text-[#F58220]">Academy?</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-[#64748B] leading-relaxed">
                        We provide the perfect environment to learn, grow and build a successful career in the digital
                        world.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('about') }}"
                            class="btn-outline-green px-5 py-2.5 rounded-full text-xs font-bold inline-flex items-center gap-2 cursor-pointer">
                            <span>Know More About Us</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column (4 Cards in 4-col Grid) -->
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                    <!-- Feature Card 1 -->
                    <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-50 text-[#F58220] flex items-center justify-center mb-4">
                                <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                            </div>
                            <h3 class="text-sm font-bold text-[#18181B] font-heading mb-2">Expert Faculty</h3>
                            <p class="text-[11px] text-[#64748B] leading-relaxed">
                                Learn from industry professionals with real-world experience.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center mb-4">
                                <i data-lucide="code" class="w-5 h-5"></i>
                            </div>
                            <h3 class="text-sm font-bold text-[#18181B] font-heading mb-2">Live Projects</h3>
                            <p class="text-[11px] text-[#64748B] leading-relaxed">
                                Work on real-time projects and build strong portfolios.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center mb-4">
                                <i data-lucide="briefcase" class="w-5 h-5"></i>
                            </div>
                            <h3 class="text-sm font-bold text-[#18181B] font-heading mb-2">Placement Support</h3>
                            <p class="text-[11px] text-[#64748B] leading-relaxed">
                                100% placement assistance and career guidance.
                            </p>
                        </div>
                    </div>

                    <!-- Feature Card 4 -->
                    <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-50 text-[#00A651] flex items-center justify-center mb-4">
                                <i data-lucide="monitor" class="w-5 h-5"></i>
                            </div>
                            <h3 class="text-sm font-bold text-[#18181B] font-heading mb-2">Modern Labs</h3>
                            <p class="text-[11px] text-[#64748B] leading-relaxed">
                                Well-equipped labs with latest software and technology.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 3. FEATURED COURSES SECTION -->
        <section id="courses" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-12">

            <!-- Header Bar -->
            <div class="flex items-end justify-between gap-4 mb-8">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#64748B]">OUR COURSES</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-[#18181B] font-heading tracking-tight mt-1">
                        Industry-Focused <span class="text-[#F58220]">Diploma</span> <span
                            class="text-[#00A651]">Courses</span>
                    </h2>
                </div>
                <button onclick="openModal('applyModal')"
                    class="ref-pill px-4 py-2 rounded-full text-xs font-bold text-[#00A651] hover:bg-emerald-50 flex items-center gap-1.5 cursor-pointer">
                    <span>View All Courses</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </button>
            </div>

            <!-- 6 Course Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4">

                <!-- Course 1: DCA -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/dca.jpg') }}"
                                alt="DCA" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#F58220] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">6
                                MONTHS</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">DCA</h3>
                            <p class="text-[10px] text-[#64748B] leading-tight">Diploma in Computer Applications</p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Duration: 6 Months</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Eligibility: 10th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.dca') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 2: Advanced Excel & MIS -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/advanceexel.jpg') }}"
                                alt="Advanced Excel" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#F58220] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">6
                                MONTHS</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">Advanced Excel &
                                MIS</h3>
                            <p class="text-[10px] text-[#64748B] opacity-0">Filler</p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Duration: 6 Months</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Eligibility: 10th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.excel-mis') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 3: Web Designing -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/webdesign.jpg') }}"
                                alt="Web Designing" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#F58220] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">6
                                MONTHS</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">Web Designing</h3>
                            <p class="text-[10px] text-[#64748B] opacity-0">Filler</p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Duration: 6 Months</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Eligibility: 10th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.web-designing') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 4: ADCA -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/adca.jpg') }}"
                                alt="ADCA" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#00A651] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">1
                                YEAR</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">ADCA</h3>
                            <p class="text-[10px] text-[#64748B] leading-tight">Advanced Diploma in Computer
                                Applications</p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Duration: 1 Year</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Eligibility: 12th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.adca') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 5: ADWD -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/adwd.jpg') }}"
                                alt="ADWD" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#00A651] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">1
                                YEAR</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">ADWD</h3>
                            <p class="text-[10px] text-[#64748B] leading-tight">Advanced Diploma in Web Designing</p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Duration: 1 Year</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Eligibility: 12th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.adwd') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Course 6: ADDM -->
                <div class="ref-card rounded-2xl bg-white overflow-hidden ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/courses/addm.jpg') }}"
                                alt="ADDM" class="w-full h-full object-cover">
                            <span
                                class="absolute top-2 left-2 bg-[#00A651] text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md">1
                                YEAR</span>
                        </div>
                        <div class="p-4 space-y-3">
                            <h3 class="text-sm font-black text-[#18181B] font-heading leading-tight">ADDM</h3>
                            <p class="text-[10px] text-[#64748B] leading-tight">Advanced Diploma in Digital Marketing
                            </p>

                            <div class="space-y-1 pt-1 text-[10px] text-[#64748B] font-medium">
                                <p class="flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Duration: 1 Year</span>
                                </p>
                                <p class="flex items-center gap-1">
                                    <i data-lucide="check-circle" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>Eligibility: 12th Pass</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2">
                        <a href="{{ route('courses.addm') }}"
                            class="text-xs font-bold text-[#18181B] hover:text-[#00A651] flex items-center gap-1 cursor-pointer">
                            <span>Know More</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- 4. LEARNING JOURNEY TIMELINE -->
        <section id="journey" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-16">

            <div class="text-center mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-[#F58220]">◆ LEARNING JOURNEY ◆</span>
            </div>

            <!-- Steps Container -->
            <div class="relative">

                <!-- Dotted Line Connection Background -->
                <div
                    class="hidden lg:block absolute top-7 left-[8%] right-[8%] h-0.5 border-b-2 border-dashed border-slate-300 z-0">
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 relative z-10 text-center">

                    <!-- Step 1 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#F58220] transition-all">
                            <i data-lucide="edit-3" class="w-6 h-6 text-[#F58220]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#F58220]">01</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Enroll</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Choose your course and
                            enroll easily.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#F58220] transition-all">
                            <i data-lucide="book-open" class="w-6 h-6 text-[#F58220]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#F58220]">02</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Learn</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Learn from experts and
                            gain skills.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#F58220] transition-all">
                            <i data-lucide="monitor-play" class="w-6 h-6 text-[#F58220]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#F58220]">03</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Practice</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Work on projects and
                            assignments.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#00A651] transition-all">
                            <i data-lucide="rocket" class="w-6 h-6 text-[#00A651]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#00A651]">04</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Project</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Build real-world live
                            projects.</p>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#00A651] transition-all">
                            <i data-lucide="award" class="w-6 h-6 text-[#00A651]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#00A651]">05</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Certificate</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Get certified and stand
                            out.</p>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex flex-col items-center group">
                        <div
                            class="w-14 h-14 rounded-2xl bg-white border border-slate-200 shadow-md flex items-center justify-center mb-3 group-hover:border-[#00A651] transition-all">
                            <i data-lucide="briefcase" class="w-6 h-6 text-[#00A651]"></i>
                        </div>
                        <span class="text-xs font-bold text-[#00A651]">06</span>
                        <h3 class="text-sm font-bold text-[#18181B] font-heading mt-1">Career</h3>
                        <p class="text-[10px] text-[#64748B] mt-1 leading-tight max-w-[130px]">Get placed and build your
                            career.</p>
                    </div>

                </div>
            </div>

        </section>

        <!-- 5. PLACEMENTS & CAREER OUTCOMES (Dark Slate Card) -->
        <section id="placements" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-12">

            <div class="bg-[#1E293B] text-white rounded-[6px] p-8 sm:p-12 relative overflow-hidden shadow-2xl">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">

                    <!-- Left Section Text -->
                    <div class="lg:col-span-5 space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#F58220]">PLACEMENTS & CAREER
                            OUTCOMES</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold font-heading leading-tight">
                            We Don't Just Teach, We Help You <span class="text-[#00A651]">Get Placed</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                            Our strong industry tie-ups and placement support help students build successful careers.
                        </p>
                        <div class="pt-2">
                            <button onclick="openModal('applyModal')"
                                class="btn-orange px-6 py-3.5 rounded-[6px] text-xs font-bold flex items-center gap-2 cursor-pointer">
                                <span>View Success Stories</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Middle 2x2 Grid Stats Cards -->
                    <div class="lg:col-span-4 grid grid-cols-2 gap-4">

                        <!-- Card 1: Highest Package -->
                        <div
                            class="bg-white/10 backdrop-blur-md p-4 rounded-[6px] border border-white/10 flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] font-medium text-slate-300">Highest Package</p>
                                <p class="text-xl sm:text-2xl font-black font-heading mt-1 text-white">₹6.5 LPA</p>
                            </div>
                            <div class="self-end mt-2">
                                <i data-lucide="trending-up" class="w-5 h-5 text-[#00A651]"></i>
                            </div>
                        </div>

                        <!-- Card 2: Average Package -->
                        <div
                            class="bg-white/10 backdrop-blur-md p-4 rounded-[6px] border border-white/10 flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] font-medium text-slate-300">Average Package</p>
                                <p class="text-xl sm:text-2xl font-black font-heading mt-1 text-white">₹3.2 LPA</p>
                            </div>
                            <div class="self-end mt-2">
                                <i data-lucide="trending-up" class="w-5 h-5 text-[#F58220]"></i>
                            </div>
                        </div>

                        <!-- Card 3: Students Placed -->
                        <div
                            class="bg-white/10 backdrop-blur-md p-4 rounded-[6px] border border-white/10 flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] font-medium text-slate-300">Students Placed</p>
                                <p class="text-xl sm:text-2xl font-black font-heading mt-1 text-white">1000+</p>
                            </div>
                            <div class="self-end mt-2">
                                <i data-lucide="users" class="w-5 h-5 text-[#F58220]"></i>
                            </div>
                        </div>

                        <!-- Card 4: Placement Rate -->
                        <div
                            class="bg-white/10 backdrop-blur-md p-4 rounded-[6px] border border-white/10 flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] font-medium text-slate-300">Placement Rate</p>
                                <p class="text-xl sm:text-2xl font-black font-heading mt-1 text-white">95%</p>
                            </div>
                            <div class="self-end mt-2">
                                <i data-lucide="pie-chart" class="w-5 h-5 text-[#00A651]"></i>
                            </div>
                        </div>

                    </div>

                    <!-- Right Visual Image (SVG Illustration) -->
                    <div class="lg:col-span-3 flex justify-center lg:justify-end">
                        <img src="{{ asset('images/Study Abroad.svg') }}"
                            alt="Placed Student"
                            class="w-full max-w-[280px] h-auto object-contain rounded-[6px]">
                    </div>

                </div>

            </div>
        </section>

        <!-- 6. STUDENT TESTIMONIALS -->
        <section id="testimonials" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-12">

            <div class="flex items-end justify-between mb-8">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#64748B]">STUDENT TESTIMONIALS</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-[#18181B] font-heading tracking-tight mt-1">
                        Trusted by <span class="text-[#00A651]">Thousands</span> of Students
                    </h2>
                </div>

                <div class="flex items-center gap-2">
                    <button
                        class="w-9 h-9 rounded-full bg-white border border-slate-200 flex items-center justify-center text-[#18181B] hover:bg-slate-50 cursor-pointer">
                        <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                    <button
                        class="w-9 h-9 rounded-full bg-white border border-slate-200 flex items-center justify-center text-[#18181B] hover:bg-slate-50 cursor-pointer">
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <!-- 4 Review Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                <!-- Review 1 -->
                <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-1 text-[#F58220] text-xs mb-3">
                            ★★★★★
                        </div>
                        <p class="text-xs text-[#64748B] leading-relaxed mb-6">
                            DigiCoders Academy provided me the perfect platform to learn, grow and achieve my career
                            goals.
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-200 text-[#18181B] font-bold text-xs flex items-center justify-center">
                            AV</div>
                        <div>
                            <h4 class="text-xs font-bold text-[#18181B]">Ankit Verma</h4>
                            <p class="text-[10px] text-[#64748B]">ADCA Graduate</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-1 text-[#F58220] text-xs mb-3">
                            ★★★★★
                        </div>
                        <p class="text-xs text-[#64748B] leading-relaxed mb-6">
                            The faculty is very supportive and the practical training helped me a lot in my placement.
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-200 text-[#18181B] font-bold text-xs flex items-center justify-center">
                            PS</div>
                        <div>
                            <h4 class="text-xs font-bold text-[#18181B]">Priya Singh</h4>
                            <p class="text-[10px] text-[#64748B]">Web Designing Student</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div
                    class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between border-emerald-200">
                    <div>
                        <div class="flex items-center gap-1 text-[#F58220] text-xs mb-3">
                            ★★★★★
                        </div>
                        <p class="text-xs font-bold text-[#18181B] leading-relaxed mb-6">
                            Best institute for diploma courses, I got placed in a reputed MNC.
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                        <div
                            class="w-8 h-8 rounded-full bg-emerald-100 text-[#00A651] font-bold text-xs flex items-center justify-center">
                            RY</div>
                        <div>
                            <h4 class="text-xs font-bold text-[#18181B]">Rahul Yadav</h4>
                            <p class="text-[10px] text-[#00A651] font-semibold">DCA Graduate</p>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="ref-card p-5 rounded-2xl bg-white ref-card-hover flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-1 text-[#F58220] text-xs mb-3">
                            ★★★★★
                        </div>
                        <p class="text-xs text-[#64748B] leading-relaxed mb-6">
                            Excellent environment, advanced labs and great placement support.
                        </p>
                    </div>
                    <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-200 text-[#18181B] font-bold text-xs flex items-center justify-center">
                            NS</div>
                        <div>
                            <h4 class="text-xs font-bold text-[#18181B]">Neha Sharma</h4>
                            <p class="text-[10px] text-[#64748B]">ADDM Student</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 7. LIFE AT DIGICODERS ACADEMY (CAMPUS GALLERY) -->
        <section id="gallery" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-12">

            <!-- Gallery Header Bar with Top-Right "VIEW ALL GALLERY" Button -->
            <div class="flex items-end justify-between gap-4 mb-8">
                <div>
                    <span class="text-xs font-black uppercase tracking-wider text-[#64748B]">
                        CAMPUS <span class="text-[#00A651]">GALLERY</span>
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-[#18181B] font-heading tracking-tight mt-1">
                        Life at <span class="text-[#F58220]">DigiCoders</span> <span class="text-[#00A651]">Academy</span>
                    </h2>
                </div>

                <button onclick="openModal('applyModal')"
                    class="px-5 py-2.5 rounded-[6px] border-2 border-[#00A651]/40 text-[#18181B] hover:border-[#F58220] hover:text-[#F58220] transition-colors text-xs font-extrabold uppercase tracking-wider flex items-center gap-2 cursor-pointer bg-white shadow-xs shrink-0">
                    <span>VIEW ALL GALLERY</span>
                    <i data-lucide="arrow-right" class="w-4 h-4 text-[#F58220]"></i>
                </button>
            </div>

            <!-- 5 Image Cards Grid (Exact 5 Images Row) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

                <!-- Image 1: Computer Lab -->
                <div class="ref-card rounded-[6px] overflow-hidden aspect-4/3 bg-slate-100 group shadow-md">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=600&q=80"
                        alt="Computer Lab DigiCoders Academy"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Image 2: Certificate Distribution -->
                <div class="ref-card rounded-[6px] overflow-hidden aspect-4/3 bg-slate-100 group shadow-md">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80"
                        alt="Certificate Distribution"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Image 3: High-Tech Lab -->
                <div class="ref-card rounded-[6px] overflow-hidden aspect-4/3 bg-slate-100 group shadow-md">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80"
                        alt="High Tech Lab"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Image 4: Practical Coding Session -->
                <div class="ref-card rounded-[6px] overflow-hidden aspect-4/3 bg-slate-100 group shadow-md">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80"
                        alt="Practical Coding Session"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Image 5: Campus Event & Team Celebration -->
                <div class="ref-card rounded-[6px] overflow-hidden aspect-4/3 bg-slate-100 group shadow-md">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80"
                        alt="Campus Event & Celebration"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

            </div>
        </section>

        <!-- 12. UPCOMING BATCHES SECTION (Swiper.js Continuous Auto-Scroll Slider) -->
        <section id="batches" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-14 relative overflow-hidden">
            <!-- Background Glass Orbs -->
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-[#F58220]/15 rounded-full blur-3xl pointer-events-none">
            </div>
            <div
                class="absolute -bottom-20 -right-20 w-80 h-80 bg-[#00A651]/15 rounded-full blur-3xl pointer-events-none">
            </div>

            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 relative z-10">
                <div>
                    <span
                        class="px-3 py-1 rounded-[6px] text-[10px] font-extrabold uppercase tracking-wider bg-[#F58220]/10 text-[#F58220] inline-flex items-center gap-1.5 mb-2">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                        <span>ADMISSIONS 2026</span>
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-[#18181B] font-heading tracking-tight">
                        Upcoming <span class="text-[#F58220]">New</span> <span class="text-[#00A651]">Batches</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-[#64748B] mt-1 max-w-xl">
                        Limited seats per batch! Reserve your seat early for hands-on offline diploma training in
                        Lucknow.
                    </p>
                </div>

                <!-- Custom Swiper Navigation Buttons -->
                <div class="flex items-center gap-2.5 self-start md:self-auto">
                    <button
                        class="batch-prev p-2.5 rounded-[6px] ref-pill text-[#18181B] hover:text-[#F58220] hover:bg-white shadow-md transition-colors cursor-pointer"
                        title="Previous Batch">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button
                        class="batch-next p-2.5 rounded-[6px] ref-pill text-[#18181B] hover:text-[#F58220] hover:bg-white shadow-md transition-colors cursor-pointer"
                        title="Next Batch">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Swiper Carousel Container -->
            <div class="swiper batchSwiper relative z-10 !pb-6">
                <div class="swiper-wrapper">

                    <!-- Batch Card 1: ADCA -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/adca.jpg') }}"
                                        alt="ADCA Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#F58220] text-white shadow-md">
                                        1 Year Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#00A651] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#00A651] animate-ping"></span>
                                        5 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">ADCA</h3>
                                        <p class="text-xs text-[#64748B]">Advanced Diploma in Computer Applications</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>15 August</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="sun" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                                <span>Morning Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For ADCA</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Batch Card 2: DCA -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/dca.jpg') }}"
                                        alt="DCA Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#00A651] text-white shadow-md">
                                        6 Month Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#F58220] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#F58220] animate-ping"></span>
                                        3 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">DCA</h3>
                                        <p class="text-xs text-[#64748B]">Diploma in Computer Applications</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>20 August</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="moon" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>Evening Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For DCA</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Batch Card 3: ADWD -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/adwd.jpg') }}"
                                        alt="ADWD Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#F58220] text-white shadow-md">
                                        1 Year Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#00A651] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#00A651] animate-ping"></span>
                                        4 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">Web Development
                                            (ADWD)</h3>
                                        <p class="text-xs text-[#64748B]">Full Stack Web & Laravel Engineering</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>25 August</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="clock" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                                <span>Afternoon Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For ADWD</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Batch Card 4: ADDM -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/addm.jpg') }}"
                                        alt="ADDM Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#00A651] text-white shadow-md">
                                        1 Year Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#00A651] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#00A651] animate-ping"></span>
                                        6 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">Digital Marketing
                                            (ADDM)</h3>
                                        <p class="text-xs text-[#64748B]">SEO, Meta Ads & Digital Strategy</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>1 September</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="sun" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                                <span>Morning Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For ADDM</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Batch Card 5: Advanced Excel -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/advanceexel.jpg') }}"
                                        alt="Advanced Excel Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#F58220] text-white shadow-md">
                                        6 Month Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#F58220] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#F58220] animate-ping"></span>
                                        2 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">Advanced Excel & MIS
                                        </h3>
                                        <p class="text-xs text-[#64748B]">Data Reporting & Analytics</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>5 September</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="moon" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>Evening Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For Excel</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Batch Card 6: Web Designing -->
                    <div class="swiper-slide h-auto">
                        <div
                            class="ref-card rounded-[6px] bg-white/90 backdrop-blur-xl ref-card-hover border border-white/80 shadow-lg flex flex-col justify-between h-full overflow-hidden">
                            <div class="space-y-3">
                                <div class="relative aspect-16/10 w-full overflow-hidden bg-slate-100">
                                    <img src="{{ asset('images/courses/webdesign.jpg') }}"
                                        alt="Web Design Batch" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2.5 left-2.5 px-2.5 py-1 rounded-[6px] text-[10px] font-bold bg-[#00A651] text-white shadow-md">
                                        6 Month Diploma
                                    </span>
                                    <span
                                        class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-0.5 rounded-[6px] text-[10px] font-bold bg-white/90 text-[#00A651] shadow-md backdrop-blur-sm">
                                        <span class="w-2 h-2 rounded-full bg-[#00A651] animate-ping"></span>
                                        4 Seats Left
                                    </span>
                                </div>
                                <div class="p-5 space-y-3">
                                    <div>
                                        <h3 class="text-lg font-black text-[#18181B] font-heading">Web Designing</h3>
                                        <p class="text-xs text-[#64748B]">HTML, CSS, JS & Modern UI/UX</p>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2.5 pt-1 text-xs">
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Start Date</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                                <span>10 September</span>
                                            </p>
                                        </div>
                                        <div class="p-2.5 rounded-[6px] bg-slate-50 border border-slate-100">
                                            <p class="text-[10px] text-[#64748B] font-medium">Timing</p>
                                            <p class="font-bold text-[#18181B] flex items-center gap-1 mt-0.5">
                                                <i data-lucide="sun" class="w-3.5 h-3.5 text-[#00A651]"></i>
                                                <span>Morning Batch</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pb-5 pt-0">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2.5 rounded-[6px] text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                    <span>Apply For Web Designing</span>
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 8. FREQUENTLY ASKED QUESTIONS & ENQUIRE NOW -->
        <section id="contact" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- Left FAQ Column -->
                <div class="lg:col-span-6 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#64748B]">FREQUENTLY ASKED
                        QUESTIONS</span>

                    <div class="space-y-3 pt-2">
                        @forelse($faqs ?? [] as $fItem)
                        @if(!empty($fItem) && (is_object($fItem) || is_array($fItem)))
                        <div class="ref-card rounded-[6px] bg-white overflow-hidden">
                            <button onclick="toggleFaq(this)"
                                class="w-full p-4 text-left flex items-center justify-between text-xs sm:text-sm font-bold text-[#18181B] cursor-pointer">
                                <span>{{ data_get($fItem, 'question') }}</span>
                                <i data-lucide="plus" class="w-4 h-4 text-[#18181B] shrink-0"></i>
                            </button>
                            <div class="faq-content hidden px-4 pb-4 text-xs text-[#64748B] leading-relaxed">
                                {{ data_get($fItem, 'answer') }}
                            </div>
                        </div>
                        @endif
                        @empty
                        <div class="p-4 text-center text-xs text-slate-400">No FAQs available.</div>
                        @endforelse
                    </div>
                </div>

                <!-- Right ENQUIRE NOW Form Column -->
                <div class="lg:col-span-6">
                    <div class="ref-card p-6 sm:p-8 rounded-3xl bg-white relative overflow-hidden">

                        <div class="flex items-start justify-between">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-[#F58220]">ENQUIRE
                                    NOW</span>
                                <h3 class="text-2xl font-extrabold text-[#18181B] font-heading mt-1">
                                    Talk to Our <span class="text-[#00A651]">Experts</span>
                                </h3>
                            </div>

                            <!-- 3D Mascot Graphic Circle -->
                            <div
                                class="w-14 h-14 rounded-full bg-emerald-100 text-[#00A651] flex items-center justify-center shrink-0 shadow-md">
                                <i data-lucide="headphones" class="w-7 h-7"></i>
                            </div>
                        </div>

                        <form onsubmit="handleFormSubmit(event, 'Enquiry Form')" class="space-y-3.5 mt-6">
                            <div>
                                <label class="block text-[11px] font-bold text-[#18181B] mb-1">Your Name</label>
                                <input type="text" required placeholder="Enter your name"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-medium focus:outline-none focus:border-[#00A651]">
                            </div>

                            <div>
                                <label class="block text-[11px] font-bold text-[#18181B] mb-1">Mobile Number</label>
                                <input type="tel" required placeholder="Enter your mobile number"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-medium focus:outline-none focus:border-[#00A651]">
                            </div>

                            <div>
                                <label class="block text-[11px] font-bold text-[#18181B] mb-1">Select Course</label>
                                <select required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-medium text-[#64748B] focus:outline-none focus:border-[#00A651]">
                                    <option value="">Choose a course</option>
                                    <option value="DCA">DCA (6 Months)</option>
                                    <option value="Advanced Excel">Advanced Excel & MIS</option>
                                    <option value="Web Designing">Web Designing</option>
                                    <option value="ADCA">ADCA (1 Year)</option>
                                    <option value="ADWD">ADWD (1 Year)</option>
                                    <option value="ADDM">ADDM (1 Year)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-[11px] font-bold text-[#18181B] mb-1">Message</label>
                                <textarea rows="2" placeholder="Write your message"
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-medium focus:outline-none focus:border-[#00A651]"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full btn-green py-3 rounded-full text-xs font-bold flex items-center justify-center gap-1.5 shadow-md cursor-pointer">
                                <span>Submit Enquiry</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </section>

        <!-- 13.5 HOME BLOG SECTION (Swiper Slider + View All Button on Right Header) -->
        <section id="home-blogs" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-16 relative">
            <div class="space-y-8">
                
                <!-- Section Header (Left Titles + Right View All & Navigation Controls) -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div class="space-y-2 text-left">
                        <span class="px-3 py-1 rounded-[6px] text-[10px] font-extrabold uppercase tracking-wider bg-[#00A651]/10 text-[#00A651] border border-[#00A651]/20 inline-flex items-center gap-1.5">
                            <i data-lucide="book-open" class="w-3.5 h-3.5 text-[#00A651]"></i>
                            <span>LATEST ARTICLES & GUIDES</span>
                        </span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#18181B] font-heading tracking-tight">
                            Explore Technical <span class="text-[#00A651]">Blogs & Articles</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-[#64748B] font-medium max-w-xl">
                            Stay ahead with latest programming tutorials, career roadmaps, interview preparation tips & technology insights.
                        </p>
                    </div>

                    <div class="flex items-center gap-3 shrink-0">
                        <!-- Swiper Nav Prev & Next -->
                        <button class="blog-prev p-2.5 rounded-[6px] bg-white border border-slate-200 text-[#18181B] hover:text-[#00A651] hover:border-[#00A651] transition-all shadow-xs cursor-pointer">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button class="blog-next p-2.5 rounded-[6px] bg-white border border-slate-200 text-[#18181B] hover:text-[#00A651] hover:border-[#00A651] transition-all shadow-xs cursor-pointer">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>

                        <!-- View All Button -->
                        <a href="{{ route('blog.index') }}"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-5 py-2.5 rounded-[6px] text-xs font-extrabold transition-all shadow-md flex items-center gap-1.5 whitespace-nowrap cursor-pointer">
                            <span>View All Blogs</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Swiper Slider Container -->
                <div class="swiper blogSwiper">
                    <div class="swiper-wrapper py-2">
                        
                        @forelse($latestBlogs as $blog)
                            <div class="swiper-slide">
                                <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-xl transition-all space-y-4 flex flex-col justify-between h-full group">
                                    <div class="space-y-3">
                                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 overflow-hidden relative">
                                            @if($blog->featured_image)
                                                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            @else
                                                <i data-lucide="newspaper" class="w-12 h-12 text-[#00A651] group-hover:scale-110 transition-transform duration-300"></i>
                                            @endif
                                            <span class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-[6px] bg-[#00A651] text-white text-[10px] font-extrabold uppercase shadow-sm">
                                                {{ $blog->category ?: 'Article' }}
                                            </span>
                                        </div>
                                        <div class="flex items-center justify-between text-[11px] text-[#64748B]">
                                            <span class="font-semibold flex items-center gap-1">
                                                <i data-lucide="eye" class="w-3 h-3 text-[#F58220]"></i>
                                                {{ number_format($blog->views_count) }} views
                                            </span>
                                            <span>{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</span>
                                        </div>
                                        <h3 class="text-base font-extrabold text-[#18181B] font-heading group-hover:text-[#F58220] transition-colors leading-snug line-clamp-2">
                                            <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <p class="text-xs text-[#64748B] leading-relaxed line-clamp-2">
                                            {{ $blog->summary ?: Str::limit(strip_tags($blog->content), 110) }}
                                        </p>
                                    </div>
                                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                                        <span class="font-bold text-[#18181B] text-[11px]">{{ $blog->author ?: 'DigiCoders Team' }}</span>
                                        <a href="{{ route('blog.show', $blog->slug) }}" class="font-extrabold text-[#00A651] flex items-center gap-1 hover:underline">
                                            <span>Read Article</span>
                                            <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="swiper-slide">
                                <div class="p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md text-center">
                                    <i data-lucide="newspaper" class="w-10 h-10 text-slate-300 mx-auto mb-2"></i>
                                    <p class="text-xs font-bold text-slate-500">No blog posts available right now.</p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- 14. FINAL CTA SECTION (Left CTA Content + Right Google Map) -->
        <section id="cta" class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto py-16 relative">
            <div
                class="ref-card p-6 sm:p-10 lg:p-12 rounded-[6px] bg-gradient-to-r from-orange-500/10 via-emerald-500/10 to-amber-500/10 backdrop-blur-2xl border border-white/90 shadow-2xl relative overflow-hidden">

                <!-- Floating Background Glass Orbs inside CTA Banner -->
                <div
                    class="absolute -top-24 -left-24 w-80 h-80 bg-[#F58220]/20 rounded-full blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-24 -right-24 w-80 h-80 bg-[#00A651]/20 rounded-full blur-3xl pointer-events-none">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">

                    <!-- Left CTA Content (lg:col-span-7) -->
                    <div class="lg:col-span-7 space-y-4 text-left">
                        <span
                            class="px-3 py-1 rounded-[6px] text-[10px] font-extrabold uppercase tracking-wider bg-white/80 text-[#F58220] shadow-sm inline-flex items-center gap-1.5">
                            <i data-lucide="rocket" class="w-3.5 h-3.5 text-[#F58220]"></i>
                            <span>ADMISSIONS OPEN 2026</span>
                        </span>

                        <h2
                            class="text-2xl sm:text-4xl lg:text-5xl font-black text-[#18181B] font-heading tracking-tight leading-tight">
                            Ready To Build Your <span class="text-[#F58220]">Software & Tech</span> <span
                                class="text-[#00A651]">Career?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#64748B] leading-relaxed">
                            Take the first step towards a high-paying career. Learn from experts, build live projects,
                            and
                            get guaranteed 100% placement support.
                        </p>

                        <!-- 3 Action CTA Buttons -->
                        <div class="flex flex-wrap items-center gap-3 pt-3">
                            <a href="{{ route('admissions') }}"
                                class="btn-orange px-6 sm:px-7 py-3 rounded-[6px] text-xs sm:text-sm font-bold shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Apply Now</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                            <a href="{{ route('contact') }}"
                                class="btn-green px-6 sm:px-7 py-3 rounded-[6px] text-xs sm:text-sm font-bold shadow-lg flex items-center gap-2 cursor-pointer">
                                <i data-lucide="sparkles" class="w-4 h-4"></i>
                                <span>Talk to Expert</span>
                            </a>
                            <button onclick="openModal('brochureModal')"
                                class="ref-pill px-6 sm:px-7 py-3 rounded-[6px] text-xs sm:text-sm font-bold text-[#18181B] hover:text-[#F58220] shadow-md flex items-center gap-2 cursor-pointer">
                                <i data-lucide="download" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Brochure</span>
                            </button>
                        </div>
                    </div>

                    <!-- Right Google Map (lg:col-span-5) -->
                    <div class="lg:col-span-5">
                        <div
                            class="rounded-[6px] overflow-hidden border border-white/80 shadow-2xl h-[260px] sm:h-[300px] bg-slate-900 relative group">
                            <!-- Floating Tag on Map -->
                            <div
                                class="absolute top-3 left-3 z-10 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-[6px] text-[11px] font-bold text-[#18181B] shadow-md flex items-center gap-1.5 border border-slate-200">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#F58220]"></i>
                                <span>{{ $settings['office_lucknow_title'] ?? 'N/A' }}</span>
                            </div>

                            @if(!empty($settings['site_map_iframe']))
                                @if(str_contains($settings['site_map_iframe'], '<iframe'))
                                    <div class="w-full h-full [&_iframe]:w-full [&_iframe]:h-full [&_iframe]:border-0 opacity-90 group-hover:opacity-100 transition-opacity">
                                        {!! $settings['site_map_iframe'] !!}
                                    </div>
                                @else
                                    <iframe
                                        src="{{ $settings['site_map_iframe'] }}"
                                        class="w-full h-full border-0 opacity-90 group-hover:opacity-100 transition-opacity"
                                        allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                @endif
                            @elseif(!empty($settings['office_lucknow_map_link']))
                                <iframe
                                    src="{{ $settings['office_lucknow_map_link'] }}"
                                    class="w-full h-full border-0 opacity-90 group-hover:opacity-100 transition-opacity"
                                    allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400 text-xs font-semibold p-4 text-center">
                                    <span>Map Location Not Configured</span>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')



    <!-- JavaScript Controls -->
    <script>
        lucide.createIcons();

        // Show / Hide Dropdown Menus
        function showMenu(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function hideMenu(id) {
            document.getElementById(id).classList.add('hidden');
        }

        function toggleMobileMenu() {
            document.getElementById('mobileDrawer').classList.toggle('hidden');
        }

        function toggleMobileSubmenu(id) {
            document.getElementById(id).classList.toggle('hidden');
        }

        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            if (modalId === 'searchModal') {
                setTimeout(() => { document.getElementById('searchInput').focus(); }, 100);
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function openCourseModal(title, duration, eligibility, syllabus, career) {
            document.getElementById('courseDetailTitle').innerText = title;
            document.getElementById('courseDetailDuration').innerText = duration;
            document.getElementById('courseDetailEligibility').innerText = eligibility;
            document.getElementById('courseDetailSyllabus').innerText = syllabus;
            document.getElementById('courseDetailCareer').innerText = career;
            openModal('courseModal');
        }

        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('i');
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.setAttribute('data-lucide', 'minus');
            } else {
                content.classList.add('hidden');
                icon.setAttribute('data-lucide', 'plus');
            }
            lucide.createIcons();
        }



        function handleFormSubmit(e, name) {
            e.preventDefault();
            closeModal('applyModal');
            closeModal('counsellingModal');
            const toast = document.getElementById('toastNotification');
            document.getElementById('toastTitle').innerText = name + ' Received!';
            toast.classList.remove('hidden');
            setTimeout(() => { toast.classList.add('hidden'); }, 3500);
            e.target.reset();
        }



        // Swiper Initialization for Upcoming Batches (Continuous Linear Smooth Scroll)
        document.addEventListener('DOMContentLoaded', function () {
            const batchSwiper = new Swiper('.batchSwiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                speed: 6000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: '.batch-next',
                    prevEl: '.batch-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 24,
                    },
                },
            });

            const blogSwiper = new Swiper('.blogSwiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: '.blog-next',
                    prevEl: '.blog-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 24,
                    },
                },
            });
        });
    </script>

</body>

</html>