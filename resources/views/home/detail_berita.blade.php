@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>
              {{ $berita->kategori == 'berita' ? 'Detail Berita & Informasi' : 'Detail Informasi Serta Merta' }}
            </h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="what-we-do mt-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-12" id="detailBerita">
          <div class="service-item">

            @include('home.components.breadcrumb')

            <div class="row mt-2">
              <div class="col-lg-6 order-2 order-md-1">
                <div class="left-content">
                  <h4>{{ $berita->judul }}</h4>
                  <div class="text-muted">
                    <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $berita->tanggal }}
                    <i class="fa-solid fa-eye ms-3"></i> {{ $berita->view }}x dilihat
                    <i class="fa-solid fa-book-open-reader ms-3 me-1"></i> Oleh : {{ $berita->penulis }}
                  </div>

                  <div class="text-body">
                    {!! $berita->isi !!}
                  </div>
                </div>
              </div>
              <div class="col-lg-6 order-1 order-md-2">
                <div class="right-image">
                  <div class="pembungkus">
                    <div class="responsive-element" style="background-image: url({{ asset($berita->gambar) }})">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

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
