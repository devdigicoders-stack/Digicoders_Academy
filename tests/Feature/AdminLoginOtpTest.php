<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin login requires OTP verification before password authentication', function () {
    $admin = Admin::create([
        'name' => 'Admin Test',
        'email' => 'admin@example.com',
        'password' => bcrypt('password123'),
    ]);

    // Attempting login directly without OTP should fail
    $response = $this->postJson(route('admin.login.submit'), [
        'email' => 'admin@example.com',
        'password' => 'password123',
        'verify_only' => 1,
    ]);

    $response->assertStatus(422)
        ->assertJson([
            'status' => 'error',
            'title' => 'OTP Verification Required 🛡️',
        ]);
});

test('admin can request OTP, verify OTP, and login with password', function () {
    $admin = Admin::create([
        'name' => 'Admin Test',
        'email' => 'admin@example.com',
        'password' => bcrypt('password123'),
    ]);

    // Step 1: Send OTP
    $sendOtpRes = $this->postJson(route('admin.sendOtp'), [
        'email' => 'admin@example.com',
        'latitude' => '26.8467',
        'longitude' => '80.9462',
    ]);
    $sendOtpRes->assertStatus(200)->assertJson(['status' => 'success']);

    $admin->refresh();
    expect($admin->otp_code)->not->toBeNull();

    // Step 2: Verify OTP
    $verifyOtpRes = $this->postJson(route('admin.verifyOtp'), [
        'email' => 'admin@example.com',
        'otp' => $admin->otp_code,
    ]);
    $verifyOtpRes->assertStatus(200)->assertJson(['status' => 'success']);

    // Step 3: Login Submit
    $loginRes = $this->postJson(route('admin.login.submit'), [
        'email' => 'admin@example.com',
        'password' => 'password123',
        'verify_only' => 1,
    ]);
    $loginRes->assertStatus(200)->assertJson(['status' => 'success']);
});
