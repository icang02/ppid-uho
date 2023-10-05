<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function indexInformasiBerkala()
    {
        return view('home.informasi-publik');
    }
}
