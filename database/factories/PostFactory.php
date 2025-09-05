<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\User;
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
        $title = fake()->realText(50);

        return [
            "title" => $title,
            "content" => fake()->realText(),
            "user_id" => User::where('role', 'author')->inRandomOrder()->first()->id,
            "slug" => Str::slug($title),
            "excerpt" => fake()->text(100),
            "status" => fake()->randomElement(['draft', 'published'])
        ];
    }
}
