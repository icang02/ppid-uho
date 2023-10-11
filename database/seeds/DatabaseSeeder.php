<?php

use App\ImgLaporanGambar;
use App\LaporanGambar;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BeritaSeeder::class,
            FormulirSeeder::class,
            InformasiPublikSeeder::class,
            LandingSeeder::class,
            ListInformasiPublikSeeder::class,
            LaporanSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('uHO@ppid')
        ]);

        // LAPORAN GAMBAR
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2023',
        ]);
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2022',
        ]);
        LaporanGambar::create([
            'link' => 'https://ppid.uho.ac.id',
            'tahun' => '2021',
        ]);

        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2023',
            'gambar' => 'img/berita.jpg',
        ]);

        ImgLaporanGambar::create([
            'tahun' => '2022',
            'gambar' => 'img/berita.jpg',
        ]);
        ImgLaporanGambar::create([
            'tahun' => '2022',
            'gambar' => 'img/berita.jpg',
        ]);

        ImgLaporanGambar::create([
            'tahun' => '2021',
            'gambar' => 'img/berita.jpg',
        ]);
    }
}
