<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false,
    'verify' => true,
]);

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['web', 'verified'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class)->except(['show']);
});
