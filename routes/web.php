<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::resource('/', ArticleController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('/', ArticleController::class);

require __DIR__.'/auth.php';
