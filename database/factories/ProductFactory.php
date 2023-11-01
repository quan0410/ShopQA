<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(300000, 2000000);
        return [
            'brand_id' => Brand::all()->random()->id,
            'product_category_id' => Category::all()->random()->id,
            'name' => $this->faker->name,
            'description' => $this->faker->text(100),
            'content' => $this->faker->text(400),
            'price' => $price,
            'qty' => $this->faker->numberBetween(0, 20),
            'discount_price' => $this->faker->numberBetween(0, $price),
            'weight' => null,
            'sku' => $this->faker->unique()->words(4, true),
            'featured' => $this->faker->numberBetween(0, 1),
        ];
    }
}
