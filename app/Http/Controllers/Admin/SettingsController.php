<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\ImageService;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        if ($settings) {
            $settings['header_logo'] = asset($settings['header_logo']);
            $settings['footer_logo'] = asset($settings['footer_logo']);
            //  dd($settings);

            return view('admin.Settings.edit', ['settings' => $settings, 'route' => $settings]);
        }
        abort(404, 'Settings not found');

        return null;
    }

    // public function update(Request $request): void
    // {
    //     $settings = Setting::first();
    //     if ($settings) {

    //         $validatedData = $request->validate([
    //             'phone' => 'sometimes|string|required',
    //             'header_logo'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //             'email' => 'sometimes|string|required|email ',

    //         ]);

    //         dd($settings);
    //         $existingContacts = array_merge($settings, $validatedData);
    //         if ($request->hasFile('header_logo')) {
    //             ImageService::delete($existingContacts['header_logo']);
    //             $existingContacts['header_logo'] = ImageService::upload($request->file('header_logo'), 'settings');
    //         }
    //         if ($request->hasFile('footer_logo')) {
    //             ImageService::delete($existingContacts['footer_logo']);
    //             $existingContacts['footer_logo'] = ImageService::upload($request->file('footer_logo'), 'settings');
    //         }

    //         $settings->company_info = json_encode($existingContacts);
    //         $settings->save();
    //         // dd($settings);
    //     } else {
    //         abort(404, 'Settings not found');
    //     }
    // }

    // public function update(Request $request): void
    // {
    //     $settings = Setting::firstOrFail();

    //     // Validate the incoming request
    //     $validatedData = $request->validate([
    //         'phone' => 'sometimes|string|required',
    //         'header_logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'footer_logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'email' => 'sometimes|string|required|email',
    //         'whatsapp'=> 'sometimes|string|required',
    //         'address'=> 'sometimes|string|required',
    //     ]);

    //     $logoFields = ['header_logo', 'footer_logo'];

    //     // Handle file uploads for the logos
    //     foreach ($logoFields as $field) {
    //         if ($request->hasFile($field)) {
    //             // Delete the old logo if it exists
    //             ImageService::delete($settings->settings[$field] ?? null);

    //             // Upload the new logo and add the path to the validated data
    //             $validatedData[$field] = ImageService::upload($request->file($field), 'settings');
    //         }
    //     }

    //     // Merge the existing JSON with new data
    //     // dd(json_decode($settings));
    //     $existingData = json_decode($settings, true) ?? [];
    //     $updatedData = array_merge($existingData, $validatedData);

    //     // Update the database
    //     $settings->update(['settings' => json_encode($updatedData)]);
    // }
    public function update(Request $request): void
    {
        $settings = Setting::first();
        if ($settings) {

            $validatedData = $request->validate([
                'phone' => 'sometimes|string|required',

                'email' => 'sometimes|string|required|email ',

            ]);

            // dd($validatedData);
            $existingContacts = array_merge($settings, $validatedData);
            if ($request->hasFile('header_logo')) {
                ImageService::delete($existingContacts['header_logo']);
                $existingContacts['header_logo'] = ImageService::upload($request->file('header_logo'), 'settings');
            }
            if ($request->hasFile('footer_logo')) {
                ImageService::delete($existingContacts['footer_logo']);
                $existingContacts['footer_logo'] = ImageService::upload($request->file('footer_logo'), 'settings');
            }

            $settings->company_info = json_encode($existingContacts);
            $settings->save();
            // dd($settings);
        } else {
            abort(404, 'Settings not found');
        }
    }

    // public static function GetData()
    // {
    //     $settings = Setting::first();
    //     if ($settings) {
    //         $settings = json_decode($settings->company_info, true);
    //         $settings['header_logo'] = asset($settings['header_logo']);
    //         $settings['footer_logo'] = asset($settings['footer_logo']);

    //         return $settings;
    //     }
    // }
}
