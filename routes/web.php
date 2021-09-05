<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

// Route::get('/', function () {
//     return view('products');
// });

Route::prefix('admin')->group(function () {
    Route::resource('/products', ProductController::class);
    Route::resource('/users', UserController::class);
});
    Route::resource('/profile', ProfileController::class);
    Route::resource('/cart', CartController::class);

Route::get('/admin/products/delete/{product}', [ProductController::class, 'destroy']);
Route::get('/admin/users/delete/{user}', [UserController::class, 'destroy']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::get('/show/{id}', [HomeController::class, 'show']);
Route::post('/search', [HomeController::class, 'search']);
Route::get('/checkcart', [HomeController::class, 'checkcart']);



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout');
