@extends('layouts.admin')

@section('title', 'Website & System Settings')

@section('content')
    <div class="dc-container">

        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Page Header & Action Bar -->
            <div class="dc-welcome-banner"
                style="margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div class="dc-welcome-title">
                    <h1 style="display: flex; align-items: center; gap: 10px; font-weight: 600;">
                        <i class="fa-solid fa-sliders" style="color: var(--dc-green);"></i>
                        <span>Website & System Settings</span>
                        <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i>
                    </h1>
                    <p>Configure academy brand details, SMTP email gateway, API keys, cache, and security options.</p>
                </div>

                <div style="display: flex; gap: 10px; align-items: center;">
                    <button type="submit" class="dc-btn dc-btn-green" style="padding: 10px 20px; font-size: 13px;">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Save All Settings</span>
                    </button>
                </div>
            </div>

            <!-- Vertical Tabs Container -->
            <div style="display: grid; grid-template-columns: 260px 1fr; gap: 24px;">

                <!-- Left Vertical Nav Tabs -->
                <div class="dc-card" style="padding: 16px; height: fit-content;">
                    <div style="display: flex; flex-direction: column; gap: 6px;">
                        <button type="button" class="tab-nav-btn active" data-tab="tab-general">
                            <i class="fa-solid fa-sliders"></i>
                            <span>General Config</span>
                        </button>

                        <button type="button" class="tab-nav-btn" data-tab="tab-branding">
                            <i class="fa-solid fa-copyright"></i>
                            <span>Branding & Logo</span>
                        </button>

                        <button type="button" class="tab-nav-btn" data-tab="tab-social">
                            <i class="fa-solid fa-share-nodes"></i>
                            <span>Social Links</span>
                        </button>

                        <button type="button" class="tab-nav-btn" data-tab="tab-offices">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Office Locations</span>
                        </button>

                        <button type="button" class="tab-nav-btn" data-tab="tab-smtp">
                            <i class="fa-solid fa-envelope"></i>
                            <span>SMTP Email</span>
                        </button>

                        <button type="button" class="tab-nav-btn" data-tab="tab-security">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Security & System</span>
                        </button>
                    </div>
                </div>

                <!-- Right Content Panels -->
                <div class="dc-card" style="padding: 24px;">

                    <!-- TAB 1: General Config -->
                    <div class="setting-tab-panel active" id="tab-general">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            General Academy Information</h2>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Academy Name</label>
                                <input type="text" name="site_name" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_name'] ?? 'DigiCoders Academy' }}" required>
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Working Days /
                                    Hours</label>
                                <input type="text" name="site_working_hours" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_working_hours'] ?? 'Mon - Sat (9:30 AM - 6:30 PM)' }}">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Support Email 1</label>
                                <input type="email" name="site_email" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_email'] ?? 'info@digicoders.in' }}" required>
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Support Email 2</label>
                                <input type="email" name="site_email_2" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_email_2'] ?? 'support@digicoders.in' }}"
                                    placeholder="support@digicoders.in">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline Phone
                                    1</label>
                                <input type="text" name="site_phone" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_phone'] ?? '+91 91409 67607' }}">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline Phone
                                    2</label>
                                <input type="text" name="site_phone_2" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_phone_2'] ?? '+91 63942 96293' }}">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline Phone
                                    3</label>
                                <input type="text" name="site_phone_3" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_phone_3'] ?? '+91 91984 83820' }}"
                                    placeholder="+91 XXXXXXXXXX">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Landline Number</label>
                                <input type="text" name="site_landline" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_landline'] ?? '0522-3580555' }}" placeholder="0522-XXXXXXX">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">WhatsApp Support
                                    Number</label>
                                <input type="text" name="site_whatsapp" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['site_whatsapp'] ?? '+91 63942 96191' }}">
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Academy Campus
                                Address</label>
                            <input type="text" name="site_address" class="dc-search-input" style="width: 100%;"
                                value="{{ $settings['site_address'] ?? '2nd Floor, DigiCoders Building, Near Polytechnic Crossing, Lucknow, UP 226016' }}">
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Google Maps Embed Link /
                                Iframe URL</label>
                            <textarea name="site_map_iframe"
                                style="width: 100%; height: 80px; padding: 10px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); font-family: var(--font-body); outline: none;">{{ $settings['site_map_iframe'] ?? 'https://maps.google.com/?q=DigiCoders+Technologies' }}</textarea>
                        </div>
                    </div>

                    <!-- TAB 2: Branding & Logo -->
                    <div class="setting-tab-panel" id="tab-branding" style="display: none;">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            Branding, Logo & Identity</h2>

                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 24px;">
                            <!-- Header Logo -->
                            <div
                                style="background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 12px; padding: 16px;">
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 10px;">Header Logo
                                    Image</label>
                                <div
                                    style="margin-bottom: 12px; height: 60px; display: flex; align-items: center; justify-content: center; background: var(--dc-bg); border-radius: 8px; border: 1px dashed var(--dc-border); padding: 8px;">
                                    <img id="logoPreview"
                                        src="{{ !empty($settings['site_logo']) ? asset($settings['site_logo']) : '' }}"
                                        style="max-height: 100%; max-width: 100%; object-fit: contain; {{ empty($settings['site_logo']) ? 'display: none;' : '' }}"
                                        alt="Site Logo">
                                    <span id="logoPreviewPlaceholder"
                                        style="font-size: 12px; color: var(--dc-text-muted); {{ !empty($settings['site_logo']) ? 'display: none;' : '' }}">No
                                        image uploaded</span>
                                </div>
                                <label
                                    style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Website
                                    Main Logo</label>
                                <input type="file" name="site_logo" accept="image/*" class="dc-search-input"
                                    onchange="previewImage(this, 'logoPreview', 'logoPreviewPlaceholder')">
                            </div>

                            <!-- Footer Logo Upload -->
                            <div
                                style="background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 12px; padding: 16px;">
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 10px;">Footer Logo
                                    Image</label>
                                <div
                                    style="margin-bottom: 12px; height: 60px; display: flex; align-items: center; justify-content: center; background: #0f172a; border-radius: 8px; border: 1px dashed var(--dc-border); padding: 8px;">
                                    <img id="footerLogoPreview"
                                        src="{{ !empty($settings['site_footer_logo']) ? asset($settings['site_footer_logo']) : '' }}"
                                        style="max-height: 100%; max-width: 100%; object-fit: contain; {{ empty($settings['site_footer_logo']) ? 'display: none;' : '' }}"
                                        alt="Footer Logo">
                                    <span id="footerLogoPreviewPlaceholder"
                                        style="font-size: 12px; color: #94a3b8; {{ !empty($settings['site_footer_logo']) ? 'display: none;' : '' }}">No
                                        image uploaded</span>
                                </div>
                                <label
                                    style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Website
                                    Footer Logo</label>
                                <input type="file" name="site_footer_logo" accept="image/*" class="dc-search-input"
                                    onchange="previewImage(this, 'footerLogoPreview', 'footerLogoPreviewPlaceholder')">
                            </div>

                            <!-- Favicon PNG Upload -->
                            <div
                                style="background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 12px; padding: 16px;">
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 10px;">Favicon Icon
                                    (PNG)</label>
                                <div
                                    style="margin-bottom: 12px; height: 60px; display: flex; align-items: center; justify-content: center; background: var(--dc-bg); border-radius: 8px; border: 1px dashed var(--dc-border); padding: 8px;">
                                    <img id="faviconPreview"
                                        src="{{ !empty($settings['site_favicon']) ? asset($settings['site_favicon']) : '' }}"
                                        alt="Favicon PNG"
                                        style="max-height: 36px; width: auto; object-fit: contain; {{ empty($settings['site_favicon']) ? 'display: none;' : '' }}">
                                    <span id="faviconPreviewPlaceholder"
                                        style="font-size: 12px; color: var(--dc-text-muted); {{ !empty($settings['site_favicon']) ? 'display: none;' : '' }}">No
                                        image uploaded</span>
                                </div>
                                <label
                                    style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Browser
                                    Favicon (PNG)</label>
                                <input type="file" name="site_favicon" accept="image/png,image/*" class="dc-search-input"
                                    onchange="previewImage(this, 'faviconPreview', 'faviconPreviewPlaceholder')">
                            </div>

                            <!-- Favicon ICO Upload -->
                            <div
                                style="background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 12px; padding: 16px;">
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 10px;">Favicon Icon
                                    (.ICO)</label>
                                <div
                                    style="margin-bottom: 12px; height: 60px; display: flex; align-items: center; justify-content: center; background: var(--dc-bg); border-radius: 8px; border: 1px dashed var(--dc-border); padding: 8px;">
                                    <img id="faviconIcoPreview"
                                        src="{{ !empty($settings['site_favicon_ico']) ? asset($settings['site_favicon_ico']) : '' }}"
                                        alt="Favicon ICO"
                                        style="max-height: 36px; width: auto; object-fit: contain; {{ empty($settings['site_favicon_ico']) ? 'display: none;' : '' }}">
                                    <span id="faviconIcoPreviewPlaceholder"
                                        style="font-size: 12px; color: var(--dc-text-muted); {{ !empty($settings['site_favicon_ico']) ? 'display: none;' : '' }}">No
                                        image uploaded</span>
                                </div>
                                <label
                                    style="display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px;">Browser
                                    Favicon (.ICO)</label>
                                <input type="file" name="site_favicon_ico"
                                    accept=".ico,image/x-icon,image/vnd.microsoft.icon" class="dc-search-input"
                                    onchange="previewImage(this, 'faviconIcoPreview', 'faviconIcoPreviewPlaceholder')">
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Footer Short About
                                Text</label>
                            <textarea name="site_footer_about"
                                style="width: 100%; height: 80px; padding: 10px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); font-family: var(--font-body); outline: none;">{{ $settings['site_footer_about'] ?? 'DigiCoders Academy is India\'s premier software training institute delivering practical, job-oriented IT diploma courses.' }}</textarea>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Footer Copyright
                                Notice</label>
                            <input type="text" name="site_copyright" class="dc-search-input" style="width: 100%;"
                                value="{{ $settings['site_copyright'] ?? 'DigiCoders Academy © 2026. All Rights Reserved.' }}">
                        </div>
                    </div>

                    <!-- TAB: Social Media Links -->
                    <div class="setting-tab-panel" id="tab-social" style="display: none;">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            Social Media Links & Channels</h2>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">
                                    <i class="fa-brands fa-facebook" style="color: #1877F2; margin-right: 6px;"></i>
                                    Facebook Page URL
                                </label>
                                <input type="url" name="social_facebook" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['social_facebook'] ?? 'https://facebook.com' }}"
                                    placeholder="https://facebook.com/your-page">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">
                                    <i class="fa-brands fa-instagram" style="color: #E4405F; margin-right: 6px;"></i>
                                    Instagram Profile URL
                                </label>
                                <input type="url" name="social_instagram" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['social_instagram'] ?? 'https://instagram.com' }}"
                                    placeholder="https://instagram.com/your-profile">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">
                                    <i class="fa-brands fa-youtube" style="color: #FF0000; margin-right: 6px;"></i> YouTube
                                    Channel URL
                                </label>
                                <input type="url" name="social_youtube" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['social_youtube'] ?? 'https://youtube.com' }}"
                                    placeholder="https://youtube.com/@your-channel">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">
                                    <i class="fa-brands fa-linkedin" style="color: #0A66C2; margin-right: 6px;"></i>
                                    LinkedIn Page URL
                                </label>
                                <input type="url" name="social_linkedin" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['social_linkedin'] ?? 'https://linkedin.com' }}"
                                    placeholder="https://linkedin.com/company/your-company">
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">
                                <i class="fa-brands fa-whatsapp" style="color: #25D366; margin-right: 6px;"></i> WhatsApp
                                Channel URL
                            </label>
                            <input type="url" name="social_whatsapp_channel" class="dc-search-input" style="width: 100%;"
                                value="{{ $settings['social_whatsapp_channel'] ?? 'https://whatsapp.com' }}"
                                placeholder="https://whatsapp.com/channel/your-channel">
                        </div>
                    </div>

                    <!-- TAB: Office Locations & Maps -->
                    <div class="setting-tab-panel" id="tab-offices" style="display: none;">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            Head Office & Branch Locations</h2>

                        <!-- Lucknow Head Office -->
                        <div
                            style="background: rgba(0, 166, 81, 0.04); border: 1px solid var(--dc-green-border); border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                            <h3
                                style="font-size: 15px; font-weight: 700; color: var(--dc-dark); margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-building" style="color: var(--dc-green);"></i>
                                Lucknow Head Office
                            </h3>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Office
                                        Title</label>
                                    <input type="text" name="office_lucknow_title" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_lucknow_title'] ?? 'Lucknow Head Office' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline / Phone
                                        Numbers</label>
                                    <input type="text" name="office_lucknow_phone" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_lucknow_phone'] ?? '+91 91409 67607, +91 63942 96191' }}">
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Email
                                        Address</label>
                                    <input type="email" name="office_lucknow_email" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_lucknow_email'] ?? 'info@digicoders.in' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Google Maps Link
                                        (URL)</label>
                                    <input type="url" name="office_lucknow_map_link" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_lucknow_map_link'] ?? 'https://maps.google.com/?q=DigiCoders+Technologies+Lucknow' }}"
                                        placeholder="https://maps.google.com/...">
                                </div>
                            </div>

                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Full Office
                                    Address</label>
                                <textarea name="office_lucknow_address"
                                    style="width: 100%; height: 60px; padding: 10px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); font-family: var(--font-body); outline: none;">{{ $settings['office_lucknow_address'] ?? '2nd Floor, DigiCoders Building, Near Polytechnic Crossing, Indiranagar, Lucknow, UP 226016' }}</textarea>
                            </div>
                        </div>

                        <!-- Gorakhpur Branch Office -->
                        <div
                            style="background: rgba(245, 130, 32, 0.04); border: 1px solid rgba(245, 130, 32, 0.2); border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                            <h3
                                style="font-size: 15px; font-weight: 700; color: var(--dc-dark); margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-location-dot" style="color: #F58220;"></i>
                                Gorakhpur Branch Office
                            </h3>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Office
                                        Title</label>
                                    <input type="text" name="office_gorakhpur_title" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_gorakhpur_title'] ?? 'Gorakhpur Branch Office' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline / Phone
                                        Numbers</label>
                                    <input type="text" name="office_gorakhpur_phone" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_gorakhpur_phone'] ?? '+91 91409 67607' }}">
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Email
                                        Address</label>
                                    <input type="email" name="office_gorakhpur_email" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_gorakhpur_email'] ?? 'gorakhpur@digicoders.in' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Google Maps Link
                                        (URL)</label>
                                    <input type="url" name="office_gorakhpur_map_link" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_gorakhpur_map_link'] ?? 'https://maps.google.com/?q=DigiCoders+Technologies+Gorakhpur' }}"
                                        placeholder="https://maps.google.com/...">
                                </div>
                            </div>

                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Full Office
                                    Address</label>
                                <textarea name="office_gorakhpur_address"
                                    style="width: 100%; height: 60px; padding: 10px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); font-family: var(--font-body); outline: none;">{{ $settings['office_gorakhpur_address'] ?? 'DigiCoders Technologies, Near University Chauraha, Civil Lines, Gorakhpur, UP 273001' }}</textarea>
                            </div>
                        </div>

                        <!-- Kanpur Branch Office -->
                        <div
                            style="background: rgba(14, 165, 233, 0.04); border: 1px solid rgba(14, 165, 233, 0.2); border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                            <h3
                                style="font-size: 15px; font-weight: 700; color: var(--dc-dark); margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-location-dot" style="color: #0ea5e9;"></i>
                                Kanpur Branch Office
                            </h3>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Office
                                        Title</label>
                                    <input type="text" name="office_kanpur_title" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_kanpur_title'] ?? 'Kanpur Branch Office' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Helpline / Phone
                                        Numbers</label>
                                    <input type="text" name="office_kanpur_phone" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_kanpur_phone'] ?? '+91 91409 67607' }}">
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Email
                                        Address</label>
                                    <input type="email" name="office_kanpur_email" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_kanpur_email'] ?? 'kanpur@digicoders.in' }}">
                                </div>
                                <div>
                                    <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Google Maps Link
                                        (URL)</label>
                                    <input type="url" name="office_kanpur_map_link" class="dc-search-input"
                                        style="width: 100%;"
                                        value="{{ $settings['office_kanpur_map_link'] ?? 'https://maps.google.com/?q=DigiCoders+Technologies+Kanpur' }}"
                                        placeholder="https://maps.google.com/...">
                                </div>
                            </div>

                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Full Office
                                    Address</label>
                                <textarea name="office_kanpur_address"
                                    style="width: 100%; height: 60px; padding: 10px; border: 1px solid var(--dc-border); border-radius: var(--radius-std); font-family: var(--font-body); outline: none;">{{ $settings['office_kanpur_address'] ?? 'DigiCoders Technologies, Kakadeo, Kanpur, UP 208025' }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 3: SMTP Email Gateway -->
                    <div class="setting-tab-panel" id="tab-smtp" style="display: none;">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            SMTP Email Server Configuration</h2>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Mail Driver</label>
                                <select name="mail_driver" class="dc-search-input" style="width: 100%;">
                                    <option value="smtp" {{ ($settings['mail_driver'] ?? 'smtp') === 'smtp' ? 'selected' : '' }}>SMTP Server</option>
                                    <option value="sendmail" {{ ($settings['mail_driver'] ?? '') === 'sendmail' ? 'selected' : '' }}>Sendmail</option>
                                    <option value="log" {{ ($settings['mail_driver'] ?? '') === 'log' ? 'selected' : '' }}>Log
                                        Driver (Testing)</option>
                                </select>
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">SMTP Host</label>
                                <input type="text" name="mail_host" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_host'] ?? 'smtp.gmail.com' }}">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">SMTP Port</label>
                                <input type="text" name="mail_port" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_port'] ?? '587' }}">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Encryption</label>
                                <select name="mail_encryption" class="dc-search-input" style="width: 100%;">
                                    <option value="tls" {{ ($settings['mail_encryption'] ?? 'tls') === 'tls' ? 'selected' : '' }}>TLS</option>
                                    <option value="ssl" {{ ($settings['mail_encryption'] ?? '') === 'ssl' ? 'selected' : '' }}>SSL</option>
                                    <option value="none" {{ ($settings['mail_encryption'] ?? '') === 'none' ? 'selected' : '' }}>None</option>
                                </select>
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">SMTP Username</label>
                                <input type="text" name="mail_username" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_username'] ?? 'info@digicoders.in' }}">
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">SMTP Password</label>
                                <input type="password" name="mail_password" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_password'] ?? '********' }}">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Sender Email
                                    (From)</label>
                                <input type="email" name="mail_from_address" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_from_address'] ?? 'noreply@digicoders.in' }}">
                            </div>
                            <div>
                                <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Sender Name</label>
                                <input type="text" name="mail_from_name" class="dc-search-input" style="width: 100%;"
                                    value="{{ $settings['mail_from_name'] ?? 'DigiCoders Academy' }}">
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: Security & System Config -->
                    <div class="setting-tab-panel" id="tab-security" style="display: none;">
                        <h2 class="dc-card-title"
                            style="margin-bottom: 20px; border-bottom: 1px solid var(--dc-border); padding-bottom: 12px;">
                            Security Policy & System Controls</h2>

                        <div style="margin-bottom: 24px;">
                            <label class="dc-menu-label" style="padding: 0; margin-bottom: 6px;">Website Maintenance Mode
                                Status</label>
                            <select name="maintenance_mode" class="dc-search-input" style="width: 100%;">
                                <option value="0" {{ ($settings['maintenance_mode'] ?? '0') == '0' ? 'selected' : '' }}>
                                    Disabled (Website Live & Public Access Open)</option>
                                <option value="1" {{ ($settings['maintenance_mode'] ?? '') == '1' ? 'selected' : '' }}>Enabled
                                    (Show Maintenance Screen to Public Visitors)</option>
                            </select>
                        </div>

                        <!-- Flush Cache Section -->
                        <div
                            style="background: rgba(0, 166, 81, 0.05); border: 1px solid var(--dc-green-border); border-radius: 12px; padding: 18px; margin-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px;">
                            <div>
                                <strong
                                    style="font-size: 14px; color: var(--dc-dark); display: block; margin-bottom: 2px;">Flush
                                    System Cache</strong>
                                <span style="font-size: 12px; color: var(--dc-dark-muted);">Clear compiled views, cached
                                    routes, and application data cache.</span>
                            </div>
                            <button type="button" onclick="document.getElementById('clearCacheForm').submit();"
                                class="dc-btn"
                                style="padding: 8px 16px; font-size: 13px; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); border: 1px solid var(--dc-green);">
                                <i class="fa-solid fa-broom" style="color: var(--dc-green);"></i>
                                <span style="color: var(--dc-green);">Clear Cache</span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </form>

        <!-- Hidden Form for Clear Cache -->
        <form id="clearCacheForm" action="{{ route('admin.settings.clearCache') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>

    <style>
        .tab-nav-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            border-radius: var(--radius-std);
            color: var(--dc-dark-muted);
            font-size: 13px;
            font-weight: 500;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            transition: var(--transition-fast);
        }

        .tab-nav-btn:hover {
            background: rgba(0, 166, 81, 0.08);
            color: var(--dc-dark);
        }

        .tab-nav-btn.active {
            background: linear-gradient(135deg, #00A651 0%, #008742 100%);
            color: #FFFFFF !important;
            font-weight: 600;
            box-shadow: 0 4px 14px rgba(0, 166, 81, 0.3);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabBtns = document.querySelectorAll(".tab-nav-btn");
            const tabPanels = document.querySelectorAll(".setting-tab-panel");

            tabBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    const targetTab = this.getAttribute("data-tab");

                    tabBtns.forEach(b => b.classList.remove("active"));
                    tabPanels.forEach(p => p.style.display = "none");

                    this.classList.add("active");
                    const targetPanel = document.getElementById(targetTab);
                    if (targetPanel) {
                        targetPanel.style.display = "block";
                    }
                });
            });
        });

        function previewImage(input, previewId, placeholderId) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.getElementById(previewId);
                    if (img) {
                        img.src = e.target.result;
                        img.style.display = "block";
                    }
                    if (placeholderId) {
                        const placeholder = document.getElementById(placeholderId);
                        if (placeholder) {
                            placeholder.style.display = "none";
                        }
                    }
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection