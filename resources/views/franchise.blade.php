<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise & Training Partnership | DigiCoders Academy</title>
    <meta name="description"
        content="Start your own computer institute franchise with DigiCoders Academy. High ROI, complete syllabus setup, brand support, & marketing guidance.">

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
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5 text-left">
                        <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                            <a href="{{ route('home') }}" class="hover:text-[#F58220]">Home</a>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span class="text-[#00A651] font-bold">Franchise Opportunity</span>
                        </nav>

                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                            GROW WITH DIGICODERS
                        </div>

                        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18]">
                            Start Your Own Tech Academy. <br>
                            <span class="text-[#00A651]">High ROI Partnership.</span>
                        </h1>

                        <p class="text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Partner with Uttar Pradesh's fastest-growing IT education brand. Get complete academic curriculum, LMS portal access, and marketing support.
                        </p>

                        <div class="pt-2">
                            <a href="#franchise-form" class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs font-extrabold shadow-md inline-flex items-center gap-2">
                                <span>Apply for Franchise</span>
                                <i data-lucide="arrow-down" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5">
                        <div class="rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                            <img src="{{ asset('images/cta-student.png') }}" alt="Franchise Opportunity" class="w-full h-[280px] object-cover rounded-[6px]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY PARTNER & BENEFITS -->
        <section class="py-14 sm:py-20 bg-[#FAFAFA] border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Why Become a Franchise Partner?</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="shield-check" class="w-8 h-8 text-[#00A651]"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Established Brand</h3>
                        <p class="text-xs text-[#555555]">Recognized ISO certified institute with thousands of successful alumni.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="book-open" class="w-8 h-8 text-[#F58220]"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Ready Curriculum</h3>
                        <p class="text-xs text-[#555555]">Updated course syllabus for DCA, ADCA, Web Dev & Digital Marketing.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="megaphone" class="w-8 h-8 text-blue-600"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Marketing Support</h3>
                        <p class="text-xs text-[#555555]">Digital lead generation, local pamphlets, and social media branding support.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="pie-chart" class="w-8 h-8 text-purple-600"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">High Profit Margin</h3>
                        <p class="text-xs text-[#555555]">Low initial setup cost with quick break-even within 6 to 9 months.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FRANCHISE APPLICATION FORM -->
        <section id="franchise-form" class="py-14 sm:py-20 bg-white">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto p-8 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-xl space-y-6">
                    <div class="text-center space-y-2">
                        <h2 class="text-2xl font-extrabold font-heading text-[#111111]">Franchise Enquiry Form</h2>
                        <p class="text-xs text-[#555555]">Fill in your details to receive full franchise prospectus & ROI sheet.</p>
                    </div>

                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Franchise application submitted! Our expansion manager will call you.');" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" required placeholder="Full Name *" class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs text-[#111111] outline-none">
                            <input type="tel" required placeholder="Phone Number *" class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs text-[#111111] outline-none">
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="email" required placeholder="Email Address *" class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs text-[#111111] outline-none">
                            <input type="text" required placeholder="Proposed City / District *" class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs text-[#111111] outline-none">
                        </div>
                        <select required class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs text-[#111111] outline-none">
                            <option value="" disabled selected>Investment Capacity</option>
                            <option value="3-5">₹3 Lakhs – ₹5 Lakhs</option>
                            <option value="5-10">₹5 Lakhs – ₹10 Lakhs</option>
                            <option value="10+">Above ₹10 Lakhs</option>
                        </select>
                        <button type="submit" class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-4 rounded-[6px] text-xs font-extrabold cursor-pointer transition-all shadow-md">
                            Submit Franchise Request
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    @include('layouts.footer')

</body>

</html>
