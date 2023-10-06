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
                            <h5 class="m-b-10">Menu Formulir</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Formulir</a></li>
                            <li class="breadcrumb-item"><a href="">Permohonan Keberatan Layanan Informasi Publik</a></li>
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
                        <h5>Penjelasan Permohonan Keberatan Layanan Informasi Publik</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link Formulir</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Detail / Penjelasan </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                    <div class="card-header">
                        <h5>Syarat Dan Ketentuan Permohonan Keberatan Layanan Informasi Publik</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>

                                
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Persyaratan Pelayanan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sistem Mekanisme dan Prosedur</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Jangka Waktu Penyelesaian</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Biaya Tarif</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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

