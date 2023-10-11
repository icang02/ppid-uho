@extends('admin.layouts.main')
@section('content')
  <!-- [ Main Content ] start -->
  <section class="pcoded-main-container">
    <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Menu Utama</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                {!! implode($breadcumb, '') !!}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ Hover-table ] start -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>{{ $title }}</h5>
            </div>

            <div class="card-body table-border-style">

              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </div>
              @endif

              @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif

              @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif

              <div class="row">
                @forelse ($data as $item)
                  <div class="col-lg-4" style="position: relative">
                    <a href="{{ route('admin_img_laporan_akses_delete', $item->id) }}"
                      onclick="return confirm('Hapus gambar?')">
                      <span class="bg-danger text-white px-2 py-0"
                        style="position: absolute; font-weight: bold; right: 15px;">X</span>
                    </a>
                    <img src="{{ asset($item->gambar) }}" class="img-fluid">
                  </div>
                @empty
                  <div class="col-lg-12 text-center">
                    Belum ada data gambar.
                  </div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
@endsection
