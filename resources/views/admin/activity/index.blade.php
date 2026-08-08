@extends('layouts.admin')

@section('title', 'System Activity Logs')

@section('content')
<div class="dc-container">

    <!-- Page Header Banner -->
    <div class="dc-welcome-banner" style="margin-bottom: 24px;">
        <div class="dc-welcome-title">
            <h1 style="display: flex; align-items: center; gap: 10px; font-weight: 600;">
                <i class="fa-solid fa-clock-rotate-left" style="color: var(--dc-green);"></i>
                <span>System Activity & Audit Logs</span>
                <i class="fa-solid fa-code" style="color: var(--dc-green); font-size: 16px; margin-left: 4px;"></i>
            </h1>
            <p>Comprehensive security audit trail tracking login sessions, IP addresses, geolocation, duration, password changes, profile updates, and system events.</p>
        </div>
        <a href="{{ route('admin.activity.export') }}" class="dc-btn dc-btn-outline" style="background: var(--dc-white);">
            <i class="fa-solid fa-download"></i>
            <span>Export Audit Log (CSV)</span>
        </a>
    </div>

    <!-- 4 Audit Statistics Metric Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 24px;">
        
        <!-- Card 1: Password Changes -->
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 46px; height: 46px; border-radius: 12px; background: rgba(245, 130, 32, 0.1); color: var(--dc-orange); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-key"></i>
            </div>
            <div>
                <span style="font-size: 11.5px; font-weight: 500; color: var(--dc-light-gray); text-transform: uppercase; letter-spacing: 0.04em; display: block; margin-bottom: 2px;">Password Changes</span>
                <strong style="font-size: 18px; font-weight: 600; color: var(--dc-dark); line-height: 1.2;">{{ $passwordChangeCount }} Times</strong>
                <span style="font-size: 11px; color: var(--dc-dark-muted); display: block; margin-top: 4px;">
                    Last: {{ $lastPasswordChange ? \Carbon\Carbon::parse($lastPasswordChange)->diffForHumans() : 'Never' }}
                </span>
            </div>
        </div>

        <!-- Card 2: Profile Updates -->
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 46px; height: 46px; border-radius: 12px; background: rgba(0, 166, 81, 0.1); color: var(--dc-green); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-user-pen"></i>
            </div>
            <div>
                <span style="font-size: 11.5px; font-weight: 500; color: var(--dc-light-gray); text-transform: uppercase; letter-spacing: 0.04em; display: block; margin-bottom: 2px;">Profile Updates</span>
                <strong style="font-size: 18px; font-weight: 600; color: var(--dc-dark); line-height: 1.2;">{{ $profileUpdateCount }} Times</strong>
                <span style="font-size: 11px; color: var(--dc-dark-muted); display: block; margin-top: 4px;">
                    Last: {{ $lastProfileUpdate ? \Carbon\Carbon::parse($lastProfileUpdate)->diffForHumans() : 'Never' }}
                </span>
            </div>
        </div>

        <!-- Card 3: Total Admin Logins -->
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 46px; height: 46px; border-radius: 12px; background: rgba(24, 119, 242, 0.1); color: var(--dc-blue); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-right-to-bracket"></i>
            </div>
            <div>
                <span style="font-size: 11.5px; font-weight: 500; color: var(--dc-light-gray); text-transform: uppercase; letter-spacing: 0.04em; display: block; margin-bottom: 2px;">Total Admin Logins</span>
                <strong style="font-size: 18px; font-weight: 600; color: var(--dc-dark); line-height: 1.2;">{{ $totalLogins }} Sessions</strong>
                <span style="font-size: 11px; color: var(--dc-dark-muted); display: block; margin-top: 4px;">Active Session Tracking</span>
            </div>
        </div>

        <!-- Card 4: Security Locations & IPs -->
        <div class="dc-card" style="padding: 18px; display: flex; align-items: center; gap: 14px;">
            <div style="width: 46px; height: 46px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
                <span style="font-size: 11.5px; font-weight: 500; color: var(--dc-light-gray); text-transform: uppercase; letter-spacing: 0.04em; display: block; margin-bottom: 2px;">Security Locations</span>
                <strong style="font-size: 18px; font-weight: 600; color: var(--dc-dark); line-height: 1.2;">{{ $uniqueLocationsCount }} Unique IPs</strong>
                <span style="font-size: 11px; color: var(--dc-dark-muted); display: block; margin-top: 4px;">Verified Geolocation</span>
            </div>
        </div>

    </div>

    <!-- Filter Tabs & Search Bar -->
    <div class="dc-card" style="padding: 16px 20px; margin-bottom: 24px;">
        <form action="{{ route('admin.activity.index') }}" method="GET" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <!-- Filter Tabs -->
            <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
                <a href="{{ route('admin.activity.index', ['filter' => 'all', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter', 'all') === 'all' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 10px; text-decoration: none; box-sizing: border-box;">
                    All Logs
                </a>
                <a href="{{ route('admin.activity.index', ['filter' => 'logins', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'logins' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 10px; text-decoration: none; box-sizing: border-box;">
                    Logins
                </a>
                <a href="{{ route('admin.activity.index', ['filter' => 'logout', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'logout' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 10px; text-decoration: none; box-sizing: border-box;">
                    Logouts
                </a>
                <a href="{{ route('admin.activity.index', ['filter' => 'password_changes', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'password_changes' ? 'dc-badge-green' : 'dc-badge-orange' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 10px; text-decoration: none; box-sizing: border-box;">
                    Password Changes
                </a>
                <a href="{{ route('admin.activity.index', ['filter' => 'profile_updates', 'search' => request('search')]) }}" class="dc-badge-pill {{ request('filter') === 'profile_updates' ? 'dc-badge-green' : 'dc-badge-blue' }}" style="padding: 9px 18px; font-size: 13px; height: 38px; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; border-radius: 10px; text-decoration: none; box-sizing: border-box;">
                    Profile Updates
                </a>
            </div>

            <!-- Search Field -->
            <div style="display: flex; gap: 8px; align-items: center; width: 100%; max-width: 340px;">
                <input type="hidden" name="filter" value="{{ request('filter', 'all') }}">
                <div style="position: relative; width: 100%;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--dc-light-gray); font-size: 13px;"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search IP, browser, description..." style="width: 100%; height: 38px; padding: 0 14px 0 36px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 10px; font-size: 13px; outline: none;">
                </div>
                <button type="submit" class="dc-btn dc-btn-green" style="padding: 0 18px; height: 38px; font-size: 13px; font-weight: 600; border-radius: 10px;">Search</button>
            </div>
        </form>
    </div>

    <!-- Audit Trail Cards List -->
    <div class="dc-card">
        <div class="dc-card-title-wrap" style="display: flex; justify-content: space-between; align-items: center;">
            <h2 class="dc-card-title">Real-Time Audit Trail</h2>
            <span style="font-size: 12px; color: var(--dc-light-gray);">Showing {{ $logs->firstItem() ?? 0 }}-{{ $logs->lastItem() ?? 0 }} of {{ $logs->total() }} records</span>
        </div>

        <div style="display: flex; flex-direction: column; gap: 12px; padding: 12px 0;">
            @forelse($logs as $log)
                @php
                    $dotColor = match($log->event_type) {
                        'login' => 'var(--dc-green)',
                        'logout' => 'var(--dc-light-gray)',
                        'password_change' => 'var(--dc-orange)',
                        'profile_update' => 'var(--dc-blue)',
                        default => 'var(--dc-green)'
                    };
                    $badgeClass = match($log->event_type) {
                        'login' => 'dc-badge-green',
                        'logout' => 'dc-badge-blue',
                        'password_change' => 'dc-badge-orange',
                        'profile_update' => 'dc-badge-blue',
                        default => 'dc-badge-green'
                    };
                @endphp

                <div style="padding: 14px 16px; background: var(--dc-bg); border: 1px solid var(--dc-border); border-radius: 12px; display: flex; flex-direction: column; gap: 8px; transition: var(--transition-fast);">
                    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="width: 10px; height: 10px; border-radius: 50%; background: {{ $dotColor }}; flex-shrink: 0;"></span>
                            <strong style="font-size: 13.5px; color: var(--dc-dark);">{{ $log->admin_name ?? 'Admin User' }}</strong>
                            <span class="dc-badge-pill {{ $badgeClass }}" style="font-size: 11px;">{{ strtoupper(str_replace('_', ' ', $log->event_type)) }}</span>
                        </div>
                        <span style="font-size: 11.5px; color: var(--dc-light-gray); font-weight: 500;">
                            <i class="fa-regular fa-clock"></i> {{ $log->created_at ? $log->created_at->diffForHumans() : 'Recently' }} ({{ $log->created_at ? $log->created_at->format('d M Y, h:i A') : '' }})
                        </span>
                    </div>

                    <p style="margin: 0; font-size: 13px; color: var(--dc-dark-muted); line-height: 1.4;">
                        {{ $log->description }}
                    </p>

                    <!-- Meta Tags: IP, Browser, OS, Location, Session Duration -->
                    <div style="display: flex; flex-wrap: wrap; gap: 12px; font-size: 11.5px; color: var(--dc-light-gray); margin-top: 4px; padding-top: 6px; border-top: 1px dashed var(--dc-border);">
                        @if($log->ip_address)
                            <span><i class="fa-solid fa-network-wired" style="color: var(--dc-green);"></i> IP: {{ $log->ip_address }}</span>
                        @endif
                        @if($log->browser || $log->device_os)
                            <span><i class="fa-solid fa-laptop" style="color: var(--dc-blue);"></i> {{ $log->browser ?? 'Browser' }} on {{ $log->device_os ?? 'OS' }}</span>
                        @endif
                        @if($log->location_address || ($log->latitude && $log->longitude))
                            @php
                                $mapUrl = $log->google_maps_url;
                            @endphp
                            @if($mapUrl)
                                <a href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" title="Click to view location on Google Maps 🗺️" style="display: inline-flex; align-items: center; gap: 5px; color: var(--dc-green); background: rgba(0, 166, 81, 0.08); border: 1px solid rgba(0, 166, 81, 0.2); padding: 3px 9px; border-radius: 6px; font-size: 11.5px; font-weight: 600; text-decoration: none; transition: var(--transition-fast);" onmouseover="this.style.background='rgba(0, 166, 81, 0.16)'; this.style.borderColor='var(--dc-green)';" onmouseout="this.style.background='rgba(0, 166, 81, 0.08)'; this.style.borderColor='rgba(0, 166, 81, 0.2)';">
                                    <i class="fa-solid fa-location-dot" style="color: #EA4335;"></i>
                                    <span>{{ $log->location_address ?: "GPS Coordinates ({$log->latitude}, {$log->longitude})" }}</span>
                                    <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 9.5px; opacity: 0.8;"></i>
                                </a>
                            @else
                                <span><i class="fa-solid fa-location-dot" style="color: var(--dc-orange);"></i> {{ $log->location_address }}</span>
                            @endif
                        @endif
                        @if($log->session_duration)
                            <span style="font-weight: 600; color: var(--dc-green);"><i class="fa-solid fa-stopwatch"></i> Duration: {{ $log->session_duration }}</span>
                        @endif
                    </div>
                </div>
            @empty
                <div style="text-align: center; padding: 40px 20px; color: var(--dc-light-gray);">
                    <i class="fa-solid fa-clock-rotate-left" style="font-size: 32px; color: var(--dc-border); margin-bottom: 10px;"></i>
                    <p style="margin: 0; font-size: 13.5px; font-weight: 600; color: var(--dc-dark);">No Activity Logs Found</p>
                    <span style="font-size: 12px;">Audit logs will automatically appear here as system actions occur.</span>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($logs->hasPages())
            <div style="margin-top: 18px; padding-top: 16px; border-top: 1px solid var(--dc-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
                <span style="font-size: 12.5px; color: var(--dc-light-gray); font-weight: 500;">
                    Showing <strong>{{ $logs->firstItem() ?? 0 }}</strong> to <strong>{{ $logs->lastItem() ?? 0 }}</strong> of <strong>{{ $logs->total() }}</strong> audit log entries
                </span>
                <div class="dc-pagination-wrapper">
                    {{ $logs->links() }}
                </div>
            </div>
        @endif
    </div>

</div>
@endsection
