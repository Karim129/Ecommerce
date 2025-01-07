<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
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
        $name = $this->faker->sentence(3);
        $slug = Str::slug($name);

        return [
            'category_id' => $this->faker->randomElement(Category::all()), // Get a random Category ID
            'name' => $name,
            'slug' => $slug,
            'short_description' => $this->faker->paragraph(),
            'description' => $this->faker->paragraphs(3, true),
            'price' => $this->faker->randomFloat(2, 10, 1000), // Adjust range as needed
            'selling_price' => $this->faker->randomFloat(2, 5, 900), // Adjust range as needed
            'image' => asset('assets/img/product.jpeg'),
            'qty' => $this->faker->numberBetween(0, 100),
            'tax' => $this->faker->randomFloat(2, 0, 20),
            'status' => $this->faker->boolean(),
            'trend' => $this->faker->boolean(),
            'meta_title' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->words(5, true),
            'meta_description' => json_encode(['description' => $this->faker->paragraph()]), // JSON encoded
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}