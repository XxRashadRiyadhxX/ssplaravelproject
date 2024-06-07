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
            'Product' => $this->faker->word,
            'Price' => $this->faker->randomFloat(2, 1, 100),
            'Description' => $this->faker->sentence,
            'Quantity' => $this->faker->numberBetween(0, 100),
            'Image' => $this->faker->imageUrl(),
            // Add other fields as necessary
        ];
    }
}
