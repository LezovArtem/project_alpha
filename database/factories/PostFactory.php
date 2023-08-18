<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'content' => fake()->sentence('10'),
            'likes' => fake()->numberBetween('1', '100'),
            'category_id' => fake()->numberBetween('1', '5'),
        ];
    }


}
