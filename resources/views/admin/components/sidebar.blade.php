<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{ asset('img/user.png') }}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ auth()->user()->name }}</span>
                        <div>{{ 'PPID' }}</div>
                    </div>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Halaman Dashboard</label>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>


                <li class="nav-item pcoded-menu-caption">
                    <label>Landing Page</label>
                </li>

                <li class="nav-item">
                    <a href="{{ url('dashboard/landing/ppid') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Deskripsi
                            PPID</span></a>
                </li>



                <li class="nav-item">
                    <a href="{{ url('dashboard/landing/infografis') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-map"></i></span><span class="pcoded-mtext">Tata Cara /
                            Infografis</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/landing/permohonan') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Formulir
                            Permohonan</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('dashboard/landing/slogan') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Slogan</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin_footer') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span
                            class="pcoded-mtext">Footer</span></a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu Utama</label>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span
                            class="pcoded-mtext">Tentang</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('tentang_profile_admin') }}">Profile</a></li>
                        <li><a href="{{ route('tentang_visi_misi_admin') }}">Visi Misi</a></li>
                        <li><a href="{{ route('tentang_tugas_fungsi_admin') }}">Tugas & Fungsi</a></li>
                        <li><a href="{{ route('tentang_struktur_ppid_admin') }}">Struktur Organisasi</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('dashboard/berita') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Berita &
                            Informasi</span></a>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span
                            class="pcoded-mtext">Formulir</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('formulir_permohonan') }}">Permohonan Informasi Publik</a></li>
                        <li><a href="{{ route('formulir_keberatan') }}">Keberatan Layanan Informasi Publik</a></li>
                        <li><a href="{{ route('formulir_sengketa') }}">Penyelesaian Sengketa Informasi Publik</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span
                            class="pcoded-mtext">Informasi Publik</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin_informasi_berkala') }}">Informasi Berkala</a></li>
                        <li><a href="{{ route('admin_informasi_setiap_saat') }}">Informasi Tersedia Setiap Saat</a>
                        </li>
                        <li><a href="{{ route('admin_informasi_serta_merta') }}">Informasi Serta Merta</a></li>
                        <li><a href="{{ route('admin_informasi_dikecualikan') }}">Informasi Dikecualikan</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span
                            class="pcoded-mtext">Laporan</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin_laporan_akses') }}">Akses Informasi Publik</a></li>
                        <li><a href="{{ route('admin_laporan_layanan') }}">Layanan Informasi Publik</a></li>
                        {{-- <li><a href="{{ route('admin_laporan_survei') }}">Survei Layanan Informasi</a></li> --}}
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('regulasi_dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Regulasi</span></a>
                </li>

                <li class="nav-item mt-3 pb-4">
                    <a href="{{ route('logout') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-log-out"></i></span><span class="pcoded-mtext">Log Out</span></a>
                </li>
            </ul>

        </div>
    </div>

</nav>
<!-- [ navigation menu ] end -->


{{-- <h4>Prosedur dan Tatacara Penyelesaian Sengketa</h4>
<p><b>Pemohon atau kuasanya mengajukan ke petugas komisi informasi</b> datang secara langsung kepada atau mengirimkan
    berkas permohonan melalui pos, email, faksimili, atau metode pengiriman berkas lainnya dalam format yang telah
    ditetapkan yang memuat :</p>
<ol>
    <li><b>Identitas pemohon</b>: nama pribadi dan/atau nama institusi, alamat lengkap, nomor telepon yang bisa
        dihubungi, dan nomor faksimili/alamat email (apabila ada);</li>
    <li>Uraian mengenai <b>alasan pengajuan permohonan</b> penyelesaian Sengketa Informasi Publik;</li>
    <li>Salah satu atau beberapa hal yang dimohonkan untuk <b>diputus oleh Komisi Informasi.</b></li>
</ol>
<p>Pemohon <b>wajib menyertakan dokumen-dokumen</b> sebagai berikut :</p>
<ol>
    <li><b>Bukti identitas pemohon yang sah</b>, yaitu :</li>
    <ul>
        <li>Fotokopi Kartu Tanda Penduduk, Surat Ijin Mengemudi, Paspor atau Kartu Pelajar dalam hal Pemohon adalah
            perorangan;</li>
        <li><b>Akta pendirian dan pengesahan badan hukum</b> baik publik maupun privat dalam hal Pemohon adalah badan
            hukum, surat keputusan pengangkatan kepengurusan, atau akta lain yang dianggap sah;</li>
        <li><b>Fotokopi surat kuasa</b> (apabila Pemohon didampingi kuasa).</li>
    </ul>
    <li><b>Bukti telah mengajukan permohonan informasi kepada Badan Publik</b> berupa: surat permohonan atau formulir
        permohonan atau tanda bukti permohonan informasi; dan/atau surat pemberitahuan tertulis permohonan informasi.
    </li>
    <li><b>Bukti telah mengajukan keberatan kepada Badan Pbulik</b>, yakni surat tanggapan tertulis atas keberatan,
        dalam hal keberatan tidak direspon oleh atasan PPID dalam waktu 30 (tiga puluh) hari sejak permohonan diajukan.
    </li>
    <li><b>Bukti-bukti lain</b> (apabila dipandang perlu).</li>
</ol>
<p><b>Sumber:</b> <em>Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi
        Publik.</em></p> --}}
