@extends('home.layouts.main')
@section('content')
  <div class="page-heading" style="background-image: url('{{ asset('img/rektorat2.png') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>
              {{ strip_tags($breadcumb) }}
            </h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">

    <section class="top-section mt-0 title-list-informasi">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb')

        <div class="row title mt-2 content">
          <div class="col-lg-12 align-self-center">
            <h4 class="txt-biru fw-bold text-center mb-5">
              {{ strip_tags($breadcumb) }}
              {{-- {{ $data->judul }} --}}
            </h4>
          </div>
        </div>
      </div>
    </section>

    <section class="top-section list-informasi">
      <div class="container px-0 px-md-0">
        <div class="row px-0 px-md-5  gap-4 gap-md-5 justify-content-center">
          <style>
            .bg-gelap {
              background: #000;
              position: absolute;
              top: 0;
              bottom: 0;
              width: 100%;
              opacity: 0;
              transition: all 0.4s ease-out;
              overflow: hidden;
            }

            .card p {
              font-size: 13px;
            }

            .icon {
              position: absolute;
              bottom: -20px;
              right: 50%;
              transform: translate(50%, 50%);
              font-size: 20px;
              z-index: 999;
              transition: all 0.7s ease;
              cursor: pointer;
              padding: 10px;
            }

            .bg-gelap:hover .icon {
              bottom: 50%
            }

            .card .bg-gelap:hover {
              opacity: 0.6;
            }
          </style>

          @forelse ($data as $item)
            <div class="col-lg-3">
              <div class="card relative shadow mx-auto" style="width: 230px;">
                <a href="{{ url($item->link) }}" target="_blank">
                  <div class="bg-gelap">
                    <span class="icon">
                      <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    </span>
                  </div>
                </a>

                <div class="card-body text-center">
                  <img src="{{ asset($item->gambar) }}" style="object-fit: cover; width: 100%">
                </div>
              </div>
              <div class="card mx-auto px-2 py-1 text-center bg-biru"
                style="width: 230px; border-bottom: 4px solid #f4b700">
                <p class="text-white">Laporan Tahun {{ $item->tahun }}</p>
              </div>
            </div>
          @empty
            <div class="col-lg-12 text-center mt-4">
              <small>Belum ada data.</small>
            </div>
          @endforelse

          <hr class="mt-5">
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
