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
        InformasiPublik::create([
            'judul' => 'Informasi Yang Dikecualikan',
            'isi' => '<p><strong>Informasi publik yang dikecualikan tidak dapat diberikan kepada pemohon informasi publik.</strong><p>Adapun Daftar Informasi yang Dikecualikan Universitas Halu Oleo sebagai berikut :</p><ol>
            <li>Soal dan Jawaban Tes Ujian Masuk Mahasiswa.</li>
            <li>Kriteria Pengolahan Nilai, Penyajian Data, Dan Pertimbangan Seleksi Ujian Mandiri.</li>
            <li>Data Pribadi :
            <ul>
            <li>Pegawai (Dosen dan Tenaga Kependidikan);</li>
            <li>Mahasiswa</li>
            <li>Alumni</li>
            </ul>
            </li>
            <li>Dokumen Audit Internal, Laporan HasilAudit Internal, dan Laporan Keuangan yang Belum Diaudit (Unaudited).</li>
            <li>Rancangan peraturan dan keputusan.</li>
            <li>Identitas Informan, Pelapor, Saksi, atau Korban.</li>
            <li>Dokumen penilaian hasil pengujian skripsi, tesis, dan disertasi dari penilai (Hasil review proposal dan rekomendasi penilai).</li>
            <li>Konfigurasi Data Centre, Database dan Aplikasi, serta User Name dan Password.</li>
            </ol></p>'
        ]);
    }
}
