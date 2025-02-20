<?php

namespace Database\Seeders;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 5 categories
        Category::factory(5)->create();

        // Create 10 posts
        Post::factory(10)->create();

        // Create 15 recipes
        Recipe::factory(15)->create();

        // Create 30 comments (randomly assigned to posts or recipes)
        Comment::factory(30)->create();
    }
}
