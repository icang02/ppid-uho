<?php

namespace App\Http\Controllers;

use App\Formulir;
use App\JenisFormulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function indexFormulir()
    {
        if (request()->is('formulir/permohonan-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
            $jenisFormulir = JenisFormulir::where('jenis_formulir', 'permohonan')->get()->first();
            $breadcumb = '<span class="txt-kuning">Permohonana Informasi Publik</span>';
        } elseif (request()->is('formulir/keberatan-layanan-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $jenisFormulir = JenisFormulir::where('jenis_formulir', 'keberatan')->get()->first();
            $breadcumb = '<span class="txt-kuning">Keberatan Layanan Informasi Publik</span>';
        } elseif (request()->is('formulir/penyelesaian-sengketa-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $jenisFormulir = JenisFormulir::where('jenis_formulir', 'sengketa')->get()->first();
            $breadcumb = '<span class="txt-kuning">Penyelesaian Sengketa Informasi Publik</span>';
        }

        return view('home.formulir', [
            'formulir' => $formulir,
            'jenisFormulir' => $jenisFormulir,
            'breadcumb' => $breadcumb
        ]);
    }
}
