<?php

namespace Database\Factories;

use App\Models\Category;
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
            'category_id' => $this->faker->randomElement(Category::all()), // Get a random Category ID
            'name' => $this->faker->unique()->name(),
            'slug' => $this->faker->unique()->slug(),
            'short_description' => $this->faker->text(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 10, 1000), // Adjust range as needed
            'selling_price' => $this->faker->randomFloat(2, 5, 900), // Adjust range as needed
            'image' => asset('assets/img/product.jpeg'),
            'qty' => $this->faker->numberBetween(0, 100),
            'tax' => $this->faker->randomFloat(2, 0, 20),
            'status' => $this->faker->boolean(),
            'trend' => $this->faker->boolean(),
            'meta_title' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->words(5, true),
            'meta_description' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
