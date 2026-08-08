<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | DigiCoders Academy</title>
    <meta name="description" content="Terms & Conditions for DigiCoders Academy courses, student conduct, attendance, and certification rules.">

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
                    <span class="text-[#00A651] font-bold">Terms & Conditions</span>
                </nav>
                <h1 class="text-3xl font-extrabold font-heading text-[#111111]">Terms & Conditions</h1>
                <p class="text-xs text-[#555555]">Last updated: July 2026</p>

                <div class="prose max-w-none text-xs sm:text-sm text-[#555555] space-y-4 leading-relaxed">
                    <p>Welcome to DigiCoders Academy. By enrolling in any course or using our website, you agree to comply with the following terms and conditions.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">1. Admission & Attendance</h2>
                    <p>Students must maintain at least 75% attendance in practical lab sessions to be eligible for diploma examination and placement drives.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">2. Fee Payment & Installments</h2>
                    <p>Monthly fee installments must be cleared by the 10th of every month as agreed during admission registration.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">3. Certification & Placement Support</h2>
                    <p>Certificates and job placement assistance are granted upon successful submission of live projects and passing internal practical evaluations.</p>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

</body>

</html>
