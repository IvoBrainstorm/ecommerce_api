<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->word(),
            'detail'    => $this->faker->paragraph(),
            'price'     => $this->faker->numberBetween($min = 1000, $max = 9000),
            'stock'     => $this->faker->randomDigit(0, 5),
            'discount'  => $this->faker->numberBetween($min = 5, $max = 90),
        ];
    }
}
