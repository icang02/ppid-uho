<?php

// import all facades

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// route dashboard edit landing page
Route::get('/dashboard/landing/ppid', [LandingController::class, 'data']);
Route::get('/dashboard/landing/permohonan', [LandingController::class, 'data']);
Route::get('/dashboard/landing/slogan', [LandingController::class, 'data']);
Route::get('/dashboard/landing/infografis', [LandingController::class, 'data']);

Route::get('/dashboard/footer', [LandingController::class, 'data'])->name('admin_footer');

Route::post('/landing/ppid/update', [LandingController::class, 'update']);
Route::post('/landing/permohonan/update', [LandingController::class, 'update']);
Route::post('/landing/quotes/update', [LandingController::class, 'update']);
Route::post('/landing/infografis/update', [LandingController::class, 'update']);
Route::post('/dashboard/footer', [LandingController::class, 'update'])->name('admin_update_footer');


// route dashboard tentang
Route::get('/dashboard/tentang/profil', [TentangController::class, 'indexAdmin'])->name('tentang_profile_admin');
Route::get('/dashboard/tentang/visi-misi', [TentangController::class, 'indexAdmin'])->name('tentang_visi_misi_admin');
Route::get('/dashboard/tentang/tugas-fungsi', [TentangController::class, 'indexAdmin'])->name('tentang_tugas_fungsi_admin');
Route::get('/dashboard/tentang/struktur-ppid', [TentangController::class, 'indexAdmin'])->name('tentang_struktur_ppid_admin');
Route::get('/dashboard/regulasi', [TentangController::class, 'indexAdmin'])->name('regulasi_dashboard');

Route::put('/dashboard/tentang/profil/update/{id}', [TentangController::class, 'updateTentang'])->name('update_tentang');


// route dashboard formulir
Route::get('/dashboard-formulir-permohonan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_permohonan');
Route::get('/dashboard-formulir-keberatan-layanan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_keberatan');
Route::get('/dashboard-formulir-penyelesaian-sengketa-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_sengketa');

Route::put('/dashboard-formulir/update/{id}', [TentangController::class, 'updateTentang'])->name('update_formulir');


// route dashboard berita
Route::get('/dashboard/berita', [BeritaController::class, 'indexAdmin'])->name('admin_berita');
Route::post('/dashboard/berita/add', [BeritaController::class, 'addAdmin'])->name('admin_add_berita');
Route::put('/dashboard/berita/update/{id}', [BeritaController::class, 'updateAdmin'])->name('admin_update_berita');
Route::delete('/dashboard/berita/delete/{id}', [BeritaController::class, 'deleteAdmin'])->name('admin_delete_berita');


// ROUTE DASHBOARD INFORMASI PUBLIK
Route::get('/dashboard/informasi/informasi-berkala', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_berkala');
Route::get('/dashboard/informasi/informasi-setiap-saat', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_setiap_saat');
Route::get('/dashboard/informasi/informasi-serta-merta', [BeritaController::class, 'indexAdmin'])->name('admin_informasi_serta_merta');
Route::put('/dashboard/informasi-publik/update/{id}', [InformasiPublikController::class, 'update'])->name('admin_update_informasi_publik');

Route::get('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'listInformasi'])->name('admin_list_informasi_publik');
Route::post('/dashboard/informasi/list-informasi/add', [InformasiPublikController::class, 'addListInformasi'])->name('admin_add_list_informasi_publik');
Route::put('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'updateListInformasi'])->name('admin_update_list_informasi_publik');
Route::delete('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'deleteListInformasi'])->name('admin_delete_list_informasi_publik');


// ROUTE LOGIN
Route::get('/admin', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
