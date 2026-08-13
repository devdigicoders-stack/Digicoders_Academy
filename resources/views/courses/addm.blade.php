<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title & Meta -->
    <title>Advanced Diploma in Digital Marketing (ADDM) - DigiCoders Academy</title>
    <meta name="description"
        content="Enroll in 1-Year ADDM Course at DigiCoders Academy. Master SEO, Google Ads, Meta Ads, Social Media Marketing, AI Marketing (ChatGPT, Canva AI) & Analytics.">
    <meta name="keywords"
        content="ADDM course Lucknow, Digital Marketing diploma Lucknow, SEO training, Google Ads Meta Ads course">

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

<body class="bg-[#FAFAFA] text-[#111111] antialiased selection:bg-[#F58220] selection:text-white pt-[100px]">

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <main class="w-full overflow-hidden">

        <!-- 1️⃣ HERO BANNER (Clean, Ultra-Spacious Hero Section) -->
        <section id="course-hero" class="relative w-full bg-white border-b border-slate-200/60 overflow-hidden py-14 lg:py-24 min-h-[420px] flex items-center">
            
            <!-- Background Image with Soft White Gradient Mask -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/course-students-banner.jpg') }}"
                    alt="DigiCoders ADDM Digital Marketing Lab" class="w-full h-full object-cover object-right opacity-90">
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
                        <span class="text-[#666666] font-bold">ADDM</span>
                    </nav>

                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-[6px] bg-[#EAF7EE] border border-emerald-200/80 text-[#00A651] text-[11px] font-bold tracking-wider uppercase">
                        <span>1 YEAR DIGITAL MARKETING DIPLOMA</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] tracking-tight leading-[1.15]">
                        Advanced Diploma in <br>
                        <span class="text-[#00A651]">Digital Marketing (ADDM)</span>
                    </h1>

                    <div class="space-y-2 max-w-xl">
                        <h2 class="text-base sm:text-lg font-bold text-[#111111]">Master Modern Performance Marketing & AI Strategies</h2>
                        <p class="text-xs sm:text-sm text-[#555555] leading-relaxed font-normal">
                            Learn SEO, Google & Meta Ads, Social Media Growth, AI Marketing (ChatGPT, Canva AI), Prompt Engineering, Email Marketing, and Analytics.
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


        <!-- 2️⃣ ABOUT ADDM SECTION (100% Match with Reference Screenshot) -->
        <section id="about-course" class="py-14 sm:py-20 bg-white relative">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">About ADDM</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left Paragraph Description -->
                    <div class="lg:col-span-5 space-y-4">
                        <p class="text-sm sm:text-base text-[#555555] leading-relaxed font-normal">
                            ADDM (Advanced Diploma in Digital Marketing) is a 1-Year master diploma covering SEO, Meta Ads, Google Ads, Content Marketing, Social Media Strategy, Email Automation, and Analytics.
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
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">1 Year</p>
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
                        
                        <!-- Tool 1: Google Ads -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 35.5L28 9L36 13.5L20.5 40L12.5 35.5Z" fill="#FBBC04"/>
                                <path d="M36 13.5L20.5 40L16.5 38L32 11.5L36 13.5Z" fill="#4285F4"/>
                                <circle cx="16.5" cy="37.5" r="5.5" fill="#34A853"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Google Ads</p>
                        </div>

                        <!-- Tool 2: Meta Ads -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.5 14C31.5 14 28.8 15.8 26.9 18.6L24 22.8L21.1 18.6C19.2 15.8 16.5 14 13.5 14C8.3 14 4 18.5 4 24C4 29.5 8.3 34 13.5 34C16.5 34 19.2 32.2 21.1 29.4L24 25.2L26.9 29.4C28.8 32.2 31.5 34 34.5 34C39.7 34 44 29.5 44 24C44 18.5 39.7 14 34.5 14Z" stroke="#0081FB" stroke-width="4" fill="none"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Meta Ads</p>
                        </div>

                        <!-- Tool 3: GA4 Analytics -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#FFF3E0"/>
                                <path d="M12 36V26C12 24.3 13.3 23 15 23C16.7 23 18 24.3 18 26V36H12Z" fill="#E65100"/>
                                <path d="M21 36V17C21 15.3 22.3 14 24 14C25.7 14 27 15.3 27 17V36H21Z" fill="#F57C00"/>
                                <path d="M30 36V12C30 10.3 31.3 9 33 9C34.7 9 36 10.3 36 12V36H30Z" fill="#FFB74D"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">GA4 Analytics</p>
                        </div>

                        <!-- Tool 4: SEO Search Console -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="20" fill="#EAF7EE"/>
                                <path d="M20 14L30 24L20 34" stroke="#00A651" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">SEO Tools</p>
                        </div>

                        <!-- Tool 5: Canva Pro -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-12 h-10 sm:w-14 sm:h-11 mx-auto shrink-0" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="50%" y="65%" dominant-baseline="middle" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="26" font-weight="900" fill="#00C4CC" font-style="italic">Canva</text>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Canva Pro</p>
                        </div>

                        <!-- Tool 6: WordPress -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="20" fill="#21759B"/>
                                <path d="M12 24C12 28.5 14.5 32.4 18.2 34.4L11.5 16.2C11.8 18.6 12 21.2 12 24ZM32.3 14.8C33.2 14.8 34 15.6 34 16.5C34 17.5 33.1 18.5 32.1 18.5H31.5L28.2 28.8L25.3 20L26.8 14.8H32.3ZM24 6C14.1 6 6 14.1 6 24C6 33.9 14.1 42 24 42C33.9 42 42 33.9 42 24C42 14.1 33.9 6 24 6Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">WordPress</p>
                        </div>

                        <!-- Tool 7: Mailchimp -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#FFE01B"/>
                                <path d="M24 10C16.3 10 10 16.3 10 24C10 31.7 16.3 38 24 38C31.7 38 38 31.7 38 24C38 16.3 31.7 10 24 10Z" fill="#241C15"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Mailchimp</p>
                        </div>

                        <!-- Tool 8: SEMrush -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#FFF3EB"/>
                                <path d="M24 10C16 10 12 18 12 24C12 30 16 38 24 38C32 38 36 30 36 24C36 18 32 10 24 10Z" fill="#F58220"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">SEMrush</p>
                        </div>

                        <!-- Tool 9: YouTube Studio -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#FF0000"/>
                                <path d="M34 24L18 33V15L34 24Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">YouTube</p>
                        </div>

                        <!-- Tool 10: ChatGPT / AI -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#7427CC"/>
                                <path d="M35.5 22.5C36.1 20.7 35.9 18.7 34.9 17.1C33.9 15.5 32.2 14.4 30.3 14.1C29.7 12.3 28.4 10.9 26.7 10.1C25 9.3 23 9.3 21.3 10.1C19.8 8.9 17.7 8.5 15.8 9.1C13.9 9.7 12.4 11.2 11.7 13.1C10 13.8 8.7 15.2 8.1 17C7.5 18.8 7.8 20.8 8.8 22.4C8.2 24.2 8.4 26.2 9.4 27.8C10.4 29.4 12.1 30.5 14 30.8C14.6 32.6 15.9 34 17.6 34.8C19.3 35.6 21.3 35.6 23 34.8C24.5 36 26.6 36.4 28.5 35.8C30.4 35.2 31.9 33.7 32.6 31.8C34.3 31.1 35.6 29.7 36.2 27.9C36.8 26.1 36.5 24.1 35.5 22.5Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">ChatGPT AI</p>
                        </div>

                        <!-- Tool 11: Hootsuite -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="20" fill="#002B49"/>
                                <circle cx="18" cy="20" r="3" fill="white"/>
                                <circle cx="30" cy="20" r="3" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Hootsuite</p>
                        </div>

                        <!-- Tool 12: CapCut Video -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#000000"/>
                                <path d="M14 16L24 24L14 32V16ZM34 16L24 24L34 32V16Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">CapCut Video</p>
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
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Digital Marketing Intro</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Branding Fundamentals</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Consumer Buying Journey</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Marketing Strategy & Funnels</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Competitor Research</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 2 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">SEO Mastery & Search Console</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>On-Page SEO Optimization</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Off-Page Backlink Building</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Technical SEO Audit</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Keyword Research & Intent</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 3 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Google Ads & Meta Ads</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Google Search & Display Ads</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Meta Ads Manager & Pixels</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>YouTube Video Campaigns</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>A/B Testing & ROAS Optimization</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 4 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Social Media Marketing</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Instagram Organic Growth</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Facebook Community Marketing</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>LinkedIn B2B Lead Gen</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Content Calendar & Planning</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 5 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">AI Marketing & Canva</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>ChatGPT Copywriting Prompts</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Canva AI Ad Creatives</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>CapCut Reel Editing</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Prompt Engineering Workflows</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 6 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Analytics & Email Automation</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Google Analytics GA4 Setup</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Mailchimp Email Drips</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Affiliate Marketing Strategy</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Conversion Rate Optimization</span></li>
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
                            <span>Complete SEO Audit</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Google Ads Campaign</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Social Media Ad Campaign</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Content Calendar</span>
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
                            <i data-lucide="search" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">SEO Executive</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="trending-up" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Digital Marketer</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="target" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">PPC Specialist</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="share-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Social Media Manager</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="edit-3" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Content Strategist</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Performance Marketer</h3>
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
                            Ready to Start Your <br>
                            <span class="text-[#00A651]">ADDM Marketing Journey?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Join DigiCoders Academy and master 1-year digital performance marketing.
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
