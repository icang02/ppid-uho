@php
  $footer = App\Landing::where('bagian', 'footer')->get();
@endphp

<section class="partners" id="partner">
  <div class="container-fluid">
    <div class="row justify-content-center gap-4 gap-md-0">

      @foreach ($footer as $item)
        <div class="col-lg-3">
          <h6 class="text-white">{{ $item->judul }}</h6>
          <div class="garis-kuning"></div>
          <p>{{ $item->isi }}</p>
        </div>
      @endforeach

    </div>
  </div>
</section>
