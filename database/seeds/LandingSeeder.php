<?php

use App\Landing;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Berkala',
            'isi' => 'Informasi Berkala merupakan informasi yang diperbarui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.',
            'gambar' => 'img/informasi berkala.png',
            'link' => 'informasi-publik/berkala',
        ]);
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Tersedia Setiap Saat',
            'isi' => 'Informasi Tersedia Setiap Saat adalah informasi yang siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan mengajukan permohonan atas Informasi Publik tersebut.',
            'gambar' => 'img/informasi sedia tiap saat.png',
            'link' => 'informasi-publik/setiap-saat',
        ]);
        Landing::create([
            'bagian' => 'jenis informasi',
            'judul' => 'Informasi Serta Merta',
            'isi' => 'Informasi Serta Merta adalah informasi berkaitan dengan hajat hidup orang banyak dan ketertiban umum, serta wajib diumumkan secara serta merta tanpa penundaan.',
            'gambar' => 'img/informasi serta merta.png',
            'link' => 'informasi-publik/serta-merta',
        ]);

        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Permohonan Informasi Publik',
            'gambar' => 'img/1.png',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Mengajukan Keberatan',
            'gambar' => 'img/2.png',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Tata Cara Pengajuan Permohonan Sengketa',
            'gambar' => 'img/3.png',
        ]);
        Landing::create([
            'bagian' => 'tata cara permohonan',
            'judul' => 'Prosedur Permohonan Penyelesaian Sengketa Informasi',
            'gambar' => 'img/4.png',
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
            'isi' => '"Hak atas informasi yang terbuka menjadi pembuka jalan bagi terjaminnya pelaksanaan hak-hak asasi lainnya, seperti hak atas pendidikan, hak untuk hidup sejahtera, hak untuk hidup aman, dan hak warga negara lainnya."',
        ]);

        Landing::create([
            'bagian' => 'ppid',
            'judul' => 'Pengertian PPID',
            'isi' => 'PPID merupakan sarana layanan online bagi permohonan informasi publik dan sebagai salah satu wujud pelaksanaan keterbukaan informasi di Universitas Halu Oleo.',
        ]);

        // SEED TENTANG PRFIL DAN LAIN LAIN
        Landing::create([
            'judul' => 'Profil Pejabat Pengelola Informasi dan Dokumentasi (PPID)',
            'bagian' => 'profil',
            'isi' => '<p>PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, yang berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh Badan Publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik. Dengan keberadaan PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih mudah dan tidak berbelit karena dilayani lewat satu pintu.</p>
            <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.</p>'
        ]);
        Landing::create([
            'judul' => 'Visi dan Misi',
            'bagian' => 'visi',
            'isi' => '<h5>Visi PPID</h5>
            <p>Menjadi penyedia layanan informasi publik yang profesional, transparan dan akuntabel sesuai dengan ketentuan peraturan perundang-undangan.</p>
            <h5>Misi PPID</h5>
            <ol>
            <li style="list-style-type: decimal;">Meningkatkan tata kelola informasi publik.</li>
            <li style="list-style-type: decimal;">Meningkatkan sumber daya manusia di bidang pelayanan informasi publik.</li>
            <li style="list-style-type: decimal;">Mengembangkan kualitas sistem informasi pelayanan publik.</li>
            </ol>'
        ]);
        Landing::create([
            'judul' => 'Tokok dan Fungsi',
            'bagian' => 'tugas',
            'isi' => '<h5>Tugas Pokok PPID</h5>
            <p>PPID bertugas mengkoordinasikan pengumpulan seluruh Informasi Publik dari setiap unit kerja di lingkungan Universitas Halu Oleo yang meliputi; informasi yang wajib disediakan dan diumumkan secara berkala; informasi yang wajib tersedia setiap saat; informasi terbuka lainnya yang diminta Pemohon Informasi Publik.</p>
            <h5>Fungsi PPID</h5>
            <ol>
            <li style="list-style-type: decimal;">Penghimpunan informasi publik di lingkungan Universitas Halu Oleo.</li>
            <li style="list-style-type: decimal;">Penyampaian Informasi publik yang diperoleh dari seluruh unit kerja di lingkungan Universitas Halu Oleo.</li>
            <li style="list-style-type: decimal;">Penyediaann dan pemberian layanan informasi publik yang bersifat terbuka.</li>
            <li style="list-style-type: decimal;">Penyelesaian sangketa pelayanan Informasi.</li>
            </ol>'
        ]);
        Landing::create([
            'judul' => 'Regulasi PPID',
            'bagian' => 'regulasi',
            'isi' => '<h6 style="text-align: center;">Regulasi Mengenai Keterbukaan Informasi Publik</h6>
            <ul>
            <li><a href="https://drive.google.com/file/d/1JuE3iA-XTkse99MolMovn5UGlX3lgafj/view?usp=sharing" target="_blank" rel="noopener">Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1UesmKcx2GA71Ld4-lwvF37LhtffVbLdg/view?usp=sharing" target="_blank" rel="noopener">Undang-Undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1I7hkz65HzNhKO7mkmc5XAYcqO5964Y5f/view?usp=sharing" target="_blank" rel="noopener">Undang-Undang Nomor 43 Tahun 2009 Tentang Kearsipan</a></li>
            <li><a href="https://drive.google.com/file/d/1ywY0t_mxdUz_QdNhzSV92SE0QeRJys9L/view?usp=sharing" target="_blank" rel="noopener">Peraturan Pemerintah Republik Indonesia Nomor 61 Tahun 2010 tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1xYNTMfYXhwfAjwrEee30Zlu_sEC2P2I5/view?usp=sharing" target="_blank" rel="noopener">Peraturan Komisi Informasi Pusat Nomor 01 Tahun 2022 Tentang Monitoring dan Evaluasi Keterbukaan Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1kSXMnSFcqKn8IR93Pqx7uEGObO-_7DIH/view?usp=sharing" target="_blank" rel="noopener">Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1Z8Ev63rF56Q3sIAMxf91Ra1fs-E4JnLK/view?usp=sharing" target="_blank" rel="noopener">Peraturan Komisi Informasi Pusat Nomor 01 Tahun 2017 tentang Pengklasifikasian Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1nRvJTo0XvG_J7-ge3nBT1wrYW0qDS2l8/view?usp=sharing" target="_blank" rel="noopener">Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik</a></li>
            <li><a href="https://drive.google.com/file/d/1zkvC6PxTUGlKdQPMEnhFd4wwok6bbKy0/view?usp=sharing" target="_blank" rel="noopener">Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 41 Tahun 2020 tentang Layanan Informasi Publik di Kementerian Pendidikan dan Kebudayaan</a></li>
            </ul>'
        ]);
        Landing::create([
            'judul' => 'Struktur Organisasi PPID UHO',
            'bagian' => 'struktur',
            'isi' => '<p>Struktur PPID Universitas Halu Oleo dapat dilihat pada gambar berikut.</p>',
        ]);

        Landing::create([
            'judul' => 'Pejabat Pengelola Informasi dan Dokumentasi (PPID)',
            'bagian' => 'footer',
            'isi' => 'Kampus Hijau Bumi Tridharma, Jl. HEA Mokodompit, Sulawesi Tenggara'
        ]);
        Landing::create([
            'judul' => 'Waktu Layanan',
            'bagian' => 'footer',
            'isi' => 'Senin — Jumat 08:00-16.00 WITA'
        ]);
        Landing::create([
            'judul' => 'Hubungi Kami',
            'bagian' => 'footer',
            'isi' => 'Contact Center: - Email: ppid@ppid.uho.ac.id WhatsApp: - Instagram: ppid_uho'
        ]);
    }
}
