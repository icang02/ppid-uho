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
            $breadcumb = '<span class="txt-kuning">Berita & Informasi</span>';
        } else {
            if (request()->is('berita*')) {
                $berita = Berita::where('kategori', 'berita')->paginate(6);
                $breadcumb = '<span class="txt-kuning">Berita & Informasi</span>';
            } else {
                $berita = Berita::where('kategori', 'informasi serta merta')->paginate(6);
                $breadcumb = '<span class="txt-kuning">Informasi Serta Merta</span>';
            }
        }


        return view('home.berita', [
            'berita' => $berita,
            'breadcumb' => $breadcumb
        ]);
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->get()->first();
        $breadcumb = '<a href="/berita" class="text-dark">Berita & Informasi</a>&nbsp;>&nbsp;<span class="txt-kuning">Detail<span>';
        if ($berita)
            $berita->increment('view');

        return view('home.detail_berita', [
            'berita' => $berita,
            'breadcumb' => $breadcumb
        ]);
    }

    public function searchBerita(Request $request)
    {
        dd($request->search);
    }
}
