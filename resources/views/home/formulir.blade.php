@extends('home.layouts.main')
@section('content')
  <link rel="stylesheet" href="{{ asset('css/page/informasi-publik.css') }}">

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Formulir Informasi</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">

    <style>
      .accordion {
        margin-bottom: 30px;
      }

      .accordion .content {
        margin-top: 10px;
      }

      table {
        vertical-align: top !important;
        font-size: 15px;
      }

      .text-p {
        font-size: 15px;
      }

      @media (max-width: 768px) {
        .title {
          margin-bottom: 30px;
        }

        table {
          font-size: 12px;
          line-height: 20px;
        }

        .text-p {
          font-size: 12px;
          line-height: 20px;
        }

        .btn-formulir {
          font-size: 12px !important;
        }
      }
    </style>

    <section class="top-section mt-0">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb')

        <div class="row title mt-5">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">{{ $formulir->judul }}</h4>
            <p class="text-p">{{ $formulir->deskripsi }}</p>
          </div>
        </div>
      </div>
    </section>

    <section class="top-section list-informasi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">

            <article class="accordion">
              <b>{{ $jenisFormulir->persyaratan }}</b>
              <div class="content">
                <table>
                  @foreach (explode('/|', $jenisFormulir->isi_persyaratan) as $item)
                    <tr>
                      <td>{{ $loop->iteration }}.&nbsp;</td>
                      <td>{{ $item }}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>{{ $jenisFormulir->mekanisme }}</b>
              <div class="content">
                <table>
                  @foreach (explode('/|', $jenisFormulir->isi_mekanisme) as $item)
                    <tr>
                      <td>{{ $loop->iteration }}.&nbsp;</td>
                      <td>{{ $item }}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </article>


            <article class="accordion mt-3">
              <b>{{ $jenisFormulir->jangka_waktu }}</b>
              <div class="content">
                <p class="text-p">{{ $jenisFormulir->isi_jangka_waktu }}</p>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>{{ $jenisFormulir->biaya }}</b>
              <div class="content">
                <p class="text-p">{{ $jenisFormulir->isi_biaya }}</p>
              </div>
            </article>

            <div class="col-12 mt-5">
              <a class="btn py-2 px-3 py-md-3 px-md-4 bg-biru text-white btn-formulir" href="{{ url($formulir->link) }}"
                target="_blank">
                @if (request()->is('formulir/permohonan-informasi-publik'))
                  BUAT PERMOHONAN
                @elseif (request()->is('formulir/keberatan-layanan-informasi-publik'))
                  Ajukan Keberatan
                @elseif (request()->is('formulir/penyelesaian-sengketa-informasi-publik'))
                  Link Formulir
                @endif
              </a>
            </div>

            <script>
              $('table tr td').addClass('align-top')
            </script>
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
