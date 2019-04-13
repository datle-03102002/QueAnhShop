<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\HomeController as AdminHomeController;
use App\Http\Controllers\ADMIN\ProductController as AdminProductController;
use App\Http\Controllers\ADMIN\CategoryController as AdminCategoryController;

use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\AuthController;

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
Route::get('/', [ClientHomeController::class,'index'])->name('home');

Route::get('/login', function (){
    return view('client.page.auth.login');
});
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/cuahang', [ClientHomeController::class,'cuahang'])->name('cuahang');
Route::get('/chitiet/{name}', [ClientHomeController::class,'chitietsanpham'])->name('chitietsanpham');
Route::get('/cuahang', [ClientHomeController::class,'locsanpham'])->name('locsanpham');



Route::get('admin/login',function(){
    return view('admin.components.login');
});
Route::post('admin/login',[AuthController::class,'login'])->name('admin.login');
Route::middleware(['adminLogin'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminHomeController::class,'dashboard'])->name('dashboard');
    Route::post('/upload',[AdminHomeController::class,'upload'])->name('upload');
    Route::get('/logout',[AdminHomeController::class,'logout'])->name('admin.logout');

    //category 

    Route::resource('category', AdminCategoryController::class);

    //product
    Route::resource('product', AdminProductController::class);

    Route::get('/product/changeStatus/{status}/{id}', [AdminProductController::class,'changeStatus']);
    Route::post('/updateProductDetail', [AdminProductController::class,'updateProductDetail']);
    Route::post('/deleteItemProductDetail', [AdminProductController::class,'deleteItemProductDetail']);

    // Route::get('/product',[AdminProductController::class,'showProduct'])->name('admin.product');
    Route::get('/themsanpham',[AdminProductController::class,'store'])->name('admin.product.store');
});
