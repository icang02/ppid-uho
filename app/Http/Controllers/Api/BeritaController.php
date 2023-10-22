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
            return Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->get();
        }
        return Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->get();
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return $berita ?? [];
    }

    public function search($keyword)
    {
        if (request()->is('api/berita/search/info-serta-merta*')) {
            $berita = Berita::where('kategori', 'informasi serta merta')->where('judul', 'like', '%' . $keyword . '%')->get();
        } else {
            $berita = Berita::where('kategori', 'berita')->where('judul', 'like', '%' . $keyword . '%')->get();
        }
        return $berita ?? [];
    }
}
