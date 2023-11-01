<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
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
            "user_id" => User::all()->random()->id,
            "content" => $this->faker->text(50),
            "rate" => $this->faker->numberBetween(0, 5),
        ];
    }
}
