<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServicePageController;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/', [AuthController::class, 'loginForm'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.submit');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::resource('blogs', BlogController::class);

    Route::resource('service-pages', ServicePageController::class);

    Route::post(
        'ckeditor/upload',
        [ImageController::class, 'ckeditor']
    )->name('ckeditor.upload');
    
    Route::post('images', [ImageController::class, 'store'])
        ->name('images.store');

    Route::delete('images/{image}', [ImageController::class, 'destroy'])
        ->name('images.destroy');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});