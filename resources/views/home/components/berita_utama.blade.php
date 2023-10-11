<section class="testimonials" id="beritaUtama">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section-heading">
          <h6 class="txt-kuning">PPID UHO</h6>
          <h4>Berita & Informasi</h4>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="container-fluid px-0 px-lg-5">
          <div class="row gx-4 justify-content-center content-berita">

            @if ($berita->isNotEmpty())
              @if ($berita->isNotEmpty())
                <style>
                  .btn-semua-berita {
                    transition: all 0.4s ease;
                  }

                  .btn-semua-berita a {
                    color: #000;
                    padding: 5px 10px;
                    border-radius: 4px;
                    transition: all 0.4s ease-out;
                  }

                  .btn-semua-berita a:hover {
                    background: #eaeaea;
                  }

                  @media (max-width: 576px) {
                    .btn-semua-berita a {
                      font-size: 12px;
                    }
                  }
                </style>
                <div class="mb-3 text-end btn-semua-berita">
                  <h6><a href="{{ url('berita') }}">Lihat Semua &rarr;</a></h6>
                </div>
              @endif

              @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                  @include('home.components.card-berita-utama')
                </div>
              @endforeach
            @else
              <div class="text-muted text-center">Belum ada berita terbaru.</div>
            @endif

          </div>

          {{-- @if ($berita->isNotEmpty())
            <div class="col-12 mt-3 text-center">
              <a class="btn py-2 px-3 py-md-3 px-md-4 bg-biru text-white btn-lainnya" href="{{ url('berita') }}">Lihat
                Lainnya</a>
            </div>
          @endif --}}
        </div>
      </div>
</section>
