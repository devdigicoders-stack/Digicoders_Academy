<?php

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('authenticated admin can view website settings page', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->get(route('admin.settings.index'));

    $response->assertStatus(200);
    $response->assertSee('Website & System Settings', false);
});

test('authenticated admin can update website settings', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->post(route('admin.settings.update'), [
        'site_name' => 'DigiCoders Tech Academy',
        'site_email' => 'support@digicoders.in',
        'site_phone' => '+91 91409 67607',
    ]);

    $response->assertRedirect();
    expect(Setting::getByKey('site_name'))->toBe('DigiCoders Tech Academy');
    expect(Setting::getByKey('site_email'))->toBe('support@digicoders.in');
});

test('authenticated admin can trigger clear cache', function () {
    $admin = Admin::create([
        'name' => 'Super Admin',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password'),
    ]);

    $response = $this->actingAs($admin)->post(route('admin.settings.clearCache'));

    $response->assertRedirect();
    $response->assertSessionHas('success');
});
