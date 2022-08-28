<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->numerify('category-####'),
            'created_at' => fake()->dateTimeInInterval('-3 week', '+5 days'),
            'updated_at' => fake()->dateTimeInInterval('-1 week', '+3 days'),
        ];
    }
}
