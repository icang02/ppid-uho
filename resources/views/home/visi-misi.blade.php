@extends('home.layouts.main')
@section('content')
  <link rel="stylesheet" href="{{ asset('css/page/informasi-publik.css') }}">

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Visi & Misi PPID</h2>
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

          table {
            vertical-align: top !important;
            line-height: 25px;
            font-size: 15px
          }

          @media (max-width: 768px) {
            .text-p {
              font-size: 12px !important;
              line-height: 20px;
            }

            table {
              line-height: 20px;
              font-size: 12px
            }
          }
        </style>

        <div class="row title mt-5">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">Visi PPID</h4>
            <p class="text-p">
              Menjadi penyedia layanan informasi publik yang profesional, transparan dan akuntabel sesuai dengan ketentuan
              peraturan perundang-undangan
            </p>
          </div>

          <div class="col-lg-12 align-self-center mt-5">
            <h4 class="mb-3 txt-biru fw-bold">Misi PPID</h4>
            <table>
              <tr>
                <td>1.&nbsp;</td>
                <td>Meningkatkan tata kelola informasi publik</td>
              </tr>
              <tr>
                <td>2.&nbsp;</td>
                <td>Meningkatkan sumber daya manusia di bidang pelayanan informasi publik</td>
              </tr>
              <tr>
                <td>3.&nbsp;</td>
                <td>Mengembangkan kualitas sistem informasi pelayanan publik</td>
              </tr>
            </table>
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
