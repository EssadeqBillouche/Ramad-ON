<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Recipe;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => $this->faker->sentence(),
            'commentable_id' => rand(1, 10),
            'commentable_type' => $this->faker->randomElement([Post::class, Recipe::class]),
        ];
    }
}
