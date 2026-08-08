<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions (FAQ) | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Find answers to all your questions about admissions, diploma courses, fees, batch timings, placement support, and certificate verification at DigiCoders Academy.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #FFFFFF; color: #111111; }
        .font-heading { font-family: 'Outfit', sans-serif; }
    </style>

    @if(isset($faqs) && $faqs->count() > 0)
    @php
        $schemaFaqs = [];
        foreach($faqs as $fItem) {
            if (empty($fItem) || (!is_object($fItem) && !is_array($fItem))) continue;
            $schemaFaqs[] = [
                '@type' => 'Question',
                'name' => data_get($fItem, 'question'),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => data_get($fItem, 'answer'),
                ]
            ];
        }
        $schemaJson = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $schemaFaqs,
        ];
    @endphp
    <!-- Schema.org FAQPage Structured Data for Google SEO Snippets -->
    <script type="application/ld+json">
    {!! json_encode($schemaJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endif
</head>

<body class="antialiased text-[#111111] bg-white selection:bg-[#F58220] selection:text-white">

    @include('layouts.header')

    <main class="pt-[110px] sm:pt-[130px]">

        <!-- HERO SECTION -->
        <section class="pt-10 pb-8 sm:pt-14 sm:pb-12 bg-white relative overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-5">
                <nav class="flex items-center justify-center gap-2 text-xs font-semibold text-[#555555]">
                    <a href="{{ route('home') }}" class="hover:text-[#F58220]">Home</a>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                    <span class="text-[#00A651] font-bold">FAQ Center</span>
                </nav>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                    HELP & SUPPORT CENTER
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111]">
                    How Can We <span class="text-[#00A651]">Help You?</span>
                </h1>
                <p class="text-xs sm:text-sm text-[#555555] max-w-xl mx-auto">
                    Search our knowledge base or browse questions by category below.
                </p>

                <!-- Live Search Box -->
                <div class="max-w-xl mx-auto pt-6 pb-2 relative">
                    <input type="text" id="faqSearch" placeholder="Type your question (e.g. fees, admission, placement)..."
                        class="w-full pl-11 pr-4 py-3.5 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-xs sm:text-sm text-[#111111] outline-none shadow-sm focus:border-[#00A651]">
                    <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-4 top-1/2 transform -translate-y-1/2"></i>
                </div>
            </div>
        </section>

        <!-- ALL FAQ ACCORDION WITH CATEGORY FILTERS -->
        <section class="pb-14 sm:pb-20 pt-6 sm:pt-8 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="max-w-4xl mx-auto space-y-8 sm:space-y-10">
                    <div class="flex items-center justify-center gap-2.5 overflow-x-auto no-scrollbar py-2 my-2">
                        <button onclick="filterFaqs('all', this)" class="faq-chip active px-4 py-2.5 rounded-[6px] bg-[#00A651] text-white text-xs font-bold shadow-xs">All Questions</button>
                        @php
                            $allCategories = ['Admissions', 'Courses & Syllabus', 'Fees & Installments', 'Placements', 'Certificates'];
                        @endphp
                        @foreach($allCategories as $catName)
                        <button onclick="filterFaqs('{{ Str::slug($catName) }}', this)" class="faq-chip px-4 py-2.5 rounded-[6px] bg-[#FAFAFA] border border-slate-200 text-[#111111] text-xs font-bold hover:border-[#00A651] transition-all">{{ $catName }}</button>
                        @endforeach
                    </div>

                    <div class="space-y-4 sm:space-y-5 pt-2" id="faqAccordionList">
                        @forelse($faqs ?? [] as $faqItem)
                        @if(!empty($faqItem) && (is_object($faqItem) || is_array($faqItem)))
                        <div data-category="{{ Str::slug(data_get($faqItem, 'category', 'general')) }}"
                             class="faq-accordion-item rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 overflow-hidden">
                            <button onclick="toggleFaq('{{ data_get($faqItem, 'id') }}')" class="w-full p-5 text-left flex items-center justify-between font-extrabold text-sm text-[#111111] font-heading cursor-pointer hover:bg-slate-100/50 transition-colors">
                                <span class="pr-4">{{ data_get($faqItem, 'question') }}</span>
                                <div class="flex items-center gap-3 shrink-0">
                                    <span class="px-2.5 py-0.5 rounded-[4px] bg-emerald-50 text-[#00A651] text-[10px] font-extrabold uppercase">{{ data_get($faqItem, 'category') }}</span>
                                    <i data-lucide="chevron-down" id="faq-icon-{{ data_get($faqItem, 'id') }}" class="w-4 h-4 text-[#F58220] transition-transform duration-300"></i>
                                </div>
                            </button>
                            <div id="faq-ans-{{ data_get($faqItem, 'id') }}" class="hidden px-5 pb-5 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-200/60 pt-3">
                                {{ data_get($faqItem, 'answer') }}
                            </div>
                        </div>
                        @endif
                        @empty
                        <div class="text-center py-12 text-slate-500 bg-[#FAFAFA] rounded-[6px] border border-slate-200">
                            <p class="text-base font-bold">No FAQ items found.</p>
                        </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </section>

        <!-- FINAL CTA SECTION -->
        <section id="final-cta" class="py-14 sm:py-20 bg-[#FAFAFA] relative border-t border-slate-200/60 overflow-hidden">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="relative rounded-[6px] bg-white border border-slate-200/90 p-8 sm:p-12 lg:p-16 text-center space-y-6 max-w-4xl mx-auto shadow-xl">
                    <div class="space-y-3">
                        <span class="px-3 py-1 rounded-full bg-emerald-50 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase">
                            STILL HAVE QUESTIONS?
                        </span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-[#111111]">We Are Here To Help You</h2>
                        <p class="text-xs sm:text-sm text-[#555555]">Connect with DigiCoders Academy career counsellors today for personalized guidance.</p>
                    </div>

                    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="{{ route('admissions') }}"
                            class="bg-[#00A651] hover:bg-[#008d44] text-white px-8 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md cursor-pointer inline-block">
                            Apply Now
                        </a>
                        <a href="{{ route('contact') }}"
                            class="bg-white hover:bg-emerald-50/50 text-[#111111] border border-[#00A651]/40 px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all cursor-pointer inline-block">
                            Talk to Expert
                        </a>
                        @if(!empty($settings['site_phone']))
                        <a href="tel:{{ str_replace(' ', '', $settings['site_phone']) }}"
                            class="bg-[#F58220] hover:bg-[#d96f14] text-white px-7 py-3.5 rounded-[6px] text-xs sm:text-sm font-extrabold transition-all shadow-md cursor-pointer inline-block">
                            Call Now ({{ $settings['site_phone'] }})
                        </a>
                        @endif
                    </div>
                </div>

            </div>
        </section>

    </main>
    @include('layouts.footer')
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

        document.getElementById('faqSearch')?.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            const items = document.querySelectorAll('.faq-accordion-item');
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (!query || text.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        function filterFaqs(category, btn) {
            const chips = document.querySelectorAll('.faq-chip');
            chips.forEach(chip => {
                chip.classList.remove('bg-[#00A651]', 'text-white');
                chip.classList.add('bg-[#FAFAFA]', 'text-[#111111]');
            });
            if (btn) {
                btn.classList.remove('bg-[#FAFAFA]', 'text-[#111111]');
                btn.classList.add('bg-[#00A651]', 'text-white');
            }

            const items = document.querySelectorAll('.faq-accordion-item');
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>
