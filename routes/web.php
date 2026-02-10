<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [PageController::class, 'home'])
    ->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'usersList'])
        ->name('usersList');
});

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);

Route::resource('contacts', ContactController::class);

// Route Fall Back
Route::fallback(function() {
    return 'Erreur 404 - Page non trouvée ! <a href="/">Retour à l\'acceuil</a>';
});

