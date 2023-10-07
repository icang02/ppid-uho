<?php

// import all facades

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


// route symlink
Route::get('/link', function () {

    $target = $_SERVER['DOCUMENT_ROOT'] . "/zppid/storage/app/public";
    $link = $_SERVER['DOCUMENT_ROOT'] . "/storage";

    if (symlink($target, $link)) {
        echo "OK symlink done..";
    } else {
        echo "Gagal..";
    }
});

// route migration
Route::get('/fresh', function () {
    return Artisan::call('migrate:fresh');
});
Route::get('/seed', function () {
    return Artisan::call('migrate:fresh --seed');
});

Route::get('/', [LandingController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index'])->name('index_berita');
Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
Route::get('/search-berita', [BeritaController::class, 'searchBerita']);


Route::get('/informasi-publik/informasi-berkala', [InformasiPublikController::class, 'indexInformasiBerkala'])->name('info_berkala');
Route::get('/informasi-publik/informasi-tersedia-setiap-saat', [InformasiPublikController::class, 'indexInformasiBerkala'])->name('info_setiap_saat');
Route::get('/informasi-publik/informasi-serta-merta', [BeritaController::class, 'index'])->name('info_serta_merta');

Route::get('/formulir/permohonan-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_permohonan');
Route::get('/formulir/keberatan-layanan-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_keberatan');
Route::get('/formulir/penyelesaian-sengketa-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_sengketa');

Route::get('/tentang/profil', [TentangController::class, 'index'])->name('tentang_profil');
Route::get('/tentang/visi-misi', [TentangController::class, 'index'])->name('tentang_visi_misi');
Route::get('/tentang/tugas-fungsi', [TentangController::class, 'index'])->name('tentang_tugas_fungsi');
Route::get('/tentang/struktur-ppid', [TentangController::class, 'index'])->name('tentang_struktur_ppid');
Route::get('/regulasi', [TentangController::class, 'index'])->name('regulasi');



// route index dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


// route dashboard tentang
Route::get('/dashboard/tentang/profil', [TentangController::class, 'indexAdmin'])->name('tentang_profile_admin');
Route::get('/dashboard/tentang/visi-misi', [TentangController::class, 'indexAdmin'])->name('tentang_visi_misi_admin');
Route::get('/dashboard/tentang/tugas-fungsi', [TentangController::class, 'indexAdmin'])->name('tentang_tugas_fungsi_admin');
Route::get('/dashboard/tentang/struktur-ppid', [TentangController::class, 'indexAdmin'])->name('tentang_struktur_ppid_admin');

Route::put('/dashboard/tentang/profil/update/{tentang}', [TentangController::class, 'updateTentang'])->name('update_tentang');


// route dashboard berita
Route::get('/dashboard/berita', function () {
    return view('admin.berita/berita');
});
Route::get('/dashboard/form-berita', function () {
    return view('admin.berita.form-berita');
});
Route::get('/dashboard/edit-berita', function () {
    return view('admin.berita.edit-berita');
});
Route::get('/dashboard/detail-berita', function () {
    return view('admin.berita.detail-berita');
});

// route dashboard formulir
Route::get('/dashboard/formulir/formulir-publik', function () {
    return view('admin.formulir.formulir-publik');
});
Route::get('/dashboard/formulir/formulir-keberatan', function () {
    return view('admin.formulir.formulir-keberatan');
});
Route::get('/dashboard/formulir/formulir-sengketa', function () {
    return view('admin.formulir/formulir-sengketa');
});

// route dashboard regulasi
Route::get('/dashboard/regulasi', function () {
    return view('admin.regulasi');
});



// route dashboard informasi publik
Route::get('/dashboard/informasi/informasi-berkala', function () {
    return view('admin.informasi.informasi-berkala');
});
Route::get('/dashboard/informasi/informasi-saat', function () {
    return view('admin.informasi.informasi-saat');
});
Route::get('/dashboard/informasi/informasi-merta', function () {
    return view('admin.informasi/informasi-merta');
});


// route dashboard list data informasi publik
Route::get('/dashboard/informasi/data-informasi-berkala', function () {
    return view('admin.informasi.data-informasi.data-informasi-berkala');
});
Route::get('/dashboard/informasi/data-informasi-saat', function () {
    return view('admin.informasi.data-informasi.data-informasi-saat');
});

// route dashboard edit landing page
Route::get('/dashboard/landing/ppid', [LandingController::class, 'data']);
Route::get('/dashboard/landing/permohonan', [LandingController::class, 'data']);
Route::get('/dashboard/landing/slogan', [LandingController::class, 'data']);
Route::get('/dashboard/landing/infografis', [LandingController::class, 'data']);

Route::post('/landing/ppid/update', [LandingController::class, 'update']);
Route::post('/landing/permohonan/update', [LandingController::class, 'update']);
Route::post('/landing/quotes/update', [LandingController::class, 'update']);
Route::post('/landing/infografis/update', [LandingController::class, 'update']);

Route::get('/dashboard/landing/sponsor', function () {
    return view('admin.landing.sponsor');
});

//route loginnnnnnn
Route::get('/auth', function () {
    return view('admin.auth/login');
});
