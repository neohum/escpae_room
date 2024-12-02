<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::resource('/escape_room', ArticleController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
