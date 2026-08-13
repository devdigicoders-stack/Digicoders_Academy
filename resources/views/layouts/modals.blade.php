<!-- INTERACTIVE MODALS -->

<!-- Search Modal (Spotlight Command K) -->
<div id="searchModal" class="fixed inset-0 z-50 hidden flex items-start justify-center pt-16 sm:pt-24 p-4 bg-slate-950/70 backdrop-blur-xl transition-all">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl relative animate-dropdown border border-slate-200/90 overflow-hidden flex flex-col max-h-[85vh]">
        
        <!-- Search Input Bar with Command K Shortcut Badge -->
        <div class="flex items-center gap-3 px-5 py-4 border-b border-slate-100 bg-slate-50/50">
            <i data-lucide="search" class="w-5 h-5 text-[#F58220] shrink-0"></i>
            <input type="text" id="searchInput" oninput="handleSearch(this.value)" placeholder="Search courses, diploma, admissions, fees, syllabus..." class="w-full bg-transparent text-sm sm:text-base font-bold text-[#18181B] focus:outline-none placeholder:text-slate-400 placeholder:font-medium">
            <div class="flex items-center gap-2 shrink-0">
                <span class="hidden sm:inline-block px-2 py-0.5 rounded text-[10px] font-black uppercase tracking-wider bg-slate-200/70 text-slate-600 border border-slate-300/60">ESC</span>
                <button onclick="closeModal('searchModal')" class="p-1.5 rounded-full hover:bg-slate-200/60 cursor-pointer text-slate-500 hover:text-slate-800 transition-colors">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

        <!-- Quick Tag Filter Pills -->
        <div class="flex items-center gap-1.5 px-5 py-2.5 bg-slate-100/60 border-b border-slate-200/60 overflow-x-auto text-[11px] font-bold text-slate-600 shrink-0">
            <span class="text-[10px] font-black uppercase text-slate-400 mr-1 shrink-0">Quick Filter:</span>
            <button onclick="filterSearchTag('')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#F58220] transition-colors cursor-pointer shrink-0">All</button>
            <button onclick="filterSearchTag('diploma')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#F58220] transition-colors cursor-pointer shrink-0">Diploma Courses</button>
            <button onclick="filterSearchTag('6 months')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#F58220] transition-colors cursor-pointer shrink-0">6 Months</button>
            <button onclick="filterSearchTag('1 year')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#00A651] transition-colors cursor-pointer shrink-0">1 Year</button>
            <button onclick="filterSearchTag('admission')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#F58220] transition-colors cursor-pointer shrink-0">Admissions</button>
            <button onclick="filterSearchTag('contact')" class="px-2.5 py-1 rounded-full bg-white shadow-2xs border border-slate-200 hover:text-[#00A651] transition-colors cursor-pointer shrink-0">Contact & Map</button>
        </div>

        <!-- Results List Body -->
        <div id="searchResults" class="p-4 overflow-y-auto space-y-2 text-xs">
            <!-- Dynamic JavaScript content renders here -->
        </div>

        <!-- Spotlight Keyboard Footer -->
        <div class="px-5 py-2.5 bg-slate-50 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-400 font-medium shrink-0">
            <span class="flex items-center gap-1.5">
                <span class="font-bold text-slate-600">Tip:</span> Type <code class="px-1.5 py-0.5 rounded bg-slate-200/70 text-slate-700 font-mono text-[10px]">diploma</code>, <code class="px-1.5 py-0.5 rounded bg-slate-200/70 text-slate-700 font-mono text-[10px]">excel</code>, or <code class="px-1.5 py-0.5 rounded bg-slate-200/70 text-slate-700 font-mono text-[10px]">web</code>
            </span>
            <span class="hidden sm:inline-block">Press <kbd class="px-1 py-0.5 rounded bg-slate-200/70 font-mono text-[10px] text-slate-700 font-bold">CTRL + K</kbd> anytime</span>
        </div>
    </div>
</div>

<!-- Apply Modal -->
<div id="applyModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
    <div class="ref-card w-full max-w-md p-6 rounded-[6px] bg-white relative shadow-2xl">
        <button onclick="closeModal('applyModal')" class="absolute top-4 right-4 p-1 rounded-full hover:bg-slate-100 cursor-pointer">
            <i data-lucide="x" class="w-4 h-4 text-[#18181B]"></i>
        </button>

        <h3 class="text-xl font-bold font-heading text-[#18181B]">Apply For Admission 2026</h3>
        <p class="text-xs text-[#64748B] mb-4">Start your career journey with DigiCoders Academy.</p>

        <form onsubmit="handleFormSubmit(event, 'Apply Form')" class="space-y-3">
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Your Name *</label>
                <input type="text" required placeholder="Enter full name" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Mobile Number *</label>
                <input type="tel" required placeholder="10 digit phone number" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Select Course *</label>
                <select required class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs text-[#18181B]">
                    <option value="DCA">DCA (6 Months)</option>
                    <option value="ADCA">ADCA (1 Year)</option>
                    <option value="Web Designing">Web Designing (6 Months)</option>
                    <option value="ADWD">ADWD (1 Year)</option>
                    <option value="ADDM">ADDM (1 Year)</option>
                    <option value="Advanced Excel">Advanced Excel & MIS (6 Months)</option>
                </select>
            </div>
            <button type="submit" class="w-full btn-orange py-3 rounded-[6px] text-xs font-bold shadow-md cursor-pointer mt-2">
                Submit Application
            </button>
        </form>
    </div>
</div>

<!-- Download Brochure Modal -->
<div id="brochureModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
    <div class="ref-card w-full max-w-md p-6 rounded-[6px] bg-white relative shadow-2xl">
        <button onclick="closeModal('brochureModal')" class="absolute top-4 right-4 p-1 rounded-full hover:bg-slate-100 cursor-pointer">
            <i data-lucide="x" class="w-4 h-4 text-[#18181B]"></i>
        </button>

        <h3 class="text-xl font-bold font-heading text-[#18181B]">Download Official Prospectus</h3>
        <p class="text-xs text-[#64748B] mb-4">Get fee details & syllabus sent directly to your phone.</p>

        <form onsubmit="handleBrochureDownload(event)" class="space-y-3">
            @csrf
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Your Name *</label>
                <input type="text" name="name" required placeholder="Enter full name" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">WhatsApp Mobile Number *</label>
                <input type="tel" name="phone" required pattern="[6-9][0-9]{9}" maxlength="10" minlength="10" placeholder="10 digit WhatsApp number"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                    class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Select Course (Optional)</label>
                <select name="course" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs text-[#18181B]">
                    <option value="All Courses / General Prospectus">All Courses / General Prospectus</option>
                    <option value="DCA – Diploma in Computer Applications">DCA (6 Months)</option>
                    <option value="ADCA – Advanced Computer Diploma">ADCA (1 Year)</option>
                    <option value="Web Designing UI/UX">Web Designing (6 Months)</option>
                    <option value="ADWD – Full Stack Web Development">ADWD (1 Year)</option>
                    <option value="ADDM – Digital Marketing Specialist">ADDM (1 Year)</option>
                    <option value="Advanced Excel & MIS">Advanced Excel & MIS (6 Months)</option>
                </select>
            </div>
            <button type="submit" class="w-full btn-green py-3 rounded-[6px] text-xs font-bold shadow-md cursor-pointer mt-2 flex items-center justify-center gap-2">
                <i data-lucide="download" class="w-4 h-4"></i>
                <span>Download PDF Prospectus</span>
            </button>
        </form>
    </div>
</div>

<!-- Book Counselling Modal -->
<div id="counsellingModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
    <div class="ref-card w-full max-w-md p-6 rounded-[6px] bg-white relative shadow-2xl">
        <button onclick="closeModal('counsellingModal')" class="absolute top-4 right-4 p-1 rounded-full hover:bg-slate-100 cursor-pointer">
            <i data-lucide="x" class="w-4 h-4 text-[#18181B]"></i>
        </button>

        <h3 class="text-xl font-bold font-heading text-[#18181B]">Book Free Career Counselling</h3>
        <p class="text-xs text-[#64748B] mb-4">Speak with a senior IT mentor to choose the right career path.</p>

        <form onsubmit="handleFormSubmit(event, 'Counselling Request')" class="space-y-3">
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Your Name *</label>
                <input type="text" required placeholder="Enter full name" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#18181B] mb-1">Mobile Number *</label>
                <input type="tel" required placeholder="10 digit mobile number" class="w-full px-3.5 py-2.5 rounded-[6px] border border-slate-200 text-xs">
            </div>
            <button type="submit" class="w-full btn-orange py-3 rounded-[6px] text-xs font-bold shadow-md cursor-pointer mt-2">
                Confirm Free Counselling
            </button>
        </form>
    </div>
</div>

<!-- Course Details Modal -->
<div id="courseModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/60 backdrop-blur-xs">
    <div class="ref-card w-full max-w-md p-6 rounded-[6px] bg-white relative">
        <button onclick="closeModal('courseModal')" class="absolute top-4 right-4 p-1 rounded-full hover:bg-slate-100 cursor-pointer">
            <i data-lucide="x" class="w-4 h-4 text-[#18181B]"></i>
        </button>

        <span class="text-[10px] font-bold uppercase tracking-wider text-[#F58220]">COURSE DETAILS</span>
        <h3 id="courseDetailTitle" class="text-2xl font-black font-heading text-[#18181B] mt-1">DCA</h3>
        
        <div class="flex items-center gap-4 my-3 text-xs font-medium text-[#64748B]">
            <span>Duration: <strong id="courseDetailDuration" class="text-[#18181B]">6 Months</strong></span>
            <span>Eligibility: <strong id="courseDetailEligibility" class="text-[#18181B]">10th Pass</strong></span>
        </div>

        <div class="space-y-3 text-xs text-[#64748B] my-4 border-t border-b border-slate-100 py-3">
            <p><strong>Overview:</strong> <span id="courseDetailSyllabus">Syllabus overview...</span></p>
            <p><strong>Career Path:</strong> <span id="courseDetailCareer">Career options...</span></p>
        </div>

        <button onclick="closeModal('courseModal'); openModal('applyModal');" class="w-full btn-green py-3 rounded-[6px] text-xs font-bold cursor-pointer">
            Enroll In Course
        </button>
    </div>
</div>

<!-- Toast Feedback Notification -->
<div id="toastNotification" class="fixed bottom-6 right-6 z-50 hidden ref-card px-5 py-3 rounded-[6px] bg-white shadow-2xl flex items-center gap-3 border border-emerald-200">
    <i data-lucide="check-circle" class="w-5 h-5 text-[#00A651]"></i>
    <div>
        <p id="toastTitle" class="text-xs font-bold text-[#18181B]">Submitted!</p>
        <p id="toastDesc" class="text-[10px] text-[#64748B]">We will contact you shortly.</p>
    </div>
</div>

<script>
    const searchData = [
        {
            title: "DCA (Diploma in Computer Applications)",
            category: "6-Month Diploma",
            desc: "MS Office, Windows 11, Data Entry, Computer Fundamentals, Internet & Emailing",
            url: "{{ route('courses.dca') }}",
            badge: "6 MONTHS",
            icon: "monitor",
            badgeBg: "bg-orange-100 text-[#F58220]",
            keywords: ["dca", "diploma", "computer", "office", "ms office", "typing", "data entry", "basic computer", "6 months"]
        },
        {
            title: "Advanced Excel & MIS Reporting",
            category: "6-Month Diploma",
            desc: "Nested VLOOKUP, XLOOKUP, Pivot Tables, Power Query, Executive MIS Reporting & Dashboards",
            url: "{{ route('courses.excel-mis') }}",
            badge: "6 MONTHS",
            icon: "file-spreadsheet",
            badgeBg: "bg-orange-100 text-[#F58220]",
            keywords: ["excel", "mis", "advanced excel", "vlookup", "pivot", "reporting", "dashboard", "diploma", "6 months"]
        },
        {
            title: "Web Designing (UI/UX & Frontend)",
            category: "6-Month Diploma",
            desc: "HTML5, CSS3, Tailwind CSS, JavaScript ES6, Responsive Design, Figma UI/UX Basics",
            url: "{{ route('courses.web-designing') }}",
            badge: "6 MONTHS",
            icon: "code",
            badgeBg: "bg-orange-100 text-[#F58220]",
            keywords: ["web", "designing", "html", "css", "tailwind", "javascript", "ui", "ux", "frontend", "diploma", "6 months"]
        },
        {
            title: "ADCA (Advanced Diploma in Computer Applications)",
            category: "1-Year Diploma",
            desc: "DCA + Tally Prime with GST, Photoshop Graphics, Web Basics, Hardware & Networking",
            url: "{{ route('courses.adca') }}",
            badge: "1 YEAR",
            icon: "laptop-2",
            badgeBg: "bg-emerald-100 text-[#00A651]",
            keywords: ["adca", "diploma", "advanced computer", "tally", "gst", "photoshop", "accounting", "1 year"]
        },
        {
            title: "ADWD (Full Stack Web Development Diploma)",
            category: "1-Year Diploma",
            desc: "Full Stack Web App Development, PHP Laravel Framework, MySQL Database, APIs & Live Projects",
            url: "{{ route('courses.adwd') }}",
            badge: "1 YEAR",
            icon: "globe",
            badgeBg: "bg-emerald-100 text-[#00A651]",
            keywords: ["adwd", "web development", "full stack", "laravel", "php", "mysql", "software", "coder", "diploma", "1 year"]
        },
        {
            title: "ADDM (Advanced Digital Marketing Diploma)",
            category: "1-Year Diploma",
            desc: "SEO, Google Ads, Meta Ads (Facebook/Insta), Social Media Marketing, Content Strategy & Analytics",
            url: "{{ route('courses.addm') }}",
            badge: "1 YEAR",
            icon: "bar-chart",
            badgeBg: "bg-emerald-100 text-[#00A651]",
            keywords: ["addm", "digital marketing", "seo", "google ads", "meta ads", "social media", "marketing", "diploma", "1 year"]
        },
        {
            title: "Admissions 2026 & Enrollment",
            category: "Admission",
            desc: "Apply online for new diploma batches, check fee structure, eligibility criteria & scholarships",
            url: "{{ route('admissions') }}",
            badge: "APPLY NOW",
            icon: "graduation-cap",
            badgeBg: "bg-orange-100 text-[#F58220]",
            keywords: ["admission", "apply", "enroll", "fees", "eligibility", "batch", "scholarship", "join"]
        },
        {
            title: "About DigiCoders Academy",
            category: "About Institute",
            desc: "Lucknow top-rated IT training academy, experienced mentors, practical lab facilities & vision",
            url: "{{ route('about') }}",
            badge: "ABOUT US",
            icon: "building-2",
            badgeBg: "bg-slate-100 text-slate-700",
            keywords: ["about", "digicoders", "lucknow", "institute", "directors", "mentors", "academy"]
        },
        {
            title: "FAQ & Help Center",
            category: "Support",
            desc: "Common questions about diploma duration, ISO certificates, batch timings & job assistance",
            url: "{{ route('faq') }}",
            badge: "HELP",
            icon: "help-circle",
            badgeBg: "bg-slate-100 text-slate-700",
            keywords: ["faq", "help", "questions", "certificate", "timing", "placement", "job"]
        },
        {
            title: "Contact & Campus Location",
            category: "Contact Us",
            desc: "Lucknow Campus address, helpline number +91-9140967607, Google Maps location & contact form",
            url: "{{ route('contact') }}",
            badge: "LOCATION",
            icon: "phone-call",
            badgeBg: "bg-emerald-100 text-[#00A651]",
            keywords: ["contact", "phone", "number", "location", "address", "lucknow", "map", "call", "whatsapp"]
        },
        {
            title: "Latest Articles & Tech Blog",
            category: "Blog & News",
            desc: "Read technology news, career guides, computer learning tips and academy updates",
            url: "{{ route('blog.index') }}",
            badge: "BLOG",
            icon: "newspaper",
            badgeBg: "bg-slate-100 text-slate-700",
            keywords: ["blog", "article", "news", "guides", "tips", "updates"]
        }
    ];

    function filterSearchTag(tag) {
        const input = document.getElementById('searchInput');
        if (input) {
            input.value = tag;
            handleSearch(tag);
            input.focus();
        }
    }

    function handleSearch(query) {
        const resultsContainer = document.getElementById('searchResults');
        if (!resultsContainer) return;

        const trimmed = query.trim().toLowerCase();

        if (trimmed === '') {
            let defaultHtml = `
                <div class="px-2 pt-1 pb-2">
                    <p class="text-[10px] font-black uppercase text-slate-400 tracking-wider mb-2">Recommended Courses & Quick Access</p>
                    <div class="grid grid-cols-1 gap-2">
            `;
            searchData.slice(0, 5).forEach(item => {
                defaultHtml += `
                    <a href="${item.url}" onclick="closeModal('searchModal')" class="p-3 rounded-xl hover:bg-slate-50 border border-slate-100 hover:border-orange-200 transition-all flex items-center justify-between group">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-orange-50 text-[#F58220] flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                                <i data-lucide="${item.icon}" class="w-4.5 h-4.5"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-extrabold text-[#18181B] group-hover:text-[#F58220] transition-colors">${item.title}</h4>
                                <p class="text-[11px] text-slate-500 line-clamp-1 mt-0.5">${item.desc}</p>
                            </div>
                        </div>
                        <span class="text-[10px] font-black px-2 py-0.5 rounded-full shrink-0 ml-2 ${item.badgeBg}">${item.badge}</span>
                    </a>
                `;
            });
            defaultHtml += `</div></div>`;
            resultsContainer.innerHTML = defaultHtml;
            if (typeof lucide !== 'undefined') lucide.createIcons();
            return;
        }

        const filtered = searchData.filter(item =>
            item.title.toLowerCase().includes(trimmed) ||
            item.desc.toLowerCase().includes(trimmed) ||
            item.category.toLowerCase().includes(trimmed) ||
            item.keywords.some(k => k.toLowerCase().includes(trimmed))
        );

        if (filtered.length === 0) {
            resultsContainer.innerHTML = `
                <div class="py-10 text-center text-slate-500">
                    <div class="w-12 h-12 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                        <i data-lucide="search-x" class="w-6 h-6"></i>
                    </div>
                    <p class="text-xs font-bold text-[#18181B]">No matching results for "${query}"</p>
                    <p class="text-[11px] text-slate-400 mt-1 max-w-xs mx-auto">Try searching for "dca", "diploma", "excel", "web", "admissions" or "contact".</p>
                    <button onclick="filterSearchTag('diploma')" class="mt-4 px-4 py-1.5 rounded-full bg-orange-50 text-[#F58220] text-xs font-bold hover:bg-orange-100 transition-colors">
                        Browse All Diplomas →
                    </button>
                </div>
            `;
            if (typeof lucide !== 'undefined') lucide.createIcons();
            return;
        }

        let html = `
            <div class="px-2 pt-1 pb-2">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-[10px] font-black uppercase text-slate-400 tracking-wider">Search Results (${filtered.length})</p>
                    <span class="text-[10px] font-medium text-slate-400">Matching "${query}"</span>
                </div>
                <div class="space-y-2">
        `;

        filtered.forEach(item => {
            html += `
                <a href="${item.url}" onclick="closeModal('searchModal')" class="p-3.5 rounded-xl bg-white hover:bg-slate-50 border border-slate-200/80 hover:border-[#F58220]/40 shadow-2xs hover:shadow-md transition-all flex items-center justify-between group">
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 text-[#18181B] group-hover:bg-orange-50 group-hover:text-[#F58220] flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="${item.icon}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h4 class="text-xs font-extrabold text-[#18181B] group-hover:text-[#F58220] transition-colors">${item.title}</h4>
                            </div>
                            <p class="text-[11px] text-slate-500 line-clamp-1 mt-0.5">${item.desc}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 shrink-0 ml-3">
                        <span class="text-[10px] font-black px-2.5 py-1 rounded-full ${item.badgeBg}">${item.badge}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 text-slate-300 group-hover:text-[#F58220] group-hover:translate-x-1 transition-all"></i>
                    </div>
                </a>
            `;
        });

        html += `</div></div>`;
        resultsContainer.innerHTML = html;
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }

    // Global Keyboard Shortcut Listener (CTRL + K / CMD + K)
    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            openModal('searchModal');
            const input = document.getElementById('searchInput');
            if (input) {
                input.focus();
                handleSearch(input.value);
            }
        }
        if (e.key === 'Escape') {
            closeModal('searchModal');
        }
    });

    async function handleBrochureDownload(e) {
        e.preventDefault();
        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnHtml = submitBtn ? submitBtn.innerHTML : 'Download PDF Prospectus';
        
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="text-xs font-bold">Saving & Generating PDF...</span>';
        }

        const formData = new FormData(form);

        try {
            const response = await fetch("{{ route('brochure.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await response.json();

            if (response.ok && data.success) {
                closeModal('brochureModal');
                
                // Show toast notification
                const toast = document.getElementById('toastNotification');
                if (toast) {
                    const toastTitle = document.getElementById('toastTitle');
                    const toastDesc = document.getElementById('toastDesc');
                    if (toastTitle) toastTitle.innerText = 'Request Saved!';
                    if (toastDesc) toastDesc.innerText = 'PDF Prospectus Download Starting...';
                    toast.classList.remove('hidden');
                    setTimeout(() => { toast.classList.add('hidden'); }, 4000);
                }

                // Automatic PDF Download Trigger
                const downloadUrl = data.pdf_url || '{{ asset("pdf/DigiCoders_2026_Placement_Brochure.pdf") }}';
                const hiddenLink = document.createElement('a');
                hiddenLink.href = downloadUrl;
                hiddenLink.download = 'DigiCoders_Academy_Prospectus_2026.pdf';
                hiddenLink.target = '_blank';
                document.body.appendChild(hiddenLink);
                hiddenLink.click();
                document.body.removeChild(hiddenLink);

                form.reset();
            } else {
                alert(data.message || 'Please verify your name and 10-digit WhatsApp number.');
            }
        } catch (error) {
            console.error('Brochure submit error:', error);
            // Fallback PDF download if network error
            const downloadUrl = '{{ asset("pdf/DigiCoders_2026_Placement_Brochure.pdf") }}';
            window.open(downloadUrl, '_blank');
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnHtml;
                if (typeof lucide !== 'undefined') lucide.createIcons();
            }
        }
    }
</script>
