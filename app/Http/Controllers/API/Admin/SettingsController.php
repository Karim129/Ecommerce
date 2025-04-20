<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return Setting::all();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|max:255',
            'value' => 'required|string',
        ]);

        $setting = Setting::updateOrCreate(['key' => $data['key']], ['value' => $data['value']]);

        return response()->json($setting);
    }
}
