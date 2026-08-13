<?php

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('unauthenticated user cannot access admin gallery management', function () {
    $response = $this->get(route('admin.gallery.index'));

    $response->assertRedirect(route('admin.login'));
});

test('authenticated admin can view gallery index', function () {
    $admin = User::factory()->create();
    Gallery::factory()->create(['title' => 'Test Placement Photo', 'album' => 'Placement']);

    $response = $this->actingAs($admin)->get(route('admin.gallery.index'));

    $response->assertStatus(200);
    $response->assertSee('Test Placement Photo');
});

test('admin can upload new gallery item with image file and SEO alt text', function () {
    Storage::fake('public');
    $admin = User::factory()->create();

    $file = UploadedFile::fake()->image('campus_photo.jpg', 800, 600);

    $response = $this->actingAs($admin)->post(route('admin.gallery.store'), [
        'title' => 'New Campus Lab Session',
        'alt_text' => 'DigiCoders Computer Lab Session SEO Alt Text',
        'album' => 'Computer Labs',
        'description' => 'Students training in practical lab.',
        'image' => $file,
        'is_featured' => '1',
        'status' => '1',
    ]);

    $response->assertRedirect(route('admin.gallery.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('galleries', [
        'title' => 'New Campus Lab Session',
        'alt_text' => 'DigiCoders Computer Lab Session SEO Alt Text',
        'album' => 'Computer Labs',
        'is_featured' => true,
        'status' => true,
    ]);
});

test('admin can update gallery item title and SEO alt text', function () {
    $admin = User::factory()->create();
    $gallery = Gallery::create([
        'title' => 'Original Hackathon Photo',
        'alt_text' => 'Original SEO Alt Text',
        'album' => 'Events',
        'image_path' => 'images/hero-bg.png',
        'status' => true,
    ]);

    $response = $this->actingAs($admin)->put(route('admin.gallery.update', $gallery->id), [
        'title' => 'Updated Hackathon Photo 2026',
        'alt_text' => 'Updated DigiCoders Hackathon SEO Alt Text',
        'album' => 'Events',
        'description' => 'Updated event description',
        'status' => '1',
    ]);

    $response->assertRedirect(route('admin.gallery.index'));
    $this->assertDatabaseHas('galleries', [
        'id' => $gallery->id,
        'title' => 'Updated Hackathon Photo 2026',
        'alt_text' => 'Updated DigiCoders Hackathon SEO Alt Text',
    ]);
});

test('admin can delete gallery item', function () {
    $admin = User::factory()->create();
    $gallery = Gallery::create([
        'title' => 'Photo To Delete',
        'album' => 'Campus',
        'image_path' => 'uploads/gallery/fake_test_delete_photo.jpg',
    ]);

    $response = $this->actingAs($admin)->delete(route('admin.gallery.destroy', $gallery->id));

    $response->assertRedirect(route('admin.gallery.index'));
    $this->assertDatabaseMissing('galleries', [
        'id' => $gallery->id,
    ]);
});

test('public gallery page renders dynamic photos with SEO tags', function () {
    Gallery::create([
        'title' => 'Public Dynamic Placement Photo',
        'alt_text' => 'SEO Alt Tag For Dynamic Photo',
        'album' => 'Placement',
        'image_path' => 'images/students.png',
        'status' => true,
    ]);

    $response = $this->get(route('gallery'));

    $response->assertStatus(200);
    $response->assertSee('Public Dynamic Placement Photo');
    $response->assertSee('SEO Alt Tag For Dynamic Photo');
});
