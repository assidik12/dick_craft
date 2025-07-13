<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Mendefinisikan data palsu untuk model Project
        return [
            // Menyesuaikan field dengan yang ada di DatabaseSeeder
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(3),
            'category' => fake()->randomElement(['Web App', 'Mobile App', 'UI/UX Design']),
            'link' => fake()->url(),
        ];
    }
}
