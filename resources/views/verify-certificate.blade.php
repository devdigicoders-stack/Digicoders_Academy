<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Certificate Verification Portal | DigiCoders Academy</title>
    <meta name="description"
        content="Verify the authenticity of student diploma and training completion certificates issued by DigiCoders Academy Lucknow using certificate roll number.">

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

        <!-- HERO & VERIFICATION SEARCH FORM -->
        <section class="py-14 sm:py-20 bg-white border-b border-slate-200/60 relative overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
                
                <div class="text-center max-w-xl mx-auto space-y-3">
                    <nav class="flex items-center justify-center gap-2 text-xs font-semibold text-[#555555]">
                        <a href="{{ route('home') }}" class="hover:text-[#F58220]">Home</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <span class="text-[#00A651] font-bold">Certificate Verification</span>
                    </nav>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                        OFFICIAL VERIFICATION PORTAL
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold font-heading text-[#111111]">
                        Verify Student <span class="text-[#00A651]">Certificate</span>
                    </h1>
                    <p class="text-xs sm:text-sm text-[#555555]">
                        Enter the unique certificate serial number printed on the certificate to check its authenticity.
                    </p>
                </div>

                <!-- Form Card -->
                <div class="max-w-xl mx-auto p-6 sm:p-8 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-xl space-y-4">
                    <form action="#" method="POST" onsubmit="event.preventDefault(); document.getElementById('verifyResult').classList.remove('hidden');" class="space-y-4">
                        @csrf
                        <div class="space-y-1.5">
                            <label class="text-xs font-extrabold text-[#111111]">Certificate Roll No. / Serial No. <span class="text-red-500">*</span></label>
                            <input type="text" required placeholder="e.g. DCA-2026-7842"
                                class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs sm:text-sm text-[#111111] outline-none focus:border-[#00A651]">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-extrabold text-[#111111]">Student Name (Optional)</label>
                            <input type="text" placeholder="Enter student name"
                                class="w-full px-4 py-3 rounded-[6px] bg-white border border-slate-200 text-xs sm:text-sm text-[#111111] outline-none focus:border-[#00A651]">
                        </div>

                        <button type="submit" class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-3.5 rounded-[6px] text-xs font-extrabold cursor-pointer transition-all shadow-md flex items-center justify-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4"></i>
                            <span>Verify Certificate Status</span>
                        </button>
                    </form>
                </div>

                <!-- VERIFIED RESULT CARD PREVIEW (Shown after submit) -->
                <div id="verifyResult" class="max-w-2xl mx-auto p-6 sm:p-8 rounded-[6px] bg-white border border-emerald-500/30 shadow-2xl space-y-6 animate-fade-in border-t-4 border-t-[#00A651]">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center shrink-0">
                                <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#00A651] text-[10px] font-extrabold uppercase">AUTHENTIC & VERIFIED</span>
                                <h3 class="text-base font-extrabold text-[#111111] font-heading">Certificate Verification Result</h3>
                            </div>
                        </div>
                        <span class="text-xs font-bold text-slate-400">ISO 9001:2015</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Student Name:</span>
                            <strong class="text-sm text-[#111111]">Saurabh Kumar Verma</strong>
                        </div>
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Certificate No:</span>
                            <strong class="text-sm text-[#00A651]">DCA-2026-7842</strong>
                        </div>
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Diploma Course:</span>
                            <strong class="text-sm text-[#111111]">ADWD (Full-Stack Web Development)</strong>
                        </div>
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Grade Secured:</span>
                            <strong class="text-sm text-[#F58220]">Grade A+ (Distinction)</strong>
                        </div>
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Issue Date:</span>
                            <strong class="text-sm text-[#111111]">July 15, 2026</strong>
                        </div>
                        <div class="p-3 rounded-[6px] bg-[#FAFAFA] border border-slate-200">
                            <span class="text-[#555555] block">Issuing Authority:</span>
                            <strong class="text-sm text-[#111111]">DigiCoders Academy Lucknow</strong>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-2 border-t border-slate-100 text-xs">
                        <span class="text-[#555555]">Official QR Code Signature Verified</span>
                        <button onclick="window.print()" class="text-[#00A651] font-bold flex items-center gap-1 hover:underline">
                            <i data-lucide="printer" class="w-4 h-4"></i> Print Verification Copy
                        </button>
                    </div>
                </div>

            </div>
        </section>

    </main>

    @include('layouts.footer')

</body>

</html>
