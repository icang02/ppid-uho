<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LaporanController extends Controller
{
    public function index()
    {
        if (Route::currentRouteName() == 'laporan_layanan') {
            $data = '';
            $breadcumb =  '<span class="txt-kuning">Laporan Layanan Informasi Publik</span>';
        } elseif (Route::currentRouteName() == 'laporan_survei') {
            $data = '';
            $breadcumb =  '<span class="txt-kuning">Laporan Survei Layanan Informasi</span>';
        } else {
            $data = '';
            $breadcumb =  '<span class="txt-kuning">Laporan Akses Informasi Publik</span>';

            return view('home.laporan-gambar', [
                'data' => $data,
                'breadcumb' => $breadcumb
            ]);
        }

        return view('home.laporan', [
            'data' => $data,
            'breadcumb' => $breadcumb
        ]);
    }
}
