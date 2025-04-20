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
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
        ]);

        if (! Auth::check()) {
            return response()->json(['msg' => 'Please log in to add items to your cart.']);
        }

        $productId = $request->product_id;
        $qty = $request->qty;

        $product = Product::find($productId);

        if (Cart::where('product_id', $productId)->where('user_id', Auth::id())->exists()) {
            return response()->json(['msg' => 'This product is already in your cart.']);
        }

        if ($product->qty < $qty) {
            return response()->json(['msg' => 'Insufficient stock for this product.']);
        }

        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'qty' => $qty,
        ]);

        return response()->json(['msg' => "$product->name has been successfully added to your cart."]);
    }

    public function destroy($id)
    {
        $cart = Cart::where(['id' => $id, 'user_id' => Auth::id()])->first();
        $cart->delete();

        return redirect()->back()->with('success', trans('messages_trans.success_delete'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:carts,id',
            'qty' => 'required|integer|min:1',
        ]);

        if (Auth::check()) {
            $cart = Cart::where('id', $request->id)->where('user_id', Auth::id())->first();

            if ($cart) {
                $product = $cart->Product;

                if ($product->qty < $request->qty) {
                    return response()->json(['msg' => 'Insufficient stock for this product.']);
                }

                $cart->update(['qty' => $request->qty]);

                return response()->json(['msg' => 'Cart updated successfully.']);
            }
        }

        return response()->json(['msg' => 'Unable to update cart.']);
    }
}
