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
            // LaporanSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('uHO@ppid')
        ]);
    }
}
