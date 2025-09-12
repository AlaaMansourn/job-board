<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'author' => $this->faker->name,
            'content' => $this->faker->sentence
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (comment $comment) {
            // Set English locale for Faker
            $this->faker->locale('en_US');
        });
    }
}
