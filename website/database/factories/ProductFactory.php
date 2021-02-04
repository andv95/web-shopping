<?php

namespace Database\Factories;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(1000,1000),
            'image_hover' => $this->faker->imageUrl(1000,1000),
            'price' => $this->faker->numberBetween(100, 1000000),
        ];
    }
}
