<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title & Meta -->
    <title>Diploma in Computer Applications (DCA) - DigiCoders Academy</title>
    <meta name="description"
        content="Enroll in 6-Month DCA Course at DigiCoders Academy. Master Computer Fundamentals, Windows OS, MS Office, Internet, Tally Prime, Canva & AI Tools with 100% practical training.">
    <meta name="keywords"
        content="DCA course Lucknow, Diploma in Computer Applications, MS Office course, computer diploma">

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
                    alt="DigiCoders Lab Classroom" class="w-full h-full object-cover object-right opacity-90">
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
                        <span class="text-[#666666] font-bold">DCA</span>
                    </nav>

                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-[6px] bg-[#EAF7EE] border border-emerald-200/80 text-[#00A651] text-[11px] font-bold tracking-wider uppercase">
                        <span>MOST POPULAR COURSE</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] tracking-tight leading-[1.15]">
                        Diploma in <br>
                        <span class="text-[#00A651]">Computer Applications</span>
                    </h1>

                    <div class="space-y-2 max-w-xl">
                        <h2 class="text-base sm:text-lg font-bold text-[#111111]">Build Your Digital Skills, Build Your Future</h2>
                        <p class="text-xs sm:text-sm text-[#555555] leading-relaxed font-normal">
                            Master essential computer skills with practical training and live projects for a successful career.
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
                            <i data-lucide="download" class="w-4 h-4 text-[#F58220]"></i>
                            <span>Download Syllabus</span>
                        </button>
                    </div>

                </div>
            </div>
        </section>


        <!-- 2️⃣ ABOUT DCA SECTION (100% Match with Reference Screenshot) -->
        <section id="about-course" class="py-14 sm:py-20 bg-white relative">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">About DCA</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left Paragraph Description -->
                    <div class="lg:col-span-5 space-y-4">
                        <p class="text-sm sm:text-base text-[#555555] leading-relaxed font-normal">
                            DCA (Diploma in Computer Applications) is a value-packed 6 Months professional course designed for beginners. It helps you learn computer fundamentals, MS Office, internet and digital tools with practical hands-on experience.
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
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">10th / 12th</p>
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
                        
                        <!-- Tool 1: Windows -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H41.6V41.6H0V0Z" fill="#0078D4"/>
                                <path d="M46.4 0H88V41.6H46.4V0Z" fill="#0078D4"/>
                                <path d="M0 46.4H41.6V88H0V46.4Z" fill="#0078D4"/>
                                <path d="M46.4 46.4H88V88H46.4V46.4Z" fill="#0078D4"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Windows</p>
                        </div>

                        <!-- Tool 2: MS Word -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#185ABD"/>
                                <path d="M28 12H40V36H28V12Z" fill="#2B7CD3"/>
                                <path d="M28 18H40V24H28V18Z" fill="#104A9E"/>
                                <path d="M28 30H40V36H28V30Z" fill="#104A9E"/>
                                <path d="M6 10L24 6V42L6 38V10Z" fill="#104A9E"/>
                                <path d="M12.5 17L14.7 27.5H16.8L19.2 19.5L21.6 27.5H23.7L25.9 17H23.7L22.5 23.5L20.1 15.5H18.3L15.9 23.5L14.7 17H12.5Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">MS Word</p>
                        </div>

                        <!-- Tool 3: MS Excel -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#107C41"/>
                                <path d="M28 12H40V36H28V12Z" fill="#1D9C55"/>
                                <path d="M28 18H40V24H28V18Z" fill="#0E5C2F"/>
                                <path d="M28 30H40V36H28V30Z" fill="#0E5C2F"/>
                                <path d="M6 10L24 6V42L6 38V10Z" fill="#0E5C2F"/>
                                <path d="M13 17L17 24L13 31H16L18.5 26.5L21 31H24L20 24L24 17H21L18.5 21.5L16 17H13Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">MS Excel</p>
                        </div>

                        <!-- Tool 4: MS PowerPoint -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#C43E1C"/>
                                <path d="M28 12H40V36H28V12Z" fill="#E25C38"/>
                                <path d="M28 18H40V24H28V18Z" fill="#9B2C12"/>
                                <path d="M28 30H40V36H28V30Z" fill="#9B2C12"/>
                                <path d="M6 10L24 6V42L6 38V10Z" fill="#9B2C12"/>
                                <path d="M13 17H18.5C20.5 17 22 18.2 22 20.2C22 22.2 20.5 23.5 18.5 23.5H15.5V31H13V17ZM15.5 19V21.5H18C19 21.5 19.8 21 19.8 20.25C19.8 19.5 19 19 18 19H15.5Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">MS PowerPoint</p>
                        </div>

                        <!-- Tool 5: Tally -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-12 h-10 sm:w-14 sm:h-11 mx-auto shrink-0" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="50%" y="65%" dominant-baseline="middle" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="28" font-weight="900" fill="#111111" font-style="italic">Tally</text>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Tally</p>
                        </div>

                        <!-- Tool 6: Canva -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-12 h-10 sm:w-14 sm:h-11 mx-auto shrink-0" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="50%" y="65%" dominant-baseline="middle" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="26" font-weight="900" fill="#00C4CC" font-style="italic">Canva</text>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Canva</p>
                        </div>

                        <!-- Tool 7: Internet / Chrome -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24" cy="24" r="20" fill="#4285F4"/>
                                <circle cx="24" cy="24" r="8" fill="white"/>
                                <circle cx="24" cy="24" r="6" fill="#1A73E8"/>
                                <path d="M24 16H40.7C37.2 9.7 30.5 5.5 23.5 5.5C18.2 5.5 13.2 7.7 9.8 11.5L18.1 26L24 16Z" fill="#EA4335"/>
                                <path d="M9.8 11.5C6.4 15.3 4.5 20.3 4.5 25.5C4.5 32.5 8.7 38.8 15 41.7L27 21.5L9.8 11.5Z" fill="#FBBC05"/>
                                <path d="M24 32L15.7 17.5L15 41.7C20.5 44 26.8 43.5 31.8 40.5C36.8 37.5 40.2 32.5 41.2 27L24 32Z" fill="#34A853"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Internet</p>
                        </div>

                        <!-- Tool 8: Email / Gmail -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 38H14V22L6 16V34C6 36.2 7.8 38 10 38Z" fill="#4285F4"/>
                                <path d="M38 38H34V22L42 16V34C42 36.2 40.2 38 38 38Z" fill="#34A853"/>
                                <path d="M34 14V22L42 16L34 14Z" fill="#FBBC04"/>
                                <path d="M14 14V22L6 16L14 14Z" fill="#C5221F"/>
                                <path d="M14 22L24 29.5L34 22V14L24 21.5L14 14V22Z" fill="#EA4335"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Email</p>
                        </div>

                        <!-- Tool 9: Google Drive -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 6L6 23.3L13.8 36.7L23.8 19.4L16 6Z" fill="#0066DA"/>
                                <path d="M32 6H16L23.8 19.4H39.8L32 6Z" fill="#00AC47"/>
                                <path d="M23.8 19.4L13.8 36.7H29.8L39.8 19.4H23.8Z" fill="#EA4335"/>
                                <path d="M32 6L39.8 19.4H23.8L16 6H32Z" fill="#FFBA00"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Google Drive</p>
                        </div>

                        <!-- Tool 10: Photoshop Basics -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#001E36"/>
                                <rect x="2" y="2" width="44" height="44" rx="8" stroke="#31A8FF" stroke-width="2.5" fill="none"/>
                                <path d="M13 15H19.5C22 15 23.8 16.3 23.8 18.8C23.8 21.3 22 22.5 19.5 22.5H16.2V31H13V15ZM16.2 17.5V20H19C20.3 20 20.8 19.5 20.8 18.8C20.8 18 20.2 17.5 19 17.5H16.2Z" fill="#31A8FF"/>
                                <path d="M25.5 27.2C26.5 26.3 28.2 25.5 30 25.5C31.5 25.5 32.2 26.2 32.2 27.1C32.2 28.1 31.4 28.6 29.8 29.1L28.3 29.6C26.1 30.3 25 31.5 25 33.3C25 35.7 27.2 37 30.2 37C32.2 37 34 36.3 35 35.3L33.8 33.5C32.8 34.3 31.4 34.8 30.1 34.8C28.8 34.8 28 34.2 28 33.4C28 32.4 28.9 31.9 30.4 31.4L32 30.9C34.3 30.1 35.4 29 35.4 27.1C35.4 24.8 33.2 23.5 30.1 23.5C28.1 23.5 26.4 24.3 25.2 25.2L25.5 27.2Z" fill="#31A8FF"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Photoshop</p>
                        </div>

                        <!-- Tool 11: Typing -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#EFF6FF"/>
                                <rect x="6" y="8" width="36" height="24" rx="4" fill="#2563EB"/>
                                <path d="M12 14H16M20 14H24M28 14H32M36 14H36.01M12 18H16M20 18H28M32 18H36M12 22H36" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <path d="M18 32L14 40H34L30 32" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Typing</p>
                        </div>

                        <!-- Tool 12: AI Tools -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#7427CC"/>
                                <path d="M35.5 22.5C36.1 20.7 35.9 18.7 34.9 17.1C33.9 15.5 32.2 14.4 30.3 14.1C29.7 12.3 28.4 10.9 26.7 10.1C25 9.3 23 9.3 21.3 10.1C19.8 8.9 17.7 8.5 15.8 9.1C13.9 9.7 12.4 11.2 11.7 13.1C10 13.8 8.7 15.2 8.1 17C7.5 18.8 7.8 20.8 8.8 22.4C8.2 24.2 8.4 26.2 9.4 27.8C10.4 29.4 12.1 30.5 14 30.8C14.6 32.6 15.9 34 17.6 34.8C19.3 35.6 21.3 35.6 23 34.8C24.5 36 26.6 36.4 28.5 35.8C30.4 35.2 31.9 33.7 32.6 31.8C34.3 31.1 35.6 29.7 36.2 27.9C36.8 26.1 36.5 24.1 35.5 22.5Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">AI Tools</p>
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
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Computer Fundamentals</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Introduction to Computers</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Hardware & Software</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Number System</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Operating System Basics</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Computer Security</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 2 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Windows Operating System</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Windows Installation</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>File & Folder Management</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Control Panel</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>System Settings</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Backup & Restore</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 3 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Microsoft Word</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Professional Formatting</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Mail Merge</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Tables & Reports</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Page Layout</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Resume Design</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 4 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Microsoft Excel</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Formulas & Functions</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Charts & Graphs</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Pivot Table</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Conditional Formatting</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Dashboard Basics</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 5 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Microsoft PowerPoint</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Professional Presentations</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Animations & Transitions</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>SmartArt</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Infographics</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 6 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Internet & Digital Tools</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Google Drive & Docs</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Email & Online Safety</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Cloud Storage Basics</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Canva & AI Tools</span></li>
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
                            <span>Resume Design</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Invoice Generator</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Salary Sheet</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Presentation</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Office Automation</span>
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
                            <i data-lucide="monitor" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Computer Operator</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Office Executive</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="file-spreadsheet" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Data Entry Operator</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="user-check" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Back Office Executive</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="user" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Reception Executive</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="headphones" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Customer Support</h3>
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
                            <span class="text-[#00A651]">Computer Learning Journey?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Join DigiCoders Academy and build a brighter future with digital skills.
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
