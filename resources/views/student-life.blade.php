<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Life & Campus Experience | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Experience campus life at DigiCoders Academy Lucknow. Modern computer labs, smart classrooms, coding hackathons, technical workshops, student clubs & placement support.">

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

    <!-- MAIN Student Life CONTENT -->
    <main class="pt-[110px] sm:pt-[130px]">

        <!-- 1️⃣ HERO SECTION (320px Height Aesthetic, Apple/Framer/Linear Style) -->
        <section id="hero" class="relative py-12 sm:py-16 bg-white overflow-hidden border-b border-slate-200/60">
            <!-- Subtle Dot Pattern & Soft Blur Blobs -->
            <div class="absolute -top-24 -left-20 w-96 h-96 bg-emerald-50 rounded-full blur-3xl opacity-70 pointer-events-none z-0"></div>
            <div class="absolute top-1/2 right-0 w-[450px] h-[450px] bg-orange-50/80 rounded-full blur-3xl opacity-70 pointer-events-none z-0"></div>

            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 items-center">
                    
                    <!-- Left Column: Breadcrumb, Badge, Heading, Desc, Action Buttons -->
                    <div class="lg:col-span-7 space-y-5 text-left">
                        
                        <!-- Breadcrumb -->
                        <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                            <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span class="text-[#00A651] font-bold">Student Life</span>
                        </nav>

                        <!-- Small Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>LIFE AT DIGICODERS</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Learn. Create. Grow. <br class="hidden sm:inline">
                            <span class="text-[#00A651]">Together.</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Experience practical learning, modern classrooms, technical events, workshops, hackathons and a vibrant student community.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="{{ route('admissions') }}"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Join DigiCoders Community</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>

                            <a href="#campus-gallery"
                                class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300 px-6 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-2xs flex items-center gap-2 cursor-pointer">
                                <i data-lucide="camera" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Explore Gallery</span>
                            </a>
                        </div>

                    </div>

                    <!-- Right Column: Classroom Image + Floating Badges -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative w-full max-w-[460px] mx-auto">
                            
                            <!-- Main Classroom Image with 6px Border Radius -->
                            <div class="relative rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                                <img src="{{ asset('images/cta-student.png') }}"
                                    alt="DigiCoders Academy Student Community & Classroom"
                                    class="w-full h-[280px] sm:h-[320px] object-cover rounded-[6px]">
                            </div>

                            <!-- Floating Stat Card 1: 5000+ Students -->
                            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="users" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">5000+</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Active Students</p>
                                </div>
                            </div>

                            <!-- Floating Stat Card 2: 100+ Live Projects -->
                            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="folder-code" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">100+</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Live Projects</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 7️⃣ CAMPUS GALLERY (Luxury Grid Gallery with Hover Zoom) -->
        <section id="campus-gallery" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Campus Gallery</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Take a virtual tour of life at DigiCoders Academy.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="monitor" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Practical Computer Lab</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="users" class="w-10 h-10 text-[#F58220]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Students Collaborating</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="wrench" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Technical Workshop</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="presentation" class="w-10 h-10 text-[#F58220]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Project Presentation</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="trophy" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Hackathon Winners</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm space-y-3 group overflow-hidden">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-105 transition-transform duration-300">
                            <i data-lucide="building-2" class="w-48-10 h-10 text-[#F58220]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Industrial Corporate Visit</h3>
                    </div>

                </div>

            </div>
        </section>


        <!-- 8️⃣ STUDENT TESTIMONIALS (Luxury Glass Cards) -->
        <section id="student-testimonials" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Student Experiences</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Read what our students love about the campus environment at DigiCoders.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "The faculty at DigiCoders is incredibly supportive. The daily practical labs and group coding sessions made learning enjoyable!"
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Nisha Srivastava</span>
                            <span class="text-[#00A651] font-bold">ADWD Graduate</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "Participating in the 24-hour hackathon was the highlight of my course. We built a working e-commerce web application from scratch."
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Aditya Mishra</span>
                            <span class="text-[#00A651] font-bold">ADCA Graduate</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "The campus environment is modern, clean, and inspiring. Teachers treat every student like family and clear every single doubt."
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Pooja Singh</span>
                            <span class="text-[#00A651] font-bold">Advanced Excel Graduate</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- 9️⃣ ACHIEVEMENTS (Large Statistics Panel) -->
        <section id="achievements" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="p-8 sm:p-12 lg:p-14 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-xl space-y-8">
                    
                    <div class="text-center max-w-xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Academy Achievements</h2>
                        <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-2"></div>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                        
                        <div class="p-5 rounded-[6px] bg-white border border-slate-200/70 space-y-2">
                            <p class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#00A651] font-heading">5000+</p>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Students Trained</p>
                        </div>

                        <div class="p-5 rounded-[6px] bg-white border border-slate-200/70 space-y-2">
                            <p class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#F58220] font-heading">100+</p>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Live Projects Built</p>
                        </div>

                        <div class="p-5 rounded-[6px] bg-white border border-slate-200/70 space-y-2">
                            <p class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-blue-600 font-heading">95%</p>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Placement Support</p>
                        </div>

                        <div class="p-5 rounded-[6px] bg-white border border-slate-200/70 space-y-2">
                            <p class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-purple-600 font-heading">50+</p>
                            <p class="text-xs sm:text-sm font-extrabold text-[#111111]">Expert Trainers</p>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- 🔟 STUDENT SUPPORT (Premium Cards) -->
        <section id="student-support" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Student Support Services</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Complete support throughout your learning journey and beyond.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                            <i data-lucide="headset" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Career Counselling</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Free 1-on-1 career guidance sessions to choose the right IT course for your background.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="messages-square" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Interview Preparation</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Mock interview practice rounds with detailed technical feedback from senior developers.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Resume Building</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Professional ATS resume formatting and live GitHub project portfolio creation.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                            <i data-lucide="user-check" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Soft Skills Training</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Personality development, corporate communication, and English speaking sessions.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                            <i data-lucide="building" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Placement Cell</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Active campus placement drives and job recommendations with 100+ hiring partners.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-sm hover:shadow-md transition-all space-y-3">
                        <div class="w-10 h-10 rounded-[6px] bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                            <i data-lucide="shield-check" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Lifetime Alumni Support</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Lifetime job drive notifications and career upskilling assistance for alumni.</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 11️⃣ FINAL CTA (Large Floating Glass Card) -->
        <section id="final-cta" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="relative rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 overflow-hidden">
                    
                    <!-- Background Soft Green Blob -->
                    <div class="absolute -right-20 -bottom-20 w-[450px] h-[450px] bg-[#EAF7EE] rounded-full blur-3xl pointer-events-none opacity-80 z-0"></div>

                    <div class="relative z-10 max-w-2xl mx-auto space-y-4">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            JOIN DIGICODERS ACADEMY
                        </span>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] leading-tight">
                            Become Part of <br class="hidden sm:inline">
                            <span class="text-[#00A651]">DigiCoders Academy</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed">
                            Start your practical learning journey today and build a bright IT career in Lucknow.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="relative z-10 flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="{{ route('admissions') }}"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-8 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                            <span>Apply Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all cursor-pointer flex items-center gap-2 shadow-2xs">
                            <i data-lucide="headset" class="w-4 h-4 text-[#111111]"></i>
                            <span>Talk to Expert</span>
                        </a>

                        <a href="{{ route('admissions') }}#campus-visit"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md flex items-center gap-2 cursor-pointer">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Visit Campus</span>
                        </a>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>
