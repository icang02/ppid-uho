<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    public function index()
    {
        $jenisInformasi = Landing::where('bagian', 'jenis informasi')->get();
        $tataCara = Landing::where('bagian', 'tata cara permohonan')->get();
        $formulir = Landing::where('bagian', 'formulir')->get()->first();
        $qoutes = Landing::where('bagian', 'qoutes')->get()->first();
        $ppid = Landing::where('bagian', 'ppid')->get()->first();

        if (Berita::all()->isNotEmpty()) {
            $berita = Berita::where('kategori', 'berita')->take(6)->orderBy('tanggal', 'DESC')->get();
        } else {
            $berita = collect([]);
        }
        // dd($footer);

        return view('home.home', [
            'jenisInformasi' => $jenisInformasi,
            'tataCara' => $tataCara,
            'formulir' => $formulir,
            'qoutes' => $qoutes,
            'berita' => $berita,
            'ppid' => $ppid,
        ]);
    }

    // DASHBOARD METHOD
    public function data()
    {
        if (request()->is('dashboard/landing/ppid')) {
            $ppid = Landing::where('bagian', 'ppid')->get()->first();
            return view('admin.landing.ppid', [
                'ppid' => $ppid,
            ]);
        }
        if (request()->is('dashboard/landing/infografis')) {
            $infografis = Landing::where('bagian', 'tata cara permohonan')->get();
            return view('admin.landing.infografis', [
                'info' => $infografis,
            ]);
        }
        if (request()->is('dashboard/landing/permohonan')) {
            $formulir = Landing::where('bagian', 'formulir')->get()->first();
            return view('admin.landing.permohonan', [
                'formulir' => $formulir,
            ]);
        }
        if (request()->is('dashboard/landing/slogan')) {
            $qoutes = Landing::where('bagian', 'qoutes')->get()->first();
            return view('admin.landing.slogan', [
                'quotes' => $qoutes,
            ]);
        }
        if (request()->is('dashboard/footer')) {
            $infografis = Landing::where('bagian', 'footer')->get();
            return view('admin.landing.footer', [
                'info' => $infografis,
            ]);
        }
    }


    public function update(Request $request)
    {
        if (request()->is('landing/ppid/update')) {
            $data = Landing::where('bagian', 'ppid')->get()->first();
        }
        if (request()->is('landing/quotes/update')) {
            $data = Landing::where('bagian', 'qoutes')->get()->first();
        }
        if (request()->is('landing/permohonan/update')) {
            $data = Landing::where('bagian', 'formulir')->get()->first();
        }
        if (request()->is('landing/infografis/update')) {
            $data = Landing::find($request->id);

            $imgPath = $data->gambar;
            if ($request->has('img')) {
                Storage::delete(str_replace('storage/', '', $imgPath));
                $imgPath = 'storage/' . $request->file('img')->store('img');
            }
        }
        if (request()->is('dashboard/footer')) {
            $data = Landing::find($request->id);
        }

        $data->update([
            'judul' => ucfirst($request->judul),
            'isi' => $request->isi ?? null,
            'gambar' => $imgPath ?? null,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }
}
