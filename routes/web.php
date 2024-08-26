<?php

use App\Http\Controllers\ChatListController;
use App\Livewire\Chat;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', [ChatListController::class ,'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/chat/{user}', Chat::class)
    // ->middleware(['auth', 'verified'])
    ->name('chat');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
