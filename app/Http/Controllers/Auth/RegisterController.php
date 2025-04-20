<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\ImageService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:14'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'address1' => ['required', 'max:255'],
            'pincode' => ['required', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
    }

    protected function create(array $data)
    {
        try {
            $imagePath = isset($data['image']) ? ImageService::upload($data['image'], 'users') : null;

            return User::create([
                'fname' => $data['fname'],
                'lname' => $data['lname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'country' => $data['country'],
                'city' => $data['city'],
                'address1' => $data['address1'],
                'pincode' => $data['pincode'],
                'password' => Hash::make($data['password']),
                'image' => $imagePath,
            ]);
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->withErrors(['error' => 'Failed to register user. Please try again.']);
        }
    }
}
