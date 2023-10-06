<?php

// import all facades

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/link', function () {

    $target = $_SERVER['DOCUMENT_ROOT'] . "/zppid/storage/app/public";
    $link = $_SERVER['DOCUMENT_ROOT'] . "/storage";

    if (symlink($target, $link)) {
        echo "OK symlink done..";
    } else {
        echo "Gagal..";
    }
});

// route
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

Route::get('/tentang/profil', function () {
    return view('home.profil', [
        'breadcumb' => '<span class="txt-kuning">Profil</span>'
    ]);
});
Route::get('/tentang/visi-misi', function () {
    return view('home.visi-misi', [
        'breadcumb' => '<span class="txt-kuning">Visi & Misi</span>'
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



//routeee tentangggggggg
Route::get('/dashboard/tentang/profile', function () {
    return view('admin.tentang/profil');
});
Route::get('/dashboard/tentang/visi-misi', function () {
    return view('admin.tentang/visi-misi');
});
Route::get('/dashboard/tentang/tugas-fungsi', function () {
    return view('admin.tentang/tugas-fungsi');
});
Route::get('/dashboard/tentang/struktur-organisasi', function () {
    return view('admin.tentang/struktur-organisasi');
});



//route beritaaaa
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


//route formulirrrr

Route::get('/dashboard/formulir/formulir-publik', function () {
    return view('admin.formulir.formulir-publik');
});
Route::get('/dashboard/formulir/formulir-keberatan', function () {
    return view('admin.formulir.formulir-keberatan');
});
Route::get('/dashboard/formulir/formulir-sengketa', function () {
    return view('admin.formulir/formulir-sengketa');
});

//route regulasiii

Route::get('/dashboard/regulasi', function () {
    return view('admin.regulasi');
});



//route informasi

Route::get('/dashboard/informasi/informasi-berkala', function () {
    return view('admin.informasi.informasi-berkala');
});
Route::get('/dashboard/informasi/informasi-saat', function () {
    return view('admin.informasi.informasi-saat');
});
Route::get('/dashboard/informasi/informasi-merta', function () {
    return view('admin.informasi/informasi-merta');
});


//route data informasi

Route::get('/dashboard/informasi/data-informasi-berkala', function () {
    return view('admin.informasi.data-informasi.data-informasi-berkala');
});
Route::get('/dashboard/informasi/data-informasi-saat', function () {
    return view('admin.informasi.data-informasi.data-informasi-saat');
});


//route edit landingpage
Route::get('/dashboard/landing/ppid', function () {
    return view('admin.landing.ppid');
});
Route::get('/dashboard/landing/permohonan', function () {
    return view('admin.landing.permohonan');
});
Route::get('/dashboard/landing/infografis', function () {
    return view('admin.landing.infografis');
});
Route::get('/dashboard/landing/slogan', function () {
    return view('admin.landing.slogan');
});
Route::get('/dashboard/landing/sponsor', function () {
    return view('admin.landing.sponsor');
});

//route loginnnnnnn
Route::get('/auth', function () {
    return view('admin.auth/login');
});
