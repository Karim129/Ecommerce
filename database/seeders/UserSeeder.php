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
        User::create([
            'fname' => 'karim',
            'lname' => 'ashraf',
            'email' => 'karim@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);
    }
}
