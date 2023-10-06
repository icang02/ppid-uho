<section class="simple-cta" id="permohonan">
  <div class="container">
    <div class="row justify-content-center g-5 g-md-4 px-3 px-md-0">
      <div class="col-lg-12 text-center mb-2 mb-md-5">
        <h4 class="fw-bold">Tata Cara <em class="txt-kuning">Permohonan</em></h4>
      </div>

      @foreach ($tataCara as $item)
        <div class="col-lg-3 text-center">
          <div class="image">
            <img src="{{ asset($item->gambar) }}">
          </div>
          <small class="text-white d-block mt-4 fw-bold">{{ $item->judul }}</small>
        </div>
      @endforeach

    </div>
  </div>

  <div class="popup-img">
    <span>&times;</span>
    <img src="{{ asset('img/123.png') }}">
  </div>

  <script>
    document.querySelectorAll('.image img').forEach(image => {
      image.onclick = () => {
        document.querySelector('.popup-img').style.display = 'block';
        document.querySelector('.popup-img img').src = image.getAttribute('src');
      }
    });

    document.querySelector('.popup-img span').onclick = () => {
      document.querySelector('.popup-img').style.display = 'none';
    }
  </script>
</section>
