<?php

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('blog post can store and render faqs on detail page', function () {
    $blog = Blog::create([
        'title' => 'Test Blog Article with FAQs',
        'slug' => 'test-blog-article-with-faqs',
        'category' => 'Web Development',
        'content' => '<p>This is test content.</p>',
        'status' => 'published',
        'faqs' => [
            ['question' => 'Is this course suitable for beginners?', 'answer' => 'Yes, absolutely.'],
            ['question' => 'What is the duration?', 'answer' => '6 Months.'],
        ],
    ]);

    expect($blog->faqs)->toBeArray()
        ->and(count($blog->faqs))->toBe(2)
        ->and($blog->faqs[0]['question'])->toBe('Is this course suitable for beginners?');

    $response = $this->get(route('blog.show', $blog->slug));

    $response->assertStatus(200);
    $response->assertSee('Frequently Asked Questions (FAQs)');
    $response->assertSee('Is this course suitable for beginners?');
    $response->assertSee('Yes, absolutely.');
});
