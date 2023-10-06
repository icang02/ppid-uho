@extends('home.layouts.main')
@section('content')
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

  <section class="service-details mt-5 title-list-informasi">
    <section class="top-section mt-0">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb', ['breacumb' => $breadcumb])

        <div class="row title mt-2 content">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">{{ $informasiPublik->judul }}</h4>
            <p>{{ $informasiPublik->deskripsi }}</p>
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
                    <span>{{ $item->judul }}</span>
                    <span class="icon">
                      <i class="icon fa fa-chevron-right btn-minimize"></i>
                    </span>
                  </div>
                  <div class="accordion-body">
                    <div class="content">
                      {!! $item->isi !!}
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
