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
            <h4 class="mb-3 txt-biru fw-bold">Informasi Publik Yang Wajib Disediakan dan Diumumkan Secara Berkala</h4>
            <p class="text-p">Setiap Badan Publik wajib mengumumkan informasi publik secara berkala. Informasi berkala
              merupakan
              informasi yang diperbaharui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala
              sekurang-kurangnya setiap 6 bulan sekali. Informasi berkala mengenai kegiatan dan kinerja Badan Publik
              terkait; informasi mengenai laporan keuangan; dan atau informasi lain yang diatur dalam peraturan
              perundang-undangan. Adapun informasi berkala yang ada di Universitas Halu Oleo sebagai berikut :</p>
          </div>
        </div>
      </div>
    </section>


    <section class="top-section list-informasi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            <div class="accordions is-first-expanded ms-0">
              <article class="accordion">
                <div class="accordion-head">
                  <span class="text-p">Informasi Tentang Profil Universitas Halu Oleo</span>
                  <span class="icon">
                    <i class="icon fa fa-chevron-right btn-minimize"></i>
                  </span>
                </div>
                <div class="accordion-body">
                  <div class="content">
                    <p class="text-p">You will see a bunch of free CSS templates when you search on Google. TemplateMo
                      website is
                      probably the best one because it is 100% free.
                    </p>
                  </div>
                </div>
              </article>
              <article class="accordion">
                <div class="accordion-head">
                  <span class="text-p">Ringkasan Laporan Keuangan</span>
                  <span class="icon">
                    <i class="icon fa fa-chevron-right btn-minimize"></i>
                  </span>
                </div>
                <div class="accordion-body">
                  <div class="content">
                    <p class="text-p">Mexant HTML5 Template is available to download 100% free of charge. This CSS layout
                      is based on
                      Boostrap 5 framework.
                    </p>
                  </div>
                </div>
              </article>
              <article class="accordion">
                <div class="accordion-head">
                  <span class="text-p">Informasi Mengenai Kepegawaian</span>
                  <span class="icon">
                    <i class="icon fa fa-chevron-right btn-minimize"></i>
                  </span>
                </div>
                <div class="accordion-body">
                  <div class="content">
                    <p class="text-p">Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique
                      magna, ac gravida
                      leo.<br>
                      Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo. Mauris scelerisque venenatis
                      justo, sed interdum sem.</p>
                  </div>
                </div>
              </article>
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