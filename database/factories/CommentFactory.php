<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postId=Post::all()->random(1)[0]->id;
        $userId=User::all()->random(1)[0]->id;
        return [
            'comment'=>fake()->realText(200),
            'post_id'=>$postId,
            'user_id'=>$userId,
        ];
    }
}
