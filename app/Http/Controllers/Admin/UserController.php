<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->when(request('search'), function ($query): void {

            $query->where('name', 'like', '%'.request('search').'%');

        })->orderBy('created_at', 'desc')->paginate(10);
        $setting = Setting::first();
        $settings = json_decode($setting);

        return view('Users/index', ['users' => $users, 'settings' => $settings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::first();
        $settings = json_decode($setting);

        return view('Users/create', ['settings' => $settings]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        User::find($request->id)->update(['image' => ImageService::upload($request->file('image'), 'users')]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $setting = Setting::first();
        $settings = json_decode($setting);

        return view('Users/show', ['user' => $user, 'settings' => $settings]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $setting = Setting::first();
        $settings = json_decode($setting);

        return view('Users/edit', ['user' => $user, 'settings' => $settings]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'image' => 'required',

        ]);
        if ($request->hasFile('image')) {
            ImageService::delete($user->image);
            $user->update(['image' => ImageService::upload($request->file('image'), 'users')]);

        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

        ImageService::delete($user->image);
        $user->delete();

        return redirect()->route('users.index');

    }
}
