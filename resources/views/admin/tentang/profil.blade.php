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
                <h5 class="m-b-10">Menu Tentang</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="">Tentang</a></li>
                <li class="breadcrumb-item"><a href="">Profile</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] start -->
      <div class="row">

        <!-- [ form-element ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Halaman Profile</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">

                  <form action="{{ route('update_tentang', $tentang->id) }}" method="post">
                    @method('put')
                    @csrf

                    @if (request()->is('dashboard/tentang/profil'))
                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul"
                          value="{{ $tentang->judul }}" placeholder="Enter judul">
                      </div>

                      <div class="form-group">
                        <label for="isi">Isi Profil</label>
                        <textarea class="form-control" id="isi" rows="5" name="isi">{{ $tentang->isi }}</textarea>
                      </div>
                    @endif

                    <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
