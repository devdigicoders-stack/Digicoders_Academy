<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => fake()->name(),
            'company' => fake()->company(),
            'role' => fake()->jobTitle(),
            'course_name' => fake()->randomElement(['ADWD Full Stack', 'ADCA', 'Advanced Excel & MIS', 'Digital Marketing']),
            'rating' => fake()->randomElement([4.8, 4.9, 5.0]),
            'review' => fake()->paragraph(),
            'avatar' => 'images/gopal-singh-director.png',
            'is_placed' => true,
            'is_featured' => fake()->boolean(),
            'status' => true,
        ];
    }
}
