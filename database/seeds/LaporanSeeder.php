<?php

use App\Laporan;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2023',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2022',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2021',
            'gambar' => 'img/cover-laporan1.png'
        ]);
        Laporan::create([
            'kategori' => 'layanan',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2020',
            'gambar' => 'img/cover-laporan1.png'
        ]);

        Laporan::create([
            'kategori' => 'survei',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2023',
            'gambar' => 'img/cover-laporan.png'
        ]);
        Laporan::create([
            'kategori' => 'survei',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2022',
            'gambar' => 'img/cover-laporan.png'
        ]);
        Laporan::create([
            'kategori' => 'survei',
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2021',
            'gambar' => 'img/cover-laporan.png'
        ]);

        // LAPORAN GAMBAR
        // LaporanGambar::create([
        //     'link' => 'https://ppid.uho.ac.id',
        //     'tahun' => '2023',
        // ]);
        // LaporanGambar::create([
        //     'link' => 'https://ppid.uho.ac.id',
        //     'tahun' => '2022',
        // ]);
        // LaporanGambar::create([
        //     'link' => 'https://ppid.uho.ac.id',
        //     'tahun' => '2021',
        // ]);

        // ImgLaporanGambar::create([
        //     'tahun' => '2023',
        //     'gambar' => 'img/berita.jpg',
        // ]);
        // ImgLaporanGambar::create([
        //     'tahun' => '2023',
        //     'gambar' => 'img/berita.jpg',
        // ]);
        // ImgLaporanGambar::create([
        //     'tahun' => '2023',
        //     'gambar' => 'img/berita.jpg',
        // ]);

        // ImgLaporanGambar::create([
        //     'tahun' => '2022',
        //     'gambar' => 'img/berita.jpg',
        // ]);
        // ImgLaporanGambar::create([
        //     'tahun' => '2022',
        //     'gambar' => 'img/berita.jpg',
        // ]);

        // ImgLaporanGambar::create([
        //     'tahun' => '2021',
        //     'gambar' => 'img/berita.jpg',
        // ]);
    }
}
