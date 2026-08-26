<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Show Admin Profile & Change Password Page.
     */
    public function index()
    {
        $admin = Auth::user() ?? Admin::first() ?? new Admin(['name' => 'Admin User', 'email' => 'admin@digicoders.in']);

        return view('admin.profile.index', compact('admin'));
    }

    /**
     * Update Admin Profile Info (Name, Email & Profile Image).
     */
    public function updateProfile(Request $request)
    {
        $admin = Auth::user() ?? Admin::first();
        if (! $admin) {
            return redirect()->back()->with('error', 'Admin account not found!');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,'.$admin->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        $updateData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        // Handle Profile Image Upload & Delete Old Image
        if ($request->hasFile('image')) {
            if ($admin->image && file_exists(public_path('uploads/admins/'.$admin->image))) {
                @unlink(public_path('uploads/admins/'.$admin->image));
            }

            $file = $request->file('image');
            $filename = 'admin_'.time().'_'.Str::random(6).'.'.$file->getClientOriginalExtension();

            // Create target folder if not exists
            if (! file_exists(public_path('uploads/admins'))) {
                mkdir(public_path('uploads/admins'), 0755, true);
            }

            $file->move(public_path('uploads/admins'), $filename);
            $updateData['image'] = $filename;
        }

        $oldEmail = strtolower(trim($admin->email));
        $newEmail = strtolower(trim($request->input('email')));
        $emailChanged = $oldEmail !== $newEmail;

        $admin->update($updateData);

        // Record Profile Update Activity Log
        ActivityLog::create([
            'admin_id' => $admin->id,
            'admin_email' => $admin->email,
            'admin_name' => $admin->name,
            'event_type' => 'profile_update',
            'description' => $emailChanged
                ? "{$admin->name} updated admin email from '{$oldEmail}' to '{$newEmail}'."
                : "{$admin->name} updated admin profile information.",
            'ip_address' => $request->ip() === '127.0.0.1' ? '103.24.12.8' : $request->ip(),
            'user_agent' => $request->userAgent(),
            'location_address' => null,
        ]);

        if ($emailChanged) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('admin.login')->with('success', 'Email updated successfully! Please login with your new email address.');
        }

        return redirect()->back()->with('success', 'Admin profile updated successfully!');
    }

    /**
     * Change administrator password.
     */
    public function updatePassword(Request $request)
    {
        $admin = Auth::user() ?? Admin::first();
        if (! $admin || ! Hash::check($request->input('current_password'), $admin->password)) {
            return redirect()->back()->with('error', 'The provided current password does not match your account password.');
        }

        $validated = $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
        ], [
            'current_password.required' => 'Please enter your current password.',
            'new_password.required' => 'Please enter a new password.',
            'new_password.min' => 'The new password must be at least 8 characters long.',
            'new_password.confirmed' => 'New password confirmation does not match.',
        ]);

        $admin->update([
            'password' => Hash::make($validated['new_password']),
        ]);

        try {
            ActivityLog::create([
                'admin_id' => $admin->id,
                'admin_email' => $admin->email,
                'admin_name' => $admin->name,
                'event_type' => 'password_change',
                'description' => 'Changed account security password successfully',
                'ip_address' => $request->ip() === '127.0.0.1' ? '103.24.12.8' : $request->ip(),
                'user_agent' => substr((string) $request->userAgent(), 0, 500),
                'location_address' => null,
            ]);
        } catch (\Throwable $e) {
            // Log failure should not break password update
        }

        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
