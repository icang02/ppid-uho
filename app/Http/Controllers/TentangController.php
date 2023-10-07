<?php

namespace App\Http\Controllers;

use App\Landing;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        if (request()->is('tentang/profil')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Profil</span>';
        }
        if (request()->is('regulasi')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Regulasi</span>';
        }
        if (request()->is('tentang/visi-misi')) {
            $visi = Landing::where('bagian', 'visi')->get()->first();
            $misi = Landing::where('bagian', 'misi')->get()->first();

            $tentang = collect([$visi, $misi]);
            $breadcumb =  '<span class="txt-kuning">Visi & Misi</span>';
        }
        if (request()->is('tentang/struktur-ppid')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('tentang/tugas-fungsi')) {
            $tugas = Landing::where('bagian', 'tugas')->get()->first();
            $fungsi = Landing::where('bagian', 'fungsi')->get()->first();

            $tentang = collect([$tugas, $fungsi]);
            $breadcumb =  '<span class="txt-kuning">Tugas & Fungsi</span>';
        }

        return view('home.profil', [
            'breadcumb' => $breadcumb,
            'tentang' => $tentang,
        ]);
    }

    public function indexAdmin()
    {
        if (request()->is('dashboard/tentang/profil')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Profil</span>';
        }
        if (request()->is('regulasi')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Regulasi</span>';
        }
        if (request()->is('dashboard/tentang/visi-misi')) {
            $visi = Landing::where('bagian', 'visi')->get()->first();
            $misi = Landing::where('bagian', 'misi')->get()->first();

            $tentang = collect([$visi, $misi]);
            $breadcumb =  '<span class="txt-kuning">Visi & Misi</span>';
        }
        if (request()->is('dashboard/tentang/struktur-ppid')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('dashboard/tentang/tugas-fungsi')) {
            $tugas = Landing::where('bagian', 'tugas')->get()->first();
            $fungsi = Landing::where('bagian', 'fungsi')->get()->first();

            $tentang = collect([$tugas, $fungsi]);
            $breadcumb =  '<span class="txt-kuning">Tugas & Fungsi</span>';
        }

        // dd($tentang);

        return view('admin.tentang/profil', [
            'tentang' => $tentang,
        ]);
    }

    public function updateTentang(Request $request, Landing $tentang)
    {
        dd(str_replace('\r\n', '<br>', $request->isi));
        $tentang->update([
            'judul' => $request->judul,
            'isi' => str_replace('\r\n', '<br>', $request->isi),
        ]);

        return redirect()->back();
    }
}
