<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password = null;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'is_admin' => 0,
            'remember_token' => Str::random(10),
            'fname' => fake()->name(),
            'lname' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'address1' => fake()->address(),
            'address2' => fake()->address(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'pincode' => fake()->postcode(),
            'image' => fake()->imageUrl(),
        ];
    }
}
