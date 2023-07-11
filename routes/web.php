<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function(){
    return view('index');
});

Route::middleware(['auth'])->group(
    function () {
        Route::get('/favorites', function () {
            return view('favorites');
        })->name('favorites-index');
    });

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register-index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login-index');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/services', function () {
    return view('services');
})->name('services-index');