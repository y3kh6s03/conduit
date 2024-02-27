<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\PostTag;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tag::factory()->count(20)->create();
        for ($i = 0; $i < 30; $i++) {
            Post::factory()
                ->count(3)
                ->for(User::factory())
                ->create();
        }
        PostTag::factory()->count(100)->create();
        Comment::factory()->count(300)->create();
    }
}
