<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sitemap | DigiCoders Academy</title>
    <meta name="description" content="Complete sitemap and page directory for DigiCoders Academy website. Easily find courses, admissions, student portal, and contact pages.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #FFFFFF; color: #111111; }
        .font-heading { font-family: 'Outfit', sans-serif; }
    </style>
</head>

<body class="antialiased text-[#111111] bg-white selection:bg-[#F58220] selection:text-white">

    @include('layouts.header')

    <main class="pt-[110px] sm:pt-[130px]">

        <!-- HERO SECTION -->
        <section class="py-12 sm:py-16 bg-white border-b border-slate-200/60 relative overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
                <nav class="flex items-center justify-center gap-2 text-xs font-semibold text-[#555555]">
                    <a href="{{ route('home') }}" class="hover:text-[#F58220]">Home</a>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                    <span class="text-[#00A651] font-bold">XML Sitemap</span>
                </nav>
                <h1 class="text-3xl sm:text-4xl font-extrabold font-heading text-[#111111]">
                    Website <span class="text-[#00A651]">Sitemap & Navigation</span>
                </h1>
                <p class="text-xs sm:text-sm text-[#555555] max-w-xl mx-auto">
                    Quickly locate all pages, diploma courses, student services, and policy documents available on DigiCoders Academy.
                </p>
            </div>
        </section>

        <!-- SITEMAP CATEGORIES GRID -->
        <section class="py-14 sm:py-20 bg-[#FAFAFA]">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Main Navigation Pages -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="flex items-center gap-2 text-[#00A651] border-b border-slate-100 pb-3">
                            <i data-lucide="home" class="w-5 h-5"></i>
                            <h2 class="text-base font-extrabold font-heading text-[#111111]">Main Pages</h2>
                        </div>
                        <ul class="space-y-2 text-xs text-[#555555]">
                            <li><a href="{{ route('home') }}" class="hover:text-[#00A651] font-medium">Home Page</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-[#00A651] font-medium">About Academy</a></li>
                            <li><a href="{{ route('admissions') }}" class="hover:text-[#00A651] font-medium">Admissions 2026</a></li>
                            <li><a href="{{ route('placements') }}" class="hover:text-[#00A651] font-medium">Placements & Success Stories</a></li>
                            <li><a href="{{ route('student-life') }}" class="hover:text-[#00A651] font-medium">Student Life</a></li>
                            <li><a href="{{ route('gallery') }}" class="hover:text-[#00A651] font-medium">Campus Gallery</a></li>
                            <li><a href="{{ route('blogs.index') }}" class="hover:text-[#00A651] font-medium">Blog Listing</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-[#00A651] font-medium">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Diploma Courses Pages -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="flex items-center gap-2 text-[#F58220] border-b border-slate-100 pb-3">
                            <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                            <h2 class="text-base font-extrabold font-heading text-[#111111]">Diploma Courses</h2>
                        </div>
                        <ul class="space-y-2 text-xs text-[#555555]">
                            <li><a href="{{ route('courses.index') }}" class="hover:text-[#F58220] font-medium">All Courses Overview</a></li>
                            <li><a href="{{ route('courses.adca') }}" class="hover:text-[#F58220] font-medium">ADCA (1 Year Computer Diploma)</a></li>
                            <li><a href="{{ route('courses.dca') }}" class="hover:text-[#F58220] font-medium">DCA (6 Month Computer Diploma)</a></li>
                            <li><a href="{{ route('courses.adwd') }}" class="hover:text-[#F58220] font-medium">ADWD (Full-Stack Web Development)</a></li>
                            <li><a href="{{ route('courses.addm') }}" class="hover:text-[#F58220] font-medium">ADDM (Digital Marketing Diploma)</a></li>
                            <li><a href="{{ route('courses.web-designing') }}" class="hover:text-[#F58220] font-medium">Web Designing & UI/UX</a></li>
                            <li><a href="{{ route('courses.excel-mis') }}" class="hover:text-[#F58220] font-medium">Advanced Excel & MIS Reporting</a></li>
                        </ul>
                    </div>

                    <!-- Portals & Policy Documents -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-4">
                        <div class="flex items-center gap-2 text-blue-600 border-b border-slate-100 pb-3">
                            <i data-lucide="shield" class="w-5 h-5"></i>
                            <h2 class="text-base font-extrabold font-heading text-[#111111]">Services & Legal</h2>
                        </div>
                        <ul class="space-y-2 text-xs text-[#555555]">
                            <li><a href="{{ route('faq') }}" class="hover:text-blue-600 font-medium">Frequently Asked Questions</a></li>
                            <li><a href="{{ route('privacy-policy') }}" class="hover:text-blue-600 font-medium">Privacy Policy</a></li>
                            <li><a href="{{ route('terms') }}" class="hover:text-blue-600 font-medium">Terms & Conditions</a></li>
                            <li><a href="{{ route('refund-policy') }}" class="hover:text-blue-600 font-medium">Refund Policy</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>

    </main>

    @include('layouts.footer')

</body>

</html>
