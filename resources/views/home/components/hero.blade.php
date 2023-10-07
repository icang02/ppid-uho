<div class="swiper-container" id="top">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="slide-inner"
        style="background-image:url({{ asset('img/home-img.png') }}); background-position: center; background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="header-text">
                <h2><em>Selamat</em> Datang di PPID<br>Universitas <em>Halu Oleo</em></h2>
                <div class="div-dec"></div>
                <p>{{ $ppid->isi }}</p>
                <div class="buttons">
                  <div class="green-button">
                    <a href="#jenisInformasi" style="pointer-events: all;">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
