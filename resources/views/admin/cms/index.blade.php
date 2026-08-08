@extends('layouts.admin')

@section('title', 'Website CMS Content Management')

@section('content')
<div class="dc-container">
    <div class="dc-welcome-banner">
        <div class="dc-welcome-title">
            <h1>Website CMS & Page Content Studio <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i></h1>
            <p>Manage live content for all website pages (Home, About Us, Admissions, Placements, Contact Us, Student Life).</p>
        </div>
        <div class="dc-quick-action-group">
            <a href="{{ route('admin.pages.index') }}" class="dc-btn dc-btn-blue">
                <i class="fa-solid fa-file-circle-plus"></i>
                <span>Manage Custom Pages</span>
            </a>
            <a href="{{ route('home') }}" target="_blank" class="dc-btn dc-btn-outline">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>Preview Live Website</span>
            </a>
        </div>
    </div>

    <!-- CMS Tab Navigation Pills -->
    <div class="dc-card" style="margin-bottom: 24px; padding: 14px 20px;">
        <div style="display: flex; gap: 8px; flex-wrap: wrap;" id="cmsTabNav">
            <button type="button" class="dc-btn dc-btn-green cms-tab-btn active" data-tab="tab-home" onclick="switchCmsTab('tab-home', this)">
                <i class="fa-solid fa-house"></i> Home Page
            </button>
            <button type="button" class="dc-btn dc-btn-outline cms-tab-btn" data-tab="tab-about" onclick="switchCmsTab('tab-about', this)">
                <i class="fa-solid fa-address-card"></i> About Us
            </button>
            <button type="button" class="dc-btn dc-btn-outline cms-tab-btn" data-tab="tab-admissions" onclick="switchCmsTab('tab-admissions', this)">
                <i class="fa-solid fa-graduation-cap"></i> Admissions
            </button>
            <button type="button" class="dc-btn dc-btn-outline cms-tab-btn" data-tab="tab-placements" onclick="switchCmsTab('tab-placements', this)">
                <i class="fa-solid fa-briefcase"></i> Placements
            </button>
            <button type="button" class="dc-btn dc-btn-outline cms-tab-btn" data-tab="tab-contact" onclick="switchCmsTab('tab-contact', this)">
                <i class="fa-solid fa-phone"></i> Contact Us
            </button>
            <button type="button" class="dc-btn dc-btn-outline cms-tab-btn" data-tab="tab-studentlife" onclick="switchCmsTab('tab-studentlife', this)">
                <i class="fa-solid fa-building-columns"></i> Student Life
            </button>
        </div>
    </div>

    <!-- TAB 1: Home Page CMS Editor -->
    <div id="tab-home" class="cms-tab-content dc-card" style="margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">Home Page Content Management</h2>
            <span style="font-size: 12px; color: var(--dc-light-gray);">Edits reflect live instantly on frontend homepage</span>
        </div>

        <form action="{{ route('admin.cms.updateHome') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Hero Badge Tagline</label>
                    <input type="text" name="home_hero_badge" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_hero_badge'] ?? 'Admissions Open 2026' }}" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Primary Contact Phone</label>
                    <input type="text" name="home_phone" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_phone'] ?? '+91 9198483820' }}" required>
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Main Hero Title</label>
                <input type="text" name="home_hero_title" class="dc-search-input" style="width: 100%; font-family: var(--font-heading); font-size: 16px; font-weight: 700;" value="{{ $settings['home_hero_title'] ?? 'Build Skills That Build Careers.' }}" required>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Hero Subtitle / Description</label>
                <textarea name="home_hero_subtitle" class="dc-search-input" style="width: 100%; height: 75px; padding: 12px;" required>{{ $settings['home_hero_subtitle'] ?? '' }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Total Students Stat</label>
                    <input type="text" name="home_stat_students" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_stat_students'] ?? '10,000+' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Placement Rate Stat</label>
                    <input type="text" name="home_stat_placement" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_stat_placement'] ?? '100%' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Expert Trainers Stat</label>
                    <input type="text" name="home_stat_trainers" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_stat_trainers'] ?? '50+' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Live Projects Stat</label>
                    <input type="text" name="home_stat_projects" class="dc-search-input" style="width: 100%;" value="{{ $settings['home_stat_projects'] ?? '100+' }}">
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Home Page Changes</span>
                </button>
            </div>
        </form>
    </div>

    <!-- TAB 2: About Us CMS Editor -->
    <div id="tab-about" class="cms-tab-content dc-card" style="display: none; margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">About Us Page Content Management</h2>
        </div>

        <form action="{{ route('admin.cms.updateAbout') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">About Hero Title</label>
                    <input type="text" name="about_hero_title" class="dc-search-input" style="width: 100%;" value="{{ $settings['about_hero_title'] ?? 'Lucknow\'s Premier IT Training Institute' }}" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Founded Year</label>
                    <input type="text" name="about_founded_year" class="dc-search-input" style="width: 100%;" value="{{ $settings['about_founded_year'] ?? '2019' }}">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Hero Subtitle</label>
                <textarea name="about_hero_subtitle" class="dc-search-input" style="width: 100%; height: 60px; padding: 10px;">{{ $settings['about_hero_subtitle'] ?? '' }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Company Vision Statement</label>
                    <textarea name="about_vision" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['about_vision'] ?? '' }}</textarea>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Company Mission Statement</label>
                    <textarea name="about_mission" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['about_mission'] ?? '' }}</textarea>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Director Gopal Singh Bio</label>
                    <textarea name="about_gopal_bio" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['about_gopal_bio'] ?? '' }}</textarea>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Co-Founder Himanshu Kashyap Bio</label>
                    <textarea name="about_himanshu_bio" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['about_himanshu_bio'] ?? '' }}</textarea>
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save About Us Changes</span>
                </button>
            </div>
        </form>
    </div>

    <!-- TAB 3: Admissions CMS Editor -->
    <div id="tab-admissions" class="cms-tab-content dc-card" style="display: none; margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">Admissions Page Content Management</h2>
        </div>

        <form action="{{ route('admin.cms.updateAdmissions') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Admissions Hero Title</label>
                    <input type="text" name="admissions_hero_title" class="dc-search-input" style="width: 100%;" value="{{ $settings['admissions_hero_title'] ?? 'Begin Your Software Career Journey Today' }}" required>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Upcoming Batch Start Date</label>
                    <input type="text" name="admissions_next_batch" class="dc-search-input" style="width: 100%;" value="{{ $settings['admissions_next_batch'] ?? '15th August 2026' }}">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Admissions Hero Subtitle</label>
                <textarea name="admissions_hero_subtitle" class="dc-search-input" style="width: 100%; height: 60px; padding: 10px;">{{ $settings['admissions_hero_subtitle'] ?? '' }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Admission Guidelines & Eligibility</label>
                    <textarea name="admissions_guidelines" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['admissions_guidelines'] ?? '' }}</textarea>
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Seat Booking Fee / Registration Fee</label>
                    <input type="text" name="admissions_seat_fee" class="dc-search-input" style="width: 100%;" value="{{ $settings['admissions_seat_fee'] ?? '₹1,000' }}">
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Admissions Changes</span>
                </button>
            </div>
        </form>
    </div>

    <!-- TAB 4: Placements CMS Editor -->
    <div id="tab-placements" class="cms-tab-content dc-card" style="display: none; margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">Placements Page Content Management</h2>
        </div>

        <form action="{{ route('admin.cms.updatePlacements') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Highest Package Stat</label>
                    <input type="text" name="placements_highest_package" class="dc-search-input" style="width: 100%; font-weight: 700; color: var(--dc-green);" value="{{ $settings['placements_highest_package'] ?? '₹12.5 LPA' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Average Package Stat</label>
                    <input type="text" name="placements_avg_package" class="dc-search-input" style="width: 100%; font-weight: 700; color: var(--dc-blue);" value="{{ $settings['placements_avg_package'] ?? '₹4.2 LPA' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 12.5px; margin-bottom: 6px;">Hiring Partners Count</label>
                    <input type="text" name="placements_hiring_partners_count" class="dc-search-input" style="width: 100%; font-weight: 700;" value="{{ $settings['placements_hiring_partners_count'] ?? '250+ IT Companies' }}">
                </div>
            </div>

            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Placement Drive Notice & Overview</label>
                <textarea name="placements_notice" class="dc-search-input" style="width: 100%; height: 80px; padding: 10px;">{{ $settings['placements_notice'] ?? '' }}</textarea>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Placements Changes</span>
                </button>
            </div>
        </form>
    </div>

    <!-- TAB 5: Contact Us CMS Editor -->
    <div id="tab-contact" class="cms-tab-content dc-card" style="display: none; margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">Contact Us Page Content Management</h2>
        </div>

        <form action="{{ route('admin.cms.updateContact') }}" method="POST">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Primary Phone Number</label>
                    <input type="text" name="contact_phone_primary" class="dc-search-input" style="width: 100%;" value="{{ $settings['contact_phone_primary'] ?? '+91 9198483820' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">WhatsApp Support Number</label>
                    <input type="text" name="contact_whatsapp" class="dc-search-input" style="width: 100%;" value="{{ $settings['contact_whatsapp'] ?? '+91 9198483820' }}">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Support Email Address</label>
                    <input type="email" name="contact_email" class="dc-search-input" style="width: 100%;" value="{{ $settings['contact_email'] ?? 'info@digicoders.in' }}">
                </div>
                <div>
                    <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Office Hours / Timing</label>
                    <input type="text" name="contact_office_timing" class="dc-search-input" style="width: 100%;" value="{{ $settings['contact_office_timing'] ?? 'Mon - Sat: 9:00 AM - 7:00 PM' }}">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Full Campus Office Address</label>
                <textarea name="contact_office_address" class="dc-search-input" style="width: 100%; height: 60px; padding: 10px;">{{ $settings['contact_office_address'] ?? '' }}</textarea>
            </div>

            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Google Map Embed Link / URL</label>
                <input type="text" name="contact_map_url" class="dc-search-input" style="width: 100%; font-family: monospace;" value="{{ $settings['contact_map_url'] ?? '' }}">
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Contact Us Changes</span>
                </button>
            </div>
        </form>
    </div>

    <!-- TAB 6: Student Life CMS Editor -->
    <div id="tab-studentlife" class="cms-tab-content dc-card" style="display: none; margin-bottom: 24px;">
        <div class="dc-card-title-wrap">
            <h2 class="dc-card-title">Student Life Page Content Management</h2>
        </div>

        <form action="{{ route('admin.cms.updateStudentLife') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Student Life Hero Title</label>
                <input type="text" name="student_life_hero_title" class="dc-search-input" style="width: 100%;" value="{{ $settings['student_life_hero_title'] ?? 'State-of-the-Art Learning Environment' }}">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">High-Tech Computer Labs Info</label>
                <textarea name="student_life_labs_info" class="dc-search-input" style="width: 100%; height: 75px; padding: 10px;">{{ $settings['student_life_labs_info'] ?? '' }}</textarea>
            </div>

            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Hackathons & Tech Events Info</label>
                <textarea name="student_life_hackathons_info" class="dc-search-input" style="width: 100%; height: 75px; padding: 10px;">{{ $settings['student_life_hackathons_info'] ?? '' }}</textarea>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="submit" class="dc-btn dc-btn-green">
                    <i class="fa-solid fa-floppy-disk"></i>
                    <span>Save Student Life Changes</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Tab Switching Script -->
<script>
    function switchCmsTab(tabId, btn) {
        // Hide all tab contents
        document.querySelectorAll('.cms-tab-content').forEach(function(content) {
            content.style.display = 'none';
        });

        // Reset all tab button styles
        document.querySelectorAll('.cms-tab-btn').forEach(function(tabBtn) {
            tabBtn.classList.remove('dc-btn-green');
            tabBtn.classList.add('dc-btn-outline');
        });

        // Show selected tab content
        document.getElementById(tabId).style.display = 'block';

        // Highlight selected tab button
        btn.classList.remove('dc-btn-outline');
        btn.classList.add('dc-btn-green');
    }
</script>
@endsection
