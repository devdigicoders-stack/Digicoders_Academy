<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog & Tech Articles | DigiCoders Academy Lucknow</title>
    <meta name="description"
        content="Read latest web development tutorials, Excel MIS tips, Digital Marketing strategies, diploma course guides & IT interview preparation from DigiCoders Academy.">

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

    <!-- MAIN Blog Index CONTENT -->
    <main class="pt-[110px] sm:pt-[130px]">

        <!-- 1️⃣ HERO SECTION -->
        <section id="hero" class="relative py-12 sm:py-16 bg-white overflow-hidden border-b border-slate-200/60">
            <div
                class="absolute -top-24 -left-20 w-96 h-96 bg-emerald-50 rounded-full blur-3xl opacity-70 pointer-events-none z-0">
            </div>
            <div
                class="absolute top-1/2 right-0 w-[450px] h-[450px] bg-orange-50/80 rounded-full blur-3xl opacity-70 pointer-events-none z-0">
            </div>

            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                    <!-- Left Column -->
                    <div class="lg:col-span-6 space-y-5 text-left">
                        <nav class="flex items-center gap-2 text-xs font-semibold text-[#555555]">
                            <a href="{{ route('home') }}" class="hover:text-[#F58220] transition-colors">Home</a>
                            <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span class="text-[#00A651] font-bold">Blog</span>
                        </nav>

                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00A651]/10 border border-[#00A651]/20 text-[#00A651] text-xs font-extrabold uppercase tracking-wider">
                            <span class="w-2 h-2 rounded-full bg-[#00A651] animate-pulse"></span>
                            <span>DIGICODERS BLOG</span>
                        </div>

                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-heading text-[#111111] leading-[1.18] tracking-tight">
                            Learn. Explore. <br class="hidden sm:inline">
                            <span class="text-[#00A651]">Grow with Technology.</span>
                        </h1>

                        <p class="text-sm sm:text-base text-[#555555] font-medium leading-relaxed max-w-xl">
                            Latest tutorials, career guidance, technology updates, diploma courses, interview
                            preparation and industry insights.
                        </p>
                    </div>

                    <!-- Right Column: Larger Responsive Image -->
                    <div class="lg:col-span-6 relative w-full">
                        <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-white bg-slate-100 group">
                            <img src="{{ asset('images/blog-hero-student.jpg') }}" alt="DigiCoders Academy Student Blogging"
                                class="w-full h-auto max-h-[460px] sm:max-h-[500px] object-cover rounded-[6px] group-hover:scale-105 transition-transform duration-500">
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- 2️⃣ DYNAMIC SEARCH + FILTER BAR -->
        <section id="search-filter" class="py-8 bg-[#FAFAFA] border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 space-y-4">

                <form action="{{ route('blogs.index') }}" method="GET" class="w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-3 items-center w-full">

                        <!-- Search Input (5 cols on lg) -->
                        <div class="sm:col-span-2 lg:col-span-5 relative min-w-0">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Search articles, tutorials, or topics..."
                                class="w-full pl-10 {{ request('search') ? 'pr-10' : 'pr-4' }} h-11 rounded-[6px] bg-white border border-slate-200 text-xs sm:text-sm text-[#111111] placeholder:text-slate-400 focus:border-[#00A651] focus:ring-2 focus:ring-[#00A651]/20 outline-none transition-all shadow-2xs">
                            <i data-lucide="search"
                                class="w-4 h-4 text-[#00A651] absolute left-3.5 top-1/2 transform -translate-y-1/2 pointer-events-none"></i>
                            @if(request('search'))
                                <a href="{{ route('blogs.index', request()->except('search', 'page')) }}"
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400 hover:text-red-500 transition-colors p-1"
                                    title="Clear search">
                                    <i data-lucide="x" class="w-4 h-4"></i>
                                </a>
                            @endif
                        </div>

                        <!-- Category Select (3 cols on lg) -->
                        <div class="sm:col-span-1 lg:col-span-3 relative min-w-0">
                            <select name="category" onchange="this.form.submit()"
                                class="w-full pl-10 pr-8 h-11 rounded-[6px] bg-white border border-slate-200 text-xs sm:text-sm text-[#111111] focus:border-[#00A651] focus:ring-2 focus:ring-[#00A651]/20 outline-none transition-all shadow-2xs cursor-pointer appearance-none truncate">
                                <option value="">All Categories</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->slug }}" {{ request('category') == $cat->slug || request('category') == $cat->name ? 'selected' : '' }}>
                                        {{ $cat->name }} ({{ $cat->blogs_count }})
                                    </option>
                                @endforeach
                            </select>
                            <i data-lucide="folder-tree"
                                class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 transform -translate-y-1/2 pointer-events-none"></i>
                            <i data-lucide="chevron-down"
                                class="w-4 h-4 text-slate-400 absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none"></i>
                        </div>

                        <!-- Sort Select (2 cols on lg) -->
                        <div class="sm:col-span-1 lg:col-span-2 relative min-w-0">
                            <select name="sort" onchange="this.form.submit()"
                                class="w-full pl-10 pr-8 h-11 rounded-[6px] bg-white border border-slate-200 text-xs sm:text-sm text-[#111111] focus:border-[#00A651] focus:ring-2 focus:ring-[#00A651]/20 outline-none transition-all shadow-2xs cursor-pointer appearance-none truncate">
                                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                                <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most Popular</option>
                            </select>
                            <i data-lucide="arrow-up-down"
                                class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 transform -translate-y-1/2 pointer-events-none"></i>
                            <i data-lucide="chevron-down"
                                class="w-4 h-4 text-slate-400 absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none"></i>
                        </div>

                        <!-- Filter & Action Buttons (2 cols on lg) -->
                        <div class="sm:col-span-2 lg:col-span-2 flex items-center gap-2 min-w-0">
                            <button type="submit"
                                class="flex-1 h-11 bg-[#00A651] hover:bg-[#008d44] text-white rounded-[6px] text-xs sm:text-sm font-bold transition-all shadow-sm cursor-pointer flex items-center justify-center gap-2 px-4 whitespace-nowrap active:scale-[0.98]">
                                <i data-lucide="sliders-horizontal" class="w-4 h-4 shrink-0"></i>
                                <span>Filter</span>
                            </button>

                            @if(request('search') || request('category') || request('tag') || request('sort') === 'popular')
                                <a href="{{ route('blog.index') }}"
                                    class="h-11 px-3 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200/80 rounded-[6px] text-xs font-bold transition-all flex items-center justify-center gap-1.5 shrink-0"
                                    title="Reset all filters">
                                    <i data-lucide="rotate-ccw" class="w-4 h-4"></i>
                                    <span class="hidden sm:inline">Reset</span>
                                </a>
                            @endif
                        </div>

                    </div>
                </form>

                <!-- Dynamic Tag Chips -->
                @if(count($tags) > 0)
                    <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pt-2 border-t border-slate-200/60 mt-4">
                        <div class="flex items-center gap-1.5 text-xs font-bold text-[#555555] shrink-0 mr-1">
                            <i data-lucide="tags" class="w-3.5 h-3.5 text-[#00A651]"></i>
                            <span>Popular Tags:</span>
                        </div>
                        @if(request('tag'))
                            <a href="{{ route('blog.index', request()->except('tag', 'page')) }}"
                                class="px-3 py-1 rounded-[6px] bg-red-50 border border-red-200 text-xs font-semibold text-red-600 hover:bg-red-100 transition-all shrink-0 flex items-center gap-1">
                                <span>Clear Tag</span>
                                <i data-lucide="x" class="w-3 h-3"></i>
                            </a>
                        @endif
                        @foreach($tags as $tag)
                            @php
                                $isActive = request('tag') == $tag->slug || request('tag') == $tag->name;
                            @endphp
                            <a href="{{ route('blog.index', array_merge(request()->except('tag', 'page'), $isActive ? [] : ['tag' => $tag->slug])) }}"
                                class="px-3 py-1 rounded-[6px] border text-xs font-medium transition-all shrink-0 flex items-center gap-1 {{ $isActive ? 'bg-[#00A651] text-white border-[#00A651] shadow-xs' : 'bg-white border-slate-200 text-[#333333] hover:text-[#00A651] hover:border-[#00A651] hover:bg-emerald-50/50' }}">
                                <span>#{{ $tag->name }}</span>
                                <span class="text-[10px] {{ $isActive ? 'text-white/80' : 'text-slate-400' }}">({{ $tag->blogs_count }})</span>
                            </a>
                        @endforeach
                    </div>
                @endif

            </div>
        </section>


        <!-- 3️⃣ FEATURED ARTICLE (If available and no search filter) -->
        @if($featuredArticle && !request('search') && !request('category') && !request('tag'))
            <section id="featured-article" class="py-12 bg-white border-b border-slate-200/60">
                <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">
                    <div
                        class="p-6 sm:p-10 rounded-[6px] bg-[#FAFAFA] border border-slate-200/90 shadow-md hover:shadow-lg transition-all">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                            <!-- Thumbnail -->
                            <div class="lg:col-span-6">
                                <div
                                    class="w-full aspect-[16/9] rounded-[6px] bg-slate-100 flex items-center justify-center text-slate-400 overflow-hidden relative group border border-slate-200/90 shadow-sm">
                                    @if($featuredArticle->featured_image)
                                        <img src="{{ asset($featuredArticle->featured_image) }}"
                                            alt="{{ $featuredArticle->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <i data-lucide="code"
                                            class="w-16 h-16 text-[#00A651] group-hover:scale-105 transition-transform duration-300"></i>
                                    @endif
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="lg:col-span-6 space-y-4">
                                <div class="flex items-center gap-3 flex-wrap">
                                    <span
                                        class="px-3 py-1 rounded-full bg-[#00A651] text-white text-xs font-extrabold">{{ $featuredArticle->category }}</span>
                                    <span class="text-xs text-[#555555] font-semibold flex items-center gap-1">
                                        <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                        {{ number_format($featuredArticle->views_count) }} views
                                    </span>
                                </div>

                                <h2
                                    class="text-2xl sm:text-3xl font-extrabold text-[#111111] font-heading leading-tight hover:text-[#F58220] transition-colors">
                                    <a
                                        href="{{ route('blogs.show', $featuredArticle->slug) }}">{{ $featuredArticle->title }}</a>
                                </h2>

                                <p class="text-xs sm:text-sm text-[#555555] leading-relaxed line-clamp-3">
                                    {{ $featuredArticle->summary ?: Str::limit(strip_tags($featuredArticle->content), 180) }}
                                </p>

                                <div class="flex items-center justify-between pt-2 border-t border-slate-200/60">
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="w-7 h-7 rounded-full bg-[#00A651] text-white font-extrabold text-xs flex items-center justify-center">
                                            DC</div>
                                        <span
                                            class="text-xs font-extrabold text-[#111111]">{{ $featuredArticle->author ?: 'DigiCoders Team' }}</span>
                                    </div>
                                    <span
                                        class="text-xs text-[#555555]">{{ $featuredArticle->created_at ? $featuredArticle->created_at->format('M d, Y') : 'Recent' }}</span>
                                </div>

                                <div class="pt-2">
                                    <a href="{{ route('blogs.show', $featuredArticle->slug) }}"
                                        class="bg-[#00A651] hover:bg-[#008d44] text-white px-6 py-3 rounded-[6px] text-xs font-extrabold transition-all shadow-md inline-flex items-center gap-2 cursor-pointer">
                                        <span>Read Article</span>
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        @endif


        <!-- 4️⃣ ARTICLES GRID -->
        <section id="latest-articles" class="py-12 sm:py-16 bg-[#FAFAFA] relative border-b border-slate-200/60">
            <div class="w-full max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center max-w-xl mx-auto mb-10">
                    <h2 class="text-xl sm:text-2xl font-bold font-heading text-[#111111]">
                        @if(request('category'))
                            Category: {{ request('category') }}
                        @elseif(request('tag'))
                            Tag: #{{ request('tag') }}
                        @elseif(request('search'))
                            Search Results for "{{ request('search') }}"
                        @else
                            All Articles
                        @endif
                    </h2>
                    <div class="w-12 h-1 bg-[#F58220] rounded-full mx-auto mt-3"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @forelse($blogs as $blog)
                        <div
                            class="p-6 rounded-[6px] bg-white border border-slate-200/90 shadow-md hover:shadow-lg transition-all space-y-4 flex flex-col justify-between group">
                            <div class="space-y-3">
                                <div
                                    class="w-full aspect-[16/9] rounded-[8px] bg-slate-100 flex items-center justify-center text-slate-400 overflow-hidden relative border border-slate-200/90 shadow-xs">
                                    @if($blog->featured_image)
                                        <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <i data-lucide="newspaper"
                                            class="w-10 h-10 text-[#00A651] group-hover:scale-105 transition-transform"></i>
                                    @endif
                                </div>

                                <div class="flex items-center justify-between text-xs flex-wrap gap-1">
                                    <span
                                        class="px-2.5 py-0.5 rounded-full bg-emerald-50 text-[#00A651] font-bold">{{ $blog->category }}</span>
                                    <span class="text-[#555555] flex items-center gap-1"><i data-lucide="eye"
                                            class="w-3 h-3"></i> {{ number_format($blog->views_count) }} views</span>
                                </div>

                                <h3
                                    class="text-base font-extrabold text-[#111111] font-heading group-hover:text-[#F58220] transition-colors leading-snug">
                                    <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>

                                <p class="text-xs text-[#555555] leading-relaxed line-clamp-2">
                                    {{ $blog->summary ?: Str::limit(strip_tags($blog->content), 120) }}
                                </p>

                                @if($blog->tags->count() > 0)
                                    <div class="flex flex-wrap gap-1 pt-1">
                                        @foreach($blog->tags as $t)
                                            <a href="{{ route('blogs.index', ['tag' => $t->slug]) }}"
                                                class="text-[11px] font-semibold text-[#00A651] hover:underline">#{{ $t->name }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs">
                                <span
                                    class="text-[#555555]">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</span>
                                <a href="{{ route('blogs.show', $blog->slug) }}"
                                    class="font-extrabold text-[#00A651] flex items-center gap-1 hover:underline">
                                    <span>Read More</span>
                                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12 bg-white rounded-[6px] border border-slate-200/80">
                            <i data-lucide="file-x" class="w-12 h-12 text-slate-400 mx-auto mb-3"></i>
                            <h3 class="text-lg font-bold text-[#111111]">No Articles Found</h3>
                            <p class="text-xs text-[#555555] mt-1">Try clearing your filters or searching for another topic.
                            </p>
                            <a href="{{ route('blogs.index') }}"
                                class="inline-block mt-4 px-4 py-2 bg-[#00A651] text-white text-xs font-bold rounded-[6px]">Clear
                                Filters</a>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination Links -->
                @if($blogs->hasPages())
                    <div class="mt-10 flex justify-center">
                        {{ $blogs->links() }}
                    </div>
                @endif

            </div>
        </section>

    </main>

    <!-- FOOTER LAYOUT INCLUDE -->
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
</body>

</html>