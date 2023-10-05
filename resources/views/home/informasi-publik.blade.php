@extends('home.layouts.main')
@section('content')
  <style>
    .accordions {
      padding: 30px 45px !important;
    }

    .text-p {
      font-size: 15px !important;
      line-height: 25px;
    }

    .btn-minimize {
      margin-top: 12px;
    }

    @media (max-width: 768px) {
      .accordions {
        padding: 15px 20px !important;
      }

      .text-p {
        font-size: 12px !important;
        line-height: 20px;
      }
    }
  </style>

  <link rel="stylesheet" href="{{ asset('css/page/informasi-publik.css') }}">

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Tentang Informasi</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">
    <section class="top-section mt-0">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb')

        <div class="row title mt-5">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">{{ $informasiPublik->judul }}</h4>
            <p class="text-p">{{ $informasiPublik->deskripsi }}</p>
          </div>
        </div>
      </div>
    </section>


    <section class="top-section list-informasi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            <div class="accordions is-first-expanded ms-0">

              @forelse ($listInformasiPublik as $item)
                <article class="accordion">
                  <div class="accordion-head">
                    <span class="text-p">{{ $item->judul }}</span>
                    <span class="icon">
                      <i class="icon fa fa-chevron-right btn-minimize"></i>
                    </span>
                  </div>
                  <div class="accordion-body">
                    <div class="content">
                      <p class="text-p">
                        {!! $item->isi !!}
                      </p>
                    </div>
                  </div>
                </article>
              @empty
                Kosong
              @endforelse
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

    <script>
      $(document).ready(function() {
        // Hapus class tertentu dari elemen
        $('.is-open').removeClass('is-open');
        $('.accordion-body').css('height', '0');

      });
    </script>
  @endsection
