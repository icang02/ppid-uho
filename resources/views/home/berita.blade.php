@extends('home.layouts.main')
@section('content')
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Berita & Informasi</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">
    <div class="container ">
      {{-- breadcrumb --}}
      @include('home.components.breadcrumb')

      <div class="col">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="left-image">
                        <img src="assets/images/service-details-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing.</h4>
                        <p class="text-muted mt-3" style="font-size: 0.85rem">
                          <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                          04 March 2023
                          <i class="fa-solid fa-eye ms-3"></i> <b>100x
                            dilihat</b>
                        </p>
                        <p>Informasi Berkala merupakan informasi yang diperbarui kemudian disediakan dan diumumkan
                          kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</p>
                        <span><a href="/detail_berita">Selengkapnya..</a></span>
                      </div>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="left-image">
                        <img src="assets/images/service-details-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p class="text-muted mt-3" style="font-size: 0.85rem">
                          <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                          04 March 2023
                          <i class="fa-solid fa-eye ms-3"></i> <b>100x
                            dilihat</b>
                        </p>
                        <p>Informasi Berkala merupakan informasi yang diperbarui kemudian disediakan dan diumumkan
                          kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</p>
                        <span><a href="/detail_berita">Selengkapnya..</a></span>
                      </div>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col">
                <ul class="nacc">
                  <li class="active">
                    <div>
                      <div class="left-image">
                        <img src="assets/images/service-details-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, excepturi.</h4>
                        <p class="text-muted mt-3" style="font-size: 0.85rem">
                          <i class="fa-sharp fa-solid fa-calendar-days me-1"></i>
                          04 March 2023
                          <i class="fa-solid fa-eye ms-3"></i> <b>100x
                            dilihat</b>
                        </p>
                        <p>Informasi Berkala merupakan informasi yang diperbarui kemudian disediakan dan diumumkan
                          kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</p>
                        <span><a href="/detail_berita">Selengkapnya..</a></span>
                      </div>
                    </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
    </div>
  </section>


  {{-- 
<section class="what-we-do">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="left-content">
          <h4>Please tell us about your idea and how you want it to be</h4>
          <p>If you need more HTML templates, you can try visiting TooCSS blog and Tooplate websites. You can get many good templates on those websites.<br><br>Nulla non placerat neque, a gravida elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi sed dolor condimentum tellus commodo volutpat non malesuada turpis.</p>
          <div class="green-button">
            <a href="contact-us.html">Discover More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-items">
          <div class="row">
            <div class="col-lg-6">
              <div class="item">
                <em>01</em>
                <h4>First Step</h4>
                <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item">
                <em>02</em>
                <h4>Second Step</h4>
                <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item">
                <em>03</em>
                <h4>Third Step</h4>
                <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item">
                <em>04</em>
                <h4>Fourth Step</h4>
                <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

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
