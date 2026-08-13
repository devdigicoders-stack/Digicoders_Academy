<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title & Meta -->
    <title>Advanced Diploma in Web Designing (ADWD) - DigiCoders Academy</title>
    <meta name="description"
        content="Enroll in 1-Year ADWD Course at DigiCoders Academy. Master Figma UI/UX, HTML5, CSS3, Bootstrap, Tailwind CSS, JavaScript ES6, React.js & GitHub with 100% placement support.">
    <meta name="keywords"
        content="ADWD course Lucknow, Advanced Diploma Web Designing, React js course Lucknow, Figma UI UX course">

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
                    alt="DigiCoders ADWD Full Stack Lab" class="w-full h-full object-cover object-right opacity-90">
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
                        <span class="text-[#666666] font-bold">ADWD</span>
                    </nav>

                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-[6px] bg-[#EAF7EE] border border-emerald-200/80 text-[#00A651] text-[11px] font-bold tracking-wider uppercase">
                        <span>1 YEAR ADVANCED WEB DIPLOMA</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] tracking-tight leading-[1.15]">
                        Advanced Diploma in <br>
                        <span class="text-[#00A651]">Web Designing (ADWD)</span>
                    </h1>

                    <div class="space-y-2 max-w-xl">
                        <h2 class="text-base sm:text-lg font-bold text-[#111111]">Become a Certified UI/UX & React Frontend Engineer</h2>
                        <p class="text-xs sm:text-sm text-[#555555] leading-relaxed font-normal">
                            Master Figma UI design, HTML5, CSS3, Bootstrap, Tailwind, JavaScript ES6, React.js, API integration, and live Vercel/Netlify hosting.
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


        <!-- 2️⃣ ABOUT ADWD SECTION (100% Match with Reference Screenshot) -->
        <section id="about-course" class="py-14 sm:py-20 bg-white relative">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-10 sm:mb-14">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">About ADWD</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    
                    <!-- Left Paragraph Description -->
                    <div class="lg:col-span-5 space-y-4">
                        <p class="text-sm sm:text-base text-[#555555] leading-relaxed font-normal">
                            ADWD (Advanced Diploma in Web Designing) is a 1-Year master program for aspiring frontend & UI/UX developers. Learn HTML5, CSS3, Tailwind, JavaScript, React.js, and live project deployment.
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
                                        <p class="text-xs sm:text-sm font-extrabold text-[#111111]">12th Pass</p>
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
                        
                        <!-- Tool 1: HTML5 -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5L11.5 39L24 43L36.5 39L40 5H8Z" fill="#E44D26"/>
                                <path d="M24 8V39.5L33.5 36.5L36.5 8H24Z" fill="#F16529"/>
                                <path d="M24 16H15.5L16 21.5H24V16ZM24 27H16.5L17 32L24 34V27Z" fill="#E6E6E6"/>
                                <path d="M24 16V21.5H32L31.5 27H24V34L31 32L31.8 21.5H24V16Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">HTML5</p>
                        </div>

                        <!-- Tool 2: CSS3 -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5L11.5 39L24 43L36.5 39L40 5H8Z" fill="#264DE4"/>
                                <path d="M24 8V39.5L33.5 36.5L36.5 8H24Z" fill="#2965F1"/>
                                <path d="M24 16H15.5L16 21.5H24V16ZM24 27H16.5L17 32L24 34V27Z" fill="#E6E6E6"/>
                                <path d="M24 16V21.5H32L31.5 27H24V34L31 32L31.8 21.5H24V16Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">CSS3</p>
                        </div>

                        <!-- Tool 3: Bootstrap 5 -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#7952B3"/>
                                <path d="M17 14H25.5C28 14 29.8 15.2 29.8 17.2C29.8 18.7 28.8 19.8 27.2 20.2V20.4C29.2 20.8 30.5 22.1 30.5 24C30.5 26.4 28.5 27.8 25.7 27.8H17V14ZM20.8 16.8V19.4H24.8C26 19.4 26.8 18.7 26.8 18.1C26.8 17.4 26 16.8 24.8 16.8H20.8ZM20.8 21.9V24.9H25.2C26.6 24.9 27.4 24.1 27.4 23.4C27.4 22.6 26.6 21.9 25.2 21.9H20.8Z" fill="white"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Bootstrap 5</p>
                        </div>

                        <!-- Tool 4: Tailwind CSS -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 13.5C15.5 10 18.5 9 22.5 10.5C25.5 11.6 27.5 14.5 29 17.5C31 21.5 34 23.5 38.5 22.5C36.5 26 33.5 27 29.5 25.5C26.5 24.4 24.5 21.5 23 18.5C21 14.5 18 12.5 13.5 13.5ZM9.5 25.5C11.5 22 14.5 21 18.5 22.5C21.5 23.6 23.5 26.5 25 29.5C27 33.5 30 35.5 34.5 34.5C32.5 38 29.5 39 25.5 37.5C22.5 36.4 20.5 33.5 19 30.5C17 26.5 14 24.5 9.5 25.5Z" fill="#38BDF8"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Tailwind</p>
                        </div>

                        <!-- Tool 5: JavaScript -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="8" fill="#F7DF1E"/>
                                <path d="M26 36C26.9 36.6 28 37 29.5 37C32.1 37 33.4 35.7 33.4 33.4V20H28.8V33.2C28.8 34.1 28.3 34.5 27.5 34.5C26.9 34.5 26.4 34.2 26 33.7L26 36ZM16 36C17.1 36.7 18.6 37 20.3 37C23.5 37 25.1 35.4 25.1 32.8C25.1 27.7 19.5 27.8 19.5 24.8C19.5 23.7 20.4 23.1 21.7 23.1C22.8 23.1 23.8 23.5 24.5 24.1L25.6 21.8C24.6 21 23.3 20.6 21.6 20.6C18.6 20.6 17 22.2 17 24.8C17 29.8 22.6 29.5 22.6 32.7C22.6 33.9 21.6 34.5 20.2 34.5C18.7 34.5 17.3 33.8 16.4 33.1L16 36Z" fill="#111111"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">JavaScript</p>
                        </div>

                        <!-- Tool 6: React.js -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="24" cy="24" rx="18" ry="7" stroke="#61DAFB" stroke-width="2.5" fill="none"/>
                                <ellipse cx="24" cy="24" rx="18" ry="7" stroke="#61DAFB" stroke-width="2.5" transform="rotate(60 24 24)" fill="none"/>
                                <ellipse cx="24" cy="24" rx="18" ry="7" stroke="#61DAFB" stroke-width="2.5" transform="rotate(120 24 24)" fill="none"/>
                                <circle cx="24" cy="24" r="3.5" fill="#61DAFB"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">React.js</p>
                        </div>

                        <!-- Tool 7: Figma -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 42C21.3 42 24 39.3 24 36V30H18C14.7 30 12 32.7 12 36C12 39.3 14.7 42 18 42Z" fill="#0ACF83"/>
                                <path d="M12 24C12 20.7 14.7 18 18 18H24V30H18C14.7 30 12 27.3 12 24Z" fill="#A259FF"/>
                                <path d="M12 12C12 8.7 14.7 6 18 6H24V18H18C14.7 18 12 15.3 12 12Z" fill="#F24E1E"/>
                                <path d="M24 6H30C33.3 6 36 8.7 36 12C36 15.3 33.3 18 30 18H24V6Z" fill="#FF7262"/>
                                <circle cx="30" cy="24" r="6" fill="#1ABCFE"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Figma UI</p>
                        </div>

                        <!-- Tool 8: Git & GitHub -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4C12.95 4 4 12.95 4 24C4 32.84 9.73 40.34 17.65 42.98C18.65 43.16 19.01 42.55 19.01 42.02C19.01 41.55 18.99 40.3 18.99 38.64C13.43 39.84 12.26 35.96 12.26 35.96C11.35 33.65 10.04 33.03 10.04 33.03C8.22 31.79 10.18 31.81 10.18 31.81C12.19 31.95 13.25 33.87 13.25 33.87C15.04 36.93 17.94 36.05 19.09 35.53C19.27 34.24 19.79 33.35 20.36 32.85C15.92 32.35 11.25 30.63 11.25 22.97C11.25 20.79 12.03 19 13.31 17.6C13.1 17.1 12.41 15.06 13.51 12.31C13.51 12.31 15.19 11.77 19.01 14.36C20.61 13.91 22.32 13.69 24.03 13.68C25.74 13.69 27.45 13.91 29.05 14.36C32.87 11.77 34.55 12.31 34.55 12.31C35.65 15.06 34.96 17.1 34.75 17.6C36.03 19 36.81 20.78 36.81 22.97C36.81 30.65 32.13 32.34 27.68 32.84C28.39 33.45 29.02 34.66 29.02 36.52C29.02 39.18 29 41.33 29 42.02C29 42.56 29.36 43.18 30.37 42.98C38.28 40.33 44 32.84 44 24C44 12.95 35.05 4 24 4Z" fill="#181717"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">GitHub</p>
                        </div>

                        <!-- Tool 9: VS Code -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35 5L20 18L10 11L5 14V34L10 37L20 30L35 43L43 39V9L35 5ZM35 34.5L23 24L35 13.5V34.5Z" fill="#007ACC"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">VS Code</p>
                        </div>

                        <!-- Tool 10: Netlify -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 6L6 24L24 42L42 24L24 6Z" stroke="#00C7B7" stroke-width="3" fill="#00C7B7" fill-opacity="0.2"/>
                                <path d="M24 14L14 24L24 34L34 24L24 14Z" fill="#00C7B7"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Netlify</p>
                        </div>

                        <!-- Tool 11: Canva Pro -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-12 h-10 sm:w-14 sm:h-11 mx-auto shrink-0" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="50%" y="65%" dominant-baseline="middle" text-anchor="middle" font-family="'Segoe UI', Arial, sans-serif" font-size="26" font-weight="900" fill="#00C4CC" font-style="italic">Canva</text>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Canva</p>
                        </div>

                        <!-- Tool 12: AI Web Tools -->
                        <div class="p-4 sm:p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/70 hover:bg-white hover:shadow-sm transition-all text-center space-y-3 group flex flex-col justify-center items-center">
                            <svg class="w-10 h-10 sm:w-11 sm:h-11 mx-auto shrink-0" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="10" fill="#7427CC"/>
                                <path d="M35.5 22.5C36.1 20.7 35.9 18.7 34.9 17.1C33.9 15.5 32.2 14.4 30.3 14.1C29.7 12.3 28.4 10.9 26.7 10.1C25 9.3 23 9.3 21.3 10.1C19.8 8.9 17.7 8.5 15.8 9.1C13.9 9.7 12.4 11.2 11.7 13.1C10 13.8 8.7 15.2 8.1 17C7.5 18.8 7.8 20.8 8.8 22.4C8.2 24.2 8.4 26.2 9.4 27.8C10.4 29.4 12.1 30.5 14 30.8C14.6 32.6 15.9 34 17.6 34.8C19.3 35.6 21.3 35.6 23 34.8C24.5 36 26.6 36.4 28.5 35.8C30.4 35.2 31.9 33.7 32.6 31.8C34.3 31.1 35.6 29.7 36.2 27.9C36.8 26.1 36.5 24.1 35.5 22.5Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">AI Web Tools</p>
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
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">UI/UX Design & Figma</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Figma Interface & Tools</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Wireframing & Prototyping</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Design Systems & Tokens</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>User Experience Research</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 2 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">2</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">HTML5 & CSS Frameworks</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>HTML5 Semantic Elements</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>CSS3 Flexbox & Grid Layouts</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Bootstrap 5 Responsive Grid</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Tailwind CSS Utility Classes</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 3 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">3</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">JavaScript (ES6+)</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>DOM Manipulation & Events</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Fetch API & JSON Data</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Async / Await & Promises</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>ES6 Array Methods</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 4 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">4</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">React.js Frontend App</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>React Components & JSX</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>React Router Navigation</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>State Management & Hooks</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>API Integration in React</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 5 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">5</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">Git, GitHub & Netlify</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>Git Version Control Commands</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>GitHub Repositories & Collaboration</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Netlify & Vercel Deployment</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Web Performance & SEO</span></li>
                        </ul>
                    </div>

                    <!-- Module Card 6 -->
                    <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center shrink-0">6</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading">AI for Web Development</h3>
                        </div>
                        <ul class="space-y-2 text-xs sm:text-sm text-[#555555]">
                            <li class="flex items-start gap-2"><span>•</span> <span>ChatGPT Code Assistance</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>AI Web Generators</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Prompting for UI Design</span></li>
                            <li class="flex items-start gap-2"><span>•</span> <span>Rapid Prototyping Workflows</span></li>
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
                            <span>E-Commerce Portal</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Education Website</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Travel Portal</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>Business Web App</span>
                        </div>

                        <div class="flex items-center gap-3 text-sm sm:text-base font-extrabold text-[#111111]">
                            <div class="w-6 h-6 rounded-full border-2 border-[#00A651] flex items-center justify-center text-[#00A651] shrink-0">
                                <i data-lucide="check" class="w-4 h-4 stroke-[3]"></i>
                            </div>
                            <span>React Portfolio</span>
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
                            <i data-lucide="figma" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">UI/UX Designer</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="code" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Frontend Developer</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="atom" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">React Developer</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="globe" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Web Designer</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="layout" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Bootstrap/Tailwind Dev</h3>
                    </div>

                    <div class="p-4 sm:p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[6px] bg-[#FFF3EB] text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="laptop" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Freelance Web Specialist</h3>
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
                            <span class="text-[#00A651]">ADWD Web Journey?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Join DigiCoders Academy and build modern React & UI/UX web applications.
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
