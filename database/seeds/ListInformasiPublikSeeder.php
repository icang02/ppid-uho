<?php

use App\ListInformasiPublik;
use Illuminate\Database\Seeder;

class ListInformasiPublikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Informasi Tentang Profil Universitas Halu Oleo',
            'isi' => '<p>Untuk mengetahui informasi lebih lanjut silahkan mengunjungi website resmi Universitas Halu Oleo melalui link berikut : <a target="_blank" href="https://uho.ac.id">uho.ac.id</a>.</p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Informasi Tentang Profil Pimpinan Universitas Halu Oleo',
            'isi' => '<p>Profil pimpinan Universitas Halu Oleo : <a target="_blank" href="https://uho.ac.id/profil">Profil UHO</a></p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Daftar Fakultas di Universitas Halu Oleo',
            'isi' => '<p>Daftar Fakultas Universitas Halu Oleo dapat dilihat pada tautan berikut : <a target="_blank" href="https://uho.ac.id/fakultas">Info Fakultas UHO</a></p>'
        ]);
        ListInformasiPublik::create([
            'informasi_publik_id' => 1,
            'judul' => 'Daftar Partner & Kerja Sama Universitas Halu Oleo',
            'isi' => '<p>Untuk mengetahui informasi lebih lanjut dapat dilihat pada tautan berikut : <a target="_blank" href="https://uho.ac.id/direktori-mou/">Kerja Sama MoU</a>.</p>'
        ]);

        ListInformasiPublik::create([
            'informasi_publik_id' => 2,
            'judul' => 'Informasi Tentang Peraturan, Keputusan dan/atau Kebijakan Universitas Halu Oleo',
            'isi' => '<p>Tersedia di unit kerja terkait, jika ingin memperoleh informasi terkait peraturan dan keputusan dapat mengisi formulirr informasi publik.</p>'
        ]);
    }
}
