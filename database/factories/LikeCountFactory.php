<?php

namespace Database\Factories;

use App\Models\LikeCount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LikeCount>
 */
class LikeCountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'like_id'=>LikeCount::factory()->create()->id,
            'count'=>fake()->randomDigit(),
        ];
    }
}
