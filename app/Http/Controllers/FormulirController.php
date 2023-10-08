<?php

namespace App\Http\Controllers;

use App\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function indexFormulir()
    {
        if (request()->is('formulir/permohonan-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb = '<span class="txt-kuning">Permohonan Informasi Publik</span>';
        } elseif (request()->is('formulir/keberatan-layanan-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb = '<span class="txt-kuning">Keberatan Layanan Informasi Publik</span>';
        } elseif (request()->is('formulir/penyelesaian-sengketa-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb = '<span class="txt-kuning">Penyelesaian Sengketa Informasi Publik</span>';
        }

        return view('home.formulir', [
            'data' => $formulir,
            'breadcumb' => $breadcumb
        ]);
    }
}
