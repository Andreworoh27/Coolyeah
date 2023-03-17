<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genderfake = fake()->numberBetween(0, 1);
        $rolefake = fake()->numberBetween(0, 1);
        return [
            'user_name' => fake()->name(),
            'user_email' => fake()->unique()->safeEmail(),
            'user_gender' => $genderfake == 1 ? 'Male' : 'Female',
            'user_password' => bcrypt('testpassword'), // password
            'user_profile_image' => "default profile.png",
            'user_role' => $rolefake == 1 ? 'Member' : 'Admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
