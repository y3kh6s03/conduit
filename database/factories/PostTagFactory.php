<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostTag>
 */
class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $post_id=Post::pluck('id')->toArray();
        $tag_id=Tag::pluck('id')->toArray();
        return [
            'post_id' => $this->faker->randomElement($post_id),
            'tag_id' => $this->faker->randomElement($tag_id, $this->faker->numberBetween(1, 5)),
            'updated_at'=>now(),
        ];
    }
}
