<?php

namespace App\Http\Controllers\Api;

use App\Formulir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormulirController extends Controller
{
    public function permohonan()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'permohonan')->first();
    }

    public function keberatan()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'keberatan')->first();
    }

    public function sengketa()
    {
        return Formulir::select('judul', 'isi', 'link')->where('jenis_formulir', 'sengketa')->first();
    }
}
