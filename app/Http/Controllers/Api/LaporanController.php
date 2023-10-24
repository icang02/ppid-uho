<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImgLaporanGambar;
use App\Laporan;
use App\LaporanGambar;

class LaporanController extends Controller
{
    public function laporanLayanan()
    {
        $data = Laporan::select('link', 'tahun', 'gambar')->orderBy('tahun', 'desc')->get();
        return $data;
    }

    public function laporanAkses($tahun)
    {
        $laporan = Laporan::where('tahun', $tahun)->first();
        $data = LaporanGambar::orderBy('tahun', 'desc')->get();

        if ($data) {
            $dataGambar = ImgLaporanGambar::where('tahun', $laporan->tahun)->get();
        }

        $combinedData = [
            'laporan' => ['data' => $laporan, 'data_gambar' => $dataGambar],
            'list_tahun' => $data,
        ];

        return $combinedData;
    }
}
