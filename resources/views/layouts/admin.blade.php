<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - DigiCoders Academy CMS</title>

    <!-- Favicon -->
    @if(!empty($settings['site_favicon']))
        <link rel="icon" href="{{ asset($settings['site_favicon']) }}" type="image/png">
    @endif
    @if(!empty($settings['site_favicon_ico']))
        <link rel="shortcut icon" href="{{ asset($settings['site_favicon_ico']) }}" type="image/x-icon">
    @endif

    <!-- Google Fonts: Montserrat & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DigiCoders Academy Master Admin Design System CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin-design-system.css') }}">

    <script>
        // Pre-paint checks for sidebar collapse & dark mode theme
        if (localStorage.getItem("dc_sidebar_collapsed") === "true") {
            document.documentElement.classList.add("sidebar-collapsed-init");
            document.addEventListener("DOMContentLoaded", function() {
                document.body.classList.add("sidebar-collapsed");
            });
        }
        if (localStorage.getItem("dc_theme") === "dark") {
            document.documentElement.classList.add("dark-mode");
            document.addEventListener("DOMContentLoaded", function() {
                document.body.classList.add("dark-mode");
            });
        }

        // Tab Session Auto-Logout Check (Logs out if tab was closed and re-opened in a new tab)
        if (sessionStorage.getItem("tab_session_active") === null) {
            document.documentElement.classList.add("logout-redirecting");
            document.addEventListener("DOMContentLoaded", function() {
                const logoutForm = document.createElement("form");
                logoutForm.method = "POST";
                logoutForm.action = "{{ route('admin.logout') }}";
                
                const csrfToken = document.createElement("input");
                csrfToken.type = "hidden";
                csrfToken.name = "_token";
                csrfToken.value = "{{ csrf_token() }}";
                
                logoutForm.appendChild(csrfToken);
                document.body.appendChild(logoutForm);
                logoutForm.submit();
            });
        }
    </script>

    @stack('styles')
</head>
<body>
    <div class="dc-admin-wrapper">
        <!-- Sidebar Mobile Backdrop Overlay -->
        <div class="dc-sidebar-overlay" id="sidebarOverlay"></div>

        <!-- Sidebar Navigation -->
        @include('admin.components.sidebar')

        <!-- Main Workspace Canvas -->
        <div class="dc-main-content">
            <!-- Topbar Header -->
            @include('admin.components.topbar')

            <!-- Global Premium Top-Right Toast Notifications Container -->
            <div id="dcToastContainer"></div>

            <!-- Main Content Blade Body -->
            <main>
                @yield('content')
            </main>

            <!-- Admin Footer -->
            <footer class="dc-footer">
                <div>
                    <strong>DigiCoders Academy</strong> &copy; 2026. All rights reserved.
                </div>
                <div>
                    Powered by <a href="https://digicoders.in" target="_blank" style="color: var(--dc-green); font-weight: 600;">DigiCoders Technologies Pvt Ltd</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- Master Layout Interactivity JS -->
    <script>
        // Global Toast Notification Helper
        window.createToast = window.showToast = function(type, title, message) {
            const container = document.getElementById("dcToastContainer");
            if (!container) return;

            const toast = document.createElement("div");
            toast.className = `dc-toast dc-toast-${type}`;

            let iconClass = "fa-circle-check";
            if (type === "error") iconClass = "fa-triangle-exclamation";
            if (type === "info" || type === "warning") iconClass = "fa-circle-info";

            toast.innerHTML = `
                <div class="dc-toast-icon">
                    <i class="fa-solid ${iconClass}"></i>
                </div>
                <div class="dc-toast-content">
                    <div class="dc-toast-title">${title}</div>
                    <div class="dc-toast-message">${message}</div>
                </div>
                <button class="dc-toast-close" onclick="this.parentElement.remove()">&times;</button>
                <div class="dc-toast-progress"></div>
            `;

            container.appendChild(toast);

            // Animate In
            setTimeout(() => toast.classList.add("show"), 50);

            // Auto Dismiss after 4 seconds
            setTimeout(() => {
                toast.classList.remove("show");
                setTimeout(() => toast.remove(), 400);
            }, 4000);
        };

        document.addEventListener("DOMContentLoaded", function() {
            // 1. Check for Laravel Session Flash Toast Notifications
            @if(session('success'))
                window.createToast('success', 'Success 🎉', "{{ session('success') }}");
            @endif

            @if(session('error'))
                window.createToast('error', 'Error ❌', "{{ session('error') }}");
            @endif

            @if(session('info'))
                window.createToast('info', 'Information ℹ️', "{{ session('info') }}");
            @endif

            @if(isset($errors) && $errors->any())
                @foreach($errors->all() as $error)
                    window.createToast('error', 'Validation Error ❌', "{{ $error }}");
                @endforeach
            @endif

            // 2. Live Real-Time Digital Clock & Date Widget
            function updateLiveClock() {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                });
                const dateString = now.toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                });
                const clockEl = document.getElementById("dcLiveClock");
                const dateEl = document.getElementById("dcLiveDate");
                if (clockEl) clockEl.textContent = timeString;
                if (dateEl) dateEl.textContent = dateString;
            }
            updateLiveClock();
            setInterval(updateLiveClock, 1000);

            // Session Duration Active Pulse (Every 30 seconds)
            function sendSessionPulse() {
                fetch("{{ route('admin.activity.pulse') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json"
                    }
                }).catch(err => {});
            }
            setInterval(sendSessionPulse, 30000);

            // 3. Dark / Light Theme Toggle Handler
            const themeBtn = document.getElementById("themeToggleBtn");
            const themeIcon = document.getElementById("themeIcon");

            function applyTheme(isDark) {
                if (isDark) {
                    document.body.classList.add("dark-mode");
                    document.documentElement.classList.add("dark-mode");
                    if (themeIcon) {
                        themeIcon.className = "fa-solid fa-sun";
                        themeIcon.style.color = "var(--dc-orange)";
                    }
                } else {
                    document.body.classList.remove("dark-mode");
                    document.documentElement.classList.remove("dark-mode");
                    if (themeIcon) {
                        themeIcon.className = "fa-solid fa-moon";
                        themeIcon.style.color = "var(--dc-blue)";
                    }
                }
            }

            // Sync icon on initial load
            const isDarkMode = localStorage.getItem("dc_theme") === "dark";
            applyTheme(isDarkMode);

            if (themeBtn) {
                themeBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    const currentlyDark = document.body.classList.contains("dark-mode");
                    const newDarkState = !currentlyDark;
                    applyTheme(newDarkState);
                    localStorage.setItem("dc_theme", newDarkState ? "dark" : "light");
                    window.createToast('info', 'Theme Switched', newDarkState ? 'Dark mode activated' : 'Light mode activated');
                });
            }

            // 4. Sidebar Collapse & Expand Toggle Handler
            const toggleBtn = document.getElementById("sidebarToggleBtn");
            if (toggleBtn) {
                toggleBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    document.body.classList.toggle("sidebar-collapsed");
                    const isCollapsed = document.body.classList.contains("sidebar-collapsed");
                    localStorage.setItem("dc_sidebar_collapsed", isCollapsed);
                });
            }

            // Mobile Sidebar Drawer Handler
            const mobileToggleBtn = document.getElementById("mobileSidebarToggleBtn");
            const sidebarOverlay = document.getElementById("sidebarOverlay");

            if (mobileToggleBtn) {
                mobileToggleBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    document.body.classList.toggle("mobile-sidebar-open");
                });
            }
            if (sidebarOverlay) {
                sidebarOverlay.addEventListener("click", function() {
                    document.body.classList.remove("mobile-sidebar-open");
                });
            }

            // 5. Global Inline Search Bar Handler
            const inlineSearch = document.getElementById("globalInlineSearchInput");
            if (inlineSearch) {
                inlineSearch.addEventListener("input", function(e) {
                    const query = e.target.value.toLowerCase().trim();
                    const rows = document.querySelectorAll(".dc-table tbody tr");
                    rows.forEach(function(row) {
                        const text = row.innerText.toLowerCase();
                        row.style.display = (query === "" || text.includes(query)) ? "" : "none";
                    });
                });
            }

            // 6. Command Palette Modal Handler (Ctrl + K)
            const cmdModal = document.getElementById("commandPaletteModal");
            const cmdBadgeBtn = document.getElementById("openCmdPaletteBtn");
            const cmdClose = document.getElementById("closeCommandModal");
            const cmdSearchInput = document.getElementById("cmdSearchInput");

            function toggleCmdModal(show) {
                if (!cmdModal) return;
                if (show) {
                    cmdModal.style.display = "flex";
                    cmdModal.style.pointerEvents = "auto";
                    cmdModal.style.opacity = "1";
                    if (cmdSearchInput) {
                        cmdSearchInput.value = "";
                        cmdSearchInput.focus();
                        filterCmdItems("");
                    }
                } else {
                    cmdModal.style.opacity = "0";
                    cmdModal.style.pointerEvents = "none";
                    cmdModal.style.display = "none";
                }
            }

            if (cmdBadgeBtn) cmdBadgeBtn.addEventListener("click", (e) => { e.stopPropagation(); toggleCmdModal(true); });
            if (cmdClose) cmdClose.addEventListener("click", () => toggleCmdModal(false));
            if (cmdModal) {
                cmdModal.addEventListener("click", function(e) {
                    if (e.target === cmdModal) toggleCmdModal(false);
                });
            }

            function filterCmdItems(query) {
                const items = document.querySelectorAll("#cmdNavList .cmd-nav-link");
                items.forEach(function(item) {
                    const text = item.innerText.toLowerCase();
                    item.style.display = (query === "" || text.includes(query)) ? "flex" : "none";
                });
            }

            if (cmdSearchInput) {
                cmdSearchInput.addEventListener("input", function(e) {
                    filterCmdItems(e.target.value.toLowerCase().trim());
                });
            }

            document.addEventListener("keydown", function(e) {
                if ((e.ctrlKey || e.metaKey) && (e.key === "k" || e.key === "K")) {
                    e.preventDefault();
                    toggleCmdModal(true);
                }
                if (e.key === "Escape" && cmdModal && cmdModal.style.display === "flex") {
                    toggleCmdModal(false);
                }
            });

            // 7. Global SweetAlert2 Delete Confirmation Handler for ALL Forms across all admin pages
            document.body.addEventListener("submit", function (e) {
                const form = e.target;
                const methodInput = form.querySelector('input[name="_method"]');
                const isDeleteForm = (methodInput && methodInput.value.toUpperCase() === "DELETE") ||
                                     form.classList.contains("confirm-delete") ||
                                     form.classList.contains("delete-form");

                if (isDeleteForm && !form.dataset.confirmed) {
                    e.preventDefault();
                    const isDark = document.body.classList.contains('dark-mode');
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this deletion!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#ef4444",
                        cancelButtonColor: "#64748b",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "Cancel",
                        background: isDark ? '#1e293b' : '#ffffff',
                        color: isDark ? '#f8fafc' : '#111111',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.dataset.confirmed = "true";
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>

    <!-- Command Palette Modal Overlay (Ctrl + K) -->
    <div id="commandPaletteModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0, 0, 0, 0.5); backdrop-filter: blur(8px); align-items: flex-start; justify-content: center; padding-top: 80px; opacity: 0; pointer-events: none; transition: opacity 0.2s ease;">
        <div style="background: var(--dc-white); border: 1px solid var(--dc-border); border-radius: 14px; width: 100%; max-width: 600px; box-shadow: var(--dc-shadow-lg); overflow: hidden;" onclick="event.stopPropagation();">
            <div style="display: flex; align-items: center; padding: 16px 20px; border-bottom: 1px solid var(--dc-border); gap: 12px;">
                <i class="fa-solid fa-magnifying-glass" style="color: var(--dc-green); font-size: 16px;"></i>
                <input type="text" id="cmdSearchInput" placeholder="Search pages, courses, admissions, blogs..." style="width: 100%; border: none; outline: none; background: transparent; font-size: 14px; color: var(--dc-dark); font-family: inherit;">
                <kbd style="background: var(--dc-bg); border: 1px solid var(--dc-border); padding: 2px 6px; border-radius: 4px; font-size: 10px; color: var(--dc-light-gray); font-weight: 700;">ESC</kbd>
                <button id="closeCommandModal" style="background: none; border: none; font-size: 18px; color: var(--dc-light-gray); cursor: pointer;">&times;</button>
            </div>
            <div style="max-height: 340px; overflow-y: auto; padding: 12px;" id="cmdNavList">
                <div style="font-size: 11px; font-weight: 700; color: var(--dc-light-gray); text-transform: uppercase; padding: 6px 12px;">Quick Navigation</div>
                
                {{-- Main Core --}}
                <a href="{{ route('admin.dashboard') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-chart-pie" style="color: var(--dc-green);"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.cms.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-globe" style="color: var(--dc-blue);"></i>
                    <span>Website CMS</span>
                </a>

                {{-- Academics --}}
                <a href="{{ route('admin.courses.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-graduation-cap" style="color: var(--dc-green);"></i>
                    <span>Courses</span>
                </a>
                <a href="{{ route('admin.admissions.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-user-graduate" style="color: var(--dc-blue);"></i>
                    <span>Admissions</span>
                </a>
                <a href="{{ route('admin.contact-enquiries.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-envelope-open-text" style="color: var(--dc-orange);"></i>
                    <span>Contact Enquiries</span>
                </a>
                <a href="{{ route('admin.brochure-requests.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-file-pdf" style="color: var(--dc-green);"></i>
                    <span>Brochure Requests</span>
                </a>

                {{-- Content --}}
                <a href="{{ route('admin.blogs.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-newspaper" style="color: var(--dc-orange);"></i>
                    <span>All Blogs</span>
                </a>
                <a href="{{ route('admin.blog-categories.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-folder-tree" style="color: var(--dc-green);"></i>
                    <span>Blog Categories</span>
                </a>
                <a href="{{ route('admin.blog-tags.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-tags" style="color: var(--dc-blue);"></i>
                    <span>Blog Tags</span>
                </a>
                <a href="{{ route('admin.gallery.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-images" style="color: #8b5cf6;"></i>
                    <span>Gallery</span>
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-quote-right" style="color: #ec4899;"></i>
                    <span>Testimonials</span>
                </a>
                <a href="{{ route('admin.faqs.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-circle-question" style="color: #6366f1;"></i>
                    <span>FAQs</span>
                </a>

                {{-- System & Settings --}}
                <a href="{{ route('admin.notifications.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-regular fa-bell" style="color: var(--dc-orange);"></i>
                    <span>Notifications</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-sliders" style="color: var(--dc-green);"></i>
                    <span>Website Settings</span>
                </a>
                <a href="{{ route('admin.activity.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-clock-rotate-left" style="color: var(--dc-blue);"></i>
                    <span>Activity Logs</span>
                </a>
                <a href="{{ route('admin.profile.index') }}" class="cmd-nav-link dc-dropdown-item" style="padding: 10px 12px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-user-gear" style="color: var(--dc-orange);"></i>
                    <span>Profile</span>
                </a>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
