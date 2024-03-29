<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\Admin\PostinganController;

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


Auth::routes([
    'register' => false
]);

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Tentang
Route::get('/sejarah-perusahaan', [App\Http\Controllers\HomeController::class, 'sejarah_perusahaan'])->name('sejarah-perusahaan');
Route::get('/visi', [App\Http\Controllers\HomeController::class, 'visi'])->name('visi');
Route::get('/cabang', [App\Http\Controllers\HomeController::class, 'cabang'])->name('cabang');
Route::get('/mitra', [App\Http\Controllers\HomeController::class, 'mitra'])->name('mitra');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/videos', [App\Http\Controllers\HomeController::class, 'videos'])->name('videos');
Route::get('/blog/{slug}', [App\Http\Controllers\HomeController::class, 'show'])->name('blog.detail');

// Layanan
Route::get('/layanan', [App\Http\Controllers\HomeController::class, 'layanan'])->name('layanan');


// Blog
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

// faq
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');

// Tracking
Route::get('/tracking', [App\Http\Controllers\HomeController::class, 'tracking'])->name('tracking');
Route::get('/lacak', [App\Http\Controllers\HomeController::class, 'process_tracking'])->name('tracking.process');

// Tarif
Route::get('/tarif', [App\Http\Controllers\HomeController::class, 'tarif'])->name('tarif');
Route::post('/tarif', [App\Http\Controllers\HomeController::class, 'process_tarif'])->name('tarif.process');

// Jadwal Kapal
Route::get('/jadwalkapal', [App\Http\Controllers\HomeController::class, 'jadwal_kapal'])->name('jadwalkapal');
Route::post('/jadwalkapal', [App\Http\Controllers\HomeController::class, 'process_jadwal_kapal'])->name('jadwalkapal.process');

// Kartu Setia
Route::get('/kartusetia', [App\Http\Controllers\HomeController::class, 'kartu_setia'])->name('kartusetia');

// Kontak
Route::get('/kontak', [App\Http\Controllers\HomeController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [App\Http\Controllers\HomeController::class, 'store_pesan'])->name('store.pesan');

// Karir
Route::get('/karir', [App\Http\Controllers\HomeController::class, 'karir'])->name('karir');

// Hitung volume
Route::get('/volume', [App\Http\Controllers\HomeController::class, 'volume'])->name('volume');

// Syarat dan Ketentuan
Route::get('/ketentuan', [App\Http\Controllers\HomeController::class, 'ketentuan'])->name('ketentuan');

// Get Harga
Route::post('/getHarga/{kota_asal}/{kota_tujuan}/{pengiriman}', [App\Http\Controllers\HomeController::class, 'getHarga'])->name('getHarga');

// Get Resi
Route::post('/getResi/{resi}', [App\Http\Controllers\HomeController::class, 'getResi'])->name('getResi');

// Get Jadwal
Route::post('/getJadwalKapal/{rute}', [App\Http\Controllers\HomeController::class, 'getJadwalKapal'])->name('getJadwalKapal');

// Admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('blog')->group(function () {
        Route::resource('kategori', KategoriController::class);
        Route::resource('postingan', PostinganController::class);
        Route::resource('pesan', PesanController::class);
    });
});
