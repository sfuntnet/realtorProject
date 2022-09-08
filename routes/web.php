<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/user-login', [\App\Http\Controllers\HomeController::class, 'userLogin'])->name('userLogin');
Route::get('/user-register', [\App\Http\Controllers\HomeController::class, 'userRegister'])->name('userRegister');
Route::prefix('profile')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'index'])->name('dashboard');
    Route::get('/sing-out', [\App\Http\Controllers\UserController::class, 'singOut'])->name('sing-out');
});

Route::prefix('admin')->group(function () {
    Route::resource('/appointment', \App\Http\Controllers\AppointmentController::class)->only('create');
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('AdminDashboard');
    Route::get('/sing-out', [\App\Http\Controllers\AdminController::class, 'singOut'])->name('AdminSing-out');
});
