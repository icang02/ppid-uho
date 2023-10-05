<?php

// import all facades

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



// route
Route::get('/seed', function () {
    return Artisan::call('migrate:fresh --seed');
});

Route::get('/', [LandingController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/search-berita', [BeritaController::class, 'searchBerita']);


Route::get('/informasi-publik/informasi-berkala', [InformasiPublikController::class, 'indexInformasiBerkala']);
Route::get('/informasi-publik/informasi-tersedia-setiap-saat', [InformasiPublikController::class, 'indexInformasiBerkala']);
Route::get('/informasi-publik/informasi-serta-merta', [BeritaController::class, 'index']);

Route::get('/formulir/permohonan-informasi-publik', [FormulirController::class, 'indexFormulir']);
Route::get('/formulir/keberatan-atas-layanan-informasi-publik', [FormulirController::class, 'indexFormulir']);
Route::get('/formulir/penyelesaian-sengketa-informsi', [FormulirController::class, 'indexFormulir']);

Route::get('/tentang/profil', function () {
    return view('home.profil');
});
Route::get('/tentang/visi-misi', function () {
    return view('home.visi-misi');
});
