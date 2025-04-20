<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\ProductController;
use App\Http\Controllers\API\Admin\SettingsController;
use App\Http\Controllers\API\Admin\UserController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', fn (Request $request) => $request->user());

Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/products', ProductController::class);
Route::get('/settings', [SettingsController::class, 'index']);
Route::put('/settings', [SettingsController::class, 'update']);
Route::apiResource('/users', UserController::class);

Route::post('/api/login', [LoginController::class, 'login']);
Route::post('/api/register', [RegisterController::class, 'register']);
Route::post('/api/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
