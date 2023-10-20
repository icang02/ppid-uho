@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>
              {{ $berita->kategori == 'berita' ? 'Detail Berita & Informasi' : 'Detail Informasi Serta Merta' }}
            </h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="what-we-do mt-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-12" id="detailBerita">
          <div class="service-item">

            @include('home.components.breadcrumb')

            <div class="row mt-2">
              <div class="col-lg-7 order-2 order-md-1">
                <div class="left-content">
                  <h4>{{ $berita->judul }}</h4>
                  <div class="text-muted">
                    <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $berita->tanggal }}
                    {{-- <i class="fa-solid fa-eye ms-3"></i> {{ $berita->view }}x dilihat --}}
                    <i class="fa-solid fa-book-open-reader ms-3 me-1"></i> Oleh : {{ $berita->penulis }}
                  </div>

                  <hr>

                  <div class="text-body div">
                    {!! $berita->isi !!}
                  </div>
                </div>
              </div>
              <div class="col-lg-5 order-1 order-md-2">
                <div class="right-image mb-0 mb-md-5">
                  {{-- <div class="pembungkus">
                    <div class="responsive-element"
                      style="background-image: url({{ asset($berita->gambar ?? 'img/berita.jpg') }})">
                    </div>
                  </div> --}}
                  <img src="{{ asset($berita->gambar ?? 'img/berita.jpg') }}" class="shadow">
                </div>
                <div class="d-none d-md-block">
                  @include('home.components.card-berita')
                </div>
              </div>
            </div>
          </div>

          <div class="garis-bawah">
            <div class="mb-5 d-block d-md-none" style="margin-top: 40px">
              @include('home.components.card-berita')
            </div>
            <hr>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      var csrfToken = $('meta[name="csrf-token"]').attr('content');

      setTimeout(function() {
        updateData();
      }, 20000);

      function updateData() {
        $.ajax({
          type: 'POST',
          url: '/update-view/{{ $berita->id }}',
          data: {
            // Data yang ingin Anda kirimkan dalam permintaan
          },
          headers: {
            'X-CSRF-TOKEN': csrfToken
          },
          success: function(response) {
            // Tangani respons dari server
            // console.log(response.msg);
          },
          error: function(error) {
            // Tangani kesalahan jika ada
            console.log(error);
          }
        });
      }
    });
  </script>
@endsection
