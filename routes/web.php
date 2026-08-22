<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/service', function () {
    return view('services');
})->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');