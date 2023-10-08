<?php

namespace App\Http\Controllers;

use App\InformasiPublik;
use App\ListInformasiPublik;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function indexInformasiBerkala()
    {
        if (request()->is('informasi-publik/informasi-berkala')) {
            $informasiPublik = InformasiPublik::find(1);
            $breadcumb = '<span class="txt-kuning">Informasi Berkala</span>';
        } elseif (request()->is('informasi-publik/informasi-tersedia-setiap-saat')) {
            $informasiPublik = InformasiPublik::find(2);
            $breadcumb = '<span class="txt-kuning">Informasi Tersedia Setiap Saat</span>';
        }

        return view('home.formulir', [
            'data' => $informasiPublik,
            'breadcumb' => $breadcumb,
        ]);
    }

    public function indexAdmin()
    {
        if (request()->is('dashboard/informasi/informasi-berkala')) {
            $data = InformasiPublik::find(1);
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Informasi Publik</li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/informasi-berkala">Informasi Berkala</a></li>';
            $title = 'Informasi Berkala';
        } else if (request()->is('dashboard/informasi/informasi-setiap-saat')) {
            $data = InformasiPublik::find(2);
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Informasi Publik</li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/informasi-setiap-saat">Informasi Tersedia Setiap Saat</a></li>';
            $title = 'Informasi Tersedia Setiap Saat';
        }

        return view('admin.tentang.profil', [
            'tentang' => $data,
            'breadcumb' => $breadcumb,
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = InformasiPublik::findOrFail($id);
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect()->back();
    }

    public function listInformasi(InformasiPublik $data)
    {
        $id = $data->id;
        if ($id == 1) {
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Informasi Publik</li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/informasi-berkala">Informasi Berkala</a></li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/list-informasi/' . $id . '">List Informasi</a></li>';
        } else {
            $breadcumb = '<li class="breadcrumb-item">Menu Utama</li>
                          <li class="breadcrumb-item">Informasi Publik</li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/informasi-setiap-saat">Informasi Tersedia Setiap Saat</a></li>
                          <li class="breadcrumb-item"><a href="/dashboard/informasi/list-informasi/' . $id . '">List Informasi</a></li>';
        }


        return view('admin.informasi-publik.list-informasi-publik', [
            'data' => $data,
            'breadcumb' => $breadcumb,
        ]);
    }

    public function addListInformasi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'isi' => 'required',
        ], [
            'isi.required' => 'Field isi tidak boleh kosong.',
        ]);

        ListInformasiPublik::create([
            'informasi_publik_id' => $request->informasi_publik_id,
            'judul' => ucfirst($request->judul),
            'isi' => $request->isi,
        ]);

        return redirect()->back();
    }

    public function updateListInformasi(Request $request, $id)
    {
        $data = ListInformasiPublik::findOrFail($id);
        // dd($data);
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect()->back();
    }
    public function deleteListInformasi(Request $request, $id)
    {
        $data = ListInformasiPublik::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }
}
