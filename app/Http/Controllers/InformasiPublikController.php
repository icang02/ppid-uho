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
        } elseif (request()->is('informasi-publik/informasi-tersedia-setiap-saat')) {
            $informasiPublik = InformasiPublik::find(2);
        }
        $listInformasiPublik = $informasiPublik->list_informasi_publik;

        return view('home.informasi-publik', [
            'informasiPublik' => $informasiPublik,
            'listInformasiPublik' => $listInformasiPublik
        ]);
    }
}
