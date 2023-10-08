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
        } else if (request()->is('dashboard/informasi/informasi-setiap-saat')) {
            $data = InformasiPublik::find(2);
        } else if (request()->is('dashboard/informasi/informasi-serta-merta')) {
            $data = InformasiPublik::find(3);
        }

        // dd($data);

        return view('admin.tentang.profil', [
            'tentang' => $data,
            'breadcumb' => '-',
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
        return view('admin.informasi-publik.list-informasi-publik', [
            'data' => $data
        ]);
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
