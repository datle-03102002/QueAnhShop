<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\HomeController as AdminHomeController;
use App\Http\Controllers\ADMIN\ProductController as AdminProductController;
use App\Http\Controllers\ADMIN\CategoryController as AdminCategoryController;

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

Route::get('/LOGIN',[AdminHomeController::class,'login'])->name('LOGIN');
Route::post('/LOGIN',[AdminHomeController::class,'AdminLogin']);


Route::middleware(['adminLogin'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminHomeController::class,'dashboard'])->name('dashboard');
    Route::post('/upload',[AdminHomeController::class,'upload'])->name('upload');
    Route::get('/logout',[AdminHomeController::class,'logout'])->name('admin.logout');

    //category 

    Route::resource('category', AdminCategoryController::class);

    //product
    Route::resource('product', AdminProductController::class);

    Route::get('/product/changeStatus/{status}/{id}', [AdminProductController::class,'changeStatus']);

    // Route::get('/product',[AdminProductController::class,'showProduct'])->name('admin.product');
    Route::get('/themsanpham',[AdminProductController::class,'store'])->name('admin.product.store');
});
