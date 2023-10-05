<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        if (request()->has('search')) {
            $berita = Berita::where('judul', 'like', '%' . request()->search . '%')->paginate(6);
        } else {
            request()->is('berita*') ?
                $berita = Berita::where('kategori', 'berita')->paginate(6) :
                $berita = Berita::where('kategori', 'informasi serta merta')->paginate(6);
        }


        return view('home.berita', [
            'berita' => $berita
        ]);
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->get()->first();
        if ($berita)
            $berita->increment('view');

        return view('home.detail_berita', [
            'berita' => $berita
        ]);
    }

    public function searchBerita(Request $request)
    {
        dd($request->search);
    }
}
