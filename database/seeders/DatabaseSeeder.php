<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(SettingSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            CategorySeeder::class,
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            CartSeeder::class,
        ]);
    }
}
