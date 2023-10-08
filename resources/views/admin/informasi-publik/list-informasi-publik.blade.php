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
                <h5 class="m-b-10">List Informasi Publik</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#!">Berita & informasi</a></li>
                <li class="breadcrumb-item"><a href="#!">List Informasi Publik</a></li>
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
              <h5>{{ $data->judul }}</h5>
              <span class="d-block m-t-5">Daftar {{ strtolower($data->judul) }}.</span>
            </div>

            <div class="card-body table-border-style">
              <button type="button" class="btn  btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLive">
                <i class="fas fa-plus"></i>&nbsp; Tambah Data</button>
              <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Aksi</th>
                      <th>Judul</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data->list_informasi_publik as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#modalDetail{{ $item->id }}"
                            class="btn-sm btn btn-info">
                            <i class="fas fa-eye"></i>&nbsp; Lihat</button>
                          <button type="button" data-toggle="modal" data-target="#exampleModalLive{{ $item->id }}"
                            class="btn-sm btn btn-warning">
                            <i class="fas fa-edit"></i>&nbsp; Edit</button>
                          <form action="" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" data-toggle="modal" class="btn-sm btn btn-danger"
                              onclick="return confirm('Hapus data ini?')">
                              <i class="fas fa-trash"></i>&nbsp; Hapus</button>
                          </form>
                        </td>
                        <td>{{ $item->judul }}</td>
                      </tr>

                      {{-- MODAL DETAIL --}}
                      <div id="modalDetail{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="modalDetailLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalDetailLabel">{{ $item->judul }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                  aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body">
                              {!! $item->isi !!}
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- MODAL EDIT --}}
                      <div id="exampleModalLive{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLiveLabel">{{ $item->judul }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                  aria-hidden="true">&times;</span></button>
                            </div>

                            <form action="{{ route('admin_update_list_informasi_publik', $item->id) }}" method="POST">
                              <div class="modal-body">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                  <label for="judul">Judul</label>
                                  <input name="judul" value="{{ $item->judul }}" type="text" class="form-control"
                                    id="judul" placeholder="Enter judul" required>
                                </div>
                                <div class="form-group">
                                  <label for="judul">Isi Informasi</label>
                                  <textarea name="isi" id="tiny">{{ $item->isi }}</textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn  btn-primary">Simpan Perubahan</button>
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
@endsection
