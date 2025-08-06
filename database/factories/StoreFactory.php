<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StoreCategories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            //'description' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(10),
            'price' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            // using the foreign key relationship 
            'store_categories_id' => StoreCategories::inRandomOrder()->first()->id,
        ];
    }
}
