<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->meta_title ?: $blog->title . ' | DigiCoders Blog' }}</title>
    <meta name="description"
        content="{{ $blog->meta_description ?: ($blog->summary ?: Str::limit(strip_tags($blog->content), 160)) }}">
    @if($blog->meta_keywords)
        <meta name="keywords" content="{{ $blog->meta_keywords }}">
    @endif
    @if($blog->canonical_url)
        <link rel="canonical" href="{{ $blog->canonical_url }}">
    @endif

    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&family=Fira+Code:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- FontAwesome 6 Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

        code,
        pre {
            font-family: 'Fira Code', monospace;
        }

        .prose img {
            border-radius: 8px;
            margin: 16px 0;
            max-width: 100%;
            height: auto;
            border: 1px solid #e2e8f0;
        }

        .prose p {
            margin-bottom: 1.25em;
            line-height: 1.7;
        }

        .prose h2,
        .prose h3,
        .prose h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            color: #111111;
            margin-top: 1.5em;
            margin-bottom: 0.5em;
        }

        /* Custom Sleek Scrollbar for TOC */
        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: #00A651 #f1f5f9;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #00A651;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #008d44;
        }
    </style>
</head>

<body class="antialiased text-[#111111] bg-white selection:bg-[#F58220] selection:text-white">

    <!-- TOP READING PROGRESS BAR -->
    <div id="readingProgress" class="h-1 bg-[#00A651] fixed top-0 left-0 z-50 w-0 transition-all duration-150"></div>

    <!-- HEADER LAYOUT INCLUDE -->
    @include('layouts.header')

    <!-- MAIN Blog Details CONTENT -->
    <main class="pt-[110px] sm:pt-[130px]">

        <!-- 1️⃣ HERO ARTICLE HEADER SECTION -->
        <section id="hero" class="relative pt-6 sm:pt-10 pb-2 bg-white">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="max-w-4xl mx-auto space-y-5">

                    <!-- Breadcrumb -->
                    <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                        <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <a href="{{ route('blogs.index') }}" class="hover:text-[#F58220] transition-colors">Blog</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <span class="text-[#00A651] font-bold">{{ Str::limit($blog->title, 35) }}</span>
                    </nav>

                    <!-- Category Badge -->
                    <a href="{{ route('blogs.index', ['category' => $blog->category]) }}"
                        class="inline-block px-3 py-1 rounded-full bg-[#00A651] text-white text-xs font-extrabold hover:bg-[#008d44] transition-colors">
                        {{ $blog->category }}
                    </a>

                    <!-- Article Title -->
                    <h1
                        class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                        {{ $blog->title }}
                    </h1>

                    @php
                        $shareUrl = urlencode(url()->current());
                        $shareTitle = urlencode($blog->title);
                    @endphp

                    <!-- Author & Meta Details Bar with Integrated Social Share Buttons -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-slate-200/60">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-[#00A651] text-white font-extrabold flex items-center justify-center text-sm shrink-0">
                                DC
                            </div>
                            <div>
                                <p class="text-xs font-extrabold text-[#111111]">
                                    {{ $blog->author ?: 'DigiCoders Team' }}</p>
                                <p class="text-[11px] text-[#555555]">Published
                                    {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recently' }}</p>
                            </div>
                        </div>

                        <!-- Right Side: Views Count & Social Share Icons -->
                        <div class="flex items-center gap-4 text-xs text-[#555555] flex-wrap">
                            <span class="flex items-center gap-1 font-semibold border-r border-slate-200 pr-4">
                                <i data-lucide="eye" class="w-4 h-4 text-[#00A651]"></i>
                                {{ number_format($blog->views_count) }} views
                            </span>

                            <!-- Social Share Icons -->
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold text-[#111111]">Share:</span>

                                <!-- WhatsApp -->
                                <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}"
                                    target="_blank" rel="noopener noreferrer" title="Share on WhatsApp"
                                    class="w-8 h-8 rounded-full bg-[#25D366]/10 text-[#16a34a] hover:bg-[#25D366] hover:text-white flex items-center justify-center transition-all duration-200 shadow-sm text-sm">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank"
                                    rel="noopener noreferrer" title="Share on Facebook"
                                    class="w-8 h-8 rounded-full bg-[#1877F2]/10 text-[#1877F2] hover:bg-[#1877F2] hover:text-white flex items-center justify-center transition-all duration-200 shadow-sm text-sm">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <!-- Twitter / X -->
                                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}"
                                    target="_blank" rel="noopener noreferrer" title="Share on X (Twitter)"
                                    class="w-8 h-8 rounded-full bg-[#1877F2]/10 text-[#1877F2] hover:bg-[#1877F2] hover:text-white flex items-center justify-center transition-all duration-200 shadow-sm">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                    </svg>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}"
                                    target="_blank" rel="noopener noreferrer" title="Share on LinkedIn"
                                    class="w-8 h-8 rounded-full bg-[#0A66C2]/10 text-[#0A66C2] hover:bg-[#0A66C2] hover:text-white flex items-center justify-center transition-all duration-200 shadow-sm text-sm">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>

                                <!-- Copy Link -->
                                <button onclick="copyBlogShareLink('{{ url()->current() }}')" title="Copy Article Link"
                                    class="w-8 h-8 rounded-full bg-slate-100 text-[#333333] hover:bg-[#00A651] hover:text-white flex items-center justify-center transition-all duration-200 shadow-sm border border-slate-200/80 cursor-pointer text-xs">
                                    <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Tags Display -->
                    @if($blog->tags->count() > 0)
                        <div class="flex flex-wrap items-center gap-2 pt-2">
                            <span class="text-xs font-bold text-[#555555]">Tags:</span>
                            @foreach($blog->tags as $t)
                                <a href="{{ route('blog.index', ['tag' => $t->slug]) }}"
                                    class="px-3 py-1 rounded-full bg-slate-100 hover:bg-emerald-50 text-xs font-bold text-[#00A651] transition-colors">
                                    #{{ $t->name }}
                                </a>
                            @endforeach
                        </div>
                    @endif

                </div>

            </div>
        </section>


        <!-- 2️⃣ MAIN ARTICLE CONTENT GRID -->
        <section id="article-body" class="pt-3 pb-12 sm:pb-16 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                    <!-- LEFT 70% MAIN ARTICLE BODY -->
                    <div class="lg:col-span-8 space-y-8">

                        <!-- Short Summary Lead Overview (Placed ABOVE Main Featured Image) -->
                        @if($blog->summary)
                            <div
                                class="p-5 sm:p-6 rounded-[6px] bg-[#EAF7EE] border-l-4 border-[#00A651] text-sm sm:text-base font-semibold text-[#111111] leading-relaxed shadow-sm">
                                <div
                                    class="flex items-center gap-2 text-[#00A651] font-bold text-xs uppercase tracking-wider mb-2">
                                    <i data-lucide="sparkles" class="w-4 h-4"></i> Overview / Short Summary
                                </div>
                                {{ $blog->summary }}
                            </div>
                        @endif

                        <!-- Featured Main Image (16:9 Widescreen Ratio) -->
                        @if($blog->featured_image)
                            <div class="w-full aspect-[16/9] rounded-[6px] overflow-hidden border border-slate-200/90 shadow-md bg-slate-100">
                                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                        @endif


                        <!-- Main Article Body -->
                        <div class="prose max-w-none text-sm sm:text-base text-[#333333] leading-relaxed space-y-4">
                            {!! $blog->content !!}
                        </div>

                        <!-- Article FAQs Accordion Section -->
                        @if(!empty($blog->faqs) && count($blog->faqs) > 0)
                            <div id="blog-faqs" class="mt-10 pt-8 border-t border-slate-200/80 space-y-4">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-9 h-9 rounded-full bg-emerald-50 text-[#00A651] flex items-center justify-center font-extrabold text-sm border border-emerald-100/80 shrink-0">
                                        <i class="fa-solid fa-circle-question text-base"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg sm:text-xl font-extrabold font-heading text-[#111111]">
                                            Frequently Asked Questions (FAQs)
                                        </h3>
                                        <p class="text-xs text-[#555555]">
                                            Quick answers to common questions about this article topic.
                                        </p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    @foreach($blog->faqs as $index => $faq)
                                        @if(!empty($faq['question']) || !empty($faq['answer']))
                                            <div class="rounded-[8px] bg-white border border-slate-200/90 shadow-xs overflow-hidden transition-all">
                                                <button type="button"
                                                    onclick="toggleBlogFaq(this)"
                                                    class="w-full p-4 text-left font-extrabold text-xs sm:text-sm text-[#111111] hover:text-[#00A651] flex items-center justify-between gap-4 transition-colors cursor-pointer bg-slate-50/50 hover:bg-emerald-50/30">
                                                    <span class="flex items-center gap-2">
                                                        <span class="text-[#00A651] font-bold text-xs">Q{{ $index + 1 }}.</span>
                                                        <span>{{ $faq['question'] }}</span>
                                                    </span>
                                                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 shrink-0 transform transition-transform duration-200"></i>
                                                </button>
                                                <div class="hidden px-4 pb-4 pt-3 text-xs sm:text-sm text-[#555555] leading-relaxed border-t border-slate-100 bg-white">
                                                    {!! nl2br(e($faq['answer'])) !!}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>

                    <!-- RIGHT 30% STICKY SIDEBAR -->
                    <div class="lg:col-span-4 self-start sticky top-[100px] space-y-6">

                        <!-- Table of Contents Widget (Dynamic & Internally Scrollable) -->
                        <div id="tocWidget" class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm space-y-3 hidden">
                            <h3 class="text-sm font-extrabold text-[#111111] font-heading flex items-center justify-between border-b border-slate-100 pb-2">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="list-ordered" class="w-4 h-4 text-[#00A651]"></i>
                                    <span>Table of Contents</span>
                                </div>
                                <span class="text-[10px] font-bold text-[#00A651] bg-emerald-50 px-2 py-0.5 rounded-full border border-emerald-100/80">
                                    Index
                                </span>
                            </h3>
                            <div style="max-height: 220px !important; overflow-y: auto !important;" class="pr-2 custom-scrollbar">
                                <ul id="tocList" class="space-y-2.5 text-xs font-semibold text-[#555555]">
                                    <!-- Dynamic Bullet Points inserted via JS -->
                                </ul>
                            </div>
                        </div>

                            <!-- Categories Widget -->
                            @if(count($categories) > 0)
                                <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-sm space-y-3">
                                    <h3 class="text-sm font-extrabold text-[#111111] font-heading flex items-center gap-2">
                                        <i data-lucide="folder-tree" class="w-4 h-4 text-[#00A651]"></i> Categories
                                    </h3>
                                    <ul class="space-y-2 text-xs font-semibold text-[#555555]">
                                        @foreach($categories as $cat)
                                            <li>
                                                <a href="{{ route('blogs.index', ['category' => $cat->slug]) }}"
                                                    class="flex items-center justify-between hover:text-[#F58220] transition-colors p-1.5 rounded hover:bg-white">
                                                    <span>{{ $cat->name }}</span>
                                                    <span
                                                        class="px-2 py-0.5 rounded-full bg-slate-200 text-[10px] text-[#111111]">{{ $cat->blogs_count }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Tags Cloud Widget -->
                            @if(count($tags) > 0)
                                <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-sm space-y-3">
                                    <h3 class="text-sm font-extrabold text-[#111111] font-heading flex items-center gap-2">
                                        <i data-lucide="tags" class="w-4 h-4 text-[#F58220]"></i> Popular Tags
                                    </h3>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($tags as $t)
                                            <a href="{{ route('blogs.index', ['tag' => $t->slug]) }}"
                                                class="px-2.5 py-1 rounded-[6px] bg-slate-100 hover:bg-[#00A651] hover:text-white text-xs font-bold text-[#555555] transition-all">
                                                #{{ $t->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Quick CTA & Admissions Widget -->
                            <div class="p-6 rounded-[8px] bg-white border border-slate-200/90 shadow-md space-y-4">
                                <div>
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-[#00A651] text-[10px] font-extrabold uppercase tracking-wider mb-2 border border-emerald-100">
                                        <i class="fa-solid fa-graduation-cap text-xs"></i> Admissions Open
                                    </div>
                                    <h4 class="text-base font-extrabold font-heading text-[#111111] leading-snug">
                                        Need Course Counseling?
                                    </h4>
                                    <p class="text-xs text-[#555555] font-medium mt-1 leading-relaxed">
                                        Speak directly with our academic advisor for batch details, fees & syllabus.
                                    </p>
                                </div>

                                <div class="space-y-2.5 pt-1">
                                    <!-- Apply Online -->
                                    <a href="{{ route('admissions') }}"
                                        class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-3 rounded-[6px] text-xs font-extrabold transition-all shadow-md text-center flex items-center justify-center gap-2">
                                        <i class="fa-solid fa-file-signature text-sm"></i>
                                        <span>Apply For Next Batch</span>
                                    </a>

                                    <!-- Call Helpline Number -->
                                    <a href="tel:+919140967607"
                                        class="w-full bg-[#FAFAFA] hover:bg-slate-100 text-[#111111] border border-slate-200 py-2.5 rounded-[6px] text-xs font-extrabold transition-all text-center flex items-center justify-center gap-2">
                                        <i class="fa-solid fa-phone-volume text-[#F58220]"></i>
                                        <span>Call: +91 91409 67607</span>
                                    </a>

                                    <!-- WhatsApp Chat -->
                                    <a href="https://wa.me/919198483820?text=Hi%20DigiCoders,%20I%20want%20information%20about%20courses%20and%20admissions"
                                        target="_blank" rel="noopener noreferrer"
                                        style="background-color: #25D366 !important; color: #ffffff !important;"
                                        class="w-full py-2.5 rounded-[6px] text-xs font-extrabold transition-all shadow-md text-center flex items-center justify-center gap-2 hover:opacity-90">
                                        <i class="fa-brands fa-whatsapp text-base" style="color: #ffffff !important;"></i>
                                        <span style="color: #ffffff !important;">Chat on WhatsApp</span>
                                    </a>
                                </div>
                            </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- 3️⃣ RECENT / RELATED ARTICLES -->
        @if(count($recentPosts) > 0)
            <section id="related-articles" class="py-12 bg-[#FAFAFA] relative border-b border-slate-200/60">
                <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="text-center max-w-xl mx-auto mb-10">
                        <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-[#111111]">More Articles</h2>
                        <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($recentPosts as $post)
                            <div
                                class="rounded-[8px] bg-white border border-slate-200/90 shadow-md overflow-hidden flex flex-col justify-between group hover:shadow-xl transition-all duration-300">
                                <div>
                                    <!-- Featured Image Banner -->
                                    <a href="{{ route('blogs.show', $post->slug) }}" class="block relative aspect-[16/9] overflow-hidden bg-slate-100">
                                        @if($post->featured_image)
                                            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
                                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-emerald-600 to-slate-800 flex items-center justify-center text-white font-extrabold text-sm">
                                                DigiCoders Blog
                                            </div>
                                        @endif
                                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-white/90 backdrop-blur-sm text-[#00A651] text-[10px] font-extrabold shadow-sm border border-slate-200/50">
                                            {{ $post->category }}
                                        </span>
                                    </a>

                                    <!-- Content Area -->
                                    <div class="p-5 space-y-2">
                                        <h3
                                            class="text-sm font-extrabold text-[#111111] font-heading group-hover:text-[#00A651] transition-colors leading-snug line-clamp-2">
                                            <a href="{{ route('blogs.show', $post->slug) }}">{{ $post->title }}</a>
                                        </h3>
                                        <p class="text-xs text-[#555555] line-clamp-2 leading-relaxed">
                                            {{ $post->summary ?: Str::limit(strip_tags($post->content), 90) }}
                                        </p>
                                    </div>
                                </div>

                                <div class="px-5 pb-5 pt-0">
                                    <a href="{{ route('blogs.show', $post->slug) }}"
                                        class="text-xs font-extrabold text-[#00A651] hover:text-[#008d44] flex items-center gap-1.5 transition-colors">
                                        <span>Read Article</span>
                                        <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif

    </main>

    <!-- Floating Toast Notification for Link Copy -->
    <div id="blogToast"
        class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none bg-[#111111] text-white px-4 py-3 rounded-xl shadow-2xl flex items-center gap-3 text-xs font-bold border border-slate-800">
        <i class="fa-solid fa-circle-check text-[#00A651] text-base"></i>
        <span id="blogToastMessage">Article link copied to clipboard!</span>
    </div>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <script>
        // Update top Reading Progress bar on scroll
        window.onscroll = function () {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("readingProgress").style.width = scrolled + "%";
        };

        function copyBlogShareLink(url) {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(url).then(() => {
                    showBlogToast('Article link copied to clipboard! 📋');
                });
            } else {
                const dummy = document.createElement('input');
                document.body.appendChild(dummy);
                dummy.value = url;
                dummy.select();
                document.execCommand('copy');
                document.body.removeChild(dummy);
                showBlogToast('Article link copied to clipboard! 📋');
            }
        }

        function showBlogToast(msg) {
            const toast = document.getElementById('blogToast');
            const toastMsg = document.getElementById('blogToastMessage');
            if (toast && toastMsg) {
                toastMsg.innerText = msg;
                toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
                setTimeout(() => {
                    toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
                }, 3000);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Dynamic Table of Contents (TOC) Generator with Bullet Points & Smart Fallback
            const articleBody = document.querySelector('.prose');
            const tocWidget = document.getElementById('tocWidget');
            const tocList = document.getElementById('tocList');

            if (articleBody && tocWidget && tocList) {
                // 1. Search for standard HTML heading tags (h1..h6)
                let headings = Array.from(articleBody.querySelectorAll('h1, h2, h3, h4, h5, h6'));

                // 2. Fallback: If no h1..h6 found, detect strong/bold section headers inside paragraphs
                if (headings.length === 0) {
                    const candidateEls = articleBody.querySelectorAll('p > strong, p > b, p');
                    candidateEls.forEach(function (el) {
                        const txt = el.innerText.trim();
                        if (txt.length >= 3 && txt.length <= 85 && !txt.includes('\n')) {
                            const parentP = el.tagName.toLowerCase() === 'p' ? el : el.closest('p');
                            if (parentP && !headings.includes(parentP)) {
                                headings.push(parentP);
                            }
                        }
                    });
                }

                if (headings.length > 0) {
                    tocList.innerHTML = '';
                    headings.forEach(function (heading, index) {
                        if (!heading.id) {
                            heading.id = 'toc-heading-' + (index + 1);
                        }

                        const tagName = heading.tagName ? heading.tagName.toLowerCase() : '';
                        const isSubheading = tagName === 'h3' || tagName === 'h4' || tagName === 'h5' || tagName === 'h6';

                        const li = document.createElement('li');
                        li.className = isSubheading
                            ? 'pl-3 flex items-start gap-2 text-[#555555]'
                            : 'flex items-start gap-2 text-[#111111] font-bold';

                        const bullet = document.createElement('span');
                        bullet.className = isSubheading
                            ? 'text-[#F58220] shrink-0 mt-1 text-[8px]'
                            : 'text-[#00A651] shrink-0 mt-0.5 text-[10px]';
                        bullet.innerHTML = isSubheading
                            ? '<i class="fa-solid fa-circle"></i>'
                            : '<i class="fa-solid fa-circle-dot"></i>';

                        const a = document.createElement('a');
                        a.href = '#' + heading.id;
                        a.innerText = heading.innerText.trim();
                        a.className = 'hover:text-[#00A651] transition-colors leading-snug flex-1';

                        a.addEventListener('click', function (e) {
                            e.preventDefault();
                            const target = document.getElementById(heading.id);
                            if (target) {
                                const yOffset = -130;
                                const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
                                window.scrollTo({ top: y, behavior: 'smooth' });
                            }
                        });

                        li.appendChild(bullet);
                        li.appendChild(a);
                        tocList.appendChild(li);
                    });

                    // Reveal TOC widget
                    tocWidget.classList.remove('hidden');
                }
            }
        });

        // Toggle Blog FAQ Accordion
        function toggleBlogFaq(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('[data-lucide="chevron-down"], svg');
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>

</html>