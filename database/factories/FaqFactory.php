<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    protected $model = Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => fake()->sentence(6) . '?',
            'answer' => fake()->paragraph(),
            'category' => fake()->randomElement(['Admissions', 'Courses & Syllabus', 'Fees & Installments', 'Placements', 'Certificates', 'General']),
            'page_slug' => fake()->randomElement(['all', 'faq', 'home', 'admissions', 'placements']),
            'sort_order' => fake()->numberBetween(0, 10),
            'is_featured' => fake()->boolean(),
            'status' => true,
        ];
    }
}
