<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid()->toString(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->realText(500),
            'author' => $this->faker->name,
            'published' => $this->faker->boolean
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Post $post) {
            // Set English locale for Faker
            $this->faker->locale('en_US');
        });
    }
}
