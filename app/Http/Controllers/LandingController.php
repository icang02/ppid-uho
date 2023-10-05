<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $jenisInformasi = Landing::where('bagian', 'jenis informasi')->get();
        $tataCara = Landing::where('bagian', 'tata cara permohonan')->get();
        $formulir = Landing::where('bagian', 'formulir')->get()->first();
        $qoutes = Landing::where('bagian', 'qoutes')->get()->first();

        if (Berita::all()->isNotEmpty()) {
            $berita = Berita::where('kategori', 'berita')->take(6)->orderBy('tanggal', 'DESC')->get();
        } else {
            $berita = null;
        }
        // dd($berita);

        return view('home.home', [
            'jenisInformasi' => $jenisInformasi,
            'tataCara' => $tataCara,
            'formulir' => $formulir,
            'qoutes' => $qoutes,
            'berita' => $berita,
        ]);
    }
}
