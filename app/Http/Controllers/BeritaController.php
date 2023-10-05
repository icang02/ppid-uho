<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(6);
        // dd($berita);

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
}
