@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Berita & Informasi</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">
    <div class="container ">
      {{-- breadcrumb --}}
      @include('home.components.breadcrumb')

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
                          <img src="{{ asset($item->gambar) }}" style="object-fit: cover; width: 420px; height: 100%:">
                        </div>
                        <div class="right-content">
                          <h4 class="lh-base">{{ $item->judul }}</h4>
                          <div class="text-muted" style="font-size: 0.85rem; margin-top: -15px">
                            <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $item->tanggal }}
                            <i class="fa-solid fa-eye ms-3"></i> {{ $item->view }}x dilihat
                          </div>
                          <p>{!! str_limit($item->isi, $limit = 150, $end = '...') !!}</p>
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
                    <div class="text-muted text-center">Belum ada berita terbaru.</div>
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
