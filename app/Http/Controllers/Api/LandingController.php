<?php

namespace App\Http\Controllers\Api;

use App\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Landing;

class LandingController extends Controller
{
    // METHOD HALAMAN LANDING
    public function index()
    {
        return Landing::whereNotIn('bagian', ['visi', 'tugas', 'regulasi', 'struktur', 'profil'])->get();
    }

    public function ppid()
    {
        return Landing::select('isi')->where('bagian', 'ppid')->first();
    }

    public function jenisInformasi()
    {
        return Landing::select('judul', 'isi', 'gambar', 'link')->where('bagian', 'jenis informasi')->get();
    }

    public function tataCara()
    {
        return Landing::select('judul', 'gambar')->where('bagian', 'tata cara permohonan')->get();
    }

    public function formulir()
    {
        return Landing::select('judul', 'isi', 'gambar')->where('bagian', 'formulir')->first();
    }

    public function slogan()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'qoutes')->first();
    }

    public function footer()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'footer')->get();
    }

    public function berita()
    {
        return Berita::where('kategori', 'berita')->take(6)->orderBy('tanggal', 'desc')->get();
    }

    public function cardNews()
    {
        return Berita::where('kategori', 'berita')->take(4)->orderBy('tanggal', 'desc')->get();
    }

    // METHOD HALAMAN TENTANG
    public function profil()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'profil')->first();
    }

    public function visiMisi()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'visi')->first();
    }
    public function tugasFungsi()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'tugas')->first();
    }
    public function strukturPPID()
    {
        return Landing::select('judul', 'isi', 'gambar')->where('bagian', 'struktur')->first();
    }
    public function regulasi()
    {
        return Landing::select('judul', 'isi')->where('bagian', 'regulasi')->first();
    }
}
