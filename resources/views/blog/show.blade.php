<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->meta_title ?: $blog->title . ' | DigiCoders Blog' }}</title>
    <meta name="description" content="{{ $blog->meta_description ?: ($blog->summary ?: Str::limit(strip_tags($blog->content), 160)) }}">
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

        code, pre {
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

        .prose h2, .prose h3, .prose h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            color: #111111;
            margin-top: 1.5em;
            margin-bottom: 0.5em;
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
        <section id="hero" class="relative py-10 sm:py-14 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="max-w-4xl mx-auto space-y-5">
                    
                    <!-- Breadcrumb -->
                    <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                        <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <a href="{{ route('blog.index') }}" class="hover:text-[#F58220] transition-colors">Blog</a>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                        <span class="text-[#00A651] font-bold">{{ Str::limit($blog->title, 35) }}</span>
                    </nav>

                    <!-- Category Badge -->
                    <a href="{{ route('blog.index', ['category' => $blog->category]) }}"
                        class="inline-block px-3 py-1 rounded-full bg-[#00A651] text-white text-xs font-extrabold hover:bg-[#008d44] transition-colors">
                        {{ $blog->category }}
                    </a>

                    <!-- Article Title -->
                    <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                        {{ $blog->title }}
                    </h1>

                    <!-- Author & Meta Details Bar -->
                    <div class="flex flex-wrap items-center justify-between gap-4 pt-2 border-t border-slate-200/60">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#00A651] text-white font-extrabold flex items-center justify-center text-sm shrink-0">
                                DC
                            </div>
                            <div>
                                <p class="text-xs font-extrabold text-[#111111]">{{ $blog->author ?: 'DigiCoders Team' }}</p>
                                <p class="text-[11px] text-[#555555]">Published {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recently' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 text-xs text-[#555555]">
                            <span class="flex items-center gap-1 font-semibold">
                                <i data-lucide="eye" class="w-4 h-4 text-[#00A651]"></i> {{ number_format($blog->views_count) }} views
                            </span>
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
        <section id="article-body" class="py-12 sm:py-16 bg-white border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- LEFT 70% MAIN ARTICLE BODY -->
                    <div class="lg:col-span-8 space-y-8">
                        
                        <!-- Featured Main Image -->
                        @if($blog->featured_image)
                        <div class="w-full rounded-[6px] overflow-hidden border border-slate-200/90 shadow-md">
                            <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-full h-auto max-h-[480px] object-cover">
                        </div>
                        @endif

                        <!-- Summary Lead Paragraph -->
                        @if($blog->summary)
                        <div class="p-5 rounded-[6px] bg-[#EAF7EE] border border-[#00A651]/30 text-sm sm:text-base font-semibold text-[#111111] leading-relaxed">
                            {{ $blog->summary }}
                        </div>
                        @endif

                        <!-- Main Article Body -->
                        <div class="prose max-w-none text-sm sm:text-base text-[#333333] leading-relaxed space-y-4">
                            {!! $blog->content !!}
                        </div>

                    </div>

                    <!-- RIGHT 30% STICKY SIDEBAR -->
                    <div class="lg:col-span-4 space-y-6">
                        <div class="sticky top-[120px] space-y-6">
                            
                            <!-- Categories Widget -->
                            @if(count($categories) > 0)
                            <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-sm space-y-3">
                                <h3 class="text-sm font-extrabold text-[#111111] font-heading flex items-center gap-2">
                                    <i data-lucide="folder-tree" class="w-4 h-4 text-[#00A651]"></i> Categories
                                </h3>
                                <ul class="space-y-2 text-xs font-semibold text-[#555555]">
                                    @foreach($categories as $cat)
                                    <li>
                                        <a href="{{ route('blog.index', ['category' => $cat->slug]) }}"
                                            class="flex items-center justify-between hover:text-[#F58220] transition-colors p-1.5 rounded hover:bg-white">
                                            <span>{{ $cat->name }}</span>
                                            <span class="px-2 py-0.5 rounded-full bg-slate-200 text-[10px] text-[#111111]">{{ $cat->blogs_count }}</span>
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
                                    <a href="{{ route('blog.index', ['tag' => $t->slug]) }}"
                                        class="px-2.5 py-1 rounded-[6px] bg-slate-100 hover:bg-[#00A651] hover:text-white text-xs font-bold text-[#555555] transition-all">
                                        #{{ $t->name }}
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <!-- Quick Action Buttons -->
                            <div class="p-5 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-sm space-y-3">
                                <a href="{{ route('admissions') }}"
                                    class="w-full bg-[#00A651] hover:bg-[#008d44] text-white py-3 rounded-[6px] text-xs font-extrabold cursor-pointer transition-all shadow-md text-center block">
                                    Apply For Next Batch
                                </a>
                                <a href="{{ route('contact') }}"
                                    class="w-full bg-white border border-[#00A651]/40 text-[#111111] hover:bg-emerald-50/50 py-3 rounded-[6px] text-xs font-extrabold cursor-pointer transition-all text-center block">
                                    Talk to Expert
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
                    <div class="p-5 rounded-[6px] bg-white border border-slate-200/90 shadow-md space-y-3 flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#00A651] text-[10px] font-bold">{{ $post->category }}</span>
                            <h3 class="text-sm font-extrabold text-[#111111] font-heading hover:text-[#F58220] transition-colors leading-snug">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="text-xs text-[#555555] line-clamp-2">{{ $post->summary ?: Str::limit(strip_tags($post->content), 90) }}</p>
                        </div>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-bold text-[#00A651] hover:underline flex items-center gap-1">
                            <span>Read Article</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        @endif

    </main>

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

        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>
