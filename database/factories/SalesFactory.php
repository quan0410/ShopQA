<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time = $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s');
        return [
            "product_id" => Product::all()->random()->id,
            "title" => $this->faker->text(20),
            "content" => $this->faker->text(40),
            "time_start" => $this->faker->dateTimeThisMonth($time)->format('Y-m-d H:i:s'),
            "time_end" => $time,
            "is_show" => $this->faker->numberBetween(0,1),
        ];
    }
}
