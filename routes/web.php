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
Route::get('/game/{product}',[ProductController::class,'show'])->name('product.show');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
// rotte per modifiche
Route::get('/product/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update{product}',[ProductController::class,'update'])->name('product.update');
// rotta per cancelare
Route::delete('/product/delete{product}',[ProductController::class,'destroy'])->name('product.destroy');
// rotta per categorie 1-n 
Route::get('/products/category/{category}',[ProductController::class,'filterByCategory'])->name('product.filterByCategory');
// rotta per visualizzare un form per conttatare
Route::get('/contact-us',[PublicController::class,'form'])->name('form');
Route::post('/contact-email',[PublicController::class,'sendEmail'])->name('send.email');