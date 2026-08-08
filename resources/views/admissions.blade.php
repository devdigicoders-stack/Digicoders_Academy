<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions 2026 | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Apply for 6-Month & 1-Year Diploma courses at DigiCoders Academy Lucknow. Check admission procedure, eligibility, fee structure, batch timings & scholarships.">

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

    <!-- MAIN Admissions CONTENT -->
    <main class="pt-[110px] sm:pt-[130px]">

        <!-- 1️⃣ HERO SECTION (Compact 320px Height Aesthetic, Apple/Linear Glass Minimalist Style) -->
        <section id="hero" class="relative py-12 sm:py-16 bg-white overflow-hidden border-b border-slate-200/60">
            <!-- Background Decorative Soft Blur Blobs -->
            <div
                class="absolute -top-24 -left-20 w-96 h-96 bg-emerald-50 rounded-full blur-3xl opacity-70 pointer-events-none z-0">
            </div>
            <div
                class="absolute top-1/2 right-0 w-[450px] h-[450px] bg-orange-50/80 rounded-full blur-3xl opacity-70 pointer-events-none z-0">
            </div>

            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-12 items-center">

                    <!-- Left Column: Breadcrumb, Badge, Heading, Desc, Action Buttons -->
                    <div class="lg:col-span-7 space-y-5 text-left">

                        <!-- Breadcrumb -->
                        <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                            <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span class="text-[#00A651] font-bold">Admissions 2026</span>
                        </nav>

                        <!-- Admissions Open Badge -->
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>Admissions Open 2026</span>
                        </div>

                        <!-- Main Heading -->
                        <h1
                            class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Start Your Learning Journey With <br class="hidden sm:inline">
                            <span class="text-[#00A651]">DigiCoders Academy</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Take the first step towards a successful career with practical diploma programmes, expert
                            trainers and 100% placement support.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#admission-form"
                                class="bg-[#00A651] hover:bg-[#008d44] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                                <span>Apply Now</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>

                            <button onclick="openModal('brochureModal')"
                                class="bg-white hover:bg-slate-50 text-[#111111] border border-slate-300 px-6 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-2xs flex items-center gap-2 cursor-pointer">
                                <i data-lucide="download" class="w-4 h-4 text-[#F58220]"></i>
                                <span>Download Prospectus</span>
                            </button>
                        </div>

                    </div>

                    <!-- Right Column: Reception Graphic Image + Floating Statistics Cards -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative w-full max-w-[460px] mx-auto">

                            <!-- Main Reception Image with 6px Border Radius -->
                            <div
                                class="relative rounded-[6px] bg-white p-2 border border-slate-200/90 shadow-xl overflow-hidden">
                                <img src="{{ asset('images/cta-student.png') }}"
                                    alt="DigiCoders Academy Admissions Reception"
                                    class="w-full h-[280px] sm:h-[320px] object-cover rounded-[6px]">
                            </div>

                            <!-- Floating Stat Card 1: 5000+ Students -->
                            <div
                                class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div
                                    class="w-9 h-9 rounded-[6px] bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0">
                                    <i data-lucide="users" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">5000+</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Trained Students</p>
                                </div>
                            </div>

                            <!-- Floating Stat Card 2: 95% Placement -->
                            <div
                                class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-3 shadow-lg flex items-center gap-3 z-20">
                                <div
                                    class="w-9 h-9 rounded-[6px] bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                    <i data-lucide="award" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-[#111111] font-heading">95%</p>
                                    <p class="text-[10px] font-bold text-[#555555]">Placement Record</p>
                                </div>
                            </div>

                            <!-- Floating Stat Card 3: 10+ Years -->
                            <div
                                class="absolute top-1/2 -left-6 transform -translate-y-1/2 bg-white/95 backdrop-blur-md border border-slate-200/90 rounded-[6px] p-2.5 shadow-md flex items-center gap-2.5 z-20 hidden sm:flex">
                                <div
                                    class="w-8 h-8 rounded-[6px] bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="clock" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-extrabold text-[#111111] font-heading">10+ Years</p>
                                    <p class="text-[9px] font-bold text-[#555555]">Excellence</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
 <!-- 9️⃣ ADMISSION FORM (Premium Glass Form) -->
        <section id="admission-form" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Online
                        Admission Form</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Submit your details to reserve your
                        seat in the upcoming batch.</p>
                </div>

                <div class="max-w-4xl mx-auto p-6 sm:p-10 rounded-[6px] bg-white border border-slate-200/90 shadow-xl">
                    @if(session('success'))
                        <div
                            class="mb-6 p-4 rounded-[6px] bg-emerald-50 border border-[#00A651]/40 text-[#00A651] text-xs sm:text-sm font-bold flex items-center gap-3 shadow-xs">
                            <i data-lucide="check-circle" class="w-5 h-5 shrink-0"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    @if($errors->any())
                        <div
                            class="mb-6 p-4 rounded-[6px] bg-red-50 border border-red-200 text-red-700 text-xs sm:text-sm font-medium">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admissions.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-8">
                        @csrf

                        <!-- SECTION 1: Personal Details -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-2 border-b border-slate-100 pb-2">
                                <i data-lucide="user" class="w-5 h-5 text-[#00A651]"></i>
                                <h3 class="text-base font-extrabold font-heading text-[#111111]">1. Student Personal
                                    Information</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Student Name -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Student Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                        placeholder="Enter student full name"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Mobile Number -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Mobile Number <span
                                            class="text-red-500">*</span></label>
                                    <input type="tel" id="studentPhone" name="phone" value="{{ old('phone') }}" required
                                        pattern="[6-9][0-9]{9}" maxlength="10" minlength="10"
                                        placeholder="10-digit mobile (starts with 6-9)"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); if(this.value.length > 0 && !['6','7','8','9'].includes(this.value[0])) { this.value = ''; }"
                                        title="Mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- WhatsApp Number -->
                                <div class="space-y-1.5">
                                    <div class="flex items-center justify-between">
                                        <label class="text-xs font-extrabold text-[#111111]">WhatsApp Number <span
                                                class="text-red-500">*</span></label>
                                        <label
                                            class="inline-flex items-center gap-1.5 cursor-pointer text-[11px] font-bold text-[#00A651] select-none hover:underline">
                                            <input type="checkbox" id="sameAsMobile" onchange="syncWhatsAppNumber()"
                                                class="w-3.5 h-3.5 accent-[#00A651] rounded cursor-pointer">
                                            <span>Same as Mobile</span>
                                        </label>
                                    </div>
                                    <input type="tel" id="studentWhatsApp" name="whatsapp_number"
                                        value="{{ old('whatsapp_number') }}" required pattern="[6-9][0-9]{9}"
                                        maxlength="10" minlength="10" placeholder="10-digit WhatsApp (starts with 6-9)"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); if(this.value.length > 0 && !['6','7','8','9'].includes(this.value[0])) { this.value = ''; }"
                                        title="WhatsApp number must start with 6, 7, 8, or 9 and be exactly 10 digits"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Email Address -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        placeholder="student.email@gmail.com"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Date of Birth -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Date of Birth <span
                                            class="text-red-500">*</span></label>
                                    <input type="date" name="dob" value="{{ old('dob') }}" required
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Gender -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Gender <span
                                            class="text-red-500">*</span></label>
                                    <select name="gender" required
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </div>

                                <!-- Admission Mode / Branch -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Admission Mode / Branch <span
                                            class="text-red-500">*</span></label>
                                    <select name="mode" required
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                        <option value="" disabled selected>Select Mode / Campus</option>
                                        <option value="Online" {{ old('mode') == 'Online' ? 'selected' : '' }}>Online
                                            (Live Classes)</option>
                                        <option value="Lucknow" {{ old('mode', 'Lucknow') == 'Lucknow' ? 'selected' : '' }}>Lucknow Campus</option>
                                        <option value="Kanpur" {{ old('mode') == 'Kanpur' ? 'selected' : '' }}>Kanpur
                                            Campus</option>
                                        <option value="Gorakhpur" {{ old('mode') == 'Gorakhpur' ? 'selected' : '' }}>
                                            Gorakhpur Campus</option>
                                    </select>
                                </div>

                                <!-- Aadhaar Card Number -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Aadhaar Card Number <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="aadhaar_number" value="{{ old('aadhaar_number') }}"
                                        pattern="[0-9]{12}" maxlength="12" minlength="12" required
                                        placeholder="Enter 12-digit Aadhaar number"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 12);"
                                        title="Aadhaar card number must be exactly 12 numeric digits"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="space-y-1.5">
                                <label class="text-xs font-extrabold text-[#111111]">Full Permanent Address <span
                                        class="text-red-500">*</span></label>
                                <textarea name="address" rows="2" required
                                    placeholder="House No., Street, Area, City, Pin Code"
                                    class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all resize-none">{{ old('address') }}</textarea>
                            </div>
                        </div>

                        <!-- SECTION 2: Academic & Course Selection -->
                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-2 border-b border-slate-100 pb-2">
                                <i data-lucide="graduation-cap" class="w-5 h-5 text-[#F58220]"></i>
                                <h3 class="text-base font-extrabold font-heading text-[#111111]">2. Course & Academic
                                    Selection</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                                <!-- Highest Qualification -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Highest Qualification <span
                                            class="text-red-500">*</span></label>
                                    <select name="qualification" required
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                        <option value="" disabled selected>Select Qualification</option>
                                        <option value="10th Pass" {{ old('qualification') == '10th Pass' ? 'selected' : '' }}>10th Pass</option>
                                        <option value="12th Pass" {{ old('qualification') == '12th Pass' ? 'selected' : '' }}>12th Pass</option>
                                        <option value="Diploma" {{ old('qualification') == 'Diploma' ? 'selected' : '' }}>
                                            Diploma</option>
                                        <option value="Graduation" {{ old('qualification') == 'Graduation' ? 'selected' : '' }}>Graduation Pursuing / Completed</option>
                                        <option value="Post Graduation" {{ old('qualification') == 'Post Graduation' ? 'selected' : '' }}>Post Graduation</option>
                                    </select>
                                </div>

                                <!-- College / School Name -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">College / School Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="school_college_name"
                                        value="{{ old('school_college_name') }}" required
                                        placeholder="Enter college or school name"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Selected Course -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Selected Course <span
                                            class="text-red-500">*</span></label>
                                    <select name="course_name" required
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                        <option value="" disabled selected>Choose a Program</option>
                                        <option value="DCA – Diploma in Computer Applications (6 Months)" {{ old('course_name') == 'DCA – Diploma in Computer Applications (6 Months)' ? 'selected' : '' }}>DCA (6 Months)</option>
                                        <option value="ADCA – Advanced Computer Diploma (1 Year)" {{ old('course_name') == 'ADCA – Advanced Computer Diploma (1 Year)' ? 'selected' : '' }}>ADCA (1 Year)</option>
                                        <option value="ADWD – Full Stack Web Development (1 Year)" {{ old('course_name') == 'ADWD – Full Stack Web Development (1 Year)' ? 'selected' : '' }}>ADWD Web Dev (1 Year)</option>
                                        <option value="ADDM – Digital Marketing Specialist (1 Year)" {{ old('course_name') == 'ADDM – Digital Marketing Specialist (1 Year)' ? 'selected' : '' }}>ADDM Digital Marketing (1 Year)</option>
                                        <option value="Advanced Excel & MIS Reporting (6 Months)" {{ old('course_name') == 'Advanced Excel & MIS Reporting (6 Months)' ? 'selected' : '' }}>Adv. Excel & MIS (6 Months)</option>
                                        <option value="Web Designing UI/UX (6 Months)" {{ old('course_name') == 'Web Designing UI/UX (6 Months)' ? 'selected' : '' }}>Web Designing (6 Months)
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 3: Guardian Details -->
                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-2 border-b border-slate-100 pb-2">
                                <i data-lucide="users" class="w-5 h-5 text-blue-600"></i>
                                <h3 class="text-base font-extrabold font-heading text-[#111111]">3. Father / Guardian
                                    Details</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Father/Guardian Name -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Father/Guardian Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="father_name" value="{{ old('father_name') }}" required
                                        placeholder="Enter father or guardian name"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>

                                <!-- Guardian Mobile -->
                                <div class="space-y-1.5">
                                    <label class="text-xs font-extrabold text-[#111111]">Guardian Mobile Number <span
                                            class="text-red-500">*</span></label>
                                    <input type="tel" name="guardian_mobile" value="{{ old('guardian_mobile') }}"
                                        required pattern="[6-9][0-9]{9}" maxlength="10" minlength="10"
                                        placeholder="10-digit guardian mobile (starts with 6-9)"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); if(this.value.length > 0 && !['6','7','8','9'].includes(this.value[0])) { this.value = ''; }"
                                        title="Guardian mobile number must start with 6, 7, 8, or 9 and be exactly 10 digits"
                                        class="w-full px-4 py-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] focus:bg-white focus:border-[#00A651] focus:ring-1 focus:ring-[#00A651] outline-none transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 4: Student Photo -->
                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-2 border-b border-slate-100 pb-2">
                                <i data-lucide="camera" class="w-5 h-5 text-purple-600"></i>
                                <h3 class="text-base font-extrabold font-heading text-[#111111]">4. Student Photograph
                                </h3>
                            </div>

                            <div class="max-w-md">
                                <!-- Student Photo (Optional) -->
                                <div class="space-y-1.5 p-3.5 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                                    <label
                                        class="text-xs font-extrabold text-[#111111] flex items-center justify-between">
                                        <span>Upload Student Photo</span>
                                        <span class="text-[10px] text-slate-400 font-normal">(Optional)</span>
                                    </label>
                                    <input type="file" name="student_photo" accept="image/*"
                                        class="w-full text-xs text-[#555555] file:mr-3 file:py-1.5 file:px-3 file:rounded-[4px] file:border-0 file:text-xs file:font-bold file:bg-[#00A651]/10 file:text-[#00A651] hover:file:bg-[#00A651]/20 cursor-pointer">
                                    <p class="text-[10px] text-slate-400">Passport size photo (JPG/PNG)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-4 rounded-[6px] text-sm font-extrabold transition-all shadow-md hover:shadow-lg cursor-pointer flex items-center justify-center gap-2">
                            <span>Submit</span>
                            <i data-lucide="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>

            </div>
        </section>


       

        <!-- 5️⃣ COURSES AVAILABLE (Grid Layout with Duration, Eligibility & Action Button) -->
        <section id="courses-available" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Courses
                        Available</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Explore our job-oriented 6-month &
                        1-year diploma programs.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                    <!-- Course 1: DCA -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-orange-50 text-[#F58220] text-xs font-bold">6
                                    Months Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 10th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">DCA (Computer Application)
                            </h3>
                            <p class="text-xs text-[#555555] leading-relaxed">Master Computer Fundamentals, MS Office,
                                Windows OS, Internet & Digital Tools.</p>
                        </div>
                        <a href="{{ route('courses.dca') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Course 2: ADCA -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-emerald-50 text-[#00A651] text-xs font-bold">1
                                    Year Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 12th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">ADCA (Adv. Computer
                                Application)</h3>
                            <p class="text-xs text-[#555555] leading-relaxed">Includes Office Automation, Tally Prime
                                GST, Photoshop, Web Basics & C Programming.</p>
                        </div>
                        <a href="{{ route('courses.adca') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Course 3: ADWD -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-emerald-50 text-[#00A651] text-xs font-bold">1
                                    Year Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 12th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">ADWD (Web Development)</h3>
                            <p class="text-xs text-[#555555] leading-relaxed">Frontend UI/UX, HTML5, CSS3, Tailwind, JS,
                                React.js, Git & Netlify Deployment.</p>
                        </div>
                        <a href="{{ route('courses.adwd') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Course 4: ADDM -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-emerald-50 text-[#00A651] text-xs font-bold">1
                                    Year Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 12th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">ADDM (Digital Marketing)</h3>
                            <p class="text-xs text-[#555555] leading-relaxed">SEO, Google Ads, Meta Ads Manager, GA4
                                Analytics, Canva & AI Marketing Tools.</p>
                        </div>
                        <a href="{{ route('courses.addm') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Course 5: Advanced Excel & MIS -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-orange-50 text-[#F58220] text-xs font-bold">6
                                    Months Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 10th / 12th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">Advanced Excel & MIS</h3>
                            <p class="text-xs text-[#555555] leading-relaxed">Formulas, VLOOKUP/XLOOKUP, Pivot Tables,
                                Dashboards, Power Query & VBA Macros.</p>
                        </div>
                        <a href="{{ route('courses.excel-mis') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                    <!-- Course 6: Web Designing -->
                    <div
                        class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="px-2.5 py-1 rounded-[6px] bg-orange-50 text-[#F58220] text-xs font-bold">6
                                    Months Diploma</span>
                                <span class="text-xs text-[#555555] font-medium">Eligibility: 10th / 12th Pass</span>
                            </div>
                            <h3 class="text-xl font-extrabold text-[#111111] font-heading">Web Designing</h3>
                            <p class="text-xs text-[#555555] leading-relaxed">UI Principles, Figma, HTML5, CSS3,
                                Flexbox, Bootstrap 5 & JavaScript Basics.</p>
                        </div>
                        <a href="{{ route('courses.web-designing') }}"
                            class="w-full bg-[#FAFAFA] hover:bg-[#00A651] text-[#111111] hover:text-white border border-slate-200 hover:border-[#00A651] py-2.5 rounded-[6px] text-xs font-extrabold text-center transition-all flex items-center justify-center gap-2">
                            <span>View Course</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                </div>

            </div>
        </section>





        {{--
        <!-- 7️⃣ BATCH SCHEDULE (Glass Cards for Morning, Afternoon, Evening, Weekend) -->
        <section id="batch-schedule" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Batch
                        Schedule</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Choose the batch timing that fits your
                        schedule.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Batch 1: Morning -->
                    <div
                        class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 hover:bg-white hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-8 h-8 rounded-[6px] bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                                <i data-lucide="sun" class="w-4 h-4"></i>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-[6px] bg-emerald-50 text-[#00A651] text-[10px] font-extrabold">Seats
                                Open</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Morning Batch</h3>
                        <p class="text-sm font-extrabold text-[#00A651]">8:00 AM – 11:00 AM</p>
                        <p class="text-xs text-[#555555]">Monday to Friday (Regular Lab & Classes)</p>
                    </div>

                    <!-- Batch 2: Afternoon -->
                    <div
                        class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 hover:bg-white hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-8 h-8 rounded-[6px] bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <i data-lucide="sun-medium" class="w-4 h-4"></i>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-[6px] bg-emerald-50 text-[#00A651] text-[10px] font-extrabold">Seats
                                Open</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Afternoon Batch</h3>
                        <p class="text-sm font-extrabold text-[#00A651]">12:00 PM – 3:00 PM</p>
                        <p class="text-xs text-[#555555]">Monday to Friday (Regular Lab & Classes)</p>
                    </div>

                    <!-- Batch 3: Evening -->
                    <div
                        class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 hover:bg-white hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-8 h-8 rounded-[6px] bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
                                <i data-lucide="moon" class="w-4 h-4"></i>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-[6px] bg-emerald-50 text-[#00A651] text-[10px] font-extrabold">Filling
                                Fast</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Evening Batch</h3>
                        <p class="text-sm font-extrabold text-[#00A651]">4:00 PM – 7:00 PM</p>
                        <p class="text-xs text-[#555555]">Monday to Friday (Popular for Students)</p>
                    </div>

                    <!-- Batch 4: Weekend -->
                    <div
                        class="p-6 rounded-[6px] bg-[#FAFAFA] border border-slate-200/80 hover:bg-white hover:shadow-md transition-all space-y-3">
                        <div class="flex items-center justify-between">
                            <span
                                class="w-8 h-8 rounded-[6px] bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-[6px] bg-orange-50 text-[#F58220] text-[10px] font-extrabold">Weekend
                                Only</span>
                        </div>
                        <h3 class="text-base font-extrabold text-[#111111] font-heading">Weekend Batch</h3>
                        <p class="text-sm font-extrabold text-[#00A651]">10:00 AM – 2:00 PM</p>
                        <p class="text-xs text-[#555555]">Saturday & Sunday (Working Professionals)</p>
                    </div>

                </div>

            </div>
        </section>
        --}}



        <!-- 🔟 FREQUENTLY ASKED QUESTIONS (10 Questions Accordion) -->
        <section id="faq" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center max-w-xl mx-auto mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold font-heading text-[#111111]">Frequently
                        Asked Questions</h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    <p class="text-xs sm:text-sm text-[#555555] font-medium mt-3">Got questions about admissions? Find
                        all answers below.</p>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    @forelse($faqs ?? [] as $index => $fItem)
                    @if(!empty($fItem) && (is_object($fItem) || is_array($fItem)))
                    <div class="rounded-[6px] bg-white border border-slate-200/90 overflow-hidden shadow-2xs">
                        <button onclick="toggleFaq('adm-{{ data_get($fItem, 'id') }}')"
                            class="w-full p-5 text-left flex items-center justify-between font-extrabold text-sm text-[#111111] font-heading cursor-pointer hover:bg-slate-50 transition-colors">
                            <span>{{ $index + 1 }}. {{ data_get($fItem, 'question') }}</span>
                            <i data-lucide="chevron-down" id="faq-icon-adm-{{ data_get($fItem, 'id') }}"
                                class="w-4 h-4 text-[#F58220] transition-transform duration-300"></i>
                        </button>
                        <div id="faq-ans-adm-{{ data_get($fItem, 'id') }}"
                            class="hidden px-5 pb-5 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-100 pt-3">
                            {{ data_get($fItem, 'answer') }}
                        </div>
                    </div>
                    @endif
                    @empty
                    <div class="p-6 text-center text-xs text-slate-400">No FAQs available right now.</div>
                    @endforelse
                </div>

            </div>
        </section>


        <!-- 11️⃣ FINAL CTA (Large Premium Glass Section) -->
        <section id="final-cta" class="py-14 sm:py-20 bg-white relative border-b border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div
                    class="relative rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 overflow-hidden">

                    <!-- Background Soft Green Blob -->
                    <div
                        class="absolute -right-20 -bottom-20 w-[450px] h-[450px] bg-[#EAF7EE] rounded-full blur-3xl pointer-events-none opacity-80 z-0">
                    </div>

                    <div class="relative z-10 max-w-2xl mx-auto space-y-4">
                        <span
                            class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            Admissions Open 2026
                        </span>

                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#111111] leading-tight">
                            Ready To Join <br class="hidden sm:inline">
                            <span class="text-[#00A651]">DigiCoders Academy?</span>
                        </h2>

                        <p class="text-xs sm:text-sm text-[#555555] font-medium leading-relaxed">
                            Transform your skills with hands-on practical training and kickstart your dream career in
                            Lucknow.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="relative z-10 flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="#admission-form"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-8 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md hover:shadow-lg flex items-center gap-2 cursor-pointer">
                            <span>Apply Now</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all cursor-pointer flex items-center gap-2 shadow-2xs">
                            <i data-lucide="headset" class="w-4 h-4 text-[#111111]"></i>
                            <span>Talk to Expert</span>
                        </a>

                        <a href="tel:{{ str_replace(' ', '', $settings['site_phone'] ?? '+91 91409 67607') }}"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md flex items-center gap-2 cursor-pointer">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            <span>Call Now ({{ $settings['site_phone'] ?? '+91 91409 67607' }})</span>
                        </a>
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

        function syncWhatsAppNumber() {
            const phoneInput = document.getElementById('studentPhone');
            const whatsappInput = document.getElementById('studentWhatsApp');
            const checkbox = document.getElementById('sameAsMobile');

            if (checkbox && checkbox.checked && phoneInput && whatsappInput) {
                whatsappInput.value = phoneInput.value;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            const phoneInput = document.getElementById('studentPhone');
            const checkbox = document.getElementById('sameAsMobile');

            if (phoneInput && checkbox) {
                phoneInput.addEventListener('input', function () {
                    if (checkbox.checked) {
                        const whatsappInput = document.getElementById('studentWhatsApp');
                        if (whatsappInput) {
                            whatsappInput.value = this.value;
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>