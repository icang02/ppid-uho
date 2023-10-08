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
                <h5 class="m-b-10">Menu Landing</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Landing</li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard/landing/ppid') }}">Deskripsi PPID</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">

        <!-- [ form-element ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Deskripsi PPID</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="/landing/ppid/update" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" value="{{ $ppid->judul }}" type="text" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Deskripsi PPID</label>
                      <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $ppid->isi }}</textarea>
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Simpan Perubahan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ form-element ] end -->
      @endsection
