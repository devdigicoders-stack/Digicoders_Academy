<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placements & Success Stories | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Explore student success stories, hiring partners, offer letters & placement statistics at DigiCoders Academy Lucknow. 95% placement support with 5000+ placed students.">

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

        /* Marquee Animation */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        .animate-marquee {
            display: flex;
            width: 200%;
            animation: marquee 25s linear infinite;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>

<body class="antialiased text-[#111111] bg-white selection:bg-[#F58220] selection:text-white">

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <!-- MAIN Placements CONTENT -->
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
                            <span class="text-[#00A651] font-bold">Placements & Success Stories</span>
                        </nav>

                        <!-- Small Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>CAREER SUCCESS</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Launch Your Career <br class="hidden sm:inline">
                            <span class="text-[#00A651]">With Confidence</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Our students gain practical skills, build real-world projects and secure career opportunities with 100% placement support.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="{{ route('admissions') }}"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Apply For Placement Batch</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>

                            <button onclick="openModal('brochureModal')"
                                class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300 px-6 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-2xs flex items-center gap-2 cursor-pointer">
                                <i data-lucide="download" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Download Placement Report</span>
                            </button>
                        </div>

                    </div>

                    <!-- Right Column: Premium Office Image + 4 Floating Statistics Cards -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative w-full max-w-[460px] mx-auto">
                            
                            <!-- Main Office/Interview Image with 6px Border Radius -->
                            <div class="relative rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                                <img src="{{ asset('images/cta-student.png') }}"
                                    alt="DigiCoders Student Placement Interview"
                                    class="w-full h-[280px] sm:h-[320px] object-cover rounded-[6px]">
                            </div>

                            <!-- Floating Stat Card 1: 95% Placement Support -->
                            <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="award" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">95%</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Placement Support</p>
                                </div>
                            </div>

                            <!-- Floating Stat Card 2: 5000+ Students -->
                            <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div class="w-9 h-9 rounded-full bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="users" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">5000+</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Students Placed</p>
                                </div>
                            </div>

                            <!-- Floating Stat Card 3: 100+ Hiring Partners -->
                            <div class="absolute top-1/2 -left-6 transform -translate-y-1/2 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-2.5 shadow-md flex items-center gap-2.5 z-20 hidden sm:flex">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="building-2" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-extrabold text-[#111111] font-heading">100+</p>
                                    <p class="text-[9px] font-bold text-[#555555]">Hiring Companies</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


      

        <!-- 8️⃣ PLACEMENT GALLERY (Masonry / Grid Layout) -->
        <section id="placement-gallery" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Placement Gallery</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Glimpses of campus drives, mock interviews & offer letter distribution ceremonies.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="camera" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Campus Interview Drive</h3>
                        <p class="text-xs text-[#555555]">Students attending interviews with corporate HR panels at Lucknow campus.</p>
                    </div>

                    <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="user-check" class="w-10 h-10 text-[#F58220]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">1-on-1 Mock Interview Session</h3>
                        <p class="text-xs text-[#555555]">Trainer evaluating student performance & providing instant feedback.</p>
                    </div>

                    <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <div class="w-full h-48 rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400">
                            <i data-lucide="award" class="w-10 h-10 text-[#00A651]"></i>
                        </div>
                        <h3 class="text-sm font-extrabold text-[#111111] font-heading">Offer Letter Handover</h3>
                        <p class="text-xs text-[#555555]">Celebrating student placements with parents and academy director.</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- 9️⃣ STUDENT TESTIMONIALS (Glass Review Cards) -->
        <section id="testimonials" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Student Reviews</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">What our placed graduates say about DigiCoders Academy.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    
                    <!-- Review 1 -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed">
                            "DigiCoders Academy gave me hands-on practical skills. The placement team arranged 3 interviews for me and I got selected in Infosys!"
                        </p>
                        <div class="pt-2 border-t border-slate-200/60 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Vikas Pandey</span>
                            <span class="text-[#00A651] font-bold">Placed at Infosys</span>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed">
                            "Best computer institute in Lucknow for Advanced Excel & MIS reporting. The mock interviews helped me crack TCS interview easily."
                        </p>
                        <div class="pt-2 border-t border-slate-200/60 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Shreya Gupta</span>
                            <span class="text-[#00A651] font-bold">Placed at TCS</span>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 shadow-sm hover:shadow-md transition-all space-y-4">
                        <div class="flex items-center gap-1 text-[#F58220]">
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                        </div>
                        <p class="text-xs text-[#555555] leading-relaxed">
                            "I joined ADWD Web Development diploma. The live project building experience on GitHub and React made my portfolio shine!"
                        </p>
                        <div class="pt-2 border-t border-slate-200/60 flex items-center justify-between text-xs">
                            <span class="font-extrabold text-[#111111]">Mohd. Faizan</span>
                            <span class="text-[#00A651] font-bold">Placed at Wipro</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- 🔟 FREQUENTLY ASKED QUESTIONS (Accordion Layout) -->
        <section id="faq" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Placement FAQs</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Common questions about our placement assistance & campus drives.</p>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    @forelse($faqs ?? [] as $index => $fItem)
                    @if(!empty($fItem) && (is_object($fItem) || is_array($fItem)))
                    <div class="rounded-[6px] bg-white border border-slate-200/90 overflow-hidden shadow-2xs">
                        <button onclick="toggleFaq('plc-{{ data_get($fItem, 'id') }}')" class="w-full p-5 text-left flex items-center justify-between font-extrabold text-sm text-[#111111] font-heading cursor-pointer hover:bg-slate-50 transition-colors">
                            <span>{{ $index + 1 }}. {{ data_get($fItem, 'question') }}</span>
                            <i data-lucide="chevron-down" id="faq-icon-plc-{{ data_get($fItem, 'id') }}" class="w-4 h-4 text-[#F58220] transition-transform duration-300"></i>
                        </button>
                        <div id="faq-ans-plc-{{ data_get($fItem, 'id') }}" class="hidden px-5 pb-5 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-100 pt-3">
                            {{ data_get($fItem, 'answer') }}
                        </div>
                    </div>
                    @endif
                    @empty
                    <div class="p-6 text-center text-xs text-slate-400">No placement FAQs available right now.</div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- 11️⃣ FINAL CTA (Large Premium Glass Card) -->
        <section id="final-cta" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="relative rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 overflow-hidden">
                    
                    <!-- Background Soft Green Blob -->
                    <div class="absolute -right-20 -bottom-20 w-[450px] h-[450px] bg-[#EAF7EE] rounded-full blur-3xl pointer-events-none opacity-80 z-0"></div>

                    <div class="relative z-10 max-w-2xl mx-auto space-y-4">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            CAREER SUCCESS AWAITS
                        </span>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#111111] leading-tight">
                            Ready To Build <br class="hidden sm:inline">
                            <span class="text-[#00A651]">Your IT Career?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed">
                            Join DigiCoders Academy today and secure high-paying job opportunities with 100% placement support.
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

                        <button onclick="openModal('brochureModal')"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md flex items-center gap-2 cursor-pointer">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            <span>Download Placement Brochure</span>
                        </button>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <!-- Accordion Script for FAQ -->
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
