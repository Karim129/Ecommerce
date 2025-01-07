<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->word();
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraph(),
            'image' => asset('assets/img/category.png'),
            'is_showing' => $this->faker->boolean(),
            'is_popular' => $this->faker->boolean(),
            'meta_title' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->words(5, true),
            'meta_description' => json_encode(['description' => $this->faker->paragraph()]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
