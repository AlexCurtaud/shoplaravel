<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'slug' => fake()->words(3, true),
            'price' => fake()->randomFloat(2, 50, 1000),
            'stock' => fake()->numberBetween(0, 50),
            'active' => fake()->boolean(90),
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => Category::factory(),
        ];
    }
}
