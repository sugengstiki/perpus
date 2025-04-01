<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('task', 'task.index')
        ->name('task.index');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
