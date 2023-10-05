<?php

use App\Berita;
use App\Formulir;
use App\JenisFormulir;
use App\Landing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Berkala',
            'isi' => 'Informasi Berkala merupakan informasi yang diperbarui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.',
            'gambar' => 'img/informasi berkala.png',
            'link' => 'informasi-publik',
        ]);
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Tersedia Setiap Saat',
            'isi' => 'Informasi Tersedia Setiap Saat adalah informasi yang siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan mengajukan permohonan atas Informasi Publik tersebut.',
            'gambar' => 'img/informasi sedia tiap saat.png',
            'link' => 'informasi-publik',
        ]);
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Serta Merta',
            'isi' => 'Informasi Serta Merta adalah informasi berkaitan dengan hajat hidup orang banyak dan ketertiban umum, serta wajib diumumkan secara serta merta tanpa penundaan.',
            'gambar' => 'img/informasi serta merta.png',
            'link' => 'informasi-publik',
        ]);

        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Permohonan Informasi Publik',
            'gambar' => 'img/1.jpg',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Mengajukan Keberatan',
            'gambar' => 'img/2.jpg',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Pengajuan Permohonan Sengketa',
            'gambar' => 'img/3.jpg',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Prosedur Permohonan Penyelesaian Sengekata Informasi',
            'gambar' => 'img/4.jpg',
        ]);

        Landing::create([
            'bagian' => 'formulir',
            'judul' => 'Formulir Permohonan',
            'isi' => 'Formulir permohonan adalah dokumen yang digunakan oleh individu untuk meminta informasi publik dari lembaga pendidikan tinggi atau universitas yang terdiri atas :',
            'gambar' => 'img/formulir-home.jpg'
        ]);

        Landing::create([
            'bagian' => 'qoutes',
            'judul' => 'Kominfo Ri',
            'isi' => '"Hak atas informasi yang terbuka menjadi pembukan jalan bagi terjaminnya pelaksanaan hak-hak asasi lainnya, seperti hak atas pendidikan, hak untuk hidup sejahtera, hak untuk hidup aman, dan hak warga negara lainnya."',
        ]);

        for ($i = 0; $i < 20; $i++) {
            Berita::create([
                'kategori' => 'berita',
                'judul' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, commodi.',
                'slug' => Str::slug('Lorem ipsum dolor sit amet consectetur adipisicing elit'),
                'tanggal' => '2020-01-03',
                'penulis' => 'PPID',
                'isi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur.</p>',
                'gambar' => 'img/berita.jpg',
            ]);
        }

        Formulir::create([
            'judul' => 'Permohonan Informasi Publik',
            'jenis_formulir' => 'permohonan',
            'deskripsi' => 'Formulir permohonan informasi publik adalah dokumen yang digunakan oleh individu untuk meminta informasi publik dari lembaga pendidikan tinggi atau universitas. Formulir ini memungkinkan pihak yang berkepentingan untuk mengajukan permohonan secara resmi untuk mendapatkan akses ke informasi yang dimiliki oleh institusi. Formulir permohonan informasi publik pada PPID kampus penting untuk memastikan transparansi dan akses terhadap informasi yang dimiliki oleh institusi pendidikan tinggi, sesuai dengan peraturan dan undang-undang yang berlaku.',
            'link' => 'http://ppid.uho.ac.id',
        ]);
        Formulir::create([
            'judul' => 'Keberatan Atas Layanan Informasi Publik',
            'jenis_formulir' => 'keberatan',
            'deskripsi' => 'Formulir keberatan atas layanan informasi publik.',
            'link' => 'http://ppid.uho.ac.id',
        ]);
        Formulir::create([
            'judul' => 'Penyelesaian Sengketa Informasi',
            'jenis_formulir' => 'sengketa',
            'deskripsi' => 'Formulir sengeketa informasi.',
            'link' => 'http://ppid.uho.ac.id',
        ]);

        JenisFormulir::create([
            'jenis_formulir' => 'permohonan',
            'persyaratan' => 'Persyaratan Pelayanan',
            'isi_persyaratan' => 'Masyarakat./|Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama.',

            'mekanisme' => 'Sistem Mekanisme dan Prosedur',
            'isi_mekanisme' => 'Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik./|Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik./|Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon./|Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan./|Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID./|PPID memberikan informasi tertulis kepada pemohon informasi./|Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai./|Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.',

            'jangka_waktu' => 'Jangka Waktu Penyelesaian',
            'isi_jangka_waktu' => 'Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.',

            'Biaya' => 'Biaya Tarif',
            'isi_biaya' => 'Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).'

        ]);
        JenisFormulir::create([
            'jenis_formulir' => 'keberatan',
            'persyaratan' => 'Persyaratan Pelayanan',
            'isi_persyaratan' => 'Masyarakat./|Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama.',

            'mekanisme' => 'Sistem Mekanisme dan Prosedur',
            'isi_mekanisme' => 'Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik./|Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik./|Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon./|Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan./|Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID./|PPID memberikan informasi tertulis kepada pemohon informasi./|Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai./|Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.',

            'jangka_waktu' => 'Jangka Waktu Penyelesaian',
            'isi_jangka_waktu' => 'Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.',

            'Biaya' => 'Biaya Tarif',
            'isi_biaya' => 'Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).'

        ]);
        JenisFormulir::create([
            'jenis_formulir' => 'sengketa',
            'persyaratan' => 'Persyaratan Pelayanan',
            'isi_persyaratan' => 'Masyarakat./|Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama.',

            'mekanisme' => 'Sistem Mekanisme dan Prosedur',
            'isi_mekanisme' => 'Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik./|Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik./|Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon./|Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan./|Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID./|PPID memberikan informasi tertulis kepada pemohon informasi./|Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai./|Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.',

            'jangka_waktu' => 'Jangka Waktu Penyelesaian',
            'isi_jangka_waktu' => 'Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.',

            'Biaya' => 'Biaya Tarif',
            'isi_biaya' => 'Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).'

        ]);
    }
}
