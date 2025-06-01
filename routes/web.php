<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
  

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Route::resource('profiles', ProfileController::class);
    Route::get('my-account', [ProfileController::class,'index'])->name('my_account');
    Route::post('my-account', [ProfileController::class, 'update'])->name('profile_update');
    Route::resource('products', ProductController::class);

});
