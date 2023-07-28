<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->word,
            'description'=> $this->faker->paragraph,
            'price'=> $this->faker->numberBetween(1,1000),
            'stock'=> $this->faker->randomDigit(),
            'discount'=> $this->faker->numberBetween(2,30),

           
        ];
    }
}
