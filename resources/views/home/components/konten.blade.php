<style>
  .accordion-body .content .d-flex .sub-formulir {
    position: relative;
    cursor: pointer;
  }

  .accordion-body .content .d-flex a {
    color: #fff;
  }

  .accordion-body .content .d-flex .sub-formulir:hover span {
    transition: all 0.4s ease;
  }

  .accordion-body .content .d-flex .sub-formulir:hover span:last-child {
    transform: translateX(15px);
  }
</style>

<section class="top-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image">
          <img src="assets/images/about-left-image.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="accordions is-first-expanded">
          <article class="accordion">
            <div class="accordion-head txt-kuning fw-bold" style="font-size: 1.75rem;">
              <span>Formulir Permohonan</span>
            </div>
            <div class="accordion-body">
              <div class="content">
                <p>Formulir permohonan adalah dokumen yang digunakan oleh individu untuk meminta informasi
                  publik dari lembaga pendidikan tinggi atau universitas yang terdiri atas :
                </p>
                <div class="lh-lg text-light d-flex flex-column gap-2">
                  <a href="{{ url('informasi-publik') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-2">
                      <span>Formulir Permohonan</span>
                      <span>&rarr;</span>
                    </div>
                  </a>
                  <a href="{{ url('informasi-publik') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-2">
                      <span>Formulir Keberatan Atas Layanan Informasi Publik</span>
                      <span>&rarr;</span>
                    </div>
                  </a>
                  <a href="{{ url('informasi-publik') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-2">
                      <span>Formulir Penyelesaian Sengketa Informasi</span>
                      <span>&rarr;</span>
                    </div>
                  </a>
                </div>
              </div>
          </article>
        </div>
      </div>
    </div>


</section>
