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
              @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                  @include('home.components.card-berita-utama')
                </div>
              @endforeach
            @else
              <div class="text-muted text-center">Belum ada berita terbaru.</div>
            @endif

          </div>

          @if ($berita->isNotEmpty())
            <div class="col-12 mt-3 text-center">
              <a class="btn py-2 px-3 py-md-3 px-md-4 bg-biru text-white btn-lainnya" href="{{ url('berita') }}">Lihat
                Lainnya</a>
            </div>
          @endif
        </div>
      </div>
</section>
