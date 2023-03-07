<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'course_name' => fake()->sentence(),
            'course_description' => fake()->paragraphs(1, true),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
