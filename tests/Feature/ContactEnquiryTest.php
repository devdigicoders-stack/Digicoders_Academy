<?php

use App\Models\Admin;
use App\Models\ContactEnquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

uses(RefreshDatabase::class);

test('home page talk to experts enquiry saves to database and responds with success', function () {
    // Ensure settings table exists in test DB to avoid maintenance mode error
    if (! Schema::hasTable('settings')) {
        Schema::create('settings', function ($table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    $response = $this->postJson(route('contact.submit'), [
        'name' => 'Rahul Verma',
        'phone' => '9876543210',
        'course' => 'ADWD',
        'message' => 'I want to inquire about ADWD web design batch timings.',
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'success' => true,
    ]);

    $this->assertDatabaseHas('contact_enquiries', [
        'name' => 'Rahul Verma',
        'phone' => '9876543210',
        'course' => 'ADWD',
    ]);
});

test('admin can view and manage home page enquiries in contact enquiries panel', function () {
    $admin = Admin::create([
        'name' => 'Admin Test User',
        'email' => 'admin@digicoders.in',
        'password' => bcrypt('password123'),
    ]);

    ContactEnquiry::create([
        'name' => 'Saurabh Kumar',
        'phone' => '9123456789',
        'course' => 'DCA',
        'message' => 'Need details regarding DCA course fees.',
        'status' => 'new',
    ]);

    $response = $this->actingAs($admin)->get(route('admin.contact-enquiries.index'));
    $response->assertStatus(200);
    $response->assertSee('Saurabh Kumar');
    $response->assertSee('9123456789');
});
