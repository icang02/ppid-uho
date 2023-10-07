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

  <section class="service-details mt-5" id="tentang">
    <section class="top-section mt-0">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb')

        <div class="row title mt-2">
          <div class="col-lg-12 align-self-center">
            @if (request()->is('tentang/profil') || request()->is('regulasi'))
              <h4 class="mb-3 txt-biru fw-bold">{{ $tentang->judul }}</h4>
              <div>
                {!! $tentang->isi !!}
              </div>
            @endif

            @if (request()->is('tentang/visi-misi') || request()->is('tentang/tugas-fungsi'))
              <h4 class="mb-3 txt-biru fw-bold">{{ $tentang[0]->judul }}</h4>
              <div>
                {!! $tentang->first()->isi !!}
              </div>

              <h4 class="mb-3 mt-4 txt-biru fw-bold">{{ $tentang[1]->judul }}</h4>
              <div>
                <table>
                  @forelse (explode('/|', $tentang[1]->isi) as $item)
                    <tr>
                      <td>{{ $loop->iteration }}.&nbsp;</td>
                      <td>{{ $item }}</td>
                    </tr>
                  @empty
                    -
                  @endforelse
                </table>
              </div>
            @endif

            @if (request()->is('tentang/struktur-ppid'))
              <div class="row gap-md-0 gap-3 justify-content-between">
                <div class="col-md-6">
                  <h4 class="mb-3 txt-biru fw-bold">{{ $tentang->judul }}</h4>
                  <div>
                    {!! $tentang->isi !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="{{ asset($tentang->gambar) }}" alt="img.jpg">
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </section>
  </section>

@endsection
