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
            $berita = null;
        }
        // dd($berita);

        return view('home.home', [
            'jenisInformasi' => $jenisInformasi,
            'tataCara' => $tataCara,
            'formulir' => $formulir,
            'qoutes' => $qoutes,
            'berita' => $berita,
            'ppid' =>$ppid,
        ]);
    }


    public function data(){
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
    }
   

    public function update(Request $request)
    {   
        if (request()->is('landing/quotes/update')) {
            $data = Landing::where('bagian', 'qoutes')->get()->first();
            $direct= 'dashboard/landing/slogan';
        }
        if (request()->is('landing/permohonan/update')) {
            $direct= 'dashboard/landing/permohonan';
            $data = Landing::where('bagian', 'formulir')->get()->first();
        }
        if (request()->is('landing/infografis/update')) {
            $direct= 'dashboard/landing/infografis';
            $data = Landing::where('bagian', 'tata cara permohonan')->get();

            // Storage::delete($imgPath);
            $imgPath = $request->file('img')->store('img');  
        }
          
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',

        ]);
        
        $data->update([
            'judul' => ucfirst($request->judul),
            'isi' => $request->isi,
            // 'img'=>$imgPath,
        ]);

        return redirect($direct)->with('success', 'Data berhasil diupdate.');
    }




}
