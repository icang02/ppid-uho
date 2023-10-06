<section class="service-details" id="jenisInformasi">
  <div class="container ">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h6 class="txt-kuning">PPID UHO</h6>
          <h4>Jenis - Jenis Informasi</h4>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu">
                  @foreach ($jenisInformasi as $i => $item)
                    <div class="{{ $i == 0 ? 'active' : '' }} gradient-border">
                      {{ $item->judul }}
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="col-lg-12">
                <ul class="nacc">
                  @foreach ($jenisInformasi as $i => $item)
                    <li class="{{ $i == 0 ? 'active' : '' }}">
                      <div>
                        <div class="left-image jenis-informasi" style="z-index: -999">
                          <img src="{{ asset($item->gambar) }}" class="border border-2" style="width: 35%">
                        </div>
                        <div class="right-content">
                          <h4>{{ $item->judul }}</h4>
                          <p>{{ $item->isi }}</p>

                          @php
                            $link = '';
                            if ($item->id == 1) {
                                $link = route('info_berkala');
                            } elseif ($item->id == 2) {
                                $link = route('info_setiap_saat');
                            } else {
                                $link = route('info_serta_merta');
                            }
                          @endphp
                          <span><a href="{{ url($link) }}">Selengkapnya..</a></span>
                        </div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
