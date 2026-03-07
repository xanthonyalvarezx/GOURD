<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'landing'])->name('landing');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/merch', [pageController::class, 'merch'])->name('merch');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');


Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [DashboardController::class, 'adminPage']);
    Route::get('/add-merch', [DashboardController::class, 'addMerch'])->name('addMerch');
    Route::post('/add-merch', [DashboardController::class, 'storeMerch'])->name('storeMerch');
});
