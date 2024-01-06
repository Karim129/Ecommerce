<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\websiteController;

use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// /** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
Auth::routes();


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        Route::group([
            'middleware' => ['is_admin', 'auth'],
            'prefix' => 'admin',
        ], function () {

            Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

            Route::resource('/categories', CategoryController::class);
            Route::resource('/products', ProductController::class);

        });


        // Route::get('/', function () {
        //     return view('welcome');
        // });
        Route::get('/', [websiteController::class, 'index']);
        Route::get('/categories', [websiteController::class, 'getCategories'])->name('get_categories');
        Route::get('/category/{slug}', [websiteController::class, 'getCategoryBySlug'])->name('get_category_slug');
        Route::get('/category/{category_slug}/{product_slug}', [websiteController::class, 'getProductBySlug'])->name('get_product_slug');
        Route::post('/product/add_to_cart', [AddToCartController::class, 'addToCart'])->name('product.addToCart');

        Route::group([
            'middleware' => ['auth']
        ], function () {
            Route::get('cart', [AddToCartController::class, 'index'])->name('cart.index');
            Route::delete('cart/destroy/{id}', [AddToCartController::class, 'destroy'])->name('cart.destroy');
            Route::post('cart/update', [AddToCartController::class, 'update'])->name('cart.update');
            Route::get('checkout/', [CheckOutController::class, 'index'])->name('checkout.index');
        });


    }

);