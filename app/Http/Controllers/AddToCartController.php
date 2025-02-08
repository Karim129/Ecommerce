<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddToCartController extends Controller
{
    public function index()
    {
        $data['route'] = 'cart_page';
        $data['cart_products'] = Cart::where('user_id', Auth::id())->get();

        return view('website.cart.index', $data);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $qty = $request->qty;

        if (! Auth::check()) {
            return response()->json(['msg' => 'login first']);
        }

        if (! Product::where('id', $productId)->exists()) {
            return response()->json(['msg' => 'product not found']);
        }

        if (Cart::where('product_id', $productId)->where('user_id', Auth::id())->exists()) {
            return response()->json(['msg' => 'product in your cart already']);
        }

        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'qty' => $qty,
        ]);

        $productName = Product::findOrFail($productId)->name;

        return response()->json(['msg' => "$productName successfully added to your cart"]);
    }

    public function destroy($id)
    {
        $cart = Cart::where(['id' => $id, 'user_id' => Auth::id()])->first();
        $cart->delete();

        return redirect()->back()->with('success', trans('messages_trans.success_delete'));
    }

    public function update(Request $request)
    {
        if (Auth::check()) {
            if (Cart::where('id', $request->id)->exists()) {
                $cart = Cart::where('id', $request->id)->first();
                $cart->update([
                    'qty' => $request->qty,
                ]);
            }

            return response()->json(['msg' => 'cart updated']);
        }

        return null;
    }
}
