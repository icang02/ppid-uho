<?php

use App\Formulir;
use Illuminate\Database\Seeder;

class FormulirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formulir::create([
            'judul' => 'Permohonan Informasi Publik',
            'jenis_formulir' => 'permohonan',
            'isi' => '<p>Formulir permohonan informasi publik adalah dokumen yang digunakan oleh individu untuk meminta informasi publik dari lembaga pendidikan tinggi atau universitas. Formulir ini memungkinkan pihak yang berkepentingan untuk mengajukan permohonan secara resmi untuk mendapatkan akses ke informasi yang dimiliki oleh institusi. Formulir permohonan informasi publik pada PPID kampus penting untuk memastikan transparansi dan akses terhadap informasi yang dimiliki oleh institusi pendidikan tinggi, sesuai dengan peraturan dan undang-undang yang berlaku.</p>
            <h6>Persyaratan Pelayanan</h6>
            <ol>
            <li>Masyarakat.</li>
            <li>Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama</li>
            </ol>
            <h6>Sistem&nbsp;Mekanisme dan Prosedur</h6>
            <ol>
            <li>Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik.</li>
            <li>Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik.</li>
            <li>Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon.</li>
            <li>Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan.</li>
            <li>Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID.</li>
            <li>PPID memberikan informasi tertulis kepada pemohon informasi.</li>
            <li>Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai.</li>
            <li>Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.</li>
            </ol>
            <h6>Jangka Waktu Penyelesaian</h6>
            <p>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.</p>
            <h6>Biaya Tarif</h6>
            <p>Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).</p>',
            'link' => 'http://ppid.uho.ac.id',
        ]);
        Formulir::create([
            'judul' => 'Keberatan Atas Layanan Informasi Publik',
            'jenis_formulir' => 'keberatan',
            'isi' => '<p>Formulir Keberatan Atas Layanan Informasi Publik</p>
            <h6>Persyaratan Pelayanan</h6>
            <ol>
            <li>Masyarakat.</li>
            <li>Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama</li>
            </ol>
            <h6>Sistem&nbsp;Mekanisme dan Prosedur</h6>
            <ol>
            <li>Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik.</li>
            <li>Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik.</li>
            <li>Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon.</li>
            <li>Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan.</li>
            <li>Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID.</li>
            <li>PPID memberikan informasi tertulis kepada pemohon informasi.</li>
            <li>Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai.</li>
            <li>Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.</li>
            </ol>
            <h6>Jangka Waktu Penyelesaian</h6>
            <p>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.</p>
            <h6>Biaya Tarif</h6>
            <p>Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).</p>',
            'link' => 'http://ppid.uho.ac.id',
        ]);
        Formulir::create([
            'judul' => 'Penyelesaian Sengketa Informasi',
            'jenis_formulir' => 'sengketa',
            'isi' => '<p>Formulir penyelesaian sengeketa informasi.</p>
            <h6>Persyaratan Pelayanan</h6>
            <ol>
            <li>Masyarakat.</li>
            <li>Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama</li>
            </ol>
            <h6>Sistem&nbsp;Mekanisme dan Prosedur</h6>
            <ol>
            <li>Pemohon datang ke meja layanan informasi, PPID UHO (Bagian Humas dan Protokol UHO) atau mengunjungi laman informasi publik.</li>
            <li>Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik.</li>
            <li>Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon.</li>
            <li>Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan.</li>
            <li>Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID.</li>
            <li>PPID memberikan informasi tertulis kepada pemohon informasi.</li>
            <li>Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai.</li>
            <li>Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.</li>
            </ol>
            <h6>Jangka Waktu Penyelesaian</h6>
            <p>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan, Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling lambat 7 (tujuh) hari kerja.</p>
            <h6>Biaya Tarif</h6>
            <p>Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan dalam versi cetak (apabila diperlukan versi cetak).</p>',
            'link' => 'http://ppid.uho.ac.id',
        ]);
    }
}
