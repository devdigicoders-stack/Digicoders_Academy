<!-- LUXURY PREMIUM FOOTER SECTION -->
<footer
    class="bg-gradient-to-b from-[#1E293B] via-[#0F172A] to-[#090D16] text-white pt-16 pb-10 relative z-10 border-t border-slate-800/80 overflow-hidden">
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#F58220]/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#00A651]/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="px-4 sm:px-6 lg:px-8 max-w-[1400px] mx-auto relative z-10">

        <!-- Top Highlight Banner inside Footer -->
        <div
            class="mb-14 p-6 sm:p-8 rounded-[6px] bg-white/5 backdrop-blur-xl border border-white/10 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl">
            <div class="flex items-center gap-4 text-center sm:text-left">
                <div
                    class="w-12 h-12 rounded-[6px] bg-[#F58220]/15 text-[#F58220] flex items-center justify-center shrink-0">
                    <i data-lucide="sparkles" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="text-base sm:text-lg font-black font-heading text-white">Admissions Open 2026 - Limited
                        Seats!</h3>
                    <p class="text-xs text-slate-400 mt-0.5">Build a successful career in Web Development, Software
                        Engineering & Digital Marketing.</p>
                </div>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('admissions') }}"
                    class="btn-orange px-6 py-2.5 rounded-[6px] text-xs font-bold shadow-md cursor-pointer whitespace-nowrap inline-block">
                    Apply Online
                </a>
                <a href="{{ route('contact') }}"
                    class="btn-green px-6 py-2.5 rounded-[6px] text-xs font-bold shadow-md cursor-pointer whitespace-nowrap inline-block">
                    Talk to Expert
                </a>
            </div>
        </div>

        <!-- Main Footer Grid (12-Column Layout) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10 pb-12 border-b border-slate-800/80">

            <!-- Col 1: Brand & Academy Info (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-4">
                @php
                    $footerLogo = $settings['site_footer_logo'] ?? ($settings['site_logo'] ?? null);
                @endphp
                @if(!empty($footerLogo))
                    <div class="p-2.5 rounded-[6px] bg-white/10 backdrop-blur-md border border-white/10 inline-block">
                        <img src="{{ asset($footerLogo) }}" alt="DigiCoders Academy Logo" class="h-8 w-auto object-contain">
                    </div>
                @endif
                <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                    <strong class="text-slate-200">DigiCoders Academy</strong>, a unit of <em>DigiCoders Technologies
                        Pvt. Ltd.</em>, is Lucknow's premier tech learning institute providing 100% practical,
                    job-oriented diploma training.
                </p>

                <div class="pt-2 space-y-2">
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Connect With Us</p>
                    <div class="flex items-center gap-2.5">
                        @if(!empty($settings['social_facebook']))
                            <a href="{{ $settings['social_facebook'] }}" target="_blank"
                                class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-300 hover:bg-[#1877F2] hover:text-white transition-all transform hover:-translate-y-1 shadow-sm"
                                title="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        @endif
                        @if(!empty($settings['social_instagram']))
                            <a href="{{ $settings['social_instagram'] }}" target="_blank"
                                class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-300 hover:bg-[#E4405F] hover:text-white transition-all transform hover:-translate-y-1 shadow-sm"
                                title="Instagram">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        @endif
                        @if(!empty($settings['social_youtube']))
                            <a href="{{ $settings['social_youtube'] }}" target="_blank"
                                class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-300 hover:bg-[#FF0000] hover:text-white transition-all transform hover:-translate-y-1 shadow-sm"
                                title="YouTube">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        @endif
                        @if(!empty($settings['social_linkedin']))
                            <a href="{{ $settings['social_linkedin'] }}" target="_blank"
                                class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-300 hover:bg-[#0A66C2] hover:text-white transition-all transform hover:-translate-y-1 shadow-sm"
                                title="LinkedIn">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                        @endif
                        @if(!empty($settings['social_whatsapp_channel']))
                            <a href="{{ $settings['social_whatsapp_channel'] }}" target="_blank"
                                class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-slate-300 hover:bg-[#25D366] hover:text-white transition-all transform hover:-translate-y-1 shadow-sm"
                                title="WhatsApp Channel">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Col 2: Quick Links (lg:col-span-2) -->
            <div class="lg:col-span-2 space-y-4">
                <h4
                    class="text-xs font-black uppercase tracking-wider text-white font-heading relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-[#F58220] after:rounded-full">
                    Quick Links
                </h4>
                <ul class="space-y-2 text-xs text-slate-400 font-medium">
                    <li><a href="{{ route('home') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Home</span></a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>About
                                Academy</span></a></li>
                    <li><a href="{{ route('courses.index') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>All
                                Courses</span></a></li>
                    <li><a href="{{ route('admissions') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Admissions
                                2026</span></a></li>
                    <li><a href="{{ route('placements') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right"
                                class="w-3 h-3 text-[#F58220]"></i><span>Placements</span></a></li>
                    <li><a href="{{ route('student-life') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Student
                                Life</span></a></li>
                    <li><a href="{{ route('gallery') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Campus
                                Gallery</span></a></li>
                    <li><a href="{{ route('blog.index') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Blog &
                                News</span></a></li>
                    <li><a href="{{ route('contact') }}"
                            class="hover:text-[#F58220] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#F58220]"></i><span>Contact
                                Us</span></a></li>
                </ul>
            </div>

            <!-- Col 3: Student & Partners (lg:col-span-3) -->
            <div class="lg:col-span-3 space-y-4">
                <h4
                    class="text-xs font-black uppercase tracking-wider text-white font-heading relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-[#00A651] after:rounded-full">
                    Student & Partners
                </h4>
                <ul class="space-y-2 text-xs text-slate-400 font-medium">
                    <li><a href="{{ route('verify-certificate') }}"
                            class="hover:text-[#00A651] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#00A651]"></i><span>Verify
                                Certificate</span></a></li>
                    <li><a href="{{ route('franchise') }}"
                            class="hover:text-[#00A651] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#00A651]"></i><span>Franchise
                                Partner</span></a></li>
                    <li><a href="{{ route('careers') }}"
                            class="hover:text-[#00A651] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#00A651]"></i><span>Careers @
                                DigiCoders</span></a></li>
                    <li><a href="{{ route('faq') }}"
                            class="hover:text-[#00A651] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#00A651]"></i><span>FAQ
                                Center</span></a></li>
                    <li><a href="{{ route('sitemap') }}"
                            class="hover:text-[#00A651] flex items-center gap-1.5 transition-all hover:translate-x-1.5"><i
                                data-lucide="chevron-right" class="w-3 h-3 text-[#00A651]"></i><span>XML
                                Sitemap</span></a></li>
                </ul>
            </div>

            <!-- Col 4: Contact Info (lg:col-span-3) -->
            <div class="lg:col-span-3 space-y-4">
                <h4
                    class="text-xs font-black uppercase tracking-wider text-white font-heading relative inline-block pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-0.5 after:bg-[#F58220] after:rounded-full">
                    Contact Info & Campuses
                </h4>

                <div class="space-y-2 text-xs text-slate-300">
                    @if(!empty($settings['office_lucknow_phone']) || !empty($settings['site_phone']))
                        <a href="tel:{{ str_replace(' ', '', explode(',', $settings['office_lucknow_phone'] ?? $settings['site_phone'])[0]) }}"
                            class="flex items-center gap-2.5 p-2 rounded-[6px] bg-white/5 hover:bg-white/10 transition-colors border border-white/5">
                            <i data-lucide="phone-call" class="w-4 h-4 text-[#00A651] shrink-0"></i>
                            <span>{{ $settings['office_lucknow_phone'] ?? $settings['site_phone'] }}</span>
                        </a>
                    @endif

                    @if(!empty($settings['office_lucknow_email']) || !empty($settings['site_email']))
                        <a href="mailto:{{ $settings['office_lucknow_email'] ?? $settings['site_email'] }}"
                            class="flex items-center gap-2.5 p-2 rounded-[6px] bg-white/5 hover:bg-white/10 transition-colors border border-white/5">
                            <i data-lucide="mail" class="w-4 h-4 text-[#F58220] shrink-0"></i>
                            <span>{{ $settings['office_lucknow_email'] ?? $settings['site_email'] }}</span>
                        </a>
                    @endif

                    @if(!empty($settings['office_lucknow_address']) || !empty($settings['site_address']))
                        @if(!empty($settings['office_lucknow_map_link']))
                            <a href="{{ $settings['office_lucknow_map_link'] }}" target="_blank"
                                class="flex items-start gap-2.5 p-2 rounded-[6px] bg-white/5 hover:bg-white/10 transition-colors border border-white/5 group">
                                <i data-lucide="map-pin"
                                    class="w-4 h-4 text-[#00A651] shrink-0 mt-0.5 group-hover:scale-110 transition-transform"></i>
                                <span
                                    class="leading-snug text-slate-300 group-hover:text-white">{{ $settings['office_lucknow_address'] ?? $settings['site_address'] }}</span>
                            </a>
                        @else
                            <div class="flex items-start gap-2.5 p-2 rounded-[6px] bg-white/5 border border-white/5">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#00A651] shrink-0 mt-0.5"></i>
                                <span
                                    class="leading-snug text-slate-300">{{ $settings['office_lucknow_address'] ?? $settings['site_address'] }}</span>
                            </div>
                        @endif
                    @endif
                </div>

                <!-- Campus Map Links -->
                @if(!empty($settings['office_lucknow_map_link']) || !empty($settings['office_gorakhpur_map_link']) || !empty($settings['office_kanpur_map_link']))
                    <div class="pt-2 border-t border-slate-800/80 space-y-1.5">
                        <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Our Campuses Map Links</p>
                        <div class="flex flex-wrap gap-1.5 text-[11px]">
                            @if(!empty($settings['office_lucknow_map_link']))
                                <a href="{{ $settings['office_lucknow_map_link'] }}" target="_blank"
                                    class="px-2.5 py-1 rounded bg-white/10 hover:bg-[#00A651] text-slate-200 hover:text-white transition-colors flex items-center gap-1 font-semibold">
                                    <i data-lucide="navigation" class="w-3 h-3 text-[#00A651]"></i>
                                    <span>{{ $settings['office_lucknow_title'] ?? 'Lucknow' }}</span>
                                </a>
                            @endif
                            @if(!empty($settings['office_gorakhpur_map_link']))
                                <a href="{{ $settings['office_gorakhpur_map_link'] }}" target="_blank"
                                    class="px-2.5 py-1 rounded bg-white/10 hover:bg-[#F58220] text-slate-200 hover:text-white transition-colors flex items-center gap-1 font-semibold">
                                    <i data-lucide="navigation" class="w-3 h-3 text-[#F58220]"></i>
                                    <span>{{ $settings['office_gorakhpur_title'] ?? 'Gorakhpur' }}</span>
                                </a>
                            @endif
                            @if(!empty($settings['office_kanpur_map_link']))
                                <a href="{{ $settings['office_kanpur_map_link'] }}" target="_blank"
                                    class="px-2.5 py-1 rounded bg-white/10 hover:bg-sky-600 text-slate-200 hover:text-white transition-colors flex items-center gap-1 font-semibold">
                                    <i data-lucide="navigation" class="w-3 h-3 text-sky-400"></i>
                                    <span>{{ $settings['office_kanpur_title'] ?? 'Kanpur' }}</span>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

        </div>

        <!-- Bottom Copyright Bar -->
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <p class="text-center sm:text-left">
                © 2026 <strong class="text-slate-300">DigiCoders Academy</strong>. A Unit of DigiCoders Technologies
                Pvt. Ltd. All Rights Reserved.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('privacy-policy') }}" class="hover:text-[#F58220] transition-colors">Privacy
                    Policy</a>
                <span>•</span>
                <a href="{{ route('terms') }}" class="hover:text-[#F58220] transition-colors">Terms & Conditions</a>
                <span>•</span>
                <a href="{{ route('refund-policy') }}" class="hover:text-[#F58220] transition-colors">Refund Policy</a>
                <span>•</span>
                <a href="{{ route('sitemap') }}" class="hover:text-[#F58220] transition-colors">Sitemap</a>
                <a href="#"
                    class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#F58220] text-white flex items-center justify-center transition-all transform hover:-translate-y-1 shadow-md ml-2"
                    title="Back to Top">
                    <i data-lucide="arrow-up" class="w-4 h-4"></i>
                </a>
            </div>
        </div>


    </div>
</footer>

<!-- GLOBAL DYNAMIC FLOATING RIGHT SIDEBAR STICKY WIDGET (Appears on All Pages) -->
<div class="fixed right-0 top-1/2 -translate-y-1/2 z-50 flex flex-col gap-2.5 items-end pr-0">
    <!-- 1. WhatsApp Floating Action -->
    @if(!empty($settings['site_whatsapp']))
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['site_whatsapp']) }}" target="_blank"
            style="border-radius: 6px 0 0 6px;"
            title="Chat on WhatsApp"
            class="group flex items-center bg-[#00A651] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#008f45]">
            <i data-lucide="message-square" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                WhatsApp
            </span>
        </a>
    @elseif(!empty($settings['site_phone']))
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['site_phone']) }}" target="_blank"
            style="border-radius: 6px 0 0 6px;"
            title="Chat on WhatsApp"
            class="group flex items-center bg-[#00A651] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#008f45]">
            <i data-lucide="message-square" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                WhatsApp
            </span>
        </a>
    @endif

    <!-- 2. Call Now Floating Action -->
    @if(!empty($settings['site_phone']))
        <a href="tel:{{ str_replace(' ', '', $settings['site_phone']) }}"
            style="border-radius: 6px 0 0 6px;"
            title="Call Helpline"
            class="group flex items-center bg-[#F58220] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#e07318]">
            <i data-lucide="phone-call" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                Call Now
            </span>
        </a>
    @endif

    <!-- 3. Visit Campus Map Floating Action -->
    @if(!empty($settings['office_lucknow_map_link']))
        <a href="{{ $settings['office_lucknow_map_link'] }}" target="_blank"
            style="border-radius: 6px 0 0 6px;"
            title="Visit Campus"
            class="group flex items-center bg-[#00A651] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#008f45]">
            <i data-lucide="map-pin" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[110px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                Visit Campus
            </span>
        </a>
    @elseif(!empty($settings['site_map_iframe']) && str_starts_with($settings['site_map_iframe'], 'http'))
        <a href="{{ $settings['site_map_iframe'] }}" target="_blank"
            style="border-radius: 6px 0 0 6px;"
            title="Visit Campus"
            class="group flex items-center bg-[#00A651] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#008f45]">
            <i data-lucide="map-pin" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[110px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                Visit Campus
            </span>
        </a>
    @else
        <a href="{{ route('contact') }}"
            style="border-radius: 6px 0 0 6px;"
            title="Visit Campus"
            class="group flex items-center bg-[#00A651] text-white p-3 rounded-tl-[6px] rounded-bl-[6px] shadow-xl transition-all duration-300 hover:shadow-2xl hover:bg-[#008f45]">
            <i data-lucide="map-pin" class="w-5 h-5 shrink-0"></i>
            <span class="max-w-0 opacity-0 overflow-hidden whitespace-nowrap text-xs font-bold transition-all duration-300 ease-in-out group-hover:max-w-[110px] group-hover:opacity-100 group-hover:ml-2 pr-1">
                Visit Campus
            </span>
        </a>
    @endif
</div>

<!-- Lucide Icons Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>