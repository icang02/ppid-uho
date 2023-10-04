@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Detail Berita</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="what-we-do mt-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <div class="service-item">

            @include('home.components.breadcrumb')

            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="left-content">
                  <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error modi a mollitia, qui assumenda
                    porro.</h4>
                  <p class="text-muted" style="font-size: 0.85rem">
                    <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                    04 March 2023
                    <i class="fa-solid fa-eye ms-3"></i> <b>100x
                      dilihat</b>
                  </p>
                  <p>If you need more HTML templates, you can try visiting TooCSS blog and Tooplate websites. You can get
                    many good templates on those websites.<br><br>Nulla non placerat neque, a gravida elit. Vestibulum
                    ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi sed dolor
                    condimentum tellus commodo volutpat non malesuada turpis.<br><br>Nulla non placerat neque, a gravida
                    elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi
                    sed dolor condimentum tellus commodo volutpat non malesuada turpis.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image">
                  <img src="assets/images/service-image-02.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
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
@endsection
