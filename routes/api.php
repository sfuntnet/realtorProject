<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('api.login');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('api.register');
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('api.logout');
    Route::post('/refresh', [\App\Http\Controllers\AuthController::class, 'refresh'])->name('api.refresh');
    Route::get('/user-profile', [\App\Http\Controllers\AuthController::class, 'userProfile'])->name('api.userProfile');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'admin'
], function ($router) {
    Route::post('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('api.AdminLogin');
    Route::post('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('api.AdminLogout');
    Route::post('/refresh', [\App\Http\Controllers\AdminController::class, 'refresh'])->name('api.AdminRefresh');
    Route::get('/user-profile', [\App\Http\Controllers\AdminController::class, 'userProfile'])->name('api.AdminUserProfile');
    Route::resource('/appointment', \App\Http\Controllers\AppointmentController::class)->except('create');
    Route::get('/userAppointment', [\App\Http\Controllers\AppointmentController::class,'userIndex'])->name('api.userAppointment');
    Route::get('get-user', [\App\Http\Controllers\UserController::class, 'getUser'])->name('getUser');
});
