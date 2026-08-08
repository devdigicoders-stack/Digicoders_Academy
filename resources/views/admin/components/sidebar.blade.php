<aside class="dc-sidebar">
    <!-- Sidebar Branding Header -->
    <div class="dc-sidebar-header">
        @php
            $lightLogo = !empty($settings['site_logo']) ? asset($settings['site_logo']) : null;
            $darkLogo  = !empty($settings['site_footer_logo']) ? asset($settings['site_footer_logo']) : $lightLogo;
        @endphp

        @if($lightLogo || $darkLogo)
            <a href="{{ route('admin.dashboard') }}" class="dc-sidebar-logo" title="DigiCoders Academy Home">
                @if($lightLogo)
                    <img src="{{ $lightLogo }}" alt="DigiCoders Academy" class="dc-logo-light">
                @endif
                @if($darkLogo)
                    <img src="{{ $darkLogo }}" alt="DigiCoders Academy" class="dc-logo-dark">
                @endif
            </a>
        @endif
        <button class="dc-sidebar-toggle" id="sidebarToggleBtn" title="Toggle Sidebar">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </div>

    <!-- Scrollable Navigation Menu -->
    <div class="dc-sidebar-body">
        <!-- 1. MAIN OVERVIEW SECTION -->
        <div class="dc-menu-group">
            <div class="dc-menu-label">Main Core</div>

            <a href="{{ route('admin.dashboard') }}"
                class="dc-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" title="Dashboard">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-chart-pie"></i></span>
                    <span>Dashboard</span>
                </div>
                <span class="dc-badge-pill dc-badge-green">Live</span>
            </a>

            <a href="{{ route('admin.cms.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.cms.*') ? 'active' : '' }}" title="Website CMS">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-globe"></i></span>
                    <span>Website CMS</span>
                </div>
                <span class="dc-badge-pill dc-badge-blue">CMS</span>
            </a>
        </div>

        <!-- 2. ACADEMICS SECTION -->
        <div class="dc-menu-group">
            <div class="dc-menu-label">Academics</div>

            <a href="{{ route('admin.courses.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}" title="Courses">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-graduation-cap"></i></span>
                    <span>Courses</span>
                </div>
                <span class="dc-badge-pill dc-badge-green">{{ $sidebarCounts['courses'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.admissions.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.admissions.*') ? 'active' : '' }}"
                title="Student Admissions">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-user-graduate"></i></span>
                    <span>Admissions</span>
                </div>
                <span class="dc-badge-pill dc-badge-blue">{{ $sidebarCounts['admissions'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.contact-enquiries.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.contact-enquiries.*') ? 'active' : '' }}"
                title="Contact Enquiries">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-envelope-open-text"></i></span>
                    <span>Contact Enquiries</span>
                </div>
                <span class="dc-badge-pill dc-badge-orange">{{ $sidebarCounts['contact_enquiries'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.brochure-requests.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.brochure-requests.*') ? 'active' : '' }}"
                title="Brochure Requests">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-file-pdf"></i></span>
                    <span>Brochure Requests</span>
                </div>
                <span class="dc-badge-pill dc-badge-green">{{ $sidebarCounts['brochure_requests'] ?? 0 }}</span>
            </a>
        </div>

        <!-- 3. CONTENT MANAGEMENT SECTION -->
        <div class="dc-menu-group">
            <div class="dc-menu-label">Content</div>

            <!-- 3.1 BLOGS GROUP WITH COLLAPSIBLE SUB-ITEMS -->
            @php
                $isBlogActive = request()->routeIs('admin.blogs.*') || request()->routeIs('admin.blog-categories.*') || request()->routeIs('admin.blog-tags.*');
            @endphp
            <a href="javascript:void(0)" onclick="toggleBlogSubmenu(event)"
                class="dc-nav-item {{ $isBlogActive ? 'active' : '' }}" title="Blogs">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-newspaper"></i></span>
                    <span>Blogs</span>
                </div>
                <div style="display: flex; align-items: center; gap: 6px;">
                    <span class="dc-badge-pill dc-badge-orange">{{ $sidebarCounts['blogs'] ?? 0 }}</span>
                    <i id="blogSubmenuChevron" class="fa-solid fa-chevron-down"
                        style="font-size: 10px; opacity: 0.7; transition: transform 0.2s ease;"></i>
                </div>
            </a>

            <!-- Nested Sub-Items under Blogs opens ONLY on click) -->
            <div id="blogSubmenuContainer"
                style="display: none; margin-left: 18px; margin-top: 4px; margin-bottom: 8px; flex-direction: column; gap: 3px; border-left: 2px solid var(--dc-green); padding-left: 8px;">
                <a href="{{ route('admin.blogs.index') }}"
                    class="dc-nav-item {{ request()->routeIs('admin.blogs.index') || request()->routeIs('admin.blogs.create') || request()->routeIs('admin.blogs.edit') ? 'active' : '' }}"
                    style="height: 34px; font-size: 12px; padding: 0 10px;" title="All Blogs">
                    <div class="nav-link-content">
                        <span class="icon-box" style="width: 22px; height: 22px; font-size: 10px;"><i
                                class="fa-solid fa-list"></i></span>
                        <span>All Blogs</span>
                    </div>
                </a>

                <a href="{{ route('admin.blog-categories.index') }}"
                    class="dc-nav-item {{ request()->routeIs('admin.blog-categories.*') ? 'active' : '' }}"
                    style="height: 34px; font-size: 12px; padding: 0 10px;" title="Blog Categories">
                    <div class="nav-link-content">
                        <span class="icon-box" style="width: 22px; height: 22px; font-size: 10px;"><i
                                class="fa-solid fa-folder-tree"></i></span>
                        <span>Blog Categories</span>
                    </div>
                    <span class="dc-badge-pill dc-badge-green"
                        style="font-size: 10px; padding: 2px 6px;">{{ $sidebarCounts['categories'] ?? 0 }}</span>
                </a>

                <a href="{{ route('admin.blog-tags.index') }}"
                    class="dc-nav-item {{ request()->routeIs('admin.blog-tags.*') ? 'active' : '' }}"
                    style="height: 34px; font-size: 12px; padding: 0 10px;" title="Blog Tags">
                    <div class="nav-link-content">
                        <span class="icon-box" style="width: 22px; height: 22px; font-size: 10px;"><i
                                class="fa-solid fa-tags"></i></span>
                        <span>Blog Tags</span>
                    </div>
                    <span class="dc-badge-pill dc-badge-blue"
                        style="font-size: 10px; padding: 2px 6px;">{{ $sidebarCounts['tags'] ?? 0 }}</span>
                </a>
            </div>

            <a href="{{ route('admin.gallery.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}" title="Gallery">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-images"></i></span>
                    <span>Gallery</span>
                </div>
                <span class="dc-badge-pill dc-badge-purple">{{ $sidebarCounts['galleries'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.testimonials.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}"
                title="Testimonials">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-quote-right"></i></span>
                    <span>Testimonials</span>
                </div>
                <span class="dc-badge-pill dc-badge-green">{{ $sidebarCounts['testimonials'] ?? 0 }}</span>
            </a>

            <a href="{{ route('admin.faqs.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}" title="FAQs">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-circle-question"></i></span>
                    <span>FAQs</span>
                </div>
                <span class="dc-badge-pill dc-badge-blue">{{ $sidebarCounts['faqs'] ?? 0 }}</span>
            </a>
        </div>

        <!-- 4. MARKETING & SYSTEM SECTION -->
        <div class="dc-menu-group">
            <div class="dc-menu-label">System & Settings</div>

            <a href="{{ route('admin.notifications.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.notifications.*') ? 'active' : '' }}"
                title="Notifications">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-regular fa-bell"></i></span>
                    <span>Notifications</span>
                </div>
                @if(($sidebarCounts['unread_notifications'] ?? 0) > 0)
                    <span class="dc-badge-pill dc-badge-orange">{{ $sidebarCounts['unread_notifications'] }}</span>
                @endif
            </a>

            <a href="{{ route('admin.settings.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"
                title="Website Settings">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-sliders"></i></span>
                    <span>Website Settings</span>
                </div>
            </a>

            <a href="{{ route('admin.activity.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.activity.*') ? 'active' : '' }}" title="Activity Logs">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-clock-rotate-left"></i></span>
                    <span>Activity Logs</span>
                </div>
            </a>

            <a href="{{ route('admin.profile.index') }}"
                class="dc-nav-item {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}" title="Profile">
                <div class="nav-link-content">
                    <span class="icon-box"><i class="fa-solid fa-user-gear"></i></span>
                    <span>Profile</span>
                </div>
            </a>

            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="dc-nav-item" style="color: #d9534f;" title="Logout">
                <div class="nav-link-content">
                    <span class="icon-box" style="background: rgba(217, 83, 79, 0.1);"><i
                            class="fa-solid fa-right-from-bracket" style="color: #d9534f;"></i></span>
                    <span>Logout</span>
                </div>
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</aside>

<script>
    function toggleBlogSubmenu(e) {
        if (e) e.preventDefault();
        const menu = document.getElementById('blogSubmenuContainer');
        const chevron = document.getElementById('blogSubmenuChevron');
        if (menu) {
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'flex';
                if (chevron) chevron.style.transform = 'rotate(180deg)';
            } else {
                menu.style.display = 'none';
                if (chevron) chevron.style.transform = 'rotate(0deg)';
            }
        }
    }
</script>