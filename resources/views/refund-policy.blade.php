<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Refund Policy | DigiCoders Academy</title>
    <meta name="description" content="Fee refund policy guidelines for diploma courses and admission registration at DigiCoders Academy.">

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
                    <span class="text-[#00A651] font-bold">Refund Policy</span>
                </nav>
                <h1 class="text-3xl font-extrabold font-heading text-[#111111]">Fee Refund Policy</h1>
                <p class="text-xs text-[#555555]">Last updated: July 2026</p>

                <div class="prose max-w-none text-xs sm:text-sm text-[#555555] space-y-4 leading-relaxed">
                    <p>At DigiCoders Academy, we strive to deliver 100% practical and job-ready technical education. Please review our fee refund policy rules below.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">1. Demo Class Period</h2>
                    <p>Students can attend 3 days of free demo classes before finalizing their course admission to ensure complete satisfaction with our faculty and teaching methods.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">2. Cancellation Within 7 Days</h2>
                    <p>If a student requests cancellation within 7 days of course commencement, fees paid (excluding registration charge) will be refunded after formal administrative review.</p>
                    <h2 class="text-base font-extrabold text-[#111111] font-heading pt-2">3. Non-Refundable Scenarios</h2>
                    <p>After 7 days of batch orientation or once course study material and software licenses have been allocated, fees become non-refundable.</p>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

</body>

</html>
