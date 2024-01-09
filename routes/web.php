<?php

use Illuminate\Support\Facades\Route; // Menggunakan fasilitas routing dari Laravel
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController; // Menggunakan controller LoginController untuk mengatur login
use App\Http\Controllers\RegisterController; // Menggunakan controller RegisterController untuk mengatur register
use App\Http\Controllers\ReportController;

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
    Route::resource('laporans', ReportController::class);
});

Route::get('/', function () { 
    return view('auth.login'); 
});


Route::prefix('/admin')->middleware('auth')->group(function() { 
    Route::get('/', function () { 
        return view('admin.dashboard'); 
    });
});

Route::prefix('user')->middleware('auth')->group(function() { 
    Route::get('/home', function () { 
        return view('user.home', ["title"=> "home"]); 
    });
    Route::resource('laporans', ReportController::class);
});


Route::get('/about', function () { 
    return view('user.about', ["title"=> "about"]); 
});

Route::get('/stats', function () { 
    return view('user.stats', ["title"=> "stats"]); 
});

//  Route::get('/report', ReportController::class);

Route::get('/report', function () { 
    return view('user.report.index'); 
});

Route::get('/login', [LoginController::class, 'index'])->name('login'); // Mengatur rute untuk halaman login
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // Mengatur rute untuk proses login
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Mengatur rute untuk proses logout
route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');