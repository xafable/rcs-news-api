<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->text(200),
            'short_description' => fake()->text(30),
            'likes' => fake()->numberBetween(10, 2000000),
            'photo_url' => fake()->imageUrl($width = 640, $height = 480),
            'category_id' => fake()->numberBetween(1,5),
            'created_at' => fake()->dateTimeInInterval('-5 week', '+5 days'),
            'updated_at' => fake()->dateTimeInInterval('-2 week', '+3 days'),
        ];
    }
}
