<!-- 1. FULL WIDTH SLIM INFORMATION TOPBAR (100% Edge-to-Edge Width, Mobile Responsive Ticker) -->
<div id="topbar"
    class="w-full bg-white/60 backdrop-blur-md border-b border-black/5 h-[40px] sm:h-[42px] fixed top-0 inset-x-0 z-50 flex items-center overflow-hidden transition-all duration-300 ease-in-out">
    <div
        class="w-full max-w-[1536px] mx-auto px-3 sm:px-8 lg:px-12 flex items-center justify-between text-[11px] sm:text-xs text-[#64748B] whitespace-nowrap">

        <!-- Left Info (Compact & Responsive for Mobile) -->
        <div class="flex items-center gap-2 sm:gap-3 overflow-hidden text-ellipsis">
            <span class="font-bold text-[#F58220] flex items-center gap-1.5 shrink-0">
                <i data-lucide="megaphone" class="w-3.5 h-3.5 text-[#F58220]"></i>
                <span>Admissions Open 2026</span>
            </span>
            <span class="text-black/20 shrink-0">|</span>
            <span class="shrink-0 text-[#18181B] font-medium hidden xs:inline">New Batch Soon</span>
            <span class="text-black/20 shrink-0 hidden xs:inline">|</span>
            <span class="text-[#00A651] font-bold shrink-0">Limited Seats Available</span>
        </div>

        <!-- Right Contacts (Desktop Only) -->
        <div class="hidden md:flex items-center gap-5 shrink-0">
            @if(!empty($settings['site_phone']))
                <a href="tel:{{ str_replace(' ', '', $settings['site_phone']) }}" class="flex items-center gap-1.5 hover:text-[#F58220] transition-colors">
                    <i data-lucide="phone" class="w-3.5 h-3.5 text-[#00A651]"></i>
                    <span class="font-semibold">{{ $settings['site_phone'] }}</span>
                </a>
            @endif

            @if(!empty($settings['site_email']))
                <a href="mailto:{{ $settings['site_email'] }}"
                    class="flex items-center gap-1.5 hover:text-[#F58220] transition-colors">
                    <i data-lucide="mail" class="w-3.5 h-3.5 text-[#F58220]"></i>
                    <span>{{ $settings['site_email'] }}</span>
                </a>
            @endif

            @if(!empty($settings['office_lucknow_map_link']))
                <a href="{{ $settings['office_lucknow_map_link'] }}" target="_blank" title="View Lucknow Campus Google Map" class="flex items-center gap-1 hover:text-[#00A651] transition-colors">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#00A651]"></i>
                    <span>{{ $settings['office_lucknow_title'] ?? 'Lucknow' }}</span>
                </a>
            @elseif(!empty($settings['site_map_iframe']))
                <a href="{{ $settings['site_map_iframe'] }}" target="_blank" title="View Campus Google Map" class="flex items-center gap-1 hover:text-[#00A651] transition-colors">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#00A651]"></i>
                    <span>Lucknow</span>
                </a>
            @else
                <span class="flex items-center gap-1">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 text-[#00A651]"></i>
                    <span>Lucknow</span>
                </span>
            @endif

            @if(!empty($settings['site_whatsapp']))
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['site_whatsapp']) }}" target="_blank"
                    class="flex items-center gap-1 text-[#00A651] font-bold hover:underline">
                    <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                    <span>WhatsApp</span>
                </a>
            @endif
        </div>
    </div>
</div>

<!-- 2. MAIN FLOATING GLASS NAVIGATION (Mobile Optimized) -->
<div id="mainNavbar"
    class="fixed top-[44px] sm:top-[48px] inset-x-0 z-40 px-2.5 sm:px-6 lg:px-8 w-full max-w-[1480px] mx-auto transition-all duration-300 ease-in-out">
    <nav
        class="ref-nav rounded-[20px] sm:rounded-[24px] px-3.5 sm:px-7 h-[66px] sm:h-[80px] flex items-center justify-between relative shadow-xl">

        <!-- Left: Official DigiCoders Logo -->
        @if(!empty($settings['site_logo']))
            <a href="{{ route('home') }}" class="flex items-center shrink-0">
                <img src="{{ asset($settings['site_logo']) }}" alt="DigiCoders Academy Logo"
                    class="h-7 sm:h-9 lg:h-[40px] w-auto object-contain transition-all duration-300">
            </a>
        @endif

        <!-- Center: Navigation Links (Desktop Only) -->
        <div
            class="hidden xl:flex items-center gap-6 sm:gap-7 text-xs sm:text-[13px] font-semibold text-[#18181B] whitespace-nowrap">

            <!-- Home -->
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Home</a>

            <!-- About Academy -->
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">About Academy</a>

            <!-- Courses ▼ (Mega Menu Dropdown Container) -->
            <div class="relative group" onmouseenter="showMenu('coursesMegaMenu')"
                onmouseleave="hideMenu('coursesMegaMenu')">
                <a href="{{ route('courses.index') }}"
                    class="nav-link flex items-center gap-1 hover:text-[#F58220] py-2 cursor-pointer whitespace-nowrap {{ request()->routeIs('courses.*') ? 'active text-[#F58220] font-bold' : '' }}">
                    <span>Courses</span>
                    <i data-lucide="chevron-down"
                        class="w-3.5 h-3.5 text-[#F58220] group-hover:rotate-180 transition-transform duration-300"></i>
                </a>

                <!-- COURSES MEGA MENU PANEL (Width 820px, Shifted left to fit 100% inside screen width) -->
                <div id="coursesMegaMenu"
                    class="hidden group-hover:block absolute top-full -left-[280px] pt-3 w-[820px] max-w-[calc(100vw-40px)] z-50 animate-dropdown">

                    <div
                        class="glass-mega-menu p-6 rounded-[24px] grid grid-cols-12 gap-5 bg-white/95 backdrop-blur-2xl shadow-2xl border border-black/10">

                        <!-- Column 1: 6 Month Diploma -->
                        <div class="col-span-4 space-y-3">
                            <div class="flex items-center gap-2 pb-2 border-b border-black/5">
                                <span class="w-2 h-2 rounded-full bg-[#F58220]"></span>
                                <a href="{{ route('courses.index') }}" class="text-xs font-black uppercase tracking-wider text-[#18181B] font-heading hover:text-[#F58220] transition-colors">6
                                    Month Diploma</a>
                            </div>
                            <ul class="space-y-2 text-xs">
                                <li>
                                    <a href="{{ route('courses.dca') }}"
                                        class="p-2 rounded-xl hover:bg-orange-50 flex items-center justify-between text-[#18181B] hover:text-[#F58220] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">DCA</p>
                                            <p class="text-[10px] text-[#64748B]">Diploma in Computer Applications</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('courses.excel-mis') }}"
                                        class="p-2 rounded-xl hover:bg-orange-50 flex items-center justify-between text-[#18181B] hover:text-[#F58220] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">Advanced Excel & MIS</p>
                                            <p class="text-[10px] text-[#64748B]">Data Reporting & Analytics</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('courses.web-designing') }}"
                                        class="p-2 rounded-xl hover:bg-orange-50 flex items-center justify-between text-[#18181B] hover:text-[#F58220] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">Web Designing</p>
                                            <p class="text-[10px] text-[#64748B]">Frontend UI/UX & Responsive Web</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Column 2: 1 Year Diploma -->
                        <div class="col-span-4 space-y-3">
                            <div class="flex items-center gap-2 pb-2 border-b border-black/5">
                                <span class="w-2 h-2 rounded-full bg-[#00A651]"></span>
                                <a href="{{ route('courses.index') }}" class="text-xs font-black uppercase tracking-wider text-[#18181B] font-heading hover:text-[#00A651] transition-colors">1
                                    Year Diploma</a>
                            </div>
                            <ul class="space-y-2 text-xs">
                                <li>
                                    <a href="{{ route('courses.adca') }}"
                                        class="p-2 rounded-xl hover:bg-emerald-50 flex items-center justify-between text-[#18181B] hover:text-[#00A651] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">ADCA</p>
                                            <p class="text-[10px] text-[#64748B]">Advanced Computer Diploma</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('courses.adwd') }}"
                                        class="p-2 rounded-xl hover:bg-emerald-50 flex items-center justify-between text-[#18181B] hover:text-[#00A651] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">ADWD</p>
                                            <p class="text-[10px] text-[#64748B]">Web Development Full Stack</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('courses.addm') }}"
                                        class="p-2 rounded-xl hover:bg-emerald-50 flex items-center justify-between text-[#18181B] hover:text-[#00A651] group/item transition-colors">
                                        <div>
                                            <p class="font-bold">ADDM</p>
                                            <p class="text-[10px] text-[#64748B]">Digital Marketing Specialist</p>
                                        </div>
                                        <i data-lucide="arrow-right"
                                            class="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Column 3: Right Panel Glass Card -->
                        <div
                            class="col-span-4 ref-card p-4 rounded-2xl bg-gradient-to-br from-orange-50 to-emerald-50 border border-black/5 flex flex-col justify-between">
                            <div class="space-y-2">
                                <span
                                    class="px-2.5 py-0.5 rounded-full text-[9px] font-extrabold uppercase tracking-wider bg-[#F58220]/10 text-[#F58220] inline-flex items-center gap-1">
                                    <i data-lucide="graduation-cap" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>Admissions Open 2026</span>
                                </span>
                                <h4 class="text-sm font-black text-[#18181B] font-heading leading-tight">Build Real
                                    Software Career</h4>
                                <div class="flex items-center gap-4 text-xs font-bold text-[#18181B] pt-0.5">
                                    <div>
                                        <p class="text-xs font-black text-[#F58220]">5000+</p>
                                        <p class="text-[9px] text-[#64748B]">Students</p>
                                    </div>
                                    <div>
                                        <p class="text-xs font-black text-[#00A651]">95%</p>
                                        <p class="text-[9px] text-[#64748B]">Placement</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2 pt-3">
                                <a href="{{ route('admissions') }}"
                                    class="w-full btn-orange py-2 rounded-xl text-xs font-bold text-center shadow-xs cursor-pointer block">
                                    Apply Now
                                </a>
                                <button onclick="openModal('brochureModal')"
                                    class="w-full ref-pill py-2 rounded-xl text-xs font-bold text-center text-[#18181B] cursor-pointer">
                                    Download Brochure
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Admissions -->
            <a href="{{ route('admissions') }}" class="nav-link {{ request()->routeIs('admissions') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Admissions</a>

            <!-- Placements (Temporarily Commented) -->
            {{-- <a href="{{ route('placements') }}" class="nav-link {{ request()->routeIs('placements') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Placements</a> --}}

            <!-- Student Life (Temporarily Commented) -->
            {{-- <a href="{{ route('student-life') }}" class="nav-link {{ request()->routeIs('student-life') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Student Life</a> --}}

            <!-- Gallery (Temporarily Commented) -->
            {{-- <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Gallery</a> --}}

            <!-- Blog -->
            <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.*') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Blog</a>

            <!-- Contact -->
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active text-[#F58220] font-bold' : 'hover:text-[#F58220]' }}">Contact</a>

        </div>

        <!-- Right Action Icons (Fits 100% on Mobile screens without overflowing!) -->
        <div class="flex items-center gap-1.5 sm:gap-3 shrink-0">

            <!-- Search Icon Button -->
            <button onclick="openModal('searchModal')"
                class="p-2 sm:p-2.5 rounded-full ref-pill text-[#18181B] hover:text-[#F58220] hover:bg-white transition-colors cursor-pointer shrink-0"
                title="Search Courses & Info">
                <i data-lucide="search" class="w-4 h-4"></i>
            </button>

            <!-- Apply Now Button (HIDDEN ON MOBILE (< sm), VISIBLE ON SM+ ONLY) -->
            <a href="{{ route('admissions') }}"
                class="hidden sm:flex btn-orange px-3.5 sm:px-6 py-2 sm:py-2.5 rounded-full text-[11px] sm:text-xs font-bold shadow-md cursor-pointer items-center gap-1 whitespace-nowrap shrink-0">
                <span>Apply Now</span>
            </a>

            <!-- Mobile Menu Hamburger Button -->
            <button onclick="toggleMobileMenu()"
                class="xl:hidden p-2 sm:p-2.5 rounded-full ref-pill text-[#18181B] hover:bg-white cursor-pointer shrink-0"
                title="Toggle Menu">
                <i data-lucide="menu" class="w-4.5 h-4.5 sm:w-5 sm:h-5"></i>
            </button>
        </div>

    </nav>
</div>

<!-- MOBILE FULL SCREEN DRAWER NAVIGATION -->
<div id="mobileDrawer" class="hidden fixed inset-0 z-50 bg-black/50 backdrop-blur-md transition-all">
    <div
        class="glass-card-solid w-full max-w-sm h-full p-6 bg-white shadow-2xl flex flex-col justify-between overflow-y-auto">
        <div>
            <div class="flex items-center justify-between pb-4 border-b border-black/5">
                @if(!empty($settings['site_logo']))
                    <img src="{{ asset($settings['site_logo']) }}" alt="DigiCoders Logo" class="h-8 w-auto object-contain">
                @endif
                <button onclick="toggleMobileMenu()" class="p-2 rounded-full hover:bg-slate-100">
                    <i data-lucide="x" class="w-5 h-5 text-[#18181B]"></i>
                </button>
            </div>

            <div class="space-y-1.5 pt-4 text-sm font-semibold text-[#18181B]">
                <a href="{{ route('home') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('home') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Home</a>
                
                <a href="{{ route('about') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('about') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">About Academy</a>

                <!-- Mobile Courses Accordion -->
                <div class="border-b border-slate-100 py-1">
                    <button onclick="toggleMobileSubmenu('mobileCourses')"
                        class="w-full flex items-center justify-between py-2 px-3 rounded-xl hover:bg-slate-50 transition-colors">
                        <span class="{{ request()->routeIs('courses.*') ? 'text-[#F58220] font-bold' : '' }}">Courses</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-[#F58220]"></i>
                    </button>
                    <div id="mobileCourses" class="hidden pt-2 pl-3 space-y-2.5 text-xs font-normal text-[#64748B]">
                        <a href="{{ route('courses.index') }}" onclick="toggleMobileMenu()"
                            class="block font-bold text-[#F58220] p-1.5 rounded-lg bg-orange-50/50">All Courses Catalog →</a>

                        <div class="pt-1">
                            <p class="text-[10px] font-black uppercase text-[#F58220] tracking-wider mb-1">6-Month Diplomas</p>
                            <a href="{{ route('courses.dca') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#F58220]">DCA (Diploma in Computer Applications)</a>
                            <a href="{{ route('courses.excel-mis') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#F58220]">Advanced Excel & MIS</a>
                            <a href="{{ route('courses.web-designing') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#F58220]">Web Designing</a>
                        </div>

                        <div class="pt-1">
                            <p class="text-[10px] font-black uppercase text-[#00A651] tracking-wider mb-1">1-Year Diplomas</p>
                            <a href="{{ route('courses.adca') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#00A651]">ADCA (Advanced Computer Diploma)</a>
                            <a href="{{ route('courses.adwd') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#00A651]">ADWD (Web Development Full Stack)</a>
                            <a href="{{ route('courses.addm') }}" onclick="toggleMobileMenu()" class="block font-semibold text-[#18181B] py-1 hover:text-[#00A651]">ADDM (Digital Marketing)</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('admissions') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('admissions') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Admissions</a>

                {{-- <a href="{{ route('placements') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('placements') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Placements</a> --}}

                {{-- <a href="{{ route('student-life') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('student-life') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Student Life</a> --}}

                {{-- <a href="{{ route('gallery') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('gallery') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Gallery</a> --}}

                <a href="{{ route('blog.index') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl border-b border-slate-100 hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('blog.*') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Blog</a>

                <a href="{{ route('contact') }}" onclick="toggleMobileMenu()"
                    class="block py-2.5 px-3 rounded-xl hover:bg-orange-50 hover:text-[#F58220] transition-colors {{ request()->routeIs('contact') ? 'bg-orange-50 text-[#F58220] font-bold' : '' }}">Contact</a>
            </div>
        </div>

        <div class="pt-6 border-t border-black/5 space-y-3">
            <a href="{{ route('admissions') }}" onclick="toggleMobileMenu()"
                class="w-full btn-orange py-3 rounded-full text-xs font-bold text-center block">
                Apply Now
            </a>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['site_whatsapp'] ?? $settings['site_phone'] ?? '919140967607') }}" target="_blank"
                class="w-full btn-green py-3 rounded-full text-xs font-bold flex items-center justify-center gap-2">
                <i data-lucide="message-square" class="w-4 h-4"></i>
                <span>Chat on WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<!-- INCLUDE MODALS DIALOGS GLOBALLY -->
@include('layouts.modals')

<script>
    function showMenu(menuId) {
        const menu = document.getElementById(menuId);
        if (menu) {
            menu.classList.remove('hidden');
            menu.classList.add('block');
        }
    }

    function hideMenu(menuId) {
        const menu = document.getElementById(menuId);
        if (menu) {
            menu.classList.remove('block');
            menu.classList.add('hidden');
        }
    }

    function toggleMobileMenu() {
        const drawer = document.getElementById('mobileDrawer');
        if (drawer) {
            drawer.classList.toggle('hidden');
        }
    }

    function toggleMobileSubmenu(id) {
        const el = document.getElementById(id);
        if (el) {
            el.classList.toggle('hidden');
        }
    }

    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    }

    function openCourseModal(title, duration, eligibility, topics, career) {
        const modalTitle = document.getElementById('courseModalTitle');
        const modalDuration = document.getElementById('courseModalDuration');
        const modalEligibility = document.getElementById('courseModalEligibility');
        const modalTopics = document.getElementById('courseModalTopics');
        const modalCareer = document.getElementById('courseModalCareer');

        if (modalTitle) modalTitle.innerText = title;
        if (modalDuration) modalDuration.innerText = duration;
        if (modalEligibility) modalEligibility.innerText = eligibility;
        if (modalTopics) modalTopics.innerText = topics;
        if (modalCareer) modalCareer.innerText = career;

        openModal('courseModal');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const topbar = document.getElementById('topbar');
        const mainNavbar = document.getElementById('mainNavbar');

        function handleHeaderScroll() {
            if (!topbar || !mainNavbar) return;
            if (window.scrollY > 30) {
                topbar.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                mainNavbar.classList.remove('top-[44px]', 'sm:top-[48px]');
                mainNavbar.classList.add('top-2', 'sm:top-3');
            } else {
                topbar.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                mainNavbar.classList.remove('top-2', 'sm:top-3');
                mainNavbar.classList.add('top-[44px]', 'sm:top-[48px]');
            }
        }

        window.addEventListener('scroll', handleHeaderScroll, { passive: true });
        window.addEventListener('resize', handleHeaderScroll, { passive: true });
        handleHeaderScroll();
    });
</script>