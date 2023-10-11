<style>
  .card {
    width: 100%;
    /* width: 380px; */
  }

  .berita-body a {
    font-size: var(--text-lg);
    color: #000;
  }

  .berita-body a:hover {
    text-decoration: underline !important;
  }

  .text-muted {
    font-size: 13px;
  }

  .ms-3 {
    line-height: 21px;
  }

  @media (max-width: 576px) {
    .card {
      width: 100%;
    }

    .berita-body a {
      font-size: var(--text-p);
    }

    .text-muted {
      font-size: 10px;
    }

    .ms-3 {
      line-height: 19px;
    }
  }
</style>

<div class="card shadow">
  <div style="background: #EDEDED; border-bottom: 2.5px #000 solid; margin-bottom: 28px" class="px-3 py-3">
    <h6>Berita & Informasi Terbaru</h6>
  </div>

  {{-- list berita --}}
  @php
    $beritaList = App\Berita::where('kategori', 'berita')
        ->where('id', '!=', $berita->id ?? '')
        ->orderBy('tanggal', 'desc')
        ->take(4)
        ->get();
  @endphp

  @foreach ($beritaList as $i => $item)
    <div class="d-flex flex-column berita-body">
      <div class="d-flex px-3">
        <div>
          <img src="{{ asset('img/berita.jpg') }}"
            style="{{ request()->is('berita*') ? 'width: 110px; height: 80px;' : 'width: 80px; height: 60px;' }} object-fit: cover; border-radius: 4px">
        </div>
        <div class="ms-3">
          <a href="{{ url("berita/$item->slug") }}" class="fw-bold"> {!! str_limit($item->judul, $limit = 100, $end = '...') !!}</a>
          <div class="text-muted mt-2">
            <i class="fa-sharp fa-solid fa-calendar-days me-1"></i> {{ $item->tanggal }}
            <i class="fa-solid fa-eye ms-3"></i> {{ $item->view }}x dilihat
          </div>
        </div>
      </div>
    </div>

    @if ($i != count($beritaList) - 1)
      <hr>
    @else
      <div class="pb-4"></div>
    @endif
  @endforeach

</div>
