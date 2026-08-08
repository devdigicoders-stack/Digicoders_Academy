<!-- INTERACTIVE MODALS -->

<!-- Search Modal (Spotlight Command K) -->
<div id="searchModal" class="fixed inset-0 z-50 hidden flex items-start justify-center pt-24 p-4 bg-black/60 backdrop-blur-md transition-all">
    <div class="glass-card-solid w-full max-w-xl p-6 rounded-[6px] bg-white shadow-2xl relative animate-dropdown border border-black/10">
        <button onclick="closeModal('searchModal')" class="absolute top-5 right-5 p-1 rounded-full hover:bg-slate-100 cursor-pointer">
            <i data-lucide="x" class="w-5 h-5 text-[#18181B]"></i>
        </button>

        <div class="flex items-center gap-3 border-b border-black/10 pb-4">
            <i data-lucide="search" class="w-5 h-5 text-[#F58220]"></i>
            <input type="text" id="searchInput" oninput="handleSearch(this.value)" placeholder="Search courses, admissions, fees, syllabus..." class="w-full bg-transparent text-sm font-semibold text-[#18181B] focus:outline-none">
        </div>

        <div id="searchResults" class="mt-4 max-h-72 overflow-y-auto space-y-2 text-xs">
            <p class="text-[11px] font-bold text-[#64748B] uppercase tracking-wider">Popular Searches</p>
            <a href="#courses" onclick="closeModal('searchModal'); openCourseModal('DCA', '6 Months', '10th Pass', 'Computer basics, MS Office', 'Computer Operator')" class="p-3 rounded-[6px] hover:bg-slate-100 flex items-center justify-between font-semibold text-[#18181B]">
                <span>DCA (Diploma in Computer Applications)</span>
                <span class="text-[#F58220]">6 Months</span>
            </a>
            <a href="#courses" onclick="closeModal('searchModal'); openCourseModal('ADCA', '1 Year', '12th Pass', 'Advanced Computer, Tally, Web', 'Full Diploma')" class="p-3 rounded-[6px] hover:bg-slate-100 flex items-center justify-between font-semibold text-[#18181B]">
                <span>ADCA (Advanced Computer Diploma)</span>
                <span class="text-[#00A651]">1 Year</span>
            </a>
            <a href="#courses" onclick="closeModal('searchModal'); openCourseModal('ADWD', '1 Year', '12th Pass', 'Full Stack Development', 'Software Developer')" class="p-3 rounded-[6px] hover:bg-slate-100 flex items-center justify-between font-semibold text-[#18181B]">
                <span>ADWD (Full Stack Web Development)</span>
                <span class="text-[#00A651]">1 Year</span>
            </a>
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
