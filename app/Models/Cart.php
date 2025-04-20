<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function calculateTotalValue()
    {
        return self::with('Product')->get()->sum(function ($cart) {
            return $cart->Product->price * $cart->qty;
        });
    }
}
