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
                            <h5 class="m-b-10">Berita & Informasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Berita & informasi</a></li>
                            <li class="breadcrumb-item"><a href="#!">List Berita & Informasi</a></li>
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
                        <h5>Hover Table</h5>
                        <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
                    </div>
                   
                    <div class="card-body table-border-style">
                        <a href="/dashboard/form-berita" class="btn btn-primary mb-3"><i
                            class="fas fa-plus"></i> Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Jenis</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>
                                                <form class="d-inline" action="/dashboard/detail-berita">
                                                    <button
                                                        class="btn-sm btn-primary">
                                                        <i class="fas fa-eye"></i></button>
                                                </form>
                                            </span>
                                            <span>
                                                <form class="d-inline" action="/dashboard/edit-berita">
                                                <button
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                                </form>
                                            </span>
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>berita</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <span>
                                                <form class="d-inline" action="/dashboard/detail-berita">
                                                    <button
                                                        class="btn-sm btn-primary">
                                                        <i class="fas fa-eye"></i></button>
                                                </form>
                                            </span>
                                            <span>
                                                <form class="d-inline" action="/dashboard/edit-berita">
                                                <button
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                                </form>
                                            </span>
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>informasi</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <span>
                                                <form class="d-inline" action="/dashboard/detail-berita">
                                                    <button
                                                        class="btn-sm btn-primary">
                                                        <i class="fas fa-eye"></i></button>
                                                </form>
                                            </span>
                                            <span>
                                                <form class="d-inline" action="/dashboard/edit-berita">
                                                <button
                                                        class="btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i></button>
                                                </form>
                                            </span>
                                            <form class="d-inline">
                                                <span>
                                                    <button type="submit" class="btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i></button>
                                                </span>
                                            </form>
                                        </td>
                                        <td>berita</td>
                                        <td>@twitter</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Hover-table ] end -->
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>



@endsection

