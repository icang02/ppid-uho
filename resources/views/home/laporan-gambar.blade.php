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
              Laporan Akses Informasi Publik {{ isset($data) ? "Tahun $data->tahun" : '' }}
              {{-- {{ $data->judul }} --}}
            </h4>
          </div>
        </div>
      </div>
    </section>

    <section class="top-section list-informasi">
      <div class="container px-0 px-md-0">
        <div class="row justify-content-center gap-3 gap-md-5">

          @forelse ($dataGambar as $i => $item)
            <div class="{{ $i == 0 ? 'col-lg-7' : 'col-lg-5' }}">
              <img src="{{ asset($item->gambar ?? 'img/berita.jpg') }}" class="img-thumbnail">
            </div>
          @empty
            <div class="col-lg-12 text-center mt-4">
              <small>Belum ada data gambar.</small>
            </div>
          @endforelse


          @if (isset($data))
            <div class="col-12 text-center">
              <a href="{{ url($data->link) }}" target="_blank" class="btn-sm btn text-white bg-kuning">Unduh File
                Laporan</a>
            </div>
          @endif

          @if ($laporan->isNotEmpty())
            <div class="col-lg-12">
              <style>
                .bg-biru {
                  border-radius: 0px;
                  width: 320px;
                }

                .x {
                  position: relative;
                  overflow: hidden;
                  cursor: pointer;
                }

                .k {
                  top: 4px;
                  left: 4px;
                  transition: all 0.4s ease;
                  transform: translateX(-98%);
                }

                .x:hover .k {
                  position: absolute;
                  width: 100%;
                  height: 93%;
                  background: #F4B700;
                  border-left: 5px solid #000;
                  transform: translate(0px)
                }

                .k h5 {
                  position: absolute;
                  left: 50%;
                  top: 60%;
                  width: 100%;
                  transform: translate(-50%, -90%);
                }

                @media (max-width: 576px) {
                  .bg-biru {
                    width: 98.02%;
                    font-size: 13px;
                  }

                  .x:hover .k {
                    width: 100%;
                  }

                  .k h5 {
                    font-size: 16px !important;
                  }

                  .bg-biru {
                    padding-left: 80px !important;
                    padding-right: 80px !important;
                  }
                }
              </style>

              <div class="d-flex flex-column flex-md-row justify-content-center">
                @foreach ($laporan as $item)
                  <div class="x"
                    onclick="window.location.href='{{ url('laporan/akses-informasi-publik?tahun=' . $item->tahun) }}'">
                    <div class="k">
                      <h5 class="fw-bold text-white text-center" style="letter-spacing: 3px">LIHAT LAPORAN</h5>
                    </div>
                    <button class="btn m-1 bg-biru text-white py-4 px-5 fw-bold">Laporan
                      Akses Informasi Publik Tahun {{ $item->tahun }}</button>
                  </div>
                @endforeach
              </div>
            </div>
          @endif

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
