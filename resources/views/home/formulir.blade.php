@extends('home.layouts.main')
@section('content')
  @php
    if (request()->is('tentang*')) {
        $imgPath = 'img/rektorat2.png';
    } elseif (request()->is('informasi-publik*')) {
        $imgPath = 'img/tugu.png';
    } elseif (request()->is('formulir*')) {
        $imgPath = 'img/audit.png';
    } elseif (request()->is('regulasi*')) {
        $imgPath = 'img/audit.png';
    }
  @endphp

  <div class="page-heading" style="background-image: url('{{ asset($imgPath) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>{{ strip_tags($breadcumb) }}</h2>
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
            <h4 class="txt-biru fw-bold">{{ $data->judul }}</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="top-section list-informasi">
      <div class="container">
        <div class="row">

          <div
            class="{{ request()->is('regulasi*') || request()->is('formulir*') ? 'col-lg-7 order-2 ps-md-4' : 'col-lg-8' }}">
            <div class="div">
              {!! $data->isi !!}
            </div>

            @if (request()->is('tentang/struktur-ppid'))
              <div class="text-center">
                <img src="{{ asset($data->gambar ?? 'img/berita.jpg') }}" class="img-thumbnail img-struktur"
                  alt="img.jpg">
              </div>
            @endif

            {{-- TOMBOL LINK FORMULIR --}}
            @if (request()->is('formulir*'))
              <div class="mt-5">
                <a class="btn py-2 px-3 py-md-3 px-md-4 bg-biru text-white btn-formulir" href="{{ url($data->link) }}"
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
            @endif

            @if (request()->is('informasi-publik*'))
              {{-- LIST INFORMASI PUBLIK --}}
              <section class="top-section">
                <div class="accordions is-first-expanded ms-0">

                  @forelse ($listData as $item)
                    <article class="accordion">
                      <div class="accordion-head">
                        <span>{{ $item->judul }}</span>
                        <span class="icon">
                          <i class="icon fa fa-chevron-right btn-minimize"></i>
                        </span>
                      </div>
                      <div class="accordion-body">
                        <div class="content div">
                          {!! $item->isi !!}
                        </div>
                      </div>
                    </article>
                  @empty
                    Kosong
                  @endforelse
              </section>

              <div style="float: right;" class="mt-4">
                {!! $listData->render() !!}
              </div>
            @endif
          </div>

          @if (request()->is('regulasi*') || request()->is('formulir*'))
            {{-- <hr class="d-block d-md-none my-4 order-2"> --}}
          @endif

          <div
            class="{{ request()->is('regulasi*') || request()->is('formulir*') ? 'col-lg-5 ps-md-0' : 'col-lg-4 ps-md-5' }} mt-2 mt-md-0">
            @if (request()->is('tentang*') || request()->is('informasi-publik*'))
              <hr class="d-block d-md-none mt-4 mb-5">
              @include('home.components.card-berita')
            @else
              @php
                $imgPath = 'img/regulasi.jpg';
                if (request()->is('formulir/permohonan-informasi-publik')) {
                    $imgPath = 'img/permohonan.jpg';
                } elseif (request()->is('formulir/keberatan-layanan-informasi-publik')) {
                    $imgPath = 'img/keberatan.jpg';
                } elseif (request()->is('formulir/penyelesaian-sengketa-informasi-publik')) {
                    $imgPath = 'img/Penyelesaian Sengketa.jpg';
                }
              @endphp
              <img src="{{ asset($imgPath) }}" class="img-thumbnail d-none d-md-block"
                style="width: 540px; height: 395px; object-fit: cover">
            @endif
          </div>
        </div>

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
