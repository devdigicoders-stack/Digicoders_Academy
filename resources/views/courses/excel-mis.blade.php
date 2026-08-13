<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title & Meta -->
    <title>Advanced Excel & MIS Reporting Course - DigiCoders Academy</title>
    <meta name="description"
        content="Master Advanced Excel & MIS Reporting at DigiCoders Academy. Learn VLOOKUP, XLOOKUP, Pivot Tables, Dashboards, Power Query, Macros & Data Analytics.">
    <meta name="keywords"
        content="Advanced Excel course Lucknow, MIS Reporting training, Excel Dashboard course, Data Analyst Excel">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / WhatsApp / Facebook Link Sharing Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Advanced Excel & MIS Reporting Course | DigiCoders Academy">
    <meta property="og:description"
        content="Master Advanced Excel & MIS Reporting at DigiCoders Academy Lucknow. Learn Pivot Tables, Dashboards, Power Query, Macros & Data Analytics with 100% placement support.">
    <meta property="og:image" content="{{ asset('images/courses/advanceexel.jpg') }}">
    <meta property="og:image:secure_url" content="{{ asset('images/courses/advanceexel.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="DigiCoders Academy">
    <link rel="image_src" href="{{ asset('images/courses/advanceexel.jpg') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Advanced Excel & MIS Reporting Course | DigiCoders Academy">
    <meta name="twitter:description"
        content="Master Advanced Excel & MIS Reporting at DigiCoders Academy Lucknow. Learn Pivot Tables, Dashboards, Power Query, Macros & Data Analytics.">
    <meta name="twitter:image" content="{{ asset('images/courses/advanceexel.jpg') }}">

    <!-- Google Fonts & Lucide Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Vite Asset Bundling -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        h1, h2, h3, h4, .font-heading {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-[#FAFAFA] text-[#111111] antialiased selection:bg-[#00A651] selection:text-white pt-[100px]">

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <main class="w-full overflow-hidden">

        <!-- 1️⃣ HERO BANNER (Clean, Ultra-Spacious Hero Section) -->
        <section id="course-hero" class="relative w-full bg-white border-b border-slate-200/60 overflow-hidden py-14 lg:py-24 min-h-[420px] flex items-center">
            
            <!-- Background Image with Soft White Gradient Mask -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/course-students-banner.jpg') }}"
                    alt="DigiCoders Excel MIS Lab" class="w-full h-full object-cover object-right opacity-90">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 sm:via-white/90 to-white/20 lg:to-transparent"></div>
            </div>

            <div class="relative z-10 w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl space-y-5">
                    
                    <!-- Breadcrumb -->
                    <nav class="flex items-center gap-2 text-xs font-semibold text-[#666666]">
                        <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <a href="{{ route('courses.index') }}" class="hover:text-[#F58220] transition-colors">Courses</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <span class="text-[#666666] font-bold">Advanced Excel & MIS</span>
                    </nav>

                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-[6px] bg-[#EAF7EE] border border-emerald-200/80 text-[#00A651] text-[11px] font-bold tracking-wider uppercase">
                        <span>DATA ANALYTICS DIPLOMA</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] tracking-tight leading-[1.15]">
                        Advanced Excel & <br>
                        <span class="text-[#00A651]">MIS Reporting Course</span>
                    </h1>

                    <div class="space-y-2 max-w-xl">
                        <h2 class="text-base sm:text-lg font-bold text-[#111111]">Master Corporate Data Reporting, Dashboards & Analytics</h2>
                        <p class="text-xs sm:text-sm text-[#555555] leading-relaxed font-normal">
                            Master VLOOKUP, XLOOKUP, INDEX-MATCH, Pivot Tables, Interactive Dashboards, Power Query, Macros, and Automated MIS Reporting.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('admissions') }}"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs font-bold transition-all shadow-md hover:shadow-emerald-500/20 cursor-pointer flex items-center gap-2">
                            <span>Apply Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <button onclick="openModal('brochureModal')"
                            class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300/90 px-6 py-3.5 rounded-[6px] text-xs font-bold transition-all cursor-pointer flex items-center gap-2 shadow-sm">
                            <i data-lucide="download" class="w-4 h-4 text-[#555555]"></i>
                            <span>Download Syllabus</span>
                        </button>
                    </div>

                </div>
            </div>
        </section>


        <!-- 2️⃣ ABOUT EXCEL MIS SECTION (100% Match with Reference Screenshot) -->
        <section id="about-course" class="py-14 sm:py-20 bg-white relative">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">About Advanced Excel & MIS</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left Paragraph Description -->
                    <div class="lg:col-span-5 space-y-4">
                        <p class="text-sm sm:text-base text-[#555555] leading-relaxed font-normal">
                            Advanced Excel & MIS Reporting is a specialized 6-Month course designed for aspiring Data Analysts, MIS Executives, and Finance Professionals. You will learn advanced lookup functions, Pivot Charts, Power Query data cleaning, and automated corporate dashboards.
                        </p>
                    </div>

                    <!-- Right Unified White Card Container with 4 Stats -->
                    <div class="lg:col-span-7">
                        <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md">
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                                
                                <!-- Stat 1: Duration -->
                                <div class="space-y-3">
                                    <div class="w-12 h-12 rounded-[6px] bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mx-auto">
                                        <i data-lucide="calendar" class="w-6 h-6"></i>
                                    </div>
                                    <div class="space-y-0.5">
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">6 Months</p>
                                        <p class="text-[11px] text-[#777777] font-medium">Duration</p>
                                    </div>
                                </div>

                                <!-- Stat 2: Eligibility -->
                                <div class="space-y-3">
                                    <div class="w-12 h-12 rounded-[6px] bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mx-auto">
                                        <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                                    </div>
                                    <div class="space-y-0.5">
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">12th / Grad</p>
                                        <p class="text-[11px] text-[#777777] font-medium">Eligibility</p>
                                    </div>
                                </div>

                                <!-- Stat 3: Mode -->
                                <div class="space-y-3">
                                    <div class="w-12 h-12 rounded-[6px] bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mx-auto">
                                        <i data-lucide="laptop" class="w-6 h-6"></i>
                                    </div>
                                    <div class="space-y-0.5">
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Offline / Online</p>
                                        <p class="text-[11px] text-[#777777] font-medium">Mode</p>
                                    </div>
                                </div>

                                <!-- Stat 4: Practical -->
                                <div class="space-y-3">
                                    <div class="w-12 h-12 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center mx-auto">
                                        <i data-lucide="award" class="w-6 h-6"></i>
                                    </div>
                                    <div class="space-y-0.5">
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">100%</p>
                                        <p class="text-[11px] text-[#777777] font-medium">Practical</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>



        <!-- 3️⃣ KEY COURSE HIGHLIGHTS (100% Match with Reference Screenshot) -->
        <section id="key-highlights" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Key Course Highlights</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                    
                    <!-- Card 1: Live Practical -->
                    <div class="p-8 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all text-center space-y-4">
                        <div class="w-14 h-14 rounded-[6px] bg-[#EAF7EE] text-[#00A651] flex items-center justify-center mx-auto">
                            <i data-lucide="tv-2" class="w-7 h-7"></i>
                        </div>
                        <div class="space-y-1.5">
                            <h3 class="text-base font-extrabold text-[#111111]">Live Practical</h3>
                            <p class="text-xs text-[#666666] leading-relaxed max-w-[200px] mx-auto">
                                Learn by doing with real world examples
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Govt. Recognized -->
                    <div class="p-8 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all text-center space-y-4">
                        <div class="w-14 h-14 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center mx-auto">
                            <i data-lucide="file-check-2" class="w-7 h-7"></i>
                        </div>
                        <div class="space-y-1.5">
                            <h3 class="text-base font-extrabold text-[#111111]">Govt. Recognized</h3>
                            <p class="text-xs text-[#666666] leading-relaxed max-w-[200px] mx-auto">
                                Industry valuable certificate
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Placement Support -->
                    <div class="p-8 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all text-center space-y-4">
                        <div class="w-14 h-14 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center mx-auto">
                            <i data-lucide="briefcase" class="w-7 h-7"></i>
                        </div>
                        <div class="space-y-1.5">
                            <h3 class="text-base font-extrabold text-[#111111]">Placement Support</h3>
                            <p class="text-xs text-[#666666] leading-relaxed max-w-[200px] mx-auto">
                                Resume & job assistance
                            </p>
                        </div>
                    </div>

                    <!-- Card 4: 100% Practical -->
                    <div class="p-8 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all text-center space-y-4">
                        <div class="w-14 h-14 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center mx-auto">
                            <i data-lucide="users-2" class="w-7 h-7"></i>
                        </div>
                        <div class="space-y-1.5">
                            <h3 class="text-base font-extrabold text-[#111111]">100% Practical</h3>
                            <p class="text-xs text-[#666666] leading-relaxed max-w-[200px] mx-auto">
                                Live projects & assignments
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>



        <!-- 4️⃣ SOFTWARE & TOOLS COVERED (100% Match with Reference Screenshot using Brand Logos) -->
        <section id="software-tools" class="py-14 sm:py-20 bg-white relative border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Software & Tools Covered</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <!-- Single Unified White Card Container wrapping 12 Tools (2 Rows of 6) -->
                <div class="p-6 sm:p-8 lg:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-md">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-5">
                        
                        <!-- Tool 1: MS Excel 365 -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#107C41"/>
                                <path d="M28 12H40V36H28V12Z" fill="#1D9C55"/>
                                <path d="M28 18H40V24H28V18Z" fill="#0E5C2F"/>
                                <path d="M28 30H40V36H28V30Z" fill="#0E5C2F"/>
                                <path d="M6 10L24 6V42L6 38V10Z" fill="#0E5C2F"/>
                                <path d="M13 17L17 24L13 31H16L18.5 26.5L21 31H24L20 24L24 17H21L18.5 21.5L16 17H13Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">MS Excel 365</p>
                        </div>

                        <!-- Tool 2: Power Query -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#FFF3EB"/>
                                <path d="M14 14C14 11.8 18.5 10 24 10C29.5 10 34 11.8 34 14V34C34 36.2 29.5 38 24 38C18.5 38 14 36.2 14 34V14Z" stroke="#F58220" stroke-width="2.5" fill="none"/>
                                <path d="M14 22C14 24.2 18.5 26 24 26C29.5 26 34 24.2 34 22M14 30C14 32.2 18.5 34 24 34C29.5 34 34 32.2 34 30" stroke="#F58220" stroke-width="2.5"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Power Query</p>
                        </div>

                        <!-- Tool 3: Power Pivot -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#0078D4"/>
                                <path d="M14 14H34V34H14V14Z" fill="white" fill-opacity="0.3"/>
                                <path d="M14 24H34M24 14V34" stroke="white" stroke-width="2.5"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Power Pivot</p>
                        </div>

                        <!-- Tool 4: Power BI -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="24" width="7" height="16" rx="2" fill="#F2C811"/>
                                <rect x="20.5" y="16" width="7" height="24" rx="2" fill="#F2C811"/>
                                <rect x="31" y="8" width="7" height="32" rx="2" fill="#F2C811"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Power BI</p>
                        </div>

                        <!-- Tool 5: VBA Macros -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#7C3AED"/>
                                <path d="M14 17L22 24L14 31M24 31H34" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">VBA Macros</p>
                        </div>

                        <!-- Tool 6: Google Sheets -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#0F9D58"/>
                                <path d="M14 14H34V34H14V14Z" fill="white"/>
                                <path d="M18 20H30M18 24H30M18 28H30" stroke="#0F9D58" stroke-width="2"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Google Sheets</p>
                        </div>

                        <!-- Tool 7: Data Cleaner -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#0891B2"/>
                                <path d="M14 14H34L26 24V34L22 36V24L14 14Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Data Cleaner</p>
                        </div>

                        <!-- Tool 8: Dashboards -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="18" fill="#0284C7"/>
                                <path d="M24 6V24H42C42 14.1 33.9 6 24 6Z" fill="#38BDF8"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Dashboards</p>
                        </div>

                        <!-- Tool 9: SQL Basics -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#00758F"/>
                                <path d="M14 14C14 11.8 18.5 10 24 10C29.5 10 34 11.8 34 14V34C34 36.2 29.5 38 24 38C18.5 38 14 36.2 14 34V14Z" stroke="white" stroke-width="2.5" fill="none"/>
                                <path d="M14 22C14 24.2 18.5 26 24 26C29.5 26 34 24.2 34 22M14 30C14 32.2 18.5 34 24 34C29.5 34 34 32.2 34 30" stroke="white" stroke-width="2.5"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">SQL Basics</p>
                        </div>

                        <!-- Tool 10: Pivot Charts -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#4F46E5"/>
                                <path d="M12 36L22 24L28 30L36 16" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Pivot Charts</p>
                        </div>

                        <!-- Tool 11: MS Access -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#A4373A"/>
                                <path d="M14 14H34V34H14V14Z" stroke="white" stroke-width="2.5" fill="none"/>
                                <path d="M24 18L30 30H18L24 18Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">MS Access</p>
                        </div>

                        <!-- Tool 12: ChatGPT for Data -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#7427CC"/>
                                <path d="M35.5 22.5C36.1 20.7 35.9 18.7 34.9 17.1C33.9 15.5 32.2 14.4 30.3 14.1C29.7 12.3 28.4 10.9 26.7 10.1C25 9.3 23 9.3 21.3 10.1C19.8 8.9 17.7 8.5 15.8 9.1C13.9 9.7 12.4 11.2 11.7 13.1C10 13.8 8.7 15.2 8.1 17C7.5 18.8 7.8 20.8 8.8 22.4C8.2 24.2 8.4 26.2 9.4 27.8C10.4 29.4 12.1 30.5 14 30.8C14.6 32.6 15.9 34 17.6 34.8C19.3 35.6 21.3 35.6 23 34.8C24.5 36 26.6 36.4 28.5 35.8C30.4 35.2 31.9 33.7 32.6 31.8C34.3 31.1 35.6 29.7 36.2 27.9C36.8 26.1 36.5 24.1 35.5 22.5Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">AI for Excel</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>



        <!-- 5️⃣ COURSE MODULES (100% Match with Reference Screenshot) -->
        <section id="course-modules" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Course Modules</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    
                    <!-- Module Card 1 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">1</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Excel Basics to Advanced</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Cell Formatting & Shortcuts</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Logical Functions (IF, AND, OR)</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Text, Date & Time Formulas</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Conditional Formatting Rules</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 2 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Lookup & Reference Functions</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>VLOOKUP & HLOOKUP Mastery</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Modern XLOOKUP Formula</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>INDEX & MATCH Combinations</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>OFFSET & INDIRECT Functions</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 3 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Pivot Tables & Analytics</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Summarizing Large Datasets</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Calculated Fields & Items</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Interactive Pivot Charts</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Slicers & Timelines</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 4 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Interactive MIS Dashboards</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Dynamic Corporate KPI Cards</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Advanced Chart Customization</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Executive Summary Reports</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Form Controls & Buttons</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 5 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Power Query ETL</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Data Cleaning & Transformation</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Merging & Appending Files</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Automated Data Pipelines</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Importing CSV & SQL Sources</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 6 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">VBA Macros & Automation</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Macro Recording & Editing</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>VBA Loops & Conditional Code</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Automated Email Dispatch</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>One-Click Report Generation</span></li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>

        <!-- 6️⃣ LIVE PROJECTS (100% Match with Reference Screenshot) -->
        <section id="live-projects" class="py-14 sm:py-20 bg-white relative border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Live Projects</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <!-- Green Banner Container with Checkmarks -->
                <div class="p-6 sm:p-8 rounded-[6px] bg-[#EAF7EE] border border-[#00A651]/20">
                    <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10">
                        
                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Corporate Sales Dashboard</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Attendance & Leave Tracker</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Automated Payroll Calculator</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Real-Time Inventory Tracker</span>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- 7️⃣ CAREER OPPORTUNITIES (100% Match with Reference Screenshot) -->
        <section id="career-opportunities" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Career Opportunities</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    
                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">MIS Executive</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="pie-chart" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Data Analyst</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="file-text" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Reporting Analyst</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Operations Manager</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="table" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Financial Modeler</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="calculator" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Business Analyst</h3>
                    </div>

                </div>

            </div>
        </section>



        <!-- 8️⃣ ADMISSION CTA BANNER (Enlarged Text & Image, 6px Rounded Buttons, Compact Height) -->
        <section id="admission-cta" class="py-10 sm:py-12 bg-white border-t border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 p-7 sm:p-10 lg:p-12 overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8 md:gap-12">
                    
                    <!-- Background Decorative Soft Green Blob Behind Right Image -->
                    <div class="absolute -right-10 -bottom-10 w-[500px] h-[500px] bg-[#EAF7EE] rounded-full blur-2xl pointer-events-none opacity-85 z-0"></div>
                    
                    <!-- Left Text & Action Buttons -->
                    <div class="relative z-10 space-y-4 text-center max-w-2xl mx-auto md:mx-0 md:text-left">
                        <h2 class="text-3xl sm:text-4xl lg:text-[40px] font-extrabold font-heading text-[#111111] leading-[1.15] tracking-tight">
                            Ready to Master <br>
                            <span class="text-[#00A651]">Advanced Excel & MIS?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Join DigiCoders Academy and build automated corporate reports & dashboards.
                        </p>

                        <!-- Action Buttons with 6px Border Radius -->
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-4 pt-2">
                            <a href="{{ route('admissions') }}"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs font-bold transition-all shadow-md cursor-pointer flex items-center gap-2">
                                <span>Apply Now</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>

                            <a href="{{ route('contact') }}"
                                class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-6 py-3.5 rounded-[6px] text-xs font-bold transition-all cursor-pointer flex items-center gap-2 shadow-2xs">
                                <i data-lucide="headset" class="w-4 h-4 text-[#111111]"></i>
                                <span>Talk to Expert</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Graphic Image (Enlarged Student Image with Blob) -->
                    <div class="relative z-10 shrink-0 w-80 sm:w-96 md:w-[440px] lg:w-[480px] flex justify-center md:justify-end -mb-10 sm:-mb-14 lg:-mb-16">
                        <!-- Soft Green Organic Blob Shape behind student -->
                        <div class="absolute inset-0 bg-[#EAF7EE] rounded-full scale-95 -z-10 transform translate-y-6"></div>
                        <img src="{{ asset('images/cta-student.png') }}"
                            alt="DigiCoders Academy Student" class="w-full h-auto object-contain drop-shadow-xl relative z-10">
                    </div>

                </div>
            </div>
        </section>

        <!-- 9️⃣ FREQUENTLY ASKED QUESTIONS -->
        @if(isset($faqs) && $faqs->count() > 0)
        <section id="course-faqs" class="py-14 sm:py-20 bg-white border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Frequently Asked Questions</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    @foreach($faqs as $index => $fItem)
                    <div class="rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 overflow-hidden shadow-2xs">
                        <button onclick="toggleFaq('crs-{{ $fItem->id }}')" class="w-full p-5 text-left flex items-center justify-between font-extrabold text-sm text-[#111111] font-heading cursor-pointer hover:bg-slate-100/50 transition-colors">
                            <span>{{ $index + 1 }}. {{ $fItem->question }}</span>
                            <i data-lucide="chevron-down" id="faq-icon-crs-{{ $fItem->id }}" class="w-4 h-4 text-[#F58220] transition-transform duration-300"></i>
                        </button>
                        <div id="faq-ans-crs-{{ $fItem->id }}" class="hidden px-5 pb-5 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-200/60 pt-3">
                            {{ $fItem->answer }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <script>
            function toggleFaq(id) {
                const ans = document.getElementById(`faq-ans-${id}`);
                const icon = document.getElementById(`faq-icon-${id}`);
                if (ans && icon) {
                    if (ans.classList.contains('hidden')) {
                        ans.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        ans.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            }
        </script>
        @endif

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <!-- Lucide Icons Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>
