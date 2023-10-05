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
        } elseif (request()->is('formulir/keberatan-atas-layanan-informasi-publik')) {
            $formulir = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
            $jenisFormulir = JenisFormulir::where('jenis_formulir', 'keberatan')->get()->first();
        } elseif (request()->is('formulir/penyelesaian-sengketa-informsi')) {
            $formulir = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
            $jenisFormulir = JenisFormulir::where('jenis_formulir', 'sengketa')->get()->first();
        }

        return view('home.formulir', [
            'formulir' => $formulir,
            'jenisFormulir' => $jenisFormulir,
        ]);
    }
}