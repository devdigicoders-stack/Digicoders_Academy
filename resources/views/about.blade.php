<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>About Us | DigiCoders Academy - Empowering Skills That Build Careers</title>
    <meta name="title" content="About DigiCoders Academy | Premier Computer Education & Job Training">
    <meta name="description"
        content="Learn about DigiCoders Academy, our mission, vision, expert trainers, infrastructure, and 100% placement support in Lucknow. Build real software careers with us.">
    <meta name="keywords"
        content="About DigiCoders Academy, Best Computer Institute Lucknow, IT Training Lucknow, Job Oriented Diploma Courses">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / WhatsApp / Facebook Link Sharing Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="About Us | DigiCoders Academy Lucknow">
    <meta property="og:description"
        content="Learn about DigiCoders Academy, our mission, vision, expert trainers, infrastructure, and 100% placement support in Lucknow. Build real software careers with us.">
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
    <meta name="twitter:title" content="About Us | DigiCoders Academy Lucknow">
    <meta name="twitter:description"
        content="Learn about DigiCoders Academy, our mission, vision, expert trainers, infrastructure, and 100% placement support in Lucknow.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Favicon -->
    @if(!empty($settings['site_favicon']))
        <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    @endif
    @if(!empty($settings['site_favicon_ico']))
        <link rel="shortcut icon" href="{{ asset($settings['site_favicon_ico']) }}" type="image/x-icon">
    @endif

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Swiper.js Slider CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }

        .font-body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes float-reverse {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(8px);
            }
        }

        @keyframes spin-slow {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        .animate-float-reverse {
            animation: float-reverse 6s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 25s linear infinite;
        }
    </style>
</head>

<body
    class="bg-[#FAFAFA] text-[#111111] font-body selection:bg-[#F58220] selection:text-white antialiased relative min-h-screen">



    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <!-- MAIN CONTENT (Positioned below fixed header) -->
    <main class="relative z-10" style="padding-top: 140px;">

        <!-- 1️⃣ HERO SECTION (Height between 400px and 500px: 450px) -->
        <section id="about-hero"
            class="relative py-10 sm:py-12 lg:py-14 overflow-hidden bg-white min-h-[420px] sm:min-h-[450px] lg:min-h-[460px] flex items-center">

            <!-- Background Ambient Light Curve Rays Overlay -->
            <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
                <svg class="absolute -top-32 left-0 w-[900px] h-[700px] opacity-25 text-slate-300 pointer-events-none"
                    viewBox="0 0 900 700" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-100 120 Q 400 0, 600 400 T 1100 800" stroke="currentColor" stroke-width="2.5"
                        fill="none" />
                    <path d="M-50 180 Q 450 60, 650 450 T 1150 850" stroke="currentColor" stroke-width="1.5"
                        fill="none" />
                    <path d="M0 240 Q 500 120, 700 500 T 1200 900" stroke="currentColor" stroke-width="1" fill="none" />
                </svg>
            </div>

            <!-- RIGHT SIDE EDGE-TO-EDGE CAMPUS IMAGE WITH NATIVE CSS GRADIENT FADE -->
            <div class="absolute top-0 right-0 bottom-0 h-full z-0 overflow-hidden pointer-events-none"
                style="width: 70%; right: 0;">
                <img src="{{ asset('images/about-hero-students.jpg') }}"
                    alt="DigiCoders Academy Students" class="w-full h-full object-cover object-center">

                <!-- Native CSS Multi-Stage White Gradient Mask -->
                <div class="absolute inset-0 pointer-events-none"
                    style="background: linear-gradient(to right, #ffffff 0%, #ffffff 15%, rgba(255, 255, 255, 0.8) 32%, rgba(255, 255, 255, 0.35) 55%, rgba(255, 255, 255, 0) 90%);">
                </div>
            </div>

            <!-- LEFT CONTENT AREA -->
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
                <div class="max-w-xl lg:max-w-2xl space-y-3">

                    <!-- Breadcrumb Navigation -->
                    <nav class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-[#64748B] mb-2">
                        <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-[#F58220]"></i>
                        <span class="text-[#F58220] font-bold">About DigiCoders Academy</span>
                    </nav>

                    <!-- Display Heading -->
                    <h1
                        class="text-3xl sm:text-5xl lg:text-[54px] font-bold text-[#18181B] font-heading tracking-tight leading-[1.08]">
                        About <br>
                        Digi<span class="text-[#00A651]">Coders</span> Academy
                    </h1>

                    <!-- Orange Horizontal Accent Bar -->
                    <div class="w-12 h-[4px] bg-[#F58220] rounded-full my-3"></div>

                    <!-- Subtitle Description -->
                    <p class="text-xs sm:text-base text-[#64748B] font-medium leading-relaxed max-w-lg">
                        {{ $settings['about_hero_subtitle'] ?? 'Empowering students with industry-focused education, practical skills, and a vision for a brighter future.' }}
                    </p>

                </div>
            </div>

        </section>


        <!-- 2️⃣ WHO WE ARE SECTION (100% Perfectly Aligned max-w-[1400px]) -->
        <section id="who-we-are" class="py-16 sm:py-24 bg-white relative">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                    <!-- Left: Large Student Image + Floating Badge -->
                    <div class="lg:col-span-6 relative w-full">
                        <!-- Main Building Image Container -->
                        <div
                            class="rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 relative group">
                            <img src="{{ asset('images/who-we-are-campus.png') }}"
                                alt="DigiCoders Academy Practical Training Lab"
                                class="w-full h-[340px] sm:h-[420px] lg:h-[450px] object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-700">

                            <!-- Floating Badge at bottom left INSIDE image -->
                            <div
                                class="absolute bottom-5 left-5 z-20 p-4 rounded-[6px] flex items-center gap-3.5 shadow-xl bg-white/95 backdrop-blur-md border border-slate-200/90 max-w-[260px]">
                                <div
                                    class="w-11 h-11 rounded-[6px] bg-[#EAF7EE] text-[#00A651] flex items-center justify-center shrink-0 border border-emerald-500/30">
                                    <i data-lucide="graduation-cap" class="w-6 h-6 stroke-[2]"></i>
                                </div>
                                <div>
                                    <p class="text-xs sm:text-sm font-bold text-[#111111] leading-snug">
                                        Excellence in<br>Education
                                    </p>
                                    <p class="text-[11px] font-semibold text-[#00A651] mt-0.5">
                                        Since 2014
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Who We Are Text & 3 List Items -->
                    <div class="lg:col-span-6 space-y-6 w-full">
                        <div>
                            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#00A651]">WHO WE
                                ARE</span>
                            <h2
                                class="text-3xl sm:text-4xl lg:text-[40px] font-bold font-heading text-[#111111] mt-2 tracking-tight">
                                Who We Are
                            </h2>
                        </div>

                        <p class="text-sm sm:text-[15px] text-[#555555] leading-relaxed">
                            DigiCoders Academy, a unit of DigiCoders Technologies Pvt. Ltd., is a leading training
                            institute committed to delivering industry-oriented education with a perfect blend of theory
                            and practical learning.
                        </p>

                        <div class="space-y-4 pt-1">
                            <!-- Item 1: Mission -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-100/80">
                                    <i data-lucide="target" class="w-5 h-5 stroke-[2]"></i>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-[#111111]">Our Mission</h3>
                                    <p class="text-xs sm:text-sm text-[#666666] mt-0.5 leading-normal">To empower
                                        students with practical skills and knowledge for successful careers.</p>
                                </div>
                            </div>

                            <!-- Item 2: Vision -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-100/80">
                                    <i data-lucide="eye" class="w-5 h-5 stroke-[2]"></i>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-[#111111]">Our Vision</h3>
                                    <p class="text-xs sm:text-sm text-[#666666] mt-0.5 leading-normal">To be a globally
                                        recognized academy known for excellence, innovation and student success.</p>
                                </div>
                            </div>

                            <!-- Item 3: Values -->
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center shrink-0 mt-0.5 border border-emerald-100/80">
                                    <i data-lucide="shield-check" class="w-5 h-5 stroke-[2]"></i>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-[#111111]">Our Values</h3>
                                    <p class="text-xs sm:text-sm text-[#666666] mt-0.5 leading-normal">Integrity,
                                        Innovation, Excellence, Teamwork and a passion for student growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- 3️⃣ MISSION • VISION • CORE VALUES (3 White Cards) -->
        <section id="mission-vision-section" class="py-12 sm:py-16 bg-[#FAFAFA]">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Card 1: Mission -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-md flex items-start gap-4 relative overflow-hidden">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0 border border-orange-100">
                            <i data-lucide="target" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#111111] font-heading">Mission</h3>
                            <p class="text-xs text-[#666666] mt-1.5 leading-relaxed">
                                To deliver industry-aligned training that prepares students for real-world challenges
                                and a successful career.
                            </p>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#F58220]"></div>
                    </div>

                    <!-- Card 2: Vision -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-md flex items-start gap-4 relative overflow-hidden">
                        <div
                            class="w-12 h-12 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0 border border-emerald-100">
                            <i data-lucide="eye" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#111111] font-heading">Vision</h3>
                            <p class="text-xs text-[#666666] mt-1.5 leading-relaxed">
                                To create a transformative learning ecosystem that inspires innovation and empowers
                                future leaders.
                            </p>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#00A651]"></div>
                    </div>

                    <!-- Card 3: Core Values -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-md flex items-start gap-4 relative overflow-hidden">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0 border border-orange-100">
                            <i data-lucide="diamond" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#111111] font-heading">Core Values</h3>
                            <p class="text-xs text-[#666666] mt-1.5 leading-relaxed">
                                We believe in honesty, quality education, continuous improvement and creating
                                opportunities for all.
                            </p>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-[#F58220]"></div>
                    </div>

                </div>
            </div>
        </section>


        <!-- 4️⃣ WHY STUDENTS CHOOSE US (6 Cards in 3-Column Grid) -->
        <section id="why-choose-us" class="py-16 sm:py-20 bg-white relative">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                    <!-- Left Heading Column -->
                    <div class="lg:col-span-4 space-y-4">
                        <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#00A651]">WHY CHOOSE
                            DIGICODERS?</span>
                        <h2
                            class="text-3xl sm:text-4xl font-bold font-heading text-[#111111] leading-tight tracking-tight">
                            Why Students <br class="hidden lg:block"> Choose Us
                        </h2>
                        <p class="text-sm text-[#666666] leading-relaxed">
                            We deliver industry-focused computer training, practical exposure, and full career guidance
                            to help you build a successful tech career.
                        </p>
                    </div>

                    <!-- Right 6 Cards Grid (3 Columns x 2 Rows) -->
                    <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                        <!-- Card 1: Industry Curriculum -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mb-4 shrink-0 border border-emerald-100">
                                <i data-lucide="target" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Industry Curriculum</h3>
                            <p class="text-xs text-[#666666] leading-relaxed">Designed as per industry trends</p>
                        </div>

                        <!-- Card 2: Practical Training -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#FFF4EA] text-[#F58220] flex items-center justify-center mb-4 shrink-0 border border-orange-100">
                                <i data-lucide="user-check" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Practical Training</h3>
                            <p class="text-xs text-[#666666] leading-relaxed">Hands-on training with real-world projects
                            </p>
                        </div>

                        <!-- Card 3: Live Projects -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mb-4 shrink-0 border border-emerald-100">
                                <i data-lucide="laptop" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Live Projects</h3>
                            <p class="text-xs text-[#666666] leading-relaxed">Work on real projects gaining practical
                                exposure</p>
                        </div>

                        <!-- Card 4: Expert Faculty -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#FFF4EA] text-[#F58220] flex items-center justify-center mb-4 shrink-0 border border-orange-100">
                                <i data-lucide="users" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Expert Faculty</h3>
                            <p class="text-xs text-[#666666] leading-relaxed">Learn from experienced industry
                                professionals</p>
                        </div>

                        <!-- Card 5: Placement Support -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mb-4 shrink-0 border border-emerald-100">
                                <i data-lucide="graduation-cap" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Placement Support</h3>
                            <p class="text-xs text-[#666666] leading-relaxed">95% placement assistance for eligible
                                students</p>
                        </div>

                        <!-- Card 6: Recognized Certification -->
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-[#FFF4EA] text-[#F58220] flex items-center justify-center mb-4 shrink-0 border border-orange-100">
                                <i data-lucide="award" class="w-6 h-6 stroke-[2]"></i>
                            </div>
                            <h3 class="text-base font-bold text-[#111111] mb-1.5 font-heading">Recognized Certification
                            </h3>
                            <p class="text-xs text-[#666666] leading-relaxed">Government recognized certificates</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- 5️⃣ LEADERSHIP & FOUNDERS' MESSAGES SECTION -->
        <section id="director-message-section"
            class="py-16 sm:py-24 bg-[#FAFAFA] relative border-t border-b border-slate-200/60">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 space-y-8 lg:space-y-12">

                <!-- 👤 FOUNDER 1 (Gopal Singh): Image Left, Text Right (1:1 Aspect Ratio) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

                    <!-- Left: Director Portrait Card (Gopal Singh) -->
                    <div
                        class="lg:col-span-4 rounded-[6px] bg-white border border-slate-200/80 shadow-sm p-4 flex flex-col justify-end items-center relative overflow-hidden min-h-[320px] sm:min-h-[360px]">
                        
                        <!-- Concentric Background Radial Rings -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 sm:w-72 sm:h-72 rounded-full border-2 border-slate-200/50 bg-slate-100/40 z-0"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 sm:w-56 sm:h-56 rounded-full border border-slate-200/40 bg-white/60 z-0"></div>

                        <!-- Left Side Decorative Dot Matrix Grid -->
                        <div class="absolute left-3 top-1/2 -translate-y-1/2 grid grid-cols-3 gap-1.5 opacity-30 z-0">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                        </div>

                        <!-- Founder 1 Photo Cutout (Aspect Square 1:1) -->
                        <div class="w-full aspect-square relative z-10 flex items-center justify-center">
                            <img src="{{ asset('images/gopal-singh-director.png') }}"
                                alt="Gopal Singh Director"
                                class="w-full h-full aspect-square object-contain transform hover:scale-105 transition-transform duration-500 drop-shadow-md">
                        </div>
                    </div>

                    <!-- Right: Message Content Card -->
                    <div
                        class="lg:col-span-8 rounded-[6px] bg-white border border-slate-200/80 shadow-sm p-6 sm:p-10 relative overflow-hidden flex flex-col justify-between">
                        
                        <!-- Decorative Giant Orange Quote Watermark -->
                        <div class="absolute top-4 right-6 sm:top-6 sm:right-10 text-orange-200/40 font-serif text-7xl sm:text-9xl font-black select-none pointer-events-none z-0">““</div>

                        <!-- Top Content Area -->
                        <div class="relative z-10 space-y-4">
                            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#00A651]">DIRECTOR'S MESSAGE</span>

                            <!-- Orange Double Quote Icon -->
                            <div class="text-[#F58220] font-serif text-3xl sm:text-4xl font-black leading-none pt-2">““</div>

                            <!-- Message Paragraph -->
                            <p class="text-sm sm:text-base text-[#444444] leading-relaxed font-normal max-w-2xl">
                                Welcome to DigiCoders Academy. Our goal is to bridge the gap between education and
                                industry. We focus on skill development, practical learning and overall personality
                                development to help students build a successful future.
                            </p>
                        </div>

                        <!-- Bottom Signature & Name Area -->
                        <div class="relative z-10 pt-6 sm:pt-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                            
                            <!-- Left: Cursive Signature + Director Name -->
                            <div>
                                <div class="mb-1">
                                    <span class="font-serif italic text-2xl sm:text-3xl text-slate-800 tracking-wider font-semibold">Gopal</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-bold text-[#111111]">Gopal Singh</h3>
                                <p class="text-xs text-[#666666] font-medium mt-0.5">Director, DigiCoders Academy</p>
                            </div>

                            <!-- Right: Bottom Right Decorative Green Dot Pattern Grid -->
                            <div class="hidden sm:grid grid-cols-6 gap-2 opacity-30 select-none pointer-events-none">
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#00A651]"></div>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- 👤 FOUNDER 2 (Himanshu Kashyap): Text Left, Image Right (1:1 Aspect Ratio) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

                    <!-- Left: Message Content Card (Col 8) -->
                    <div
                        class="lg:col-span-8 rounded-[6px] bg-white border border-slate-200/80 shadow-sm p-6 sm:p-10 relative overflow-hidden flex flex-col justify-between">
                        
                        <!-- Decorative Giant Orange Quote Watermark -->
                        <div class="absolute top-4 right-6 sm:top-6 sm:right-10 text-orange-200/40 font-serif text-7xl sm:text-9xl font-black select-none pointer-events-none z-0">““</div>

                        <!-- Top Content Area -->
                        <div class="relative z-10 space-y-4">
                            <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#F58220]">CO-FOUNDER'S MESSAGE</span>

                            <!-- Orange Double Quote Icon -->
                            <div class="text-[#00A651] font-serif text-3xl sm:text-4xl font-black leading-none pt-2">““</div>

                            <!-- Message Paragraph -->
                            <p class="text-sm sm:text-base text-[#444444] leading-relaxed font-normal max-w-2xl">
                                At DigiCoders, we believe in empowering every student with industry-relevant skills and hands-on practical experience. Our mission is to foster innovation, technical excellence, and build job-ready professionals who lead tomorrow's tech industry.
                            </p>
                        </div>

                        <!-- Bottom Signature & Name Area -->
                        <div class="relative z-10 pt-6 sm:pt-8 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                            
                            <!-- Left: Cursive Signature + Co-Founder Name -->
                            <div>
                                <div class="mb-1">
                                    <span class="font-serif italic text-2xl sm:text-3xl text-slate-800 tracking-wider font-semibold">Himanshu</span>
                                </div>
                                <h3 class="text-sm sm:text-base font-bold text-[#111111]">Himanshu Kashyap</h3>
                                <p class="text-xs text-[#666666] font-medium mt-0.5">Co-Founder, DigiCoders Academy</p>
                            </div>

                            <!-- Right: Bottom Right Decorative Orange Dot Pattern Grid -->
                            <div class="hidden sm:grid grid-cols-6 gap-2 opacity-30 select-none pointer-events-none">
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-[#F58220]"></div>
                            </div>

                        </div>

                    </div>

                    <!-- Right: Co-Founder Portrait Card (Himanshu Kashyap) -->
                    <div
                        class="lg:col-span-4 rounded-[6px] bg-white border border-slate-200/80 shadow-sm p-4 flex flex-col justify-end items-center relative overflow-hidden min-h-[320px] sm:min-h-[360px]">
                        
                        <!-- Concentric Background Radial Rings -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 sm:w-72 sm:h-72 rounded-full border-2 border-slate-200/50 bg-slate-100/40 z-0"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 sm:w-56 sm:h-56 rounded-full border border-slate-200/40 bg-white/60 z-0"></div>

                        <!-- Left Side Decorative Dot Matrix Grid -->
                        <div class="absolute left-3 top-1/2 -translate-y-1/2 grid grid-cols-3 gap-1.5 opacity-30 z-0">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-400"></div>
                        </div>

                        <!-- Founder 2 Photo Cutout (Aspect Square 1:1) -->
                        <div class="w-full aspect-square relative z-10 flex items-center justify-center">
                            <img src="{{ asset('images/himanshu-kashyap-co-founder.png') }}"
                                alt="Himanshu Kashyap Co-Founder"
                                class="w-full h-full aspect-square object-contain transform hover:scale-105 transition-transform duration-500 drop-shadow-md">
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- 6️⃣ OUR JOURNEY TIMELINE (Exact 100% Match with Reference Image) -->
        <section id="our-journey-timeline" class="py-16 sm:py-24 bg-white relative">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#00A651]">OUR JOURNEY</span>
                </div>

                <!-- 5 Steps Horizontal Timeline Container -->
                <div class="relative w-full overflow-x-auto pb-4 sm:pb-0 scrollbar-none">
                    <div class="min-w-[650px] sm:min-w-0 relative">

                        <!-- Dashed Horizontal Connector Line running behind circles -->
                        <div class="absolute top-7 sm:top-10 left-[10%] right-[10%] h-[2px] border-t-2 border-dashed border-slate-200 z-0"></div>

                        <!-- 5 Columns Grid -->
                        <div class="grid grid-cols-5 gap-2 sm:gap-4 lg:gap-6 text-center relative z-10">

                            <!-- Step 1: 2014 Founded -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-white border border-slate-100 shadow-[0_8px_25px_rgba(0,0,0,0.08)] flex items-center justify-center mb-3 sm:mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-lg">
                                    <i data-lucide="building-2" class="w-6 h-6 sm:w-8 sm:h-8 text-[#00A651]"></i>
                                </div>
                                <p class="text-xs sm:text-base font-extrabold text-[#111111] font-heading">2014</p>
                                <p class="text-xs sm:text-sm font-bold text-[#00A651] mt-0.5">Founded</p>
                                <p class="text-[10px] sm:text-xs text-[#666666] mt-1 leading-snug max-w-[150px] mx-auto">
                                    DigiCoders Academy was established
                                </p>
                            </div>

                            <!-- Step 2: 2016 Growth -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-white border border-slate-100 shadow-[0_8px_25px_rgba(0,0,0,0.08)] flex items-center justify-center mb-3 sm:mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-lg">
                                    <i data-lucide="trending-up" class="w-6 h-6 sm:w-8 sm:h-8 text-[#F58220]"></i>
                                </div>
                                <p class="text-xs sm:text-base font-extrabold text-[#111111] font-heading">2016</p>
                                <p class="text-xs sm:text-sm font-bold text-[#F58220] mt-0.5">Growth</p>
                                <p class="text-[10px] sm:text-xs text-[#666666] mt-1 leading-snug max-w-[150px] mx-auto">
                                    Expanded courses and infrastructure
                                </p>
                            </div>

                            <!-- Step 3: 2020 5000+ Students -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-white border border-slate-100 shadow-[0_8px_25px_rgba(0,0,0,0.08)] flex items-center justify-center mb-3 sm:mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-lg">
                                    <i data-lucide="users" class="w-6 h-6 sm:w-8 sm:h-8 text-[#00A651]"></i>
                                </div>
                                <p class="text-xs sm:text-base font-extrabold text-[#111111] font-heading">2020</p>
                                <p class="text-xs sm:text-sm font-bold text-[#00A651] mt-0.5">5000+ Students</p>
                                <p class="text-[10px] sm:text-xs text-[#666666] mt-1 leading-snug max-w-[150px] mx-auto">
                                    Achieved milestone of 5000+ trained students
                                </p>
                            </div>

                            <!-- Step 4: 2023 Placements -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-white border border-slate-100 shadow-[0_8px_25px_rgba(0,0,0,0.08)] flex items-center justify-center mb-3 sm:mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-lg">
                                    <i data-lucide="briefcase" class="w-6 h-6 sm:w-8 sm:h-8 text-[#F58220]"></i>
                                </div>
                                <p class="text-xs sm:text-base font-extrabold text-[#111111] font-heading">2023</p>
                                <p class="text-xs sm:text-sm font-bold text-[#F58220] mt-0.5">Placements</p>
                                <p class="text-[10px] sm:text-xs text-[#666666] mt-1 leading-snug max-w-[150px] mx-auto">
                                    95% placement assistance for our students
                                </p>
                            </div>

                            <!-- Step 5: Future Vision -->
                            <div class="flex flex-col items-center group">
                                <div
                                    class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-white border border-slate-100 shadow-[0_8px_25px_rgba(0,0,0,0.08)] flex items-center justify-center mb-3 sm:mb-4 transition-transform duration-300 group-hover:scale-110 group-hover:shadow-lg">
                                    <i data-lucide="rocket" class="w-6 h-6 sm:w-8 sm:h-8 text-[#00A651]"></i>
                                </div>
                                <p class="text-xs sm:text-base font-extrabold text-[#111111] font-heading">Future</p>
                                <p class="text-xs sm:text-sm font-bold text-[#00A651] mt-0.5">Vision</p>
                                <p class="text-[10px] sm:text-xs text-[#666666] mt-1 leading-snug max-w-[150px] mx-auto">
                                    Continuing journey towards excellence
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- 9️⃣ ACHIEVEMENTS COUNTER SECTION (6px Border Radius) -->
        <section id="achievements-section" class="py-12 sm:py-16 bg-[#FAFAFA]">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Stat 1 -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm flex items-center gap-4 hover:shadow-md transition-all duration-300">
                        <div
                            class="w-12 h-12 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-bold font-heading text-[#111111]">5000+</p>
                            <p class="text-xs font-medium text-[#666666]">Students Trained</p>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm flex items-center gap-4 hover:shadow-md transition-all duration-300">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="user-check" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-bold font-heading text-[#111111]">50+</p>
                            <p class="text-xs font-medium text-[#666666]">Expert Trainers</p>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm flex items-center gap-4 hover:shadow-md transition-all duration-300">
                        <div
                            class="w-12 h-12 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                            <i data-lucide="line-chart" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-bold font-heading text-[#111111]">95%</p>
                            <p class="text-xs font-medium text-[#666666]">Placement Assistance</p>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm flex items-center gap-4 hover:shadow-md transition-all duration-300">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="laptop" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-bold font-heading text-[#111111]">100+</p>
                            <p class="text-xs font-medium text-[#666666]">Live Projects</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- 🔟 MEET OUR EXPERT TRAINERS (Spacious 4-Column Grid) -->
        <section id="expert-trainers" class="py-16 sm:py-24 bg-white relative">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#00A651]">OUR EXPERT TRAINERS</span>
                    <h2 class="text-3xl sm:text-4xl font-bold font-heading text-[#111111] mt-2 tracking-tight">
                        Learn From Industry Experts
                    </h2>
                    <p class="text-sm text-[#666666] mt-2 leading-relaxed">
                        Our trainers bring years of real-world experience from top technology companies to guide your learning.
                    </p>
                </div>

                <!-- 4 Trainer Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Trainer 1 -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 text-center flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=300&q=80"
                            alt="Rahul Yadav" class="w-20 h-20 rounded-full object-cover mb-4 border-2 border-emerald-100 shadow-xs">
                        <h3 class="text-base font-bold text-[#111111] font-heading">Rahul Yadav</h3>
                        <p class="text-xs text-[#666666] font-medium mt-1">Full Stack Developer</p>
                        <span class="inline-block text-[11px] font-bold text-[#00A651] bg-[#EAF7EE] px-3 py-1 rounded-full mt-3 border border-emerald-100">
                            8+ Years Exp.
                        </span>
                    </div>

                    <!-- Trainer 2 -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 text-center flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80"
                            alt="Neha Sharma" class="w-20 h-20 rounded-full object-cover mb-4 border-2 border-orange-100 shadow-xs">
                        <h3 class="text-base font-bold text-[#111111] font-heading">Neha Sharma</h3>
                        <p class="text-xs text-[#666666] font-medium mt-1">UI/UX Designer</p>
                        <span class="inline-block text-[11px] font-bold text-[#F58220] bg-[#FFF4EA] px-3 py-1 rounded-full mt-3 border border-orange-100">
                            6+ Years Exp.
                        </span>
                    </div>

                    <!-- Trainer 3 -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 text-center flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80"
                            alt="Arti Verma" class="w-20 h-20 rounded-full object-cover mb-4 border-2 border-emerald-100 shadow-xs">
                        <h3 class="text-base font-bold text-[#111111] font-heading">Arti Verma</h3>
                        <p class="text-xs text-[#666666] font-medium mt-1">Data Analyst</p>
                        <span class="inline-block text-[11px] font-bold text-[#00A651] bg-[#EAF7EE] px-3 py-1 rounded-full mt-3 border border-emerald-100">
                            7+ Years Exp.
                        </span>
                    </div>

                    <!-- Trainer 4 -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 text-center flex flex-col items-center">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=300&q=80"
                            alt="Pooja Singh" class="w-20 h-20 rounded-full object-cover mb-4 border-2 border-orange-100 shadow-xs">
                        <h3 class="text-base font-bold text-[#111111] font-heading">Pooja Singh</h3>
                        <p class="text-xs text-[#666666] font-medium mt-1">Digital Marketing Expert</p>
                        <span class="inline-block text-[11px] font-bold text-[#F58220] bg-[#FFF4EA] px-3 py-1 rounded-full mt-3 border border-orange-100">
                            5+ Years Exp.
                        </span>
                    </div>
                </div>

       

        <!-- 1️⃣2️⃣ READY TO BUILD YOUR TECH CAREER CTA SECTION (6px Border Radius & Refined Font Weight) -->
        <section id="ready-to-build-cta" class="py-16 sm:py-20 bg-white">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="p-10 sm:p-14 rounded-[6px] bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white text-center space-y-6 relative overflow-hidden shadow-xl border border-slate-700/60">

                    <!-- Decorative Background Circles -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-[#F58220]/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-[#00A651]/20 rounded-full blur-3xl"></div>

                    <span class="text-xs font-bold uppercase tracking-wider text-[#00A651]">START YOUR JOURNEY TODAY</span>

                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl font-semibold font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                        Ready To Build Your <span class="text-[#00A651] font-bold">Tech Career?</span>
                    </h2>

                    <p class="text-xs sm:text-base text-slate-300 font-normal max-w-xl mx-auto leading-relaxed">
                        Join 5000+ successful graduates. Enroll in industry-oriented diploma programs and build skills
                        that launch your career.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                        <a href="{{ route('admissions') }}"
                            class="bg-[#F58220] hover:bg-[#e07316] text-white px-8 py-3 rounded-[6px] text-xs font-semibold transition-all shadow-md hover:shadow-orange-500/20 cursor-pointer flex items-center gap-2">
                            <span>Apply Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <button onclick="openModal('brochureModal')"
                            class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-7 py-3 rounded-[6px] text-xs font-semibold transition-all cursor-pointer flex items-center gap-2">
                            <span>Download Brochure</span>
                            <i data-lucide="download" class="w-4 h-4 text-[#00A651]"></i>
                        </button>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')


    <!-- JavaScript Scripts for Modals & Lucide Icons -->
    <script>
        lucide.createIcons();

        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    </script>
</body>

</html>