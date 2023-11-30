<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;

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

Route::get("/", [PublicController::class,'home'])->name('home');
Route::get("/home", [UserController::class,'home'])->name('user.home');
// creare una rotta dove posso vedere tutti prodotti creati
Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');