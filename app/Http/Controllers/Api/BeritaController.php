<?php

namespace App\Http\Controllers\Api;

use App\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        if (request()->is('api/informasi-publik/serta-merta')) {
            return Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->take(6)->get();
        }
        return Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->take(6)->get();
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return $berita ?? [];
    }
}
