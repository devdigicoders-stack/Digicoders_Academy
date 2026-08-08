<?php

use App\Models\Faq;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('unauthenticated user cannot access admin faqs management', function () {
    $response = $this->get(route('admin.faqs.index'));

    $response->assertRedirect(route('admin.login'));
});

test('authenticated admin can view faqs index', function () {
    $admin = User::factory()->create();
    Faq::factory()->create([
        'question' => 'What are batch timings?',
        'answer' => 'Multiple batches between 8 AM to 7 PM.',
        'category' => 'Courses & Syllabus',
        'page_slug' => 'all',
    ]);

    $response = $this->actingAs($admin)->get(route('admin.faqs.index'));

    $response->assertStatus(200);
    $response->assertSee('What are batch timings?');
});

test('admin can create a new faq assigned to a specific page', function () {
    $admin = User::factory()->create();

    $response = $this->actingAs($admin)->post(route('admin.faqs.store'), [
        'question' => 'Is 100% placement guaranteed for ADWD students?',
        'answer' => 'Yes, 100% job placement support is provided.',
        'category' => 'Placements',
        'page_slug' => 'placements',
        'sort_order' => 1,
        'is_featured' => '1',
        'status' => '1',
    ]);

    $response->assertRedirect(route('admin.faqs.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('faqs', [
        'question' => 'Is 100% placement guaranteed for ADWD students?',
        'category' => 'Placements',
        'page_slug' => 'placements',
        'is_featured' => true,
    ]);
});

test('admin can update faq item details and page assignment', function () {
    $admin = User::factory()->create();
    $faq = Faq::create([
        'question' => 'Original Question',
        'answer' => 'Original Answer',
        'category' => 'General',
        'page_slug' => 'all',
    ]);

    $response = $this->actingAs($admin)->put(route('admin.faqs.update', $faq->id), [
        'question' => 'Updated FAQ Question',
        'answer' => 'Updated FAQ Answer',
        'category' => 'Admissions',
        'page_slug' => 'admissions',
        'sort_order' => 5,
        'status' => '1',
    ]);

    $response->assertRedirect(route('admin.faqs.index'));
    $this->assertDatabaseHas('faqs', [
        'id' => $faq->id,
        'question' => 'Updated FAQ Question',
        'category' => 'Admissions',
        'page_slug' => 'admissions',
    ]);
});

test('admin can delete faq entry', function () {
    $admin = User::factory()->create();
    $faq = Faq::create([
        'question' => 'Question To Delete',
        'answer' => 'Answer To Delete',
        'category' => 'General',
    ]);

    $response = $this->actingAs($admin)->delete(route('admin.faqs.destroy', $faq->id));

    $response->assertRedirect(route('admin.faqs.index'));
    $this->assertDatabaseMissing('faqs', [
        'id' => $faq->id,
    ]);
});

test('public faq page renders dynamic questions and schema markup', function () {
    Faq::create([
        'question' => 'Public Dynamic FAQ Question?',
        'answer' => 'Public Dynamic Answer Content',
        'category' => 'General',
        'page_slug' => 'all',
        'status' => true,
    ]);

    $response = $this->get(route('faq'));

    $response->assertStatus(200);
    $response->assertSee('Public Dynamic FAQ Question?');
    $response->assertSee('Public Dynamic Answer Content');
    $response->assertSee('schema.org');
});
