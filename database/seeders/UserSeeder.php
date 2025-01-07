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
            User::factory(5)->create();
            User::create([
                'fname' => 'karim',
                'lname' => 'ashraf',
                'email' => 'karim@gmail.com',
                'password' => Hash::make('password'),
                'is_admin' => 1,
            ]);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }
}
