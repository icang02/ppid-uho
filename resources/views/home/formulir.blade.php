@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
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
          <div class="col-lg-12 tes align-self-center mb-3">

            <div class="div">
              {!! $data->isi !!}
            </div>

            @if (request()->is('tentang/struktur-ppid'))
              <img src="{{ asset($data->gambar) }}" class="img-thumbnail" alt="img.jpg">
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

                  @forelse ($data->list_informasi_publik as $item)
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
            @endif
          </div>
        </div>

        <hr>
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
