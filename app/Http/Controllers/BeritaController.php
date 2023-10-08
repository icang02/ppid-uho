<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

        if ($berita) {
            $berita->increment('view');

            $berita->kategori == 'berita' ?
                $breadcumb = '<a href="/berita" class="text-dark">Berita & Informasi</a>&nbsp;>&nbsp;<span class="txt-kuning">Detail<span>' :
                $breadcumb = '<a href="/informasi-publik/informasi-serta-merta" class="text-dark">Informasi Serta Merta</a>&nbsp;>&nbsp;<span class="txt-kuning">Detail<span>';
        }

        return view('home.detail_berita', [
            'berita' => $berita,
            'breadcumb' => $breadcumb
        ]);
    }

    // INDEX ADMIN BERITA
    public function indexAdmin()
    {
        if (request()->is('dashboard/berita')) {
            $data = Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item"><a href="/dashboard/berita">Berita & Informasi</a></li>';
            $title = 'Berita & Informasi';
        } else {
            $data = Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Informasi Publik</li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/informasi-serta-merta">Informasi Serta Merta</a></li>';
            $title = 'Informasi Serta Merta';
        }

        return view('admin.berita.berita', [
            'data' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function addAdmin(Request $request)
    {
        if (request()->is('dashboard/berita')) {
            $kategori = 'berita';
        } else {
            $kategori = 'informasi serta merta';
        }

        $request->validate([
            'isi' => 'required',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.'
        ]);
        $request->has('gambar') ? $imgPath = 'storage/' .  $request->file('gambar') : $imgPath = null;

        Berita::create([
            'kategori' => $kategori,
            'judul' => ucfirst($request->judul),
            'slug' => Str::slug($request->judul),
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $imgPath,
        ]);

        return redirect()->back();
    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.'
        ]);

        $data = Berita::findOrFail($id);
        $imgPath = $data->gambar;
        if ($request->has('gambar')) {
            Storage::delete(str_replace('storage/', '', $imgPath));
            $imgPath = 'storage/' . $request->file('gambar')->store('img');
        }
        $data->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $imgPath
        ]);

        return redirect()->back();
    }

    public function deleteAdmin($id)
    {
        $data = Berita::find($id);
        Storage::delete(str_replace('storage/', '', $data->gambar));
        $data->delete();
        return redirect()->back();
    }
}
