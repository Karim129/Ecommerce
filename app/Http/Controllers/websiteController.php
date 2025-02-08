<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class websiteController extends Controller
{
    public function index()
    {
        $data['route'] = 'index_page';

        $data['categories'] = Category::where('is_showing', 1)
            ->where('is_popular', 1)
            ->get(['id', 'meta_title', 'meta_description', 'image', 'slug']);

        $data['products'] = Product::where('trend', 1)
            ->where('status', 1)
            ->whereHas('category', function ($query): void {
                $query->where('is_showing', 1);
            })
            ->get(['id', 'meta_title', 'meta_description', 'price', 'selling_price', 'image', 'slug', 'category_id']);

        return view('website.index', $data);
    }

    public function getCategories()
    {
        $data['route'] = 'categories_page';
        $data['categories'] = Category::where('is_showing', 1)->get();

        return view('website.categories', $data);
    }

    public function getCategoryBySlug($slug)
    {

        if (Category::where('slug', $slug)->exists()) {
            $data['route'] = 'categories_page';
            $data['category'] = Category::with(['products' => function ($query): void {
                $query->where('status', 1);
            }])->where('slug', $slug)->where('is_showing', 1)->first();

            return view('website.category', $data);
        }

        return redirect('/')->with('error', 'there is wrong slug');
    }

    public function getProductBySlug($category_slug, $product_slug)
    {

        if (Category::where('slug', $category_slug)->where('is_showing', 1)
            ->exists()
        ) {

            if (Product::where('slug', $product_slug)->where('status', 1)->exists()) {
                $data['route'] = 'categories_page';
                $data['product'] = Product::with('category')->where('slug', $product_slug)->first();
                $data['keywords'] = explode(',', (string) $data['product']->meta_keywords);

                return view('website.product', $data);
            }

            return redirect('/')->with('error', 'there is no product');
        }

        return redirect('/')->with('error', 'there is no category');
    }
}
