@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>
              {{ request()->is('berita*') ? 'Berita & Informasi' : 'Informasi Serta Merta' }}
            </h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">
    <div class="container semua-berita">
      {{-- breadcrumb --}}
      @include('home.components.breadcrumb')

      @if ($berita->count() != 0 && request()->has('search'))
        <div class="text-muted text-center">
          <br> Hasil pencarian dengan kata kunci : <i class="fw-bold">{{ request()->search }}</i>
        </div>
      @endif

      @forelse ($berita as $item)
        <div class="col">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="{{ asset($item->gambar) }}">
                        </div>
                        <div class="right-content">
                          <h4 onclick="return window.location.href='{{ url('berita/' . $item->slug) }}'">
                            {!! str_limit($item->judul, $limit = 90, $end = '...') !!}</h4>
                          <div class="text-muted">
                            <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $item->tanggal }}
                            <i class="fa-solid fa-eye ms-3"></i> {{ $item->view }}x dilihat
                          </div>
                          <div>{!! str_limit($item->isi, $limit = 100, $end = '...') !!}</div>
                          <span><a href="{{ url("berita/$item->slug") }}">Selengkapnya..</a></span>
                        </div>
                      </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col">
                  <ul class="nacc">
                    @if (request()->has('search'))
                      <div class="text-muted text-center text-p">Kata kunci :
                        <i class="fw-bold text-p">{{ request()->search }}</i>
                        <br> Tidak ada hasil pencarian.
                      </div>
                    @else
                      <div class="text-muted text-center">Belum ada berita terbaru.</div>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforelse

      <div class="mt-4" style="position: absolute; left: 50%; transform: translateX(-50%)">
        {!! $berita->render() !!}
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
