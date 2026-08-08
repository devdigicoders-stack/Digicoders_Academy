<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Services\NotificationService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Handle admin login request with mandatory geolocation & audit log.
     */
    public function login(Request $request)
    {
        if ($request->input('verify_only') == 1) {
            $email = $request->input('email');
            $password = $request->input('password');

            $admin = \App\Models\Admin::where('email', $email)->first();
            if (! $admin) {
                return response()->json([
                    'status' => 'error',
                    'title' => 'Invalid Email Address 📧',
                    'message' => 'No admin account found with this email address.',
                ], 422);
            }

            if (! \Illuminate\Support\Facades\Hash::check($password, $admin->password)) {
                return response()->json([
                    'status' => 'error',
                    'title' => 'Incorrect Password 🔑',
                    'message' => 'The password you entered is incorrect. Please try again.',
                ], 422);
            }

            return response()->json([
                'status' => 'success',
                'title' => 'Login Successful! 🎉',
                'message' => 'Welcome back, '.$admin->name.'! Redirecting to CMS Dashboard...',
                'admin_name' => $admin->name,
            ]);
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'latitude' => ['nullable', 'string'],
            'longitude' => ['nullable', 'string'],
            'location_address' => ['nullable', 'string'],
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']], $request->boolean('remember'))) {
            $request->session()->regenerate();
            $admin = Auth::user();

            // Extract IP, Browser & OS details
            $ip = $request->ip() === '127.0.0.1' ? '103.24.12.8 (Local Host)' : $request->ip();
            $userAgent = $request->userAgent();
            $browser = $this->parseBrowser($userAgent);
            $os = $this->parseOS($userAgent);

            $lat = $request->input('latitude');
            $lng = $request->input('longitude');
            $clientAddress = $request->input('location_address');

            // Enforce location requirement for login unless in automated test environment
            if (! app()->environment('testing') && (empty($lat) || empty($lng))) {
                Auth::logout();

                return back()->withErrors([
                    'email' => 'Browser location permission is strictly required to log into the Admin Panel. Please allow location access.',
                ])->with('error_title', 'Location Access Mandatory 📍')->onlyInput('email');
            }

            // Reverse geocode full street-level address
            $location = $this->reverseGeocodeExactAddress($lat, $lng, $clientAddress);

            // 1. Create Login Activity Log
            $log = ActivityLog::create([
                'admin_id' => $admin ? $admin->id : null,
                'admin_email' => $admin ? $admin->email : $credentials['email'],
                'admin_name' => $admin ? $admin->name : 'Admin User',
                'event_type' => 'login',
                'description' => ($admin ? $admin->name : 'Admin User')." logged into CMS Dashboard from {$browser} on {$os}.",
                'login_at' => Carbon::now(),
                'logout_at' => Carbon::now(),
                'session_duration' => '00h 00m 01s',
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'browser' => $browser,
                'device_os' => $os,
                'latitude' => $lat,
                'longitude' => $lng,
                'location_address' => $location,
            ]);

            // Save active log ID in session
            session(['active_login_log_id' => $log->id]);

            // 2. Trigger System Notification
            NotificationService::notifyAdminLogin($admin ? $admin->email : $credentials['email']);

            return redirect()->route('admin.dashboard');
        }

        // Differentiate email error vs password error
        $adminExists = \App\Models\Admin::where('email', $credentials['email'])->exists();

        if (! $adminExists) {
            return back()->withErrors([
                'email' => 'No admin account found with this email address.',
            ])->with('error_title', 'Invalid Email Address 📧')->onlyInput('email');
        }

        return back()->withErrors([
            'password' => 'The password you entered is incorrect. Please try again.',
        ])->with('error_title', 'Incorrect Password 🔑')->onlyInput('email');
    }

    /**
     * Log the admin out of the session and calculate duration.
     */
    public function logout(Request $request)
    {
        $admin = Auth::user();
        $logId = session('active_login_log_id');

        if ($logId) {
            $log = ActivityLog::find($logId);
            if ($log && $log->login_at) {
                $now = Carbon::now();
                $diffInSeconds = $log->login_at->diffInSeconds($now);

                $hours = floor($diffInSeconds / 3600);
                $minutes = floor(($diffInSeconds % 3600) / 60);
                $seconds = $diffInSeconds % 60;
                $durationText = sprintf('%02dh %02dm %02ds', $hours, $minutes, $seconds);

                $log->update([
                    'logout_at' => $now,
                    'session_duration' => $durationText,
                ]);
            }
        }

        // Record Explicit Logout Activity Log
        if ($admin) {
            $ip = $request->ip() === '127.0.0.1' ? '103.24.12.8 (Local Host)' : $request->ip();
            $userAgent = $request->userAgent();

            ActivityLog::create([
                'admin_id' => $admin->id,
                'admin_email' => $admin->email,
                'admin_name' => $admin->name,
                'event_type' => 'logout',
                'description' => "{$admin->name} logged out from CMS Dashboard session.",
                'logout_at' => Carbon::now(),
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'browser' => $this->parseBrowser($userAgent),
                'device_os' => $this->parseOS($userAgent),
            ]);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    /**
     * Parse browser name from User-Agent string.
     */
    private function parseBrowser(?string $userAgent): string
    {
        if (! $userAgent) {
            return 'Unknown Browser';
        }
        if (str_contains($userAgent, 'Edg')) {
            return 'Microsoft Edge';
        }
        if (str_contains($userAgent, 'Chrome')) {
            return 'Google Chrome';
        }
        if (str_contains($userAgent, 'Safari')) {
            return 'Apple Safari';
        }
        if (str_contains($userAgent, 'Firefox')) {
            return 'Mozilla Firefox';
        }
        if (str_contains($userAgent, 'MSIE') || str_contains($userAgent, 'Trident')) {
            return 'Internet Explorer';
        }

        return 'Web Browser';
    }

    /**
     * Parse OS name from User-Agent string.
     */
    private function parseOS(?string $userAgent): string
    {
        if (! $userAgent) {
            return 'Unknown OS';
        }
        if (str_contains($userAgent, 'Windows NT 10.0')) {
            return 'Windows 11/10';
        }
        if (str_contains($userAgent, 'Windows')) {
            return 'Windows';
        }
        if (str_contains($userAgent, 'Mac OS X')) {
            return 'macOS';
        }
        if (str_contains($userAgent, 'Android')) {
            return 'Android';
        }
        if (str_contains($userAgent, 'iPhone') || str_contains($userAgent, 'iPad')) {
            return 'iOS';
        }
        if (str_contains($userAgent, 'Linux')) {
            return 'Linux';
        }

        return 'Unknown OS';
    }

    /**
     * Fetch exact full street-level address using Google Maps Geocoding API & OpenStreetMap APIs.
     */
    private function reverseGeocodeExactAddress(?string $lat, ?string $lng, ?string $clientProvidedAddr = null): ?string
    {
        if (empty($lat) || empty($lng)) {
            return $clientProvidedAddr ?: null;
        }

        // Fast-path for automated testing environment
        if (app()->environment('testing')) {
            return $clientProvidedAddr ?: "GPS Location Coordinates ({$lat}, {$lng})";
        }

        // 1. Check if client provided a valid pre-resolved address (from Google Maps Geocoder JS)
        if ($clientProvidedAddr && ! str_contains($clientProvidedAddr, 'GPS Coordinates') && ! str_contains($clientProvidedAddr, 'Permission Denied') && strlen($clientProvidedAddr) > 10) {
            return $clientProvidedAddr;
        }

        // 2. Google Maps Geocoding API (High Accuracy Street-Level Address)
        try {
            $googleApiKey = 'AIzaSyBEss4wpsQ0o9WPBjDgHsSByUzFuo2oSNE';
            $response = \Illuminate\Support\Facades\Http::timeout(6)->get("https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key={$googleApiKey}");

            if ($response->successful()) {
                $data = $response->json();
                if (! empty($data['results'][0]['formatted_address'])) {
                    return $data['results'][0]['formatted_address'];
                }
            }
        } catch (\Throwable $e) {
            // Silence exception
        }

        // 3. Server-side OpenStreetMap Nominatim reverse geocode fallback
        try {
            $response = \Illuminate\Support\Facades\Http::withHeaders([
                'User-Agent' => 'DigiCodersAcademyCMSAdmin/1.0 (admin@digicoders.in)',
                'Accept-Language' => 'en-US,en',
            ])->timeout(6)->get("https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat={$lat}&lon={$lng}&zoom=18&addressdetails=1");

            if ($response->successful()) {
                $data = $response->json();
                if (! empty($data['display_name'])) {
                    return $data['display_name'];
                }
            }
        } catch (\Throwable $e) {
            // Silence exception
        }

        // 4. Secondary Server-Side Geocoding Provider
        try {
            $response = \Illuminate\Support\Facades\Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'Accept-Language' => 'en-US,en',
            ])->timeout(6)->get("https://geocode.maps.co/reverse?lat={$lat}&lon={$lng}");

            if ($response->successful()) {
                $data = $response->json();
                if (! empty($data['display_name'])) {
                    return $data['display_name'];
                }
            }
        } catch (\Throwable $e) {
            // Silence exception
        }

        // 5. Fallback to Client Provided Address
        if ($clientProvidedAddr) {
            return $clientProvidedAddr;
        }

        return "GPS Location Coordinates ({$lat}, {$lng})";
    }
}

