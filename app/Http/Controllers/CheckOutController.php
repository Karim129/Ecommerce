<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        $data['carts'] = Cart::where('user_id', Auth::id())->get();
        $data['route'] = '';
        $data['user'] = User::where('id', Auth::id())->first();

        return view('website.checkout.index', $data);
    }
    // $user = Auth::user()->load('carts');

    // return view('website.checkout.index', compact('user'));
}
