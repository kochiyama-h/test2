<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('products.index');
    Route::get('register', [ProductController::class, 'create'])->name('products.register'); 
    Route::post('store', [ProductController::class, 'store'])->name('products.store');
    Route::get('{id}', [ProductController::class, 'show'])->name('products.show');
    Route::post('{id}/update', [ProductController::class, 'update'])->name('products.update');
});

