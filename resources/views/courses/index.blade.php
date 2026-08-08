<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title & Meta -->
    <title>All Computer & IT Diploma Courses in Lucknow - DigiCoders Academy</title>
    <meta name="description"
        content="Explore 6-Month & 1-Year Diploma Courses at DigiCoders Academy Lucknow: DCA, ADCA, Advanced Excel, Web Designing, ADWD, and ADDM with 100% placement support.">
    <meta name="keywords"
        content="computer courses Lucknow, IT diploma Lucknow, DCA, ADCA, Web development course, digital marketing diploma">

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

<body class="bg-[#FAFAFA] text-[#111111] antialiased selection:bg-[#F58220] selection:text-white pt-[110px]">

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <main class="w-full overflow-hidden">

        <!-- 1️⃣ HERO BANNER -->
        <section id="courses-catalog-hero" class="py-12 sm:py-16 bg-white relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center max-w-3xl">
                
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-[#F58220]">OUR DIPLOMA PROGRAMS</span>
                
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#111111] tracking-tight leading-tight mt-2">
                    Job-Ready Computer & <span class="text-[#00A651]">IT Diploma Courses</span>
                </h1>

                <p class="text-sm sm:text-base text-[#555555] leading-relaxed mt-4">
                    Choose from our government-recognized 6-Month and 1-Year practical diploma programs designed for immediate career growth and job placement.
                </p>

            </div>
        </section>


        <!-- 2️⃣ 6 MONTH DIPLOMA COURSES SECTION -->
        <section id="6-month-diplomas" class="py-16 sm:py-24 bg-[#FAFAFA] relative">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex items-center justify-between mb-8 pb-3 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-extrabold uppercase tracking-wider text-[#F58220]">6 MONTH DIPLOMAS</span>
                        <h2 class="text-2xl sm:text-3xl font-bold font-heading text-[#111111] mt-0.5">Short-Term Career Programs</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- DCA Card -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-orange-50 text-[#F58220] text-[10px] font-bold uppercase tracking-wider">6 Months</span>
                            <h3 class="text-xl font-bold text-[#111111]">DCA</h3>
                            <p class="text-xs text-[#666666] font-medium">Diploma in Computer Applications</p>
                            <p class="text-xs text-[#555555] leading-relaxed">MS Office, Windows, Internet, English & Hindi Typing, Computer Fundamentals.</p>
                        </div>
                        <a href="{{ route('courses.dca') }}"
                            class="w-full bg-[#F58220] hover:bg-[#e07316] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore DCA Course</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Advanced Excel Card -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-orange-50 text-[#F58220] text-[10px] font-bold uppercase tracking-wider">6 Months</span>
                            <h3 class="text-xl font-bold text-[#111111]">Advanced Excel & MIS</h3>
                            <p class="text-xs text-[#666666] font-medium">Data Reporting & Analytics</p>
                            <p class="text-xs text-[#555555] leading-relaxed">Nested VLOOKUP, XLOOKUP, Pivot Tables, Power Query, Executive MIS Dashboards.</p>
                        </div>
                        <a href="{{ route('courses.excel-mis') }}"
                            class="w-full bg-[#F58220] hover:bg-[#e07316] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore Excel & MIS</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- Web Designing Card -->
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-orange-50 text-[#F58220] text-[10px] font-bold uppercase tracking-wider">6 Months</span>
                            <h3 class="text-xl font-bold text-[#111111]">Web Designing</h3>
                            <p class="text-xs text-[#666666] font-medium">Frontend UI/UX & Responsive Web</p>
                            <p class="text-xs text-[#555555] leading-relaxed">HTML5, CSS3, Tailwind CSS, JavaScript ES6, Figma UI/UX Design.</p>
                        </div>
                        <a href="{{ route('courses.web-designing') }}"
                            class="w-full bg-[#F58220] hover:bg-[#e07316] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore Web Designing</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                </div>

            </div>
        </section>


        <!-- 3️⃣ 1 YEAR DIPLOMA COURSES SECTION -->
        <section id="1-year-diplomas" class="py-16 sm:py-24 bg-white relative border-t border-slate-200/60">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="flex items-center justify-between mb-8 pb-3 border-b border-slate-200">
                    <div>
                        <span class="text-xs font-extrabold uppercase tracking-wider text-[#00A651]">1 YEAR DIPLOMAS</span>
                        <h2 class="text-2xl sm:text-3xl font-bold font-heading text-[#111111] mt-0.5">Master IT Diploma Programs</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- ADCA Card -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-emerald-50 text-[#00A651] text-[10px] font-bold uppercase tracking-wider">1 Year</span>
                            <h3 class="text-xl font-bold text-[#111111]">ADCA</h3>
                            <p class="text-xs text-[#666666] font-medium">Advanced Computer Applications</p>
                            <p class="text-xs text-[#555555] leading-relaxed">DCA + Tally Prime GST, Photoshop, Web Basics, Hardware & Networking.</p>
                        </div>
                        <a href="{{ route('courses.adca') }}"
                            class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore ADCA Course</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- ADWD Card -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-emerald-50 text-[#00A651] text-[10px] font-bold uppercase tracking-wider">1 Year</span>
                            <h3 class="text-xl font-bold text-[#111111]">ADWD</h3>
                            <p class="text-xs text-[#666666] font-medium">Web Development Full Stack</p>
                            <p class="text-xs text-[#555555] leading-relaxed">Full Stack Frontend + PHP 8, Laravel Framework + Live Client Projects.</p>
                        </div>
                        <a href="{{ route('courses.adwd') }}"
                            class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore ADWD Course</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                    <!-- ADDM Card -->
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200 shadow-sm hover:shadow-md transition-all flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <span class="px-2.5 py-1 rounded-[4px] bg-emerald-50 text-[#00A651] text-[10px] font-bold uppercase tracking-wider">1 Year</span>
                            <h3 class="text-xl font-bold text-[#111111]">ADDM</h3>
                            <p class="text-xs text-[#666666] font-medium">Digital Marketing Specialist</p>
                            <p class="text-xs text-[#555555] leading-relaxed">SEO, Google Ads, Meta Ads Manager, Social Media Marketing, Analytics.</p>
                        </div>
                        <a href="{{ route('courses.addm') }}"
                            class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-2.5 rounded-[6px] text-xs font-bold text-center transition-all flex items-center justify-center gap-2">
                            <span>Explore ADDM Course</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                </div>

            </div>
        </section>


        <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
        @if(isset($faqs) && $faqs->count() > 0)
        <section id="course-faqs" class="py-14 sm:py-20 bg-white border-t border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-bold font-heading text-[#111111]">Course FAQs</h2>
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

        <!-- 4️⃣ FINAL ADMISSION CTA -->
        <section id="admission-cta" class="py-16 sm:py-20 bg-[#FAFAFA] border-t border-slate-200/60">
            <div class="w-full max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div
                    class="p-10 sm:p-14 rounded-[6px] bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white text-center space-y-6 relative overflow-hidden shadow-xl border border-slate-700/60">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#00A651]">GET FREE CAREER COUNSELLING</span>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                        Need Help Choosing The <span class="text-[#00A651] font-bold">Right Course?</span>
                    </h2>

                    <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                        <a href="{{ route('contact') }}"
                            class="bg-[#F58220] hover:bg-[#e07316] text-white px-8 py-3 rounded-[6px] text-xs font-semibold transition-all shadow-md cursor-pointer inline-flex items-center gap-2">
                            <span>Talk to Expert</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

</body>

</html>
