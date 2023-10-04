<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo" style="line-height: 110px;">
            {{-- <img src="assets/images/logo.png" alt=""> --}}
            <img src="{{ asset('img/ppid.png') }}" class="logo-img" alt="ppid-uho" style="width: 200px;">
          </a>

          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li class="scroll-to-section"><a href="/" class="active">Beranda</a></li>
            <li class="has-sub">
              <a href="javascript:void(0)">Tentang</a>
              <ul class="sub-menu tentang">
                <li><a href="about-us.html">Profil</a></li>
                <li><a href="our-services.html">Visi dan Misi</a></li>
                <li><a href="contact-us.html">Tugas dan Fungsi</a></li>
                <li><a href="contact-us.html">Struktur Organisasi</a></li>
                <li><a href="contact-us.html">Regulasi dan Rancangan Regulasi</a></li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)">Informasi Publik</a>
              <ul class="sub-menu informasi-publik">
                <li><a href="{{ url('informasi-publik') }}">Informasi Berkala</a></li>
                <li><a href="{{ url('informasi-publik') }}">Informasi Tersedia Setiap Saat</a></li>
                <li><a href="{{ url('informasi-publik') }}">Informasi Serta Merta</a></li>
              </ul>
            </li>
            <li class="has-sub">
              <a href="javascript:void(0)">Formulir Permohonan</a>
              <ul class="sub-menu formulir-permohonan">
                <li><a href="{{ url('formulir') }}">Formulir Permohonan</a></li>
                <li><a href="{{ url('formulir') }}">Formulir Keberatan Atas Layanan Informasi Publik</a></li>
                <li><a href="{{ url('formulir') }}">Formulir Penyelesaian Sengketa Informasi</a></li>
              </ul>
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
  {{-- <div class="search-btn">
    <span class="fas fa-search"></span>
  </div> --}}
  <div class="search-data">
    <form action="#" method="get">
      @csrf
      <input type="text" id="myInput" autocomplete="off">
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
