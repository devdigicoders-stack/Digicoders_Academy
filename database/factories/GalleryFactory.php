<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'alt_text' => fake()->sentence(4),
            'album' => fake()->randomElement(['Campus', 'Classrooms', 'Computer Labs', 'Workshops', 'Seminars', 'Events', 'Placement']),
            'description' => fake()->paragraph(),
            'image_path' => 'images/students.png',
            'is_featured' => fake()->boolean(),
            'status' => true,
        ];
    }
}
