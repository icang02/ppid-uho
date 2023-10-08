<?php

namespace App\Http\Controllers;

use App\Formulir;
use App\InformasiPublik;
use App\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function index()
    {
        if (request()->is('tentang/profil')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Profil</span>';
        }
        if (request()->is('tentang/visi-misi')) {
            $tentang = Landing::where('bagian', 'visi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Visi & Misi</span>';
        }
        if (request()->is('tentang/tugas-fungsi')) {
            $tentang = Landing::where('bagian', 'tugas')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Tugas & Fungsi</span>';
        }
        if (request()->is('tentang/struktur-ppid')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('regulasi')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Regulasi</span>';
        }

        return view('home.formulir', [
            'breadcumb' => $breadcumb,
            'data' => $tentang,
        ]);
    }

    public function indexAdmin()
    {
        // BAGIAN TENTANG
        if (request()->is('dashboard/tentang/profil')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Tentang</li>
                          <li class="breadcrumb-item"><a href="/dashboard/tentang/profil">Profil</a></li>';
            $title = 'Profil';
        }
        if (request()->is('dashboard/tentang/visi-misi')) {
            $tentang = Landing::where('bagian', 'visi')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Tentang</li>
                          <li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item"><a href="/dashboard/tentang/visi-misi">Visi & Misi</a></li>';
            $title = 'Visi & Misi';
        }
        if (request()->is('dashboard/tentang/tugas-fungsi')) {
            $tentang = Landing::where('bagian', 'tugas')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Tentang</li>
                          <li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item"><a href="/dashboard/tentang/tugas-fungsi">Tugas & Fungsi</a></li>';
            $title = 'Tugas & Fungsi';
        }
        if (request()->is('dashboard/tentang/struktur-ppid')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Tentang</li>
                          <li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item"><a href="/dashboard/tentang/struktur-ppid">Struktur Organisasi</a></li>';
            $title = 'Struktur Organisasi';
        }
        if (request()->is('dashboard/regulasi')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Tentang</li>
                          <li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item"><a href="/dashboard/tentang/regulasi">Regulasi</a></li>';
            $title = 'Regulasi';
        }

        // BAGIAN FORMULIR PERMOHONAN
        if (request()->is('dashboard-formulir-permohonan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Formulir</li>
                          <li class="breadcrumb-item"><a href="/dashboard-formulir-permohonan-informasi-publik">Permohonan Informasi Publik</a></li>';
            $title = 'Permohonan Informasi Publik';
        }
        if (request()->is('dashboard-formulir-keberatan-layanan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Formulir</li>
                          <li class="breadcrumb-item"><a href="/dashboard-formulir-keberatan-layanan-informasi-publik">Keberatan Layanan Informasi Publik</a></li>';
            $title = 'Keberatan Layanan Informasi Publik';
        }
        if (request()->is('dashboard-formulir-penyelesaian-sengketa-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Formulir</li>
                          <li class="breadcrumb-item"><a href="/dashboard-formulir-penyelesaian-sengketa-informasi-publik">Penyelesaian Sengketa Informasi Publik</a></li>';
            $title = 'Penyelesaian Sengketa Informasi Publik';
        }

        return view('admin.tentang.profil', [
            'tentang' => $tentang,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function updateTentang(Request $request, $id)
    {
        if (request()->is('dashboard-formulir/update*')) {
            $tentang = Formulir::findOrFail($id);
        } else {
            $tentang = Landing::findOrFail($id);
        }

        // upload gambar
        if (request()->is('dashboard-formulir/update*')) {
            $tentang->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'link' => $request->link ?? null
            ]);
        } else {
            $imgPath = $tentang->gambar;
            if ($request->has('img')) {
                Storage::delete(str_replace('storage/', '', $imgPath));
                $imgPath = 'storage/' . $request->file('img')->store('img');
            }

            $tentang->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $imgPath ?? null
            ]);
        }

        return redirect()->back();
    }
}
