<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | DigiCoders Academy</title>
    <meta name="description" content="Privacy Policy for DigiCoders Academy Lucknow. Learn how we collect, store, and protect student information.">

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
        <section class="py-12 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
                <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                    <a href="{{ route('home') }}" class="hover:text-[#F58220]">Home</a>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                    <span class="text-[#00A651] font-bold">Privacy Policy</span>
                </nav>
                <h1 class="text-3xl font-extrabold font-heading text-[#111111]">Privacy Policy</h1>
                <p class="text-xs text-[#555555]">Last updated: July 2026</p>

                <div class="prose max-w-none text-xs sm:text-sm text-[#555555] space-y-4 leading-relaxed">
                    <p>DigiCoders Academy ("we", "our", "us") respects your privacy and is committed to protecting the personal data of students, parents, and website visitors.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">1. Information We Collect</h2>
                    <p>We collect personal information such as full name, phone number, email address, course preferences, and academic qualifications provided via admission forms, counselling requests, or website inquiries.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">2. How We Use Information</h2>
                    <p>Your details are strictly used to respond to course inquiries, arrange demo classes, send batch schedules, process admission receipts, and provide job placement updates.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">3. Data Security</h2>
                    <p>We employ security measures to prevent unauthorized access, alteration, or disclosure of student records.</p>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

</body>

</html>
