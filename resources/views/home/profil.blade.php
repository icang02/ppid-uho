@extends('home.layouts.main')
@section('content')
  <link rel="stylesheet" href="{{ asset('css/page/informasi-publik.css') }}">

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Profil PPID</h2>
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

        <style>
          .text-p {
            font-size: 15px !important;
            line-height: 25px;
          }

          @media (max-width: 768px) {
            .text-p {
              font-size: 12px !important;
              line-height: 20px;
            }
          }
        </style>

        <div class="row title mt-5">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">Profil Pejabat Pengelola Informasi dan Dokumentasi (PPID)</h4>
            <p class="text-p">
              PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, yang berfungsi sebagai pengelola
              dan penyampai dokumen yang dimiliki oleh Badan Publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan
              Informasi Publik. Dengan keberadaan PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih
              mudah dan tidak berbelit karena dilayani lewat satu pintu.

              Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang
              penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.
            </p>
          </div>
        </div>
      </div>
    </section>


    <style>
      .accordion {
        margin-bottom: 30px;
      }

      .accordion .content {
        margin-top: 10px;
      }

      table {
        vertical-align: top !important;
      }

      @media (max-width: 768px) {
        .title {
          margin-bottom: 30px;
        }
      }
    </style>

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