<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
  <div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div ">

      <div class="">
        <div class="main-menu-header">
          <img class="img-radius" src="/admin-assets/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
          <div class="user-details">
            <span>Admin</span>
            <div>Administrator</div>
          </div>
        </div>
      </div>

      <ul class="nav pcoded-inner-navbar ">
        <li class="nav-item pcoded-menu-caption">
          <label>Halaman Dashboard</label>
        </li>
        <li class="nav-item">
          <a href="/dashboard" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
        </li>


        <li class="nav-item pcoded-menu-caption">
          <label>Landing Page</label>
        </li>

        <li class="nav-item">
          <a href="/dashboard/landing/ppid" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Deskripsi PPID</span></a>
        </li>



        <li class="nav-item">
          <a href="/dashboard/landing/infografis" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-map"></i></span><span class="pcoded-mtext">Tata Cara / Infografis</span></a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/landing/permohonan" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Formulir Permohonan</span></a>
        </li>

        <li class="nav-item">
          <a href="/dashboard/landing/slogan" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Slogan</span></a>
        </li>

        <li class="nav-item pcoded-menu-caption">
          <label>Menu</label>
        </li>

        <li class="nav-item pcoded-hasmenu">
          <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify "></i></span><span
              class="pcoded-mtext">Tentang</span></a>
          <ul class="pcoded-submenu">
            <li><a href="{{ route('tentang_profile_admin') }}">Profile</a></li>
            <li><a href="{{ route('tentang_visi_misi_admin') }}">Visi Misi</a></li>
            <li><a href="{{ route('tentang_tugas_fungsi_admin') }}">Tugas & Fungsi</a></li>
            <li><a href="{{ route('tentang_struktur_ppid_admin') }}">Struktur Organisasi</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/dashboard/berita" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-layout"></i></span><span class="pcoded-mtext">Berita & Informasi</span></a>
        </li>

        <li class="nav-item pcoded-hasmenu">
          <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span
              class="pcoded-mtext">Formulir</span></a>
          <ul class="pcoded-submenu">
            <li><a href="/dashboard/formulir/formulir-publik">Permohonan Informasi Publik</a></li>
            <li><a href="/dashboard/formulir/formulir-keberatan">Keberatan Layanan Informasi Publik</a></li>
            <li><a href="/dashboard/formulir/formulir-sengketa">Penyelesaian Sengketa Informasi Publik</a></li>
          </ul>
        </li>

        <li class="nav-item pcoded-hasmenu">
          <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span
              class="pcoded-mtext">Informasi Publik</span></a>
          <ul class="pcoded-submenu">
            <li><a href="/dashboard/informasi/informasi-berkala">informasi Berkala</a></li>
            <li><a href="/dashboard/informasi/informasi-saat">Informasi Tersedia Setiap Saat</a></li>
            <li><a href="/dashboard/informasi/informasi-merta">Informasi Serta Merta</a></li>
          </ul>
        </li>
        <li class="nav-item pcoded-hasmenu">
          <a class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span
              class="pcoded-mtext">Data Informasi Publik</span></a>
          <ul class="pcoded-submenu">
            <li><a href="/dashboard/informasi/data-informasi-berkala">Data Informasi Berkala</a></li>
            <li><a href="/dashboard/informasi/data-informasi-saat">Data Informasi Tersedia Setiap Saat</a></li>
            <li><a href="/dashboard/berita">Data Informasi Serta Merta</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/dashboard/regulasi" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-box"></i></span><span class="pcoded-mtext">Regulasi</span></a>
        </li>

        <li class="nav-item mt-3">
          <a href="/dashboard/regulasi" class="nav-link "><span class="pcoded-micon"><i
                class="feather icon-log-out"></i></span><span class="pcoded-mtext">Log Out</span></a>
        </li>



      </ul>

    </div>
  </div>
</nav>
<!-- [ navigation menu ] end -->
