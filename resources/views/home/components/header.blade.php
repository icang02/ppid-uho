<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="{{ url('/') }}" class="logo" style="line-height: 110px;">
            {{-- <img src="assets/images/logo.png" alt=""> --}}
            <img src="{{ asset('img/ppid.png') }}" class="logo-img" alt="ppid-uho" style="width: 200px;">
          </a>

          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="/" class="{{ !request()->is('/') ?: 'active' }}">Beranda</a>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)" class="{{ !request()->is('tentang*') ?: 'active' }}">Tentang</a>
              <ul class="sub-menu tentang">
                <li><a href="{{ route('tentang_profil') }}">Profil</a></li>
                <li><a href="{{ route('tentang_visi_misi') }}">Visi & Misi</a></li>
                <li><a href="{{ route('tentang_tugas_fungsi') }}">Tugas & Fungsi</a></li>
                <li><a href="{{ route('tentang_struktur_ppid') }}">Struktur PPID</a></li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)" class="{{ !request()->is('informasi-publik*') ?: 'active' }}">Informasi
                Publik</a>
              <ul class="sub-menu informasi-publik">
                <li><a href="{{ route('info_berkala') }}">Informasi Berkala</a></li>
                <li><a href="{{ route('info_setiap_saat') }}">Informasi Tersedia Setiap
                    Saat</a>
                </li>
                <li><a href="{{ route('info_serta_merta') }}">Informasi Serta Merta</a></li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)" class="{{ !request()->is('formulir*') ?: 'active' }}">Formulir</a>
              <ul class="sub-menu formulir-permohonan">
                <li><a href="{{ url('formulir/permohonan-informasi-publik') }}">Permohonan Informasi Publik</a></li>
                <li><a href="{{ url('formulir/keberatan-layanan-informasi-publik') }}">Keberatan Layanan
                    Informasi Publik</a></li>
                <li><a href="{{ url('formulir/penyelesaian-sengketa-informasi-publik') }}">Penyelesaian Sengketa
                    Informasi
                    Publik</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)" class="{{ !request()->is('laporan*') ?: 'active' }}">Laporan</a>
              <ul class="sub-menu laporan">
                <li><a href="{{ route('laporan_akses') }}">Laporan Akses Informasi Publik</a></li>
                <li><a href="{{ route('laporan_layanan') }}">Laporan Layanan Informasi
                    Publik</a></li>
                <li><a href="{{ route('laporan_survei') }}">Laporan Survei Layanan
                    Informasi</a></li>
              </ul>
            </li>
            <li class="scroll-to-section">
              <a href="{{ url('regulasi') }}" class="{{ !request()->is('regulasi') ?: 'active' }}">Regulasi</a>
            </li>
            <li><a href="javascript:void(0)" class="bg-kuning tombol-search" href="contact-us.html">
                <i class="fa-solid fa-magnifying-glass"></i></a></li>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>

{{-- search input --}}
<div class="close-btn">
  <span class="fas fa-times"></span>
</div>
<div class="wrapper">
  <div class="search-data">
    <form action="{{ request()->path() == 'berita' ? route('index_berita') : route('info_serta_merta') }}"
      method="get">
      <input type="text" id="myInput" name="search" autocomplete="off">
    </form>
    <label>Masukan kata kunci..</label>
    <div class="line"></div>
    <span class="fas fa-search"></span>
  </div>
</div>

{{-- script input search --}}
<script>
  $(document).ready(function() {
    $("#myInput").on("input", function() {
      var inputValue = $(this).val();
      if (inputValue.trim() !== "") {
        $('.search-data label').text("");
      } else {
        $('.search-data label').text("Masukan kata kunci..");
      }
    });

    $('.tombol-search').click(function() {
      $(".swiper-container").css("overflow", "hidden");

      $('.wrapper').addClass('active');
      $('.search-data').fadeIn(500);
      $('.close-btn').fadeIn(500);
      $('.search-data .line').addClass('active');

      setTimeout(function() {
        $('input').focus();
        $('.search-data label').fadeIn(500);
        $('.search-data span').fadeIn(500);
      }, 800);
    });

    $('.close-btn').click(function() {
      $('.wrapper').removeClass('active');
      $('.search-btn').fadeIn(800);
      $('.search-data').fadeOut(500);
      $('.close-btn').fadeOut(500);
      $('.search-data .line').removeClass('active');

      $('input').val("");
      $('.search-data label').fadeOut(500);
      $('.search-data span').fadeOut(500);
    });
  });
</script>
