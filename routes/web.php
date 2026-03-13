<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'landing'])->name('landing');
Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/merch', [pageController::class, 'merch'])->name('merch');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::post('/contact', [DashboardController::class, 'saveMessage']);
Route::get('/events', [pageController::class, 'events'])->name('events');

Route::prefix('dashboard')->group(function () {
    Route::get('/admin', [DashboardController::class, 'adminPage'])->name('adminPage')->middleware('auth');
    Route::get('/add-merch', [DashboardController::class, 'addMerch'])->name('addMerch')->middleware('auth');
    Route::post('/add-merch', [DashboardController::class, 'storeMerch'])->name('storeMerch')->middleware('auth');
    Route::get('/add-events', [DashboardController::class, 'addEvents'])->name('addEvents')->middleware('auth');
    Route::post('/add-events', [DashboardController::class, 'storeEvents'])->name('storeEvents')->middleware('auth');
    Route::post('/save-message', [DashboardController::class, 'saveMessage'])->name('saveMessage')->middleware('auth');
    Route::get('/view-messages', [pageController::class, 'viewMessages'])->name('viewMessages')->middleware('auth');
    Route::delete('/delete-message/{id}', [DashboardController::class, 'deleteMessage'])->name('deleteMessage')->middleware('auth');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [pageController::class, 'loginPage'])->name('loginPage');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::fallback(function () {
    return view('404');
});
