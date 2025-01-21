<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        try {
            $user = User::query()->createOrFirst([
                'fname' => 'Admin',
                'lname' => 'Admin',
                'email' => 'admin@localhost',
                'password' => Hash::make('password'),
                'phone' => '123-456-7890',
                'address1' => 'address',
                'address2' => 'address',
                'city' => 'city',
                'country' => 'country',
                'pincode' => 'pincode',
                'image' => 'image',
                'email_verified_at' => now(),

            ]);

            $user->assignRole('SuperAdmin');
            User::factory(10)->create()->each(function ($user) {
                $user->assignRole('Admin');
            });

        } catch (\Exception $e) {
            // dd($e);
        }
    }
}