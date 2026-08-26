<?php

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('blog view count increments on first visit but prevents duplicate count on reload from same user/ip', function () {
    $blog = Blog::create([
        'title' => 'Mastering Laravel Development',
        'slug' => 'mastering-laravel-development',
        'category' => 'Programming',
        'content' => 'Learn modern Laravel features step by step.',
        'status' => 'published',
        'views_count' => 0,
    ]);

    // 1st Visit: View count should increment to 1
    $response = $this->get(route('blog.show', $blog->slug));
    $response->assertStatus(200);

    $this->assertEquals(1, $blog->fresh()->views_count);

    // 2nd Visit (Instant Reload / Same Session & IP): Should NOT increment views_count
    $response2 = $this->get(route('blog.show', $blog->slug));
    $response2->assertStatus(200);

    $this->assertEquals(1, $blog->fresh()->views_count);
});
