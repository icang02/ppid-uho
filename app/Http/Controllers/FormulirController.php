<?php

namespace App\Http\Controllers;

use App\Formulir;
use App\JenisFormulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function indexPermohonan()
    {
        $formulir = Formulir::where('jenis_formulir', 'permohonan')->get()->first();
        $jenisFormulir = JenisFormulir::where('jenis_formulir', 'permohonan')->get()->first();

        return view('home.formulir', [
            'formulir' => $formulir,
            'jenisFormulir' => $jenisFormulir,
        ]);
    }

    public function indexKeberatan()
    {
        $formulir = Formulir::where('jenis_formulir', 'keberatan')->get()->first();
        $jenisFormulir = JenisFormulir::where('jenis_formulir', 'keberatan')->get()->first();

        return view('home.formulir', [
            'formulir' => $formulir,
            'jenisFormulir' => $jenisFormulir,
        ]);
    }

    public function indexSengketa()
    {
        $formulir = Formulir::where('jenis_formulir', 'sengketa')->get()->first();
        $jenisFormulir = JenisFormulir::where('jenis_formulir', 'sengketa')->get()->first();

        return view('home.formulir', [
            'formulir' => $formulir,
            'jenisFormulir' => $jenisFormulir,
        ]);
    }
}
