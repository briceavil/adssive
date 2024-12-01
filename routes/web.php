<?php

use App\Livewire\Users;
use App\Livewire\Formats;
use App\Livewire\Files;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('users');
    })->name('users');

    Route::get('/formats', function () {
        return view('formats');
    })->name('formats');

    Route::get('/files', function () {
        return view('files');
    })->name('files');

});
