<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\websiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function (): void {
        Route::get('/', [websiteController::class, 'index'])->name('home');
        Route::get('/GetSettings', [SettingsController::class,  'GetData'])->name('GetSettings');
        Route::get('/categories', [websiteController::class, 'getCategories'])->name('get_categories');
        Route::get('/category/{slug}', [websiteController::class, 'getCategoryBySlug'])->name('get_category_slug');
        Route::get('/product/{category_slug}/{product_slug}', [websiteController::class, 'getProductBySlug'])->name('get_product_slug');
        Route::post('/product/add_to_cart', [AddToCartController::class, 'addToCart'])->name('product.addToCart');

        Route::group([
            'middleware' => ['auth'],
        ], function (): void {
            Route::get('cart', [AddToCartController::class, 'index'])->name('cart.index');
            Route::delete('cart/destroy/{id}', [AddToCartController::class, 'destroy'])->name('cart.destroy');
            Route::post('cart/update', [AddToCartController::class, 'update'])->name('cart.update');
            Route::get('checkout/', [CheckOutController::class, 'index'])->name('checkout.index');
        });
    }

);

Route::middleware(['is_admin'])->group(function (): void {
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.edit');
    Route::Put('settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::resource('roles', RoleController::class);
    Route::post('roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('roles/{role}/permissions/{permission}', [
        RoleController::class,
        'revokePermission',
    ])->name('roles.permissions.revoke');
    Route::resource('users', UserController::class);

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
});
