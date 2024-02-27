<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Tag;

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
        $post_id=Post::all()->random(1)[0]->id;
        $tag_id=Tag::all()->random(1)[0]->id;
        return [
            'post_id'=>$post_id,
            'tag_id'=>$tag_id,
        ];
    }
}
