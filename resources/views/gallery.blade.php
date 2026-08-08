<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Gallery & Photo Gallery | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Explore the official photo & video gallery of DigiCoders Academy Lucknow. Photos of computer labs, classrooms, workshops, hackathons, seminars & placement drives.">

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

    <!-- MAIN Gallery CONTENT -->
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
                            <span class="text-[#00A651] font-bold">Campus Gallery</span>
                        </nav>

                        <!-- Small Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>CAMPUS GALLERY</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Moments That Inspire <br class="hidden sm:inline">
                            <span class="text-[#00A651]">Future Success</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Explore our modern classrooms, practical labs, workshops, seminars, industrial visits and memorable student activities.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#featured-gallery"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Browse Photos</span>
                                <i data-lucide="arrow-down" class="w-4 h-4"></i>
                            </a>

                            <a href="{{ route('admissions') }}#campus-visit"
                                class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300 px-6 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-2xs flex items-center gap-2 cursor-pointer">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Book Campus Visit</span>
                            </a>
                        </div>

                    </div>

                    <!-- Right Column: Glass Frame Photo Collage -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative w-full max-w-[460px] mx-auto">
                            
                            <!-- Main Photo Collage Image with 6px Border Radius -->
                            <div class="relative rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                                <img src="{{ asset('images/cta-student.png') }}"
                                    alt="DigiCoders Academy Campus Photo Gallery"
                                    class="w-full h-[280px] sm:h-[320px] object-cover rounded-[6px]">
                            </div>

                            <!-- Floating Badge 1: 100+ Photos -->
                            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="camera" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">{{ isset($galleries) ? $galleries->count() : '50' }}+</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Gallery Photos</p>
                                </div>
                            </div>

                            <!-- Floating Badge 2: Campus Activities -->
                            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="sparkles" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">Active</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Student Events</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- 2️⃣ GALLERY CATEGORIES (Filter Chips) -->
        <section id="gallery-categories" class="py-6 bg-[#FAFAFA] border-b border-slate-200/60 sticky top-[100px] z-30 backdrop-blur-md bg-white/80">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex items-center gap-2 overflow-x-auto no-scrollbar py-2">
                    <button onclick="filterGallery('all', this)" class="gallery-chip active px-4 py-2 rounded-[6px] bg-[#00A651] text-white text-xs font-extrabold whitespace-nowrap cursor-pointer transition-all shadow-xs">All</button>
                    @php
                        $categoryList = ['Campus', 'Classrooms', 'Computer Labs', 'Workshops', 'Seminars', 'Industrial Visits', 'Events', 'Certificates', 'Placement'];
                    @endphp
                    @foreach($categoryList as $catItem)
                    <button onclick="filterGallery('{{ Str::slug($catItem) }}', this)" class="gallery-chip px-4 py-2 rounded-[6px] bg-white border border-slate-200 hover:border-[#00A651] text-[#111111] hover:text-[#00A651] text-xs font-bold whitespace-nowrap cursor-pointer transition-all">{{ $catItem }}</button>
                    @endforeach
                </div>

            </div>
        </section>


        <!-- 3️⃣ FEATURED GALLERY (Dynamic Bento Grid Layout) -->
        <section id="featured-gallery" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Campus Gallery & Highlights</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">High-impact moments captured across our Lucknow academy campus.</p>
                </div>

                <!-- Bento Grid Gallery -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($galleries ?? [] as $key => $item)
                    <div data-album="{{ Str::slug($item->album) }}"
                        onclick="openLightbox('{{ addslashes($item->title) }}', '{{ addslashes($item->description ?? '') }}', '{{ asset($item->image_path ? $item->image_path : 'images/students.png') }}', '{{ addslashes($item->seo_alt) }}', '{{ $item->album }}')"
                        class="gallery-item-card {{ ($key % 5 == 0) ? 'md:col-span-2' : '' }} p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-3 cursor-pointer group overflow-hidden">
                        
                        <div class="w-full h-64 sm:h-72 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 group-hover:scale-[1.02] transition-transform duration-300 relative overflow-hidden">
                            <img src="{{ $item->image_path ? asset($item->image_path) : asset('images/students.png') }}"
                                alt="{{ $item->seo_alt }}"
                                title="{{ $item->title }}"
                                class="w-full h-full object-cover rounded-[6px]">
                            
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-xs font-bold gap-2">
                                <i data-lucide="maximize-2" class="w-5 h-5"></i>
                                <span>Click to Enlarge</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <h3 class="text-base font-extrabold text-[#111111] font-heading">{{ $item->title }}</h3>
                                @if($item->description)
                                <p class="text-xs text-[#555555] line-clamp-1 mt-0.5">{{ $item->description }}</p>
                                @endif
                            </div>
                            <span class="px-2.5 py-1 rounded-[6px] bg-emerald-50 text-[#00A651] text-[10px] font-extrabold uppercase shrink-0">{{ $item->album }}</span>
                        </div>
                    </div>
                    @empty
                    <div class="md:col-span-3 text-center py-16 bg-[#FAFAFA] rounded-[6px] border border-slate-200">
                        <i data-lucide="image-off" class="w-12 h-12 text-slate-400 mx-auto mb-3"></i>
                        <h3 class="text-lg font-extrabold text-[#111111] font-heading">No Photos Found</h3>
                        <p class="text-xs text-[#555555] mt-1">Check back later for updated campus and placement photos.</p>
                    </div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- 4️⃣ CAMPUS TOUR (Split Layout) -->
        <section id="campus-tour" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 items-center">
                    
                    <!-- Left Visual Graphic Container -->
                    <div class="lg:col-span-6">
                        <div class="relative rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                            <img src="{{ asset('images/cta-student.png') }}"
                                alt="DigiCoders Academy Virtual Campus Tour"
                                class="w-full h-[320px] sm:h-[380px] object-cover rounded-[6px]">
                        </div>
                    </div>

                    <!-- Right Glass Card Description -->
                    <div class="lg:col-span-6 space-y-6">
                        <div class="p-6 sm:p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-5">
                            <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                                VIRTUAL CAMPUS TOUR
                            </span>
                            
                            <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Take a Tour of DigiCoders Academy</h2>
                            
                            <p class="text-xs sm:text-sm text-[#555555] leading-relaxed">
                                Walk through our modern air-conditioned classrooms, high-tech computer labs, live project development hub, and dedicated student study lounges located in Indiranagar, Lucknow.
                            </p>

                            <div class="pt-2">
                                <a href="{{ route('admissions') }}#campus-visit"
                                    class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3 rounded-[6px] text-xs font-extrabold transition-all shadow-md inline-flex items-center gap-2 cursor-pointer">
                                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                                    <span>Schedule Campus Visit</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- 5️⃣ WORKSHOP HIGHLIGHTS (Grid Cards) -->
        <section id="workshops" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Workshop Highlights</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Specialized technical bootcamps conducted by senior industry developers.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-44 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="code" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <div class="flex items-center justify-between text-xs text-[#555555]">
                            <span class="font-bold text-[#F58220]">July 15, 2026</span>
                            <span>Full-Stack Web Sprint</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">React & Node.js Bootcamp</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Students built a full-stack REST API and dynamic frontend application in a 1-day sprint.</p>
                    </div>

                    <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-44 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="palette" class="w-10 h-10 text-[#F58220]"></i>
                        </div>
                        <div class="flex items-center justify-between text-xs text-[#555555]">
                            <span class="font-bold text-[#F58220]">June 28, 2026</span>
                            <span>UI/UX Masterclass</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Figma Prototyping Workshop</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Learned wireframing, component design systems, auto-layout, and interactive prototyping.</p>
                    </div>

                    <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-44 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="bar-chart-2" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <div class="flex items-center justify-between text-xs text-[#555555]">
                            <span class="font-bold text-[#F58220]">June 10, 2026</span>
                            <span>MIS Automation</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Power Query & VBA Workshop</h3>
                        <p class="text-xs text-[#555555] leading-relaxed">Automating repetitive corporate data cleaning tasks and one-click report generation.</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 6️⃣ INDUSTRIAL VISITS (Premium Cards / Timeline) -->
        <section id="industrial-visits" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Industrial Visits</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Corporate exposure trips to leading IT companies and software tech parks.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="w-10 h-10 rounded-[6px] bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                            <i data-lucide="building-2" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">TCS Lucknow Software Center</h3>
                        <p class="text-xs text-[#555555] leading-relaxed"><strong>Learning Outcome:</strong> Students observed Agile software sprint planning, DevOps pipelines, and enterprise server architectures.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="w-10 h-10 rounded-[6px] bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                            <i data-lucide="building" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">HCL Technologies IT Park</h3>
                        <p class="text-xs text-[#555555] leading-relaxed"><strong>Learning Outcome:</strong> Interacted with HR managers and project leads regarding job interview expectations and fresher hiring criteria.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="w-10 h-10 rounded-[6px] bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <i data-lucide="layers" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Infosys Corporate Campus</h3>
                        <p class="text-xs text-[#555555] leading-relaxed"><strong>Learning Outcome:</strong> Experienced real-world corporate office culture, software testing labs, and client delivery centers.</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 7️⃣ EVENTS & CELEBRATIONS (Luxury Grid) -->
        <section id="events-celebrations" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Events & Celebrations</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Celebrating academic milestones, festivals, and student achievements.</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    
                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="trophy" class="w-6 h-6 text-[#00A651] mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">24-Hr Hackathon</p>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="mic" class="w-6 h-6 text-[#F58220] mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">Tech Seminar</p>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="terminal" class="w-6 h-6 text-blue-600 mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">Coding Battle</p>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="sparkles" class="w-6 h-6 text-purple-600 mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">Freshers Welcome</p>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="heart" class="w-6 h-6 text-rose-600 mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">Farewell Party</p>
                    </div>

                    <div class="p-4 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 text-center space-y-2">
                        <i data-lucide="award" class="w-6 h-6 text-[#00A651] mx-auto"></i>
                        <p class="text-xs font-extrabold text-[#111111]">Certificate Day</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 8️⃣ VIDEO GALLERY (Video Preview Cards) -->
        <section id="video-gallery" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Video Gallery</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Watch campus highlights, student testimonials & project demonstrations.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="p-4 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 relative group cursor-pointer overflow-hidden">
                            <i data-lucide="play-circle" class="w-14 h-14 text-[#00A651] group-hover:scale-110 transition-transform"></i>
                            <span class="absolute bottom-2 right-2 px-2 py-0.5 rounded-[6px] bg-black/70 text-white text-[10px] font-bold">3:45</span>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">A Day in the Life of a Student</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 relative group cursor-pointer overflow-hidden">
                            <i data-lucide="play-circle" class="w-14 h-14 text-[#F58220] group-hover:scale-110 transition-transform"></i>
                            <span class="absolute bottom-2 right-2 px-2 py-0.5 rounded-[6px] bg-black/70 text-white text-[10px] font-bold">5:20</span>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Campus Placement Drive 2026</h3>
                    </div>

                    <div class="p-4 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 relative group cursor-pointer overflow-hidden">
                            <i data-lucide="play-circle" class="w-14 h-14 text-blue-600 group-hover:scale-110 transition-transform"></i>
                            <span class="absolute bottom-2 right-2 px-2 py-0.5 rounded-[6px] bg-black/70 text-white text-[10px] font-bold">4:10</span>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Live Project Showcase & Demo</h3>
                    </div>

                </div>

            </div>
        </section>


        <!-- 9️⃣ INSTAGRAM STYLE FEED (Modern Grid) -->
        <section id="insta-feed" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Recent Activity Feed</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Follow @DigiCodersAcademy on social media for daily campus updates.</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    
                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-[#F58220]"></i>
                    </div>

                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-[#00A651]"></i>
                    </div>

                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-blue-600"></i>
                    </div>

                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-purple-600"></i>
                    </div>

                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-[#F58220]"></i>
                    </div>

                    <div class="aspect-square rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 flex items-center justify-center text-slate-400 hover:opacity-80 transition-opacity cursor-pointer">
                        <i data-lucide="instagram" class="w-8 h-8 text-[#00A651]"></i>
                    </div>

                </div>

            </div>
        </section>


        <!-- 🔟 TESTIMONIALS (Glass Cards) -->
        <section id="testimonials" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Student Feedback</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "The campus environment is full of energy. The daily practical labs and hackathons built my coding confidence!"
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-[#111111]">
                            <span>Saurabh Verma</span>
                            <span class="text-[#00A651]">ADWD Student</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "I loved the industrial visit to TCS. Seeing real corporate software development live motivated me to work harder."
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-[#111111]">
                            <span>Kavita Rastogi</span>
                            <span class="text-[#00A651]">ADCA Student</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed italic">
                            "Clean classrooms, high-speed Wi-Fi, and 100% practical training. Best IT academy in Lucknow without a doubt!"
                        </p>
                        <div class="pt-2 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-[#111111]">
                            <span>Deepak Yadav</span>
                            <span class="text-[#00A651]">Excel MIS Student</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- 11️⃣ FINAL CTA (Large Glass Card) -->
        <section id="final-cta" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="relative rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 overflow-hidden">
                    
                    <!-- Background Soft Green Blob -->
                    <div class="absolute -right-20 -bottom-20 w-[450px] h-[450px] bg-[#EAF7EE] rounded-full blur-3xl pointer-events-none opacity-80 z-0"></div>

                    <div class="relative z-10 max-w-2xl mx-auto space-y-4">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            VISIT LUCKNOW CAMPUS
                        </span>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] leading-tight">
                            Ready To Experience <br class="hidden sm:inline">
                            <span class="text-[#00A651]">DigiCoders Academy?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed">
                            Book a free campus tour & counselling session at our Indiranagar, Lucknow center today.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="relative z-10 flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="{{ route('admissions') }}#campus-visit"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-8 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Book Campus Visit</span>
                        </a>

                        <a href="{{ route('admissions') }}"
                            class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all cursor-pointer flex items-center gap-2 shadow-2xs">
                            <i data-lucide="headset" class="w-4 h-4 text-[#111111]"></i>
                            <span>Apply Now</span>
                        </a>

                        <button onclick="openModal('brochureModal')"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md flex items-center gap-2 cursor-pointer">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            <span>Download Brochure</span>
                        </button>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- LIGHTBOX MODAL -->
    <div id="lightboxModal" class="fixed inset-0 bg-black/80 backdrop-blur-md z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-[6px] max-w-3xl w-full p-6 space-y-4 relative shadow-2xl">
            <button onclick="closeLightbox()" class="absolute top-4 right-4 text-slate-500 hover:text-black font-bold text-xl cursor-pointer z-10">&times;</button>
            <div class="w-full h-64 sm:h-96 bg-slate-100 rounded-[6px] overflow-hidden flex items-center justify-center text-slate-400">
                <img id="lightboxImg" src="" alt="" title="" class="w-full h-full object-contain bg-black/5">
            </div>
            <div class="flex items-center justify-between gap-4">
                <h3 id="lightboxTitle" class="text-xl font-extrabold text-[#111111] font-heading">Photo Title</h3>
                <span id="lightboxBadge" class="px-2.5 py-1 rounded-[6px] bg-emerald-50 text-[#00A651] text-xs font-extrabold uppercase shrink-0">Album</span>
            </div>
            <p id="lightboxDesc" class="text-xs sm:text-sm text-[#555555]">Photo Description...</p>
        </div>
    </div>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <script>
        function openLightbox(title, desc, imgSrc, altText, album) {
            document.getElementById('lightboxTitle').innerText = title;
            document.getElementById('lightboxDesc').innerText = desc || 'DigiCoders Academy Campus Photo Highlight';
            document.getElementById('lightboxBadge').innerText = album || 'Gallery';
            const imgEl = document.getElementById('lightboxImg');
            if (imgEl) {
                imgEl.src = imgSrc;
                imgEl.alt = altText || title;
                imgEl.title = title;
            }
            document.getElementById('lightboxModal').classList.remove('hidden');
        }

        function closeLightbox() {
            document.getElementById('lightboxModal').classList.add('hidden');
        }

        function filterGallery(category, btn) {
            // Visual feedback on chips
            const chips = document.querySelectorAll('.gallery-chip');
            chips.forEach(chip => {
                chip.classList.remove('bg-[#00A651]', 'text-white');
                chip.classList.add('bg-white', 'text-[#111111]');
            });
            if (btn) {
                btn.classList.remove('bg-white', 'text-[#111111]');
                btn.classList.add('bg-[#00A651]', 'text-white');
            }

            const items = document.querySelectorAll('.gallery-item-card');
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-album') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>
