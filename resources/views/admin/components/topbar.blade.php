<header class="dc-topbar">
    <div style="display: flex; align-items: center; gap: 12px;">
        <!-- Mobile Sidebar Toggle Button -->
        <button class="dc-sidebar-mobile-toggle" id="mobileSidebarToggleBtn" title="Toggle Navigation Menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Live Real-Time Digital Clock & Date Widget (Placed on Left) -->
        <div class="dc-clock-widget" style="display: flex; align-items: center; gap: 6px;">
            <i class="fa-regular fa-calendar-days" style="color: var(--dc-green); font-size: 13px;"></i>
            <span id="dcLiveDate" style="font-weight: 600; font-family: var(--font-heading); font-size: 12px; color: var(--dc-dark-muted);">-- --- ----</span>
            <span style="color: var(--dc-border); font-size: 12px; margin: 0 2px;">|</span>
            <i class="fa-regular fa-clock" style="color: var(--dc-green); font-size: 13px;"></i>
            <span id="dcLiveClock" style="font-weight: 700; font-family: var(--font-heading); font-size: 12px; letter-spacing: 0.03em;">--:--:-- --</span>
        </div>
    </div>

    <!-- Topbar Actions & User Menu -->
    <div class="dc-topbar-actions">
        <!-- Live Website Button -->
        <a href="{{ route('home') }}" target="_blank" class="dc-topbar-btn" title="Visit Live Website">
            <i class="fa-solid fa-globe" style="color: var(--dc-green); font-size: 15px;"></i>
        </a>

        <!-- Premium Notification Bell Button & Dropdown -->
        <div style="position: relative;">
            <button class="dc-topbar-btn" id="notificationsBtn" title="Notifications" style="position: relative;">
                <i class="fa-regular fa-bell" style="font-size: 15px;"></i>
                <span id="notifUnreadDot" style="display: none; position: absolute; top: 6px; right: 6px; width: 8px; height: 8px; border-radius: 50%; background: #ef4444; border: 1.5px solid var(--dc-white); animation: pulse 2s infinite;"></span>
            </button>

            <!-- Notification Dropdown Panel (12px Rounded Glass) -->
            <div class="dc-dropdown-menu" id="notificationsMenu" style="right: 0; left: auto; width: 340px; padding: 0; border-radius: 12px; overflow: hidden; box-shadow: var(--dc-shadow-lg);">
                <div style="display: flex; justify-content: space-between; align-items: center; padding: 14px 16px; background: var(--dc-white); border-bottom: 1px solid var(--dc-border);">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <strong style="font-size: 14px; font-weight: 700;">Notifications</strong>
                        <span id="notifUnreadPill" class="dc-badge-pill dc-badge-green" style="display: none;">0 New</span>
                    </div>
                    <button id="markAllReadBtn" style="background: none; border: none; font-size: 11px; font-weight: 600; color: var(--dc-green); cursor: pointer; padding: 0;">
                        Mark all as read
                    </button>
                </div>

                <!-- Notifications Scroll Area -->
                <div id="notifListContainer" style="max-height: 320px; overflow-y: auto; padding: 8px 12px; display: flex; flex-direction: column; gap: 6px; background: var(--dc-bg);">
                    <!-- Dynamic notification items injected via AJAX -->
                    <div style="text-align: center; padding: 24px 12px; color: var(--dc-light-gray); font-size: 12.5px;">
                        <i class="fa-regular fa-bell" style="font-size: 24px; margin-bottom: 6px; opacity: 0.5;"></i>
                        <p style="margin: 0;">Loading notifications...</p>
                    </div>
                </div>

                <!-- Dropdown Footer -->
                <div style="padding: 10px 16px; background: var(--dc-white); border-top: 1px solid var(--dc-border); text-align: center;">
                    <a href="{{ route('admin.notifications.index') }}" style="font-size: 12px; font-weight: 700; color: var(--dc-green); text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <span>View All Notifications</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 10px;"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Fullscreen Toggle Button -->
        <button class="dc-topbar-btn" id="fullscreenToggleBtn" title="Toggle Fullscreen">
            <i class="fa-solid fa-expand" id="fullscreenIcon" style="font-size: 14px;"></i>
        </button>

        <!-- Working Dark / Light Theme Toggle -->
        <button class="dc-topbar-btn" id="themeToggleBtn" title="Toggle Light / Dark Theme">
            <i class="fa-solid fa-moon" id="themeIcon" style="color: var(--dc-blue); font-size: 15px;"></i>
        </button>

        <!-- Divider -->
        <div style="width: 1px; height: 28px; background: var(--dc-border); margin: 0 4px;"></div>

        <!-- Admin Profile Pill & Dropdown Submenu -->
        @php
            $currentAdmin = Auth::user() ?? \App\Models\Admin::first();
            $adminAvatar = $currentAdmin ? $currentAdmin->profile_image : 'https://ui-avatars.com/api/?name=Admin+User&background=00A651&color=ffffff&bold=true';
            $adminName = $currentAdmin ? $currentAdmin->name : 'Admin User';
            $adminEmail = $currentAdmin ? $currentAdmin->email : 'admin@digicoders.in';
        @endphp
        <div class="dc-user-dropdown-wrap" style="position: relative;">
            <div class="dc-user-profile" id="userProfileDropdownToggle">
                <div class="dc-avatar-wrap">
                    <img src="{{ $adminAvatar }}" alt="{{ $adminName }}" class="dc-avatar">
                    <span class="dc-online-dot"></span>
                </div>
                <div class="dc-user-info">
                    <span class="dc-user-name">{{ $adminName }}</span>
                    <span class="dc-user-role">Super Administrator</span>
                </div>
                <i class="fa-solid fa-chevron-down" id="userProfileChevron" style="font-size: 11px; color: var(--dc-light-gray); margin-left: 4px; transition: var(--transition-fast);"></i>
            </div>

            <!-- Glassmorphic Dropdown Submenu -->
            <div class="dc-dropdown-menu" id="userProfileDropdownMenu">
                <div class="dc-dropdown-header">
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <img src="{{ $adminAvatar }}" style="width: 40px; height: 40px; border-radius: var(--radius-std); object-fit: cover; border: 1.5px solid var(--dc-green);" alt="Admin">
                        <div>
                            <strong style="display: block; font-family: var(--font-heading); font-size: 13.5px; color: var(--dc-dark);">{{ $adminName }}</strong>
                            <span style="font-size: 11.5px; color: var(--dc-light-gray); display: block;">{{ $adminEmail }}</span>
                        </div>
                    </div>
                </div>
                <div class="dc-dropdown-divider"></div>
                <div class="dc-dropdown-body">
                    <a href="{{ route('admin.profile.index') }}" class="dc-dropdown-item">
                        <i class="fa-solid fa-user-gear" style="color: var(--dc-green);"></i>
                        <span>My Profile</span>
                    </a>
                    <a href="{{ route('admin.notifications.index') }}" class="dc-dropdown-item">
                        <i class="fa-regular fa-bell" style="color: var(--dc-blue);"></i>
                        <span>Notification Log</span>
                    </a>
                    <a href="{{ route('admin.profile.index') }}#passwordSection" class="dc-dropdown-item">
                        <i class="fa-solid fa-key" style="color: var(--dc-orange);"></i>
                        <span>Change Password</span>
                    </a>
                </div>
                <div class="dc-dropdown-divider"></div>
                <div class="dc-dropdown-footer">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('topbar-logout-form').submit();" class="dc-dropdown-item danger">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                    <form id="topbar-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // User Profile Dropdown
        const profileToggle = document.getElementById("userProfileDropdownToggle");
        const profileMenu = document.getElementById("userProfileDropdownMenu");

        if (profileToggle && profileMenu) {
            profileToggle.addEventListener("click", function(e) {
                e.stopPropagation();
                if (notifMenu) notifMenu.classList.remove("show");
                profileMenu.classList.toggle("show");
            });
        }

        // Notifications Dropdown Toggle
        const notifBtn = document.getElementById("notificationsBtn");
        const notifMenu = document.getElementById("notificationsMenu");
        if (notifBtn && notifMenu) {
            notifBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                if (profileMenu) profileMenu.classList.remove("show");
                notifMenu.classList.toggle("show");
            });
        }

        // Fullscreen Toggle
        const fsBtn = document.getElementById("fullscreenToggleBtn");
        if (fsBtn) {
            fsBtn.addEventListener("click", function() {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen().catch(err => {});
                } else {
                    if (document.exitFullscreen) document.exitFullscreen();
                }
            });
        }

        // Global Close Dropdowns on Click Outside
        document.addEventListener("click", function(e) {
            if (profileMenu) profileMenu.classList.remove("show");
            if (notifMenu) notifMenu.classList.remove("show");
        });

        // ==========================================
        // 15-SECOND AJAX POLLING NOTIFICATION SYSTEM
        // ==========================================
        function fetchTopbarNotifications() {
            fetch("{{ route('admin.notifications.recent') }}", {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json"
                }
            })
            .then(res => res.json())
            .then(data => {
                const unreadCount = data.unread_count || 0;
                const notifications = data.notifications || [];

                // 1. Update Bell Badge & Dot
                const dot = document.getElementById("notifUnreadDot");
                const pill = document.getElementById("notifUnreadPill");

                if (unreadCount > 0) {
                    if (dot) dot.style.display = "block";
                    if (pill) {
                        pill.textContent = unreadCount + " New";
                        pill.style.display = "inline-flex";
                    }
                } else {
                    if (dot) dot.style.display = "none";
                    if (pill) pill.style.display = "none";
                }

                // 2. Render Notifications in Dropdown
                const container = document.getElementById("notifListContainer");
                if (!container) return;

                if (notifications.length === 0) {
                    container.innerHTML = `
                        <div style="text-align: center; padding: 28px 12px; color: var(--dc-light-gray);">
                            <i class="fa-solid fa-circle-check" style="font-size: 28px; color: var(--dc-green); margin-bottom: 8px;"></i>
                            <p style="margin: 0; font-size: 13px; font-weight: 600; color: var(--dc-dark);">All Caught Up!</p>
                            <span style="font-size: 11px;">No new notifications right now.</span>
                        </div>
                    `;
                    return;
                }

                let html = "";
                notifications.forEach(item => {
                    let bg = item.is_read ? "var(--dc-white)" : "rgba(0, 166, 81, 0.04)";
                    let border = item.is_read ? "var(--dc-border)" : "var(--dc-green-border)";
                    let iconColor = "var(--dc-green)";
                    if (item.type === "warning") iconColor = "var(--dc-orange)";
                    if (item.type === "error") iconColor = "#ef4444";
                    if (item.type === "primary") iconColor = "#3b82f6";
                    if (item.type === "info") iconColor = "var(--dc-blue)";

                    html += `
                        <div onclick="markItemAsRead(${item.id}, '${item.url}')" style="background: ${bg}; border: 1px solid ${border}; border-radius: 8px; padding: 10px 12px; cursor: pointer; transition: var(--transition-fast); display: flex; gap: 10px; align-items: flex-start; position: relative;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(0, 166, 81, 0.08); color: ${iconColor}; display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="${item.icon}"></i>
                            </div>
                            <div style="flex: 1; overflow: hidden;">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2px;">
                                    <strong style="font-size: 12.5px; color: var(--dc-dark); white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">${item.title}</strong>
                                    ${!item.is_read ? '<span style="width: 6px; height: 6px; border-radius: 50%; background: var(--dc-green); flex-shrink: 0;"></span>' : ''}
                                </div>
                                <p style="margin: 0 0 4px 0; font-size: 11.5px; color: var(--dc-dark-muted); line-height: 1.3; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">${item.message}</p>
                                <span style="font-size: 10px; color: var(--dc-light-gray); font-weight: 500;">${item.created_at_human}</span>
                            </div>
                        </div>
                    `;
                });
                container.innerHTML = html;
            })
            .catch(err => {});
        }

        // Global Mark Single Read Handler
        window.markItemAsRead = function(id, redirectUrl) {
            fetch(`/admin/notifications/${id}/read`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Accept": "application/json",
                    "Content-Type": "application/json"
                }
            })
            .then(() => {
                if (redirectUrl) window.location.href = redirectUrl;
                else fetchTopbarNotifications();
            })
            .catch(() => {
                if (redirectUrl) window.location.href = redirectUrl;
            });
        };

        // Mark All Read Button Event
        const markAllBtn = document.getElementById("markAllReadBtn");
        if (markAllBtn) {
            markAllBtn.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                fetch("{{ route('admin.notifications.markAllAsRead') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json",
                        "Content-Type": "application/json"
                    }
                })
                .then(res => res.json())
                .then(() => {
                    fetchTopbarNotifications();
                    if (window.createToast) window.createToast('success', 'Notifications', 'All notifications marked as read.');
                });
            });
        }

        // Fetch Notifications immediately & set 15-second polling interval
        fetchTopbarNotifications();
        setInterval(fetchTopbarNotifications, 15000);
    });
</script>
