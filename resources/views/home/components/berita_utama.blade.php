<section class="testimonials" id="testimonials">
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
          <div class="row gx-4 justify-content-center">

            @if ($berita->isEmpty())
              <div class="text-muted text-center">Belum ada berita terbaru.</div>
            @else
              @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                  <div class="card" style="width: 100%;">
                    <img src="{{ asset('img/123.png') }}" class="card-img-top" alt="Image"
                      style="object-fit: cover; height: 240px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->judul }}</h5>
                      <div class="text-muted" style="font-size: 0.85rem">
                        <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $item->tanggal }}
                        <i class="fa-solid fa-eye ms-3"></i> {{ $item->view }}x dilihat
                      </div>
                      <p class="card-text mt-3">
                        {!! str_limit($item->isi, $limit = 150, $end = '...') !!}
                      </p>
                    </div>
                    <div class="card-body">
                      <a href="{{ url("berita/$item->slug") }}" class="btn btn-warning card-link px-3 py-2"
                        style="border-radius: 6px; font-size: 0.8rem;">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif

          </div>

          <div class="col-12 mt-3 text-center">
            <a class="btn py-3 px-4 bg-biru text-white" href="{{ url('berita') }}">Lihat Lainnya</a>
          </div>
        </div>
      </div>
</section>
