<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Mendefinisikan data palsu untuk model Post
        $title = fake()->sentence(6);
        return [
            // Menambahkan field sesuai dengan yang ada di DatabaseSeeder
            'title' => $title,
            'slug' => Str::slug($title),
            'link' => fake()->url(),
            'content' => fake()->paragraphs(5, true),
        ];
    }
}
