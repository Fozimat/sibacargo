<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Tentang
Route::get('/sejarah-perusahaan', [App\Http\Controllers\HomeController::class, 'sejarah_perusahaan'])->name('sejarah-perusahaan');
Route::get('/visi', [App\Http\Controllers\HomeController::class, 'visi'])->name('visi');
Route::get('/cabang', [App\Http\Controllers\HomeController::class, 'cabang'])->name('cabang');
Route::get('/manajemen', [App\Http\Controllers\HomeController::class, 'manajemen'])->name('manajemen');
Route::get('/legalitas', [App\Http\Controllers\HomeController::class, 'legalitas'])->name('legalitas');
Route::get('/mitra', [App\Http\Controllers\HomeController::class, 'mitra'])->name('mitra');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/videos', [App\Http\Controllers\HomeController::class, 'videos'])->name('videos');

// Layanan


// Blog
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

// Admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
