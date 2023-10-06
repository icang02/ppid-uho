<section class="top-section" id="formulir">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image">
          <img src="{{ asset($formulir->gambar) }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center p-0">
        <div class="accordions mt-0 is-first-expanded">
          <article class="accordion pb-4">
            <div class="accordion-head txt-kuning fw-bold" style="font-size: 1.75rem;">
              <span>{{ $formulir->judul }}</span>
            </div>
            <div class="accordion-body">
              <div class="content">
                <p>{{ $formulir->isi }}</p>
                <div class="d-flex flex-column gap-2">
                  <a href="{{ route('form_permohonan') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-3">
                      <span>Formulir Permohonan Informasi Publik</span>
                      <span>&rarr;</span>
                    </div>
                  </a>
                  <a href="{{ route('form_keberatan') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-3">
                      <span>Formulir Keberatan Atas Layanan Informasi Publik</span>
                      <span>&rarr;</span>
                    </div>
                  </a>
                  <a href="{{ route('form_sengketa') }}">
                    <div class="sub-formulir d-flex justify-content-between bg-biru px-4 py-3">
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
