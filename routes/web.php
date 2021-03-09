<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Laravel 8 (New)
// Route::get('/products', [ProductsController::class, 'index']);
// before laravel 8
// Route::get('/products', 'ProductsControllers@index');

//Laravel 8 (New) - works
Route::get('/products', 'App\Http\Controllers\ProductsControllers@index');

Route::get('/products/{name}', 'App\Http\Controllers\ProductsControllers@show');

