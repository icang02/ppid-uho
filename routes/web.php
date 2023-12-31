<?php

// import all facades

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


// route symlink
Route::get('/link', function () {

    $target = $_SERVER['DOCUMENT_ROOT'] . "/auth/1-ppid/storage/app/public";
    $link = $_SERVER['DOCUMENT_ROOT'] . "/auth/storage";

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


// Route::get('/', [LandingController::class, 'index']);


// Route::get('/berita', [BeritaController::class, 'index'])->name('index_berita');
// Route::get('/berita/{slug}', [BeritaController::class, 'detail']);
// Route::get('/search-berita', [BeritaController::class, 'searchBerita']);
// Route::post('/update-view/{id}', [BeritaController::class, 'updateView']);


// Route::get('/informasi-publik/informasi-berkala', [InformasiPublikController::class, 'indexInformasiBerkala'])->name('info_berkala');
// Route::get('/informasi-publik/informasi-tersedia-setiap-saat', [InformasiPublikController::class, 'indexInformasiBerkala'])->name('info_setiap_saat');
// Route::get('/informasi-publik/informasi-serta-merta', [BeritaController::class, 'index'])->name('info_serta_merta');
// Route::get('/informasi-publik/informasi-dikecualikan', [InformasiPublikController::class, 'indexInformasiBerkala'])->name('infO_dikecualikan');

// Route::get('/formulir/permohonan-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_permohonan');
// Route::get('/formulir/keberatan-layanan-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_keberatan');
// Route::get('/formulir/penyelesaian-sengketa-informasi-publik', [FormulirController::class, 'indexFormulir'])->name('form_sengketa');

// Route::get('/tentang/profil', [TentangController::class, 'index'])->name('tentang_profil');
// Route::get('/tentang/visi-misi', [TentangController::class, 'index'])->name('tentang_visi_misi');
// Route::get('/tentang/tugas-fungsi', [TentangController::class, 'index'])->name('tentang_tugas_fungsi');
// Route::get('/tentang/struktur-ppid', [TentangController::class, 'index'])->name('tentang_struktur_ppid');
// Route::get('/regulasi', [TentangController::class, 'index'])->name('regulasi');

// Route::get('/laporan/akses-informasi-publik', [LaporanController::class, 'index'])->name('laporan_akses');
// Route::get('/laporan/layanan-informasi-publik', [LaporanController::class, 'index'])->name('laporan_layanan');
// Route::get('/laporan/survei-layanan-informasi', [LaporanController::class, 'index'])->name('laporan_survei');


// route index dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// route dashboard edit landing page
Route::get('/dashboard/landing/ppid', [LandingController::class, 'data'])->middleware('auth');
Route::get('/dashboard/landing/permohonan', [LandingController::class, 'data'])->middleware('auth');
Route::get('/dashboard/landing/slogan', [LandingController::class, 'data'])->middleware('auth');
Route::get('/dashboard/landing/infografis', [LandingController::class, 'data'])->middleware('auth');

Route::get('/dashboard/footer', [LandingController::class, 'data'])->name('admin_footer')->middleware('auth');

Route::post('/landing/ppid/update', [LandingController::class, 'update']);
Route::post('/landing/permohonan/update', [LandingController::class, 'update']);
Route::post('/landing/quotes/update', [LandingController::class, 'update']);
Route::post('/landing/infografis/update', [LandingController::class, 'update']);
Route::post('/dashboard/footer', [LandingController::class, 'update'])->name('admin_update_footer')->middleware('auth');


// route dashboard tentang
Route::get('/dashboard/tentang/profil', [TentangController::class, 'indexAdmin'])->name('tentang_profile_admin')->middleware('auth');
Route::get('/dashboard/tentang/visi-misi', [TentangController::class, 'indexAdmin'])->name('tentang_visi_misi_admin')->middleware('auth');
Route::get('/dashboard/tentang/tugas-fungsi', [TentangController::class, 'indexAdmin'])->name('tentang_tugas_fungsi_admin')->middleware('auth');
Route::get('/dashboard/tentang/struktur-ppid', [TentangController::class, 'indexAdmin'])->name('tentang_struktur_ppid_admin')->middleware('auth');
Route::get('/dashboard/regulasi', [TentangController::class, 'indexAdmin'])->name('regulasi_dashboard')->middleware('auth');

Route::put('/dashboard/tentang/profil/update/{id}', [TentangController::class, 'updateTentang'])->name('update_tentang')->middleware('auth');


// route dashboard formulir
Route::get('/dashboard-formulir-permohonan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_permohonan')->middleware('auth');
Route::get('/dashboard-formulir-keberatan-layanan-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_keberatan')->middleware('auth');
Route::get('/dashboard-formulir-penyelesaian-sengketa-informasi-publik', [TentangController::class, 'indexAdmin'])->name('formulir_sengketa')->middleware('auth');

Route::put('/dashboard-formulir/update/{id}', [TentangController::class, 'updateTentang'])->name('update_formulir')->middleware('auth');


// route dashboard berita
Route::get('/dashboard/berita', [BeritaController::class, 'indexAdmin'])->name('admin_berita')->middleware('auth');
Route::post('/dashboard/berita/add', [BeritaController::class, 'addAdmin'])->name('admin_add_berita')->middleware('auth');
Route::put('/dashboard/berita/update/{id}', [BeritaController::class, 'updateAdmin'])->name('admin_update_berita')->middleware('auth');
Route::delete('/dashboard/berita/delete/{id}', [BeritaController::class, 'deleteAdmin'])->name('admin_delete_berita')->middleware('auth');


// ROUTE DASHBOARD INFORMASI PUBLIK
Route::get('/dashboard/informasi/informasi-berkala', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_berkala')->middleware('auth');
Route::get('/dashboard/informasi/informasi-setiap-saat', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_setiap_saat')->middleware('auth');
Route::get('/dashboard/informasi/informasi-dikecualikan', [InformasiPublikController::class, 'indexAdmin'])->name('admin_informasi_dikecualikan')->middleware('auth');
Route::get('/dashboard/informasi/informasi-serta-merta', [BeritaController::class, 'indexAdmin'])->name('admin_informasi_serta_merta')->middleware('auth');
Route::put('/dashboard/informasi-publik/update/{id}', [InformasiPublikController::class, 'update'])->name('admin_update_informasi_publik')->middleware('auth');

Route::get('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'listInformasi'])->name('admin_list_informasi_publik')->middleware('auth');
Route::post('/dashboard/informasi/list-informasi/add', [InformasiPublikController::class, 'addListInformasi'])->name('admin_add_list_informasi_publik')->middleware('auth');
Route::put('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'updateListInformasi'])->name('admin_update_list_informasi_publik')->middleware('auth');
Route::delete('/dashboard/informasi/list-informasi/{data}', [InformasiPublikController::class, 'deleteListInformasi'])->name('admin_delete_list_informasi_publik')->middleware('auth');


// ROUTE LAPORAN BIASA
Route::get('/dashboard/laporan/akses-informasi-publik', [LaporanController::class, 'indexAdmin1'])->name('admin_laporan_akses')->middleware('auth');
Route::post('/dashboard/laporan/akses-informasi-publik/add', [LaporanController::class, 'addLaporanAkses'])->name('admin_add_laporan_akses')->middleware('auth');
Route::post('/dashboard/laporan/akses-informasi-publik/update/{id}', [LaporanController::class, 'updateLaporanAkses'])->name('admin_update_laporan_akses')->middleware('auth');
Route::get('/dashboard/laporan/akses-informasi-publik/{tahun}', [LaporanController::class, 'imgLaporanAkses'])->name('admin_img_laporan_akses')->middleware('auth');
Route::get('/dashboard/laporan/akses-informasi-publik/delete/{id}', [LaporanController::class, 'imgDeleteLaporanAkses'])->name('admin_img_laporan_akses_delete')->middleware('auth');

Route::get('/dashboard/laporan/layanan-informasi-publik', [LaporanController::class, 'indexAdmin'])->name('admin_laporan_layanan')->middleware('auth');
Route::get('/dashboard/laporan/survei-layanan-informasi', [LaporanController::class, 'indexAdmin'])->name('admin_laporan_survei')->middleware('auth');

Route::get('/dashboard/laporan/delete/{id}', [LaporanController::class, 'deleteAdmin'])->name('admin_laporan_delete')->middleware('auth');
Route::get('/dashboard/laporan-akses/delete/{id}', [LaporanController::class, 'deleteLaporanAkses'])->name('admin_laporan_gambar_delete')->middleware('auth');
Route::put('/dashboard/laporan/update/{id}', [LaporanController::class, 'updateAdmin'])->name('admin_laporan_update')->middleware('auth');
Route::post('/dashboard/laporan/add', [LaporanController::class, 'addAdmin'])->name('admin_laporan_add')->middleware('auth');


// ROUTE LOGIN
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
