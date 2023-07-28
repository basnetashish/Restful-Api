<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Redis;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
      protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function() {
                return Product::all()->random();
            },
            'customer_Name' => $this->faker->name,
            'review' => $this->faker->paragraph,
            'star' => $this->faker->numberBetween(0,5),
        ];
    }
}
