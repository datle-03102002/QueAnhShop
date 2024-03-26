<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\HomeController as AdminHomeController;

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
Route::middleware(['adminLogin'])->group(function () {
    Route::get('/dashboard',[AdminHomeController::class,'dashboard'])->name('dashboard');
    Route::post('/upload',[AdminHomeController::class,'upload'])->name('upload');
});
