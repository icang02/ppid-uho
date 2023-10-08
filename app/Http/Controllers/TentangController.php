<?php

namespace App\Http\Controllers;

use App\Formulir;
use App\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Prophecy\Doubler\LazyDouble;

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
        if (request()->is('dashboard/tentang/profil')) {
            $tentang = Landing::where('bagian', 'profil')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Profil</span>';
        }
        if (request()->is('dashboard/regulasi')) {
            $tentang = Landing::where('bagian', 'regulasi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Regulasi</span>';
        }
        if (request()->is('dashboard/tentang/visi-misi')) {
            $tentang = Landing::where('bagian', 'visi')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Visi & Misi</span>';
        }
        if (request()->is('dashboard/tentang/tugas-fungsi')) {
            $tentang = Landing::where('bagian', 'tugas')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Tugas & Fungsi</span>';
        }
        if (request()->is('dashboard/tentang/struktur-ppid')) {
            $tentang = Landing::where('bagian', 'struktur')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }

        if (request()->is('dashboard-formulir-permohonan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('dashboard-formulir-keberatan-layanan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('dashboard-formulir-penyelesaian-sengketa-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }

        if (request()->is('dashboard-formulir-permohonan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('dashboard-formulir-keberatan-layanan-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }
        if (request()->is('dashboard-formulir-penyelesaian-sengketa-informasi-publik')) {
            $tentang = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb =  '<span class="txt-kuning">Struktur PPID</span>';
        }

        return view('admin.tentang/profil', [
            'tentang' => $tentang,
        ]);
    }

    public function updateTentang(Request $request, $id)
    {
        if (request()->is('dashboard-formulir/update*')) {
            $tentang = Formulir::findOrFail($id);
        } else {
            $tentang = Landing::findOrFail($id);
        }

        // tambah div pas update
        if (strpos($request->isi, '<div')) {
            $isi = $request->isi;
        } else {
            $isi = '<div class="div">' . $request->isi . '</div>';
        }

        // upload gambar
        if (request()->is('dashboard-formulir/update*')) {
            $tentang->update([
                'judul' => $request->judul,
                'isi' => $isi,
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
                'isi' => $isi,
                'gambar' => $imgPath ?? null
            ]);
        }

        return redirect()->back();
    }
}
