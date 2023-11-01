<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => Product::all()->random()->id,
            "color" => $this->faker->colorName(),
            "size" => $this->faker->randomElement(['xl','xxl','s','l']),
        ];
    }
}
