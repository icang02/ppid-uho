<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        // dd(request()->path() == 'berita');

        if (request()->has('search')) {
            if (request()->path() == 'berita') {
                $berita = Berita::where('kategori', 'berita')->where('judul', 'like', '%' . request()->search . '%')->paginate(6);
                $breadcumb = '<span class="txt-kuning">Berita & Informasi</span>';
            } else {
                $berita = Berita::where('kategori', 'informasi serta merta')->where('judul', 'like', '%' . request()->search . '%')->paginate(6);
                $breadcumb = '<span class="txt-kuning">Informasi Serta Merta</span>';
            }
            if (request()->search == null && request()->is('berita*')) {
                return redirect()->route('index_berita');
            } elseif (request()->search == null && request()->is('informasi-publik*')) {
                return redirect()->route('info_serta_merta');
            }
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

        // if ($berita) {
        // $berita->increment('view');

        $berita->kategori == 'berita' ?
            $breadcumb = '<a href="/berita" class="text-dark">Berita & Informasi</a>&nbsp;>&nbsp;<span class="txt-kuning">Detail<span>' :
            $breadcumb = '<a href="/informasi-publik/informasi-serta-merta" class="text-dark">Informasi Serta Merta</a>&nbsp;>&nbsp;<span class="txt-kuning">Detail<span>';
        // }

        return view('home.detail_berita', [
            'berita' => $berita,
            'breadcumb' => $breadcumb
        ]);
    }

    public function updateView($id)
    {
        $data = Berita::find($id);
        $data->increment('view');
        return response()->json(['msg' => 'View berita bertambah.. id: ' . $id]);
    }

    // INDEX ADMIN BERITA
    public function indexAdmin()
    {
        if (request()->is('dashboard/berita')) {
            $data = Berita::where('kategori', 'berita')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_berita') . '">Berita & Informasi</a></li>'
            ];
            $title = 'Berita & Informasi';
        } else {
            $data = Berita::where('kategori', 'informasi serta merta')->orderBy('tanggal', 'desc')->paginate(10);
            $breadcumb = [
                '<li class="breadcrumb-item">Menu Utama</li>',
                '<li class="breadcrumb-item">Informasi Publik</li>',
                '<li class="breadcrumb-item"><a href="' . route('admin_informasi_serta_merta') . '">Informasi Serta Merta</a></li>'
            ];
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
        $request->validate([
            'isi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:1024',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.',
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
        ]);
        $imgPath = null;
        if ($request->has('gambar')) {
            $imgPath = 'storage/' .  $request->file('gambar')->store('img');
            // $request->file('gambar')->store('img');
        }

        // dd($request->all());
        Berita::create([
            'kategori' => 'informasi serta merta',
            'judul' => ucfirst($request->judul),
            'slug' => Str::slug($request->judul),
            'tanggal' => $request->tanggal,
            'penulis' => $request->penulis,
            'isi' => $request->isi,
            'gambar' => $imgPath,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|max:1024',
        ], [
            'isi.required' => 'Isi berita / informasi tidak boleh kosong.',
            'gambar.mimes' => 'Upload file dengan format jpeg, jpg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 1Mb.',
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

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    public function deleteAdmin($id)
    {
        $data = Berita::find($id);
        Storage::delete(str_replace('storage/', '', $data->gambar));
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');;
    }
}
