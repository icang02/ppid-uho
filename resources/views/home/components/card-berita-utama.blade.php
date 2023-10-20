<div class="card" style="width: 100%; border-radius: 10px">
  <div class="pembungkus" style="border-top-left-radius: 10px; border-top-right-radius: 10px">
    <div class="responsive-element" style="background-image: url({{ asset($item->gambar ?? 'img/berita.jpg') }})"
      onclick="return window.location.href='{{ url('berita/' . $item->slug) }}'">
    </div>
  </div>
  <div class="card-body">
    <h5 class="card-title fw-bold">
      <a href="{{ url("berita/$item->slug") }}">{!! str_limit($item->judul, $limit = 90, $end = '...') !!}</a>
    </h5>
    <div class="text-muted">
      <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $item->tanggal }}
      {{-- <i class="fa-solid fa-eye ms-3"></i> {{ $item->view }}x dilihat --}}
    </div>
    <div class="card-text pt-0 pb-0">
      <div class="div">
        {!! str_limit(strip_tags($item->isi), $limit = 90, $end = '...') !!}
      </div>
    </div>
  </div>
</div>
