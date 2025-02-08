<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->name(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->text(),
            'image' => asset('assets/img/category.png'),
            'is_showing' => $this->faker->boolean(),
            'is_popular' => $this->faker->boolean(),
            'meta_title' => $this->faker->text(),
            'meta_keywords' => $this->faker->words(5, true),
            'meta_description' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
