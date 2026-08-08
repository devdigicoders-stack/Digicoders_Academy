<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers & Open Positions | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Join the team at DigiCoders Academy. Explore job opportunities for IT Trainers, Web Developers, Digital Marketing Experts, Counselor & Administrative staff.">

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
                            <span class="text-[#00A651] font-bold">Careers</span>
                        </nav>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                            WE ARE HIRING TALENT
                        </div>
                        <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18]">
                            Build Great Careers. <br>
                            <span class="text-[#00A651]">Shape Future Developers.</span>
                        </h1>
                        <p class="text-sm text-[#555555] font-medium leading-relaxed max-w-xl">
                            Work with Lucknow's premier tech training academy. Empower thousands of students with real-world coding and digital skills.
                        </p>
                        <div class="pt-2">
                            <a href="#openings" class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs font-extrabold shadow-md inline-flex items-center gap-2">
                                <span>View Open Positions</span>
                                <i data-lucide="arrow-down" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                            <img src="{{ asset('images/cta-student.png') }}" alt="Life at DigiCoders" class="w-full h-[280px] object-cover rounded-[6px]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EMPLOYEE BENEFITS -->
        <section class="py-14 sm:py-20 bg-[#FAFAFA] border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Employee Perks & Benefits</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="trending-up" class="w-8 h-8 text-[#00A651]"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Competitive Salary</h3>
                        <p class="text-xs text-[#555555]">Above industry-standard packages with bi-annual performance bonuses.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="heart-handshake" class="w-8 h-8 text-[#F58220]"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Work-Life Balance</h3>
                        <p class="text-xs text-[#555555]">6-day working schedule with festive holidays and paid leaves.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="award" class="w-8 h-8 text-blue-600"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Growth Opportunities</h3>
                        <p class="text-xs text-[#555555]">Fast-track career advancement into Lead Instructor and HOD roles.</p>
                    </div>

                    <div class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3">
                        <i data-lucide="coffee" class="w-8 h-8 text-purple-600"></i>
                        <h3 class="text-base font-extrabold text-[#111111]">Modern Workplace</h3>
                        <p class="text-xs text-[#555555]">State-of-the-art office infrastructure with tea/coffee & refreshment lounge.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OPEN POSITIONS -->
        <section id="openings" class="py-14 sm:py-20 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">Current Openings</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#00A651] text-[10px] font-bold">Full Time</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading mt-1">Full-Stack Web Development Trainer (React/Node/Laravel)</h3>
                            <p class="text-xs text-[#555555]">Lucknow • Min 2+ Years Corporate Experience Required</p>
                        </div>
                        <a href="#apply" class="bg-[#00A651] hover:bg-[#008d44] text-white px-5 py-2.5 rounded-[6px] text-xs font-bold whitespace-nowrap shadow-xs text-center">Apply Position</a>
                    </div>

                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="px-2.5 py-0.5 rounded-full bg-orange-50 text-[#F58220] text-[10px] font-bold">Full Time</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading mt-1">Advanced Excel & MIS Reporting Instructor</h3>
                            <p class="text-xs text-[#555555]">Lucknow • Expertise in Power Query & Dashboard Design</p>
                        </div>
                        <a href="#apply" class="bg-[#00A651] hover:bg-[#008d44] text-white px-5 py-2.5 rounded-[6px] text-xs font-bold whitespace-nowrap shadow-xs text-center">Apply Position</a>
                    </div>

                    <div class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="px-2.5 py-0.5 rounded-full bg-blue-50 text-blue-600 text-[10px] font-bold">Full Time</span>
                            <h3 class="text-base font-extrabold text-[#111111] font-heading mt-1">Academic Counsellor & Telecaller</h3>
                            <p class="text-xs text-[#555555]">Lucknow • Excellent Communication & Student Guidance Skills</p>
                        </div>
                        <a href="#apply" class="bg-[#00A651] hover:bg-[#008d44] text-white px-5 py-2.5 rounded-[6px] text-xs font-bold whitespace-nowrap shadow-xs text-center">Apply Position</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- APPLICATION FORM -->
        <section id="apply" class="py-14 sm:py-20 bg-[#FAFAFA]">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto p-8 rounded-[6px] bg-white border border-slate-200/90 shadow-xl space-y-6">
                    <div class="text-center space-y-2">
                        <h2 class="text-2xl font-extrabold font-heading text-[#111111]">Apply for a Job</h2>
                        <p class="text-xs text-[#555555]">Submit your details and resume below.</p>
                    </div>

                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Application submitted successfully! Our HR will contact you.');" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" required placeholder="Full Name *" class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs text-[#111111] outline-none">
                            <input type="tel" required placeholder="Phone Number *" class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs text-[#111111] outline-none">
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="email" required placeholder="Email Address *" class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs text-[#111111] outline-none">
                            <select required class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs text-[#111111] outline-none">
                                <option value="" disabled selected>Select Applied Position</option>
                                <option value="web-trainer">Web Dev Trainer</option>
                                <option value="excel-trainer">Excel MIS Trainer</option>
                                <option value="counsellor">Academic Counsellor</option>
                            </select>
                        </div>
                        <input type="url" required placeholder="Resume Drive / Portfolio Link *" class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs text-[#111111] outline-none">
                        <button type="submit" class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-4 rounded-[6px] text-xs font-extrabold cursor-pointer transition-all shadow-md">
                            Submit Job Application
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    @include('layouts.footer')

</body>

</html>
