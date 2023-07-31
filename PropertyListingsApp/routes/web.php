<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserProfileController;

Route::get('/', [ListingController::class, 'index'])->name('listings.index');

Route::middleware('auth')->group(function () {
    
    Route::prefix('listings')->group(function () {    
        Route::get('create', [ListingController::class, 'create'])->name('listings.create'); 
        Route::post('/', [ListingController::class, 'store'])->name('listings.store');
        Route::get('{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
        Route::put('{listing}', [ListingController::class, 'update'])->name('listings.update');
        Route::delete('{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');
        Route::get('manage', [ListingController::class, 'manage'])->name('listings.manage');
        Route::get('{listing}', [ListingController::class, 'show'])->name('listings.show');  // keep this at the bottom
    });

    Route::prefix('profile')->group(function () {
        Route::get('/{user}', [UserProfileController::class, 'show'])->name('profile.show');
        Route::get('/{user}/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/{user}', [UserProfileController::class, 'update'])->name('profile.update');
        Route::get('/{user}/view', [UserProfileController::class, 'view'])->name('profile.view');
    });
    
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
 
Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('users.authenticate');
});


