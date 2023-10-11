<?php

use App\InformasiPublik;
use Illuminate\Database\Seeder;

class InformasiPublikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        InformasiPublik::create([
            'judul' => 'Informasi Publik Yang Wajib Disediakan dan Diumumkan Secara Berkala',
            'isi' => '<p>Setiap Badan Publik wajib mengumumkan informasi publik secara berkala. Informasi berkala merupakan informasi yang diperbaharui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali. Informasi berkala mengenai kegiatan dan kinerja Badan Publik terkait; informasi mengenai laporan keuangan; dan atau informasi lain yang diatur dalam peraturan perundang-undangan. Adapun informasi berkala yang ada di Universitas Halu Oleo sebagai berikut :</p>',
        ]);
        InformasiPublik::create([
            'judul' => 'Informasi Tersedia Setiap Saat',
            'isi' => '<p>Informasi Tersedia Setiap Saat adalah informasi yang siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan mengajukan permohonan atas Informasi Publik tersebut.</p>',
        ]);
        InformasiPublik::create([
            'judul' => 'Informasi Serta Merta',
            'isi' => '<p>Informasi Serta Merta adalah informasi berkaitan dengan hajat hidup orang banyak dan ketertiban umum, serta wajib diumumkan secara serta merta tanpa penundaan.</p>',
        ]);
    }
}
