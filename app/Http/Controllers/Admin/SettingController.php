<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Setting;
use App\Services\NotificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SettingController extends Controller
{
    /**
     * Display Website & System Settings Page.
     */
    public function index(): View
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update settings key-value pairs & logo files into database.
     */
    public function update(Request $request): RedirectResponse
    {
        $input = $request->except(['_token', 'site_logo', 'site_favicon', 'site_favicon_ico', 'site_footer_logo']);

        // 1. Save text inputs
        foreach ($input as $key => $value) {
            Setting::setKey($key, is_array($value) ? json_encode($value) : $value);
        }

        // 2. Handle Header Logo Upload
        if ($request->hasFile('site_logo')) {
            $oldFile = Setting::getByKey('site_logo');
            if ($oldFile && file_exists(public_path($oldFile))) {
                @unlink(public_path($oldFile));
            }
            foreach (glob(public_path('uploads/settings/logo-digicoders-academy.*')) as $existing) {
                if (file_exists($existing)) {
                    @unlink($existing);
                }
            }

            $file = $request->file('site_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'logo-digicoders-academy.' . $extension;
            $destinationPath = public_path('uploads/settings');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            Setting::setKey('site_logo', 'uploads/settings/' . $filename);
        }

        // 3. Handle Footer Logo Upload
        if ($request->hasFile('site_footer_logo')) {
            $oldFile = Setting::getByKey('site_footer_logo');
            if ($oldFile && file_exists(public_path($oldFile))) {
                @unlink(public_path($oldFile));
            }
            foreach (glob(public_path('uploads/settings/footer-logo-digicoders-academy.*')) as $existing) {
                if (file_exists($existing)) {
                    @unlink($existing);
                }
            }

            $file = $request->file('site_footer_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'footer-logo-digicoders-academy.' . $extension;
            $destinationPath = public_path('uploads/settings');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            Setting::setKey('site_footer_logo', 'uploads/settings/' . $filename);
        }

        // 4. Handle Favicon PNG Upload
        if ($request->hasFile('site_favicon')) {
            $oldFile = Setting::getByKey('site_favicon');
            if ($oldFile && file_exists(public_path($oldFile))) {
                @unlink(public_path($oldFile));
            }
            foreach (glob(public_path('uploads/settings/favicon-digicoders-academy.*')) as $existing) {
                if (file_exists($existing)) {
                    @unlink($existing);
                }
            }

            $file = $request->file('site_favicon');
            $extension = $file->getClientOriginalExtension();
            $filename = 'favicon-digicoders-academy.' . $extension;
            $destinationPath = public_path('uploads/settings');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            Setting::setKey('site_favicon', 'uploads/settings/' . $filename);
        }

        // 5. Handle Favicon ICO Upload
        if ($request->hasFile('site_favicon_ico')) {
            $oldFile = Setting::getByKey('site_favicon_ico');
            if ($oldFile && file_exists(public_path($oldFile))) {
                @unlink(public_path($oldFile));
            }
            if (file_exists(public_path('uploads/settings/favicon.ico'))) {
                @unlink(public_path('uploads/settings/favicon.ico'));
            }

            $file = $request->file('site_favicon_ico');
            $filename = 'favicon.ico';
            $destinationPath = public_path('uploads/settings');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $file->move($destinationPath, $filename);
            Setting::setKey('site_favicon_ico', 'uploads/settings/' . $filename);

            @copy($destinationPath . '/' . $filename, public_path('favicon.ico'));
        }

        // 6. Activity Log & Notification
        $admin = Auth::user();
        if ($admin) {
            ActivityLog::create([
                'admin_id' => $admin->id,
                'admin_email' => $admin->email,
                'admin_name' => $admin->name,
                'event_type' => 'general',
                'description' => "{$admin->name} updated website & system settings configuration.",
                'ip_address' => $request->ip() === '127.0.0.1' ? '103.24.12.8' : $request->ip(),
                'user_agent' => $request->userAgent(),
                'location_address' => null,
            ]);
        }

        NotificationService::notifySettings('Website & System Settings');

        // Clear site_settings cache so views render updated branding instantly
        \Illuminate\Support\Facades\Cache::forget('site_settings');

        return redirect()->back()->with('success', 'Website & System Settings updated successfully!');
    }

    /**
     * Flush all system Application Caches (Config, Routes, Views, Cache, Optimize).
     */
    public function clearCache(): RedirectResponse
    {
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('optimize:clear');

        return redirect()->back()->with('success', 'System Cache Flushed Successfully! Config, Routes, Views, and Application Data Cache cleared.');
    }
}
