<?php

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('unauthenticated user cannot access admin testimonials management', function () {
    $response = $this->get(route('admin.testimonials.index'));

    $response->assertRedirect(route('admin.login'));
});

test('authenticated admin can view testimonials index', function () {
    $admin = User::factory()->create();
    Testimonial::factory()->create([
        'student_name' => 'Vikram Test Student',
        'company' => 'TCS',
        'review' => 'Great experience learning full stack development.',
    ]);

    $response = $this->actingAs($admin)->get(route('admin.testimonials.index'));

    $response->assertStatus(200);
    $response->assertSee('Vikram Test Student');
    $response->assertSee('TCS');
});

test('admin can create new testimonial with avatar upload', function () {
    Storage::fake('public');
    $admin = User::factory()->create();

    $avatar = UploadedFile::fake()->image('student_avatar.jpg', 300, 300);

    $response = $this->actingAs($admin)->post(route('admin.testimonials.store'), [
        'student_name' => 'Amit Kumar',
        'company' => 'Infosys',
        'role' => 'Software Engineer',
        'course_name' => 'ADWD Full Stack',
        'rating' => '5.0',
        'review' => 'DigiCoders Academy is the best IT training institute in Lucknow!',
        'avatar' => $avatar,
        'is_placed' => '1',
        'is_featured' => '1',
        'status' => '1',
    ]);

    $response->assertRedirect(route('admin.testimonials.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('testimonials', [
        'student_name' => 'Amit Kumar',
        'company' => 'Infosys',
        'role' => 'Software Engineer',
        'course_name' => 'ADWD Full Stack',
        'rating' => 5.0,
        'is_placed' => true,
        'is_featured' => true,
    ]);
});

test('admin can update testimonial and unlinks old avatar file on new upload', function () {
    Storage::fake('public');
    $admin = User::factory()->create();

    // Create temporary file on disk to verify physical unlinking
    $uploadDir = public_path('uploads/testimonials');
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $oldFileName = 'test_old_avatar_' . time() . '.jpg';
    $oldFilePath = $uploadDir . '/' . $oldFileName;
    file_put_contents($oldFilePath, 'fake image content');

    $testimonial = Testimonial::create([
        'student_name' => 'Suman Roy',
        'company' => 'Wipro',
        'role' => 'MIS Analyst',
        'rating' => 4.8,
        'review' => 'Initial review content',
        'avatar' => 'uploads/testimonials/' . $oldFileName,
        'is_placed' => true,
    ]);

    $newAvatar = UploadedFile::fake()->image('new_avatar.jpg', 300, 300);

    $response = $this->actingAs($admin)->put(route('admin.testimonials.update', $testimonial->id), [
        'student_name' => 'Suman Roy Updated',
        'company' => 'Wipro Technologies',
        'role' => 'Senior MIS Analyst',
        'rating' => '5.0',
        'review' => 'Updated review content with full details',
        'avatar' => $newAvatar,
        'is_placed' => '1',
    ]);

    $response->assertRedirect(route('admin.testimonials.index'));

    // Assert database updated
    $this->assertDatabaseHas('testimonials', [
        'id' => $testimonial->id,
        'student_name' => 'Suman Roy Updated',
        'role' => 'Senior MIS Analyst',
    ]);

    // Assert old physical file was unlinked/deleted from disk
    $this->assertFileDoesNotExist($oldFilePath);
});

test('admin can delete testimonial and unlinks physical avatar file from disk', function () {
    $admin = User::factory()->create();

    $uploadDir = public_path('uploads/testimonials');
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $fileName = 'test_delete_avatar_' . time() . '.jpg';
    $filePath = $uploadDir . '/' . $fileName;
    file_put_contents($filePath, 'fake image content');

    $testimonial = Testimonial::create([
        'student_name' => 'Student To Delete',
        'company' => 'Tech Company',
        'review' => 'Review to delete',
        'avatar' => 'uploads/testimonials/' . $fileName,
    ]);

    $response = $this->actingAs($admin)->delete(route('admin.testimonials.destroy', $testimonial->id));

    $response->assertRedirect(route('admin.testimonials.index'));
    $this->assertDatabaseMissing('testimonials', [
        'id' => $testimonial->id,
    ]);

    // Assert physical file was unlinked/deleted from disk
    $this->assertFileDoesNotExist($filePath);
});
