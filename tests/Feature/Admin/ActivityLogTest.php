<?php

use App\Models\ActivityLog;
use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin can authenticate against admins table and log login activity', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route('admin.login.submit'), [
        'email' => 'admin@digicoders.in',
        'password' => 'password',
        'latitude' => '26.8467',
        'longitude' => '80.9462',
        'location_address' => 'Lucknow, Uttar Pradesh, India',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
    $this->assertAuthenticatedAs($admin);

    $this->assertDatabaseHas('activity_logs', [
        'admin_id' => $admin->id,
        'event_type' => 'login',
        'latitude' => '26.8467',
    ]);
});

test('admin logout records session duration and logout event', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $log = ActivityLog::create([
        'admin_id' => $admin->id,
        'admin_email' => $admin->email,
        'admin_name' => $admin->name,
        'event_type' => 'login',
        'description' => 'Test login',
        'login_at' => now()->subMinutes(15),
    ]);

    session(['active_login_log_id' => $log->id]);

    $response = $this->actingAs($admin)->post(route('admin.logout'));

    $response->assertRedirect(route('admin.login'));
    $this->assertGuest();

    expect($log->fresh()->session_duration)->not()->toBeNull();

    $this->assertDatabaseHas('activity_logs', [
        'admin_id' => $admin->id,
        'event_type' => 'logout',
    ]);
});

test('authenticated admin can view activity logs index page with metrics', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    ActivityLog::create([
        'admin_id' => $admin->id,
        'admin_email' => $admin->email,
        'admin_name' => $admin->name,
        'event_type' => 'password_change',
        'description' => 'Super Admin changed password.',
    ]);

    $response = $this->actingAs($admin)->get(route('admin.activity.index'));

    $response->assertStatus(200);
    $response->assertSee('System Activity', false);
    $response->assertSee('Password Changes');
});

test('admin profile update creates profile_update activity log', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Updated Admin',
        'email' => 'admin@digicoders.in',
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('activity_logs', [
        'admin_id' => $admin->id,
        'event_type' => 'profile_update',
    ]);
});

test('admin password change creates password_change activity log', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->post(route('admin.profile.password'), [
        'current_password' => 'password',
        'new_password' => 'newpassword123',
        'new_password_confirmation' => 'newpassword123',
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('activity_logs', [
        'admin_id' => $admin->id,
        'event_type' => 'password_change',
    ]);
});

test('admin can upload profile image and old image is deleted on update', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $file1 = \Illuminate\Http\UploadedFile::fake()->image('avatar1.jpg');
    $response1 = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Updated Admin',
        'email' => 'admin@digicoders.in',
        'image' => $file1,
    ]);

    $response1->assertRedirect();
    $admin->refresh();
    expect($admin->image)->not()->toBeNull();
    $firstImage = $admin->image;
    expect(file_exists(public_path('uploads/admins/'.$firstImage)))->toBeTrue();

    $file2 = \Illuminate\Http\UploadedFile::fake()->image('avatar2.png');
    $response2 = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Updated Admin 2',
        'email' => 'admin@digicoders.in',
        'image' => $file2,
    ]);

    $response2->assertRedirect();
    $admin->refresh();
    expect($admin->image)->not()->toBe($firstImage);
    expect(file_exists(public_path('uploads/admins/'.$firstImage)))->toBeFalse();
    expect(file_exists(public_path('uploads/admins/'.$admin->image)))->toBeTrue();

    if (file_exists(public_path('uploads/admins/'.$admin->image))) {
        @unlink(public_path('uploads/admins/'.$admin->image));
    }
});

test('admin email update logs out session and redirects to login page', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->post(route('admin.profile.update'), [
        'name' => 'Super Admin',
        'email' => 'newadmin@digicoders.in',
    ]);

    $response->assertRedirect(route('admin.login'));
    $this->assertGuest();
    $admin->refresh();
    expect($admin->email)->toBe('newadmin@digicoders.in');
});
