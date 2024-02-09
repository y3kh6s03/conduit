<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Comment::factory(100)->create();
        \App\Models\Like::factory(300)->create();
        \App\Models\LikeCount::factory(1000)->create();
        \App\Models\Post::factory(100)->create();
        \App\Models\PostTag::factory(20)->create();
    }
}
