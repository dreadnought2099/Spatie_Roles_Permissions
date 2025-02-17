<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/events', function () {
    return view('pages.events');
})->name('events')->middleware(['auth', 'can:view-events']);

Route::get('/transaction', function () {
    return view('pages.transaction');
})->name('transaction')->middleware(['auth', 'can:manage-transactions']);

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile')->middleware(['auth']);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/signin', [LoginController::class, 'login'])->name('signin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
