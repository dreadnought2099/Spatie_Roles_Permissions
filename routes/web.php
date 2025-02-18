<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    if($request->header('HX-REQUEST')) {
        return view('partials.home-content');
    }
    return view('pages.home');
})->name('home');


Route::get('/events', function (Request $request) {
    if($request->header('HX-REQUEST')) {
        return view('partials.events-content');
    }
    return view('pages.events');
})->name('events')->middleware(['auth', 'can:view-events']);


Route::get('/transaction', function (Request $request) {
    if($request->header('HX-REQUEST')) {
        return view('partials.transaction-content');
    }
    return view('pages.transaction');
})->name('transaction')->middleware(['auth', 'can:manage-transactions']);


Route::get('/profile', function (Request $request) {
    if($request->header('HX-REQUEST')) {
        return view('partials.profile-content');
    }
    return view('pages.profile');
})->name('profile')->middleware(['auth']);


Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/signin', [LoginController::class, 'login'])->name('signin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
