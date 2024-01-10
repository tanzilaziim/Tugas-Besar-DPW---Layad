<?php

use Illuminate\Support\Facades\Route; // Menggunakan fasilitas routing dari Laravel
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController; // Menggunakan controller LoginController untuk mengatur login
use App\Http\Controllers\RegisterController; // Menggunakan controller RegisterController untuk mengatur register
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
    return view('admin.dashboard');
    });
    Route::resource('laporans', AdminController::class);
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

Route::prefix('/user')->middleware('auth')->group(function() { 
    Route::get('/', function () { 
        return view('user.home', ["title"=> "home"]); 
    });
});


Route::get('/about', function () { 
    return view('user.about', ["title"=> "about"]); 
});

Route::get('/stats', function () { 
    return view('user.stats', ["title"=> "stats"]); 
});

//  Route::get('/report', ReportController::class);


Route::get('/home', [ReportController::class, 'create'])->name('home');
Route::get('/stats', [ReportController::class, 'countreport'])->name('stats');
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/reportlist', [AdminController::class, 'reportlist'])->name('list');
Route::get('/completelist', [AdminController::class, 'completelist'])->name('complete');
Route::get('/user/laporans/{id}/edit', [ReportController::class, 'edit'])->name('user.laporans.edit');
Route::get('/admin/laporans/{id}/send', [AdminController::class, 'send'])->name('admin.laporans.send');
Route::put('laporans/{id}/update', [AdminController::class, 'update'])->name('admin.laporans.update');

Route::get('/login', [LoginController::class, 'index'])->name('login'); // Mengatur rute untuk halaman login
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // Mengatur rute untuk proses login
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Mengatur rute untuk proses logout
route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');