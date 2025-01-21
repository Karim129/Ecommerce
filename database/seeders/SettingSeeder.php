<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $existingSetting = Setting::first();

        if (! $existingSetting) {
            Setting::create([
                'Settings' => json_encode([
                    'phone' => '123-456-7890',
                    'email' => 'example@example.com',
                    'whatsapp' => '123-456-7890',
                    // 'address' => 'address',
                    // 'facebook' => 'https://www.facebook.com',
                    // 'header_logo' => asset('/storage/Setting/MainAfter.webp'),
                    // 'footer_logo' => asset('/storage/Setting/MainAfter.webp'),
                    // 'about' => 'about',
                    // 'mission' => 'mission',
                    // 'vision' => 'vision',
                ]),
            ]);
        }
    }
}
