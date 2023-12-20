<?php

use Illuminate\Support\Facades\Route; // Menggunakan fasilitas routing dari Laravel
use App\Http\Controllers\LoginController; // Menggunakan controller LoginController untuk mengatur login
use App\Http\Controllers\RegisterController; // Menggunakan controller RegisterController untuk mengatur register
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes-
|--------------------------------------------------------------------------
|
| 
|
*/

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
    return view('admin.dashboard');
    });
    Route::resource('products', ProductController::class);
});

Route::get('/dashboard', function () { // Mengatur rute untuk halaman utama
    return view('dashboard'); // Menampilkan view welcome
});


Route::prefix('/admin')->middleware('auth')->group(function() { // Mengatur rute untuk admin dengan middleware auth
    Route::get('/', function () { // Mengatur rute untuk halaman dashboard admin
        return view('admin.dashboard'); // Menampilkan view admin.dashboard
    });
});

Route::get('/login', [LoginController::class, 'index'])->name('login'); // Mengatur rute untuk halaman login
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // Mengatur rute untuk proses login
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Mengatur rute untuk proses logout
route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
