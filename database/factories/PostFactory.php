<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
        return [
            'headline'=>fake()->realText(30),
            'title'=>fake()->realText(20),
            'subtitle'=>fake()->realText(50),
            'content'=>fake()->realText(300),
        ];
    }
}
