<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Redirects /services/{slug}.html -> /services/{slug}
Route::get('/services/{slug}.html', function ($slug) {
    return redirect()->route('services.show', ['slug' => $slug], 301);
});

// Redirects /blogs/{slug}.html -> /blogs/{slug}
Route::get('/blogs/{slug}.html', function ($slug) {
    return redirect()->route('blogs.show', ['slug' => $slug], 301);
});

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->where('slug', '^(?!.*\.html$).*') // Ensures .html isn't treated as a normal slug
    ->name('services.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blogs', [BlogController::class, 'index'])->name('blog');

Route::get('/blogs/{slug}', [BlogController::class, 'show'])
    ->where('slug', '^(?!.*\.html$).*')
    ->name('blogs.show');

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