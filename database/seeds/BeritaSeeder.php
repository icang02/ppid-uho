<?php

use App\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BERITA DAN INFORMASI
        Berita::create([
            'kategori' => 'informasi serta merta',
            'judul' => 'Cegah Sebaran Covid-19, UHO Terapkan Bekerja dari Rumah dan Buka Call Center untuk Sivitas Akademik',
            'slug' => Str::slug('Cegah Sebaran Covid-19, UHO Terapkan Bekerja dari Rumah dan Buka Call Center untuk Sivitas Akademik'),
            'tanggal' => '2021-01-23',
            'penulis' => 'PPID',
            'isi' => '<p>Universitas Halu Oleo memberlakukan Work From Home (WFH) atau bekerja dari rumah, mulai tanggal 12 s.d. 23 Januari 2021. Kebijakan ini tertuang pada Surat Edaran Rektor UHO tentang Penyesuaian Sistem Kerja Dosen dan Tenaga Kependidikan dalam Rangka Upaya Pencegahan Penyebaran Covid-19 di Lingkungan Universitas Halu Oleo.</p>',
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'UHO Kembali Kukuhkan Empat Guru Besar',
            'slug' => Str::slug('UHO Kembali Kukuhkan Empat Guru Besar'),
            'tanggal' => '2023-09-22',
            'penulis' => 'PPID',
            'isi' => '<p>Kendari, Pusat Media UHO. Senat Guru Besar Universitas Halu Oleo (UHO) kembali menyelenggarakan Rapat Senat Luar Biasa untuk pengukuhan empat Guru Besar pada Jumat, 22 September 2023 di gedung Auditorium Mokodompit UHO.&nbsp; Empat dosen yang dikukuhkan ini berasal dari&nbsp;<a title="" href="https://feb.uho.ac.id/" target="_blank" rel="noopener">Fakultas Ekonomi dan Bisnis</a>&nbsp;(FEB) dan&nbsp;<a title="" href="https://fp.uho.ac.id/" target="_blank" rel="noopener">Fakultas Pertanian</a>&nbsp;(FP). Masing-masing dosen yang dikukuhkan menyampaikan orasi ilmiah dalam Rapat Senat Luar Biasa.&nbsp;&nbsp;</p><p>Dr. Nasrul, S.E., M.Si. yang memperoleh gelar Guru Besar pada bidang Ilmu Manajemen Pemasaran (FEB) menyampaikan orasi dengan judul &ldquo;Pembangunan Loyalitas Nasabah Melalui Citra Perbankan, Kepuasan Nasabah, Komitmen, Customer Learning, dan Kualitas Layanan&rdquo;. Nasrul melakukan riset dengan menggunakan lima indikator pelayanan:&nbsp;<em>reliability, responsiveness, tangible, assurance,&nbsp;</em>dan<em>&nbsp;empathy</em>. Hasil penelitiannya menunjukkan bahwa indikator terkuat untuk mengukur kualitas suatu layanan perbankan di Sulawesi Tenggara adalah aspek&nbsp;<em>tangible</em>.</p><p>Pidato ilmiah dengan tajuk &ldquo;Padi Adaptif Kekeringan untuk Lahan Sawah Tadah Hujan&rdquo; disampaikan oleh Dr. La Ode Afa, S.P., M.Si. yang mendapat gelar Guru Besar pada bidang Agronomi dan Hortikultura (FP). La Ode Afa menyampaikan gagasan penggunaan padi hibrida yang toleran pada kekeringan (BI599A/BP15). Padi jenis ini berpotensi dikembangkan di lahan sawah tadah hujan, karena pada kondisi kekeringan parah, produksinya dapat mencapai tiga kali lebih tinggi dibandingkan dengan varietas cek. Sementara dalam kondisi genangan, produksinya dapat menyamai varietas cek yakni di atas 6 ton per hektar.</p><p>Selanjutnya, Iskandar, S.P., M.Si., Ph.D. yang memperoleh gelar Guru Besar pada bidang Ilmu Pemberdayaan Masyarakat (FP) memberikan orasi ilmiah dengan judul &ldquo;Membangun Ketahanan dan Kesejahteraan Masyarakat Melalui Pendekatan Model Pemberdayaan Kolaborasi Multi&nbsp;<em>Stakeholder</em>&nbsp;dalam Praktik CSR di Sulawesi Tenggara&rdquo;. Riset yang dilakukan Iskandar menemukan tiga komponen penting yang menjadi kunci keberhasilan&nbsp;<em>Corporate Social Responsibility</em>&nbsp;(CSR) yaitu: karakteristik program CSR, pelibatan para pihak, dan proses pemberdayaan kolaborasi.</p><p>Orasi ilmiah terakhir disampaikan Dr. La Ode Anto, S.E., M.Si., Ak., QIA., CA. CTT., CRP., CRPM., QGIA., CIISA., ADEAN CPA. yang mendapat gelar Guru Besar pada bidang Ilmu Akuntansi (FEB). Pidato ilmiahnya bertajuk &ldquo;Akuntansi Aset Pemerintah: Pemaknaan dalam Perspektif Pengelolaan Keuangan Daerah&rdquo;. La Ode Anto mengajukan preposisi bahwa aset pemerintah dimaknai berdasarkan sumber pendanaan, kewenangan pengelolaan, serta fungsi dan kegunaan aset. Dia menyimpulkan, pemaknaan terhadap akuntansi aset lebih dipengaruhi oleh karakteristik organisasi pemerintah dan nilai-nilai budaya yang melekat pada diri pengelola keuangan daerah.&nbsp;</p><p>Setelah orasi ilmiah, keempat guru besar dikukuhkan oleh Rektor UHO Muhammad Zamrun. Sebagai bentuk komitmen dan tanggung jawab atas jabatan akademik yang disandang, pengukuhan kemudian dilanjutkan dengan penandatanganan Pakta Integritas Guru Besar.</p>',
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024',
            'slug' => Str::slug('Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024'),
            'tanggal' => '2023-07-20',
            'penulis' => 'PPID',
            'isi' => '<p>Terlampir Informasi Kalender Akademik Universitas Halu Oleo Tahun Akademik 2023-2024.<br><a href="https://uho.ac.id/wp-content/uploads/2023/07/KALENDER-AKADEMIK-TAHUN-AKADEMIK-2023-2024.pdf" data-id="https://uho.ac.id/wp-content/uploads/2023/07/KALENDER-AKADEMIK-TAHUN-AKADEMIK-2023-2024.pdf" data-type="URL">Download Kalender Akademink Tahun 2023-2024</a></p>',
        ]);
        Berita::create([
            'kategori' => 'berita',
            'judul' => 'Pemberitahuan Sistem Informasi PBJ UHO',
            'slug' => Str::slug('Pemberitahuan Sistem Informasi PBJ UHO'),
            'tanggal' => '2023-09-18',
            'penulis' => 'PPID',
            'isi' => '<p>Nomor : 3531/UN29/PBJ/2023<br>Lampiran : &ndash;<br>Perihal : Pemberitahuan Sistim Informasi PBJ UHO</p><p>Kepada Yth,<br>Pelaku Pengadaan Barang dan Jasa UHO<br>di-<br>Kendari</p><p>Dalam rangka implementasi Peraturan Rektor Nomor 2 Tahun 2023 tentang Pedoman Pengadaan Barang/Jasa Badan Layanan Umum Universitas Halu Oleo, dengan ini disampaikan bahwa proses pengadaan barang/jasa yang semula diakses pada laman: <a href="https://lpse.kemdikbud.go.id">https://lpse.kemdikbud.go.id</a>, selanjutnya Universitas Halu Oleo secara resmi menggunakan Sistem Informasi Pengadaan Barang/Jasa secara mandiri melalui laman <a href="https://si.uho.ac.id/.Untuk">https://si.uho.ac.id/.Untuk</a> Daftar Penyedia Terpilih (DPT) dapat diakses melalui <a href="https://sidapet.uho.ac.id/">https://sidapet.uho.ac.id/</a> dan tender melalui <a href="https://tender.uho.ac.id/.Informasi">https://tender.uho.ac.id/.Informasi</a> Pengadaan Barang/Jasa Universitas Halu Oleo dapat juga diakses pada laman <a href="https://uho.ac.id/">https://uho.ac.id/</a> melalui tautan cepat ProMISe UHO.</p><p>Demikian pemberitahuan ini kami sampaikan, untuk dapat dipergunakan sebagaimana mestinya.</p><p>REKTOR<br>MUHAMMAD ZAMRUN F.<br>NIP. 19720422 199803 1 001</p>',
        ]);

        // for ($i = 0; $i < 8; $i++) {
        //     $randomDate = Carbon::now()->subDays(rand(1, 30));
        //     $randomFormattedDate = $randomDate->format('Y-m-d');
        //     Berita::create([
        //         'kategori' => 'berita',
        //         'judul' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, commodi. ipsum dolor sit amet consectetur adipisicing elit',
        //         'slug' => Str::slug('Lorem ipsum dolor sit amet consectetur adipisicing elit'),
        //         'tanggal' => $randomFormattedDate,
        //         'penulis' => 'PPID',
        //         'isi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente mollitia sint odio libero, cumque eaque beatae inventore earum aliquid dolor rerum vitae consequuntur eligendi eveniet repellendus corporis quas? Aspernatur.</p>',
        //     ]);
        // }
    }
}
