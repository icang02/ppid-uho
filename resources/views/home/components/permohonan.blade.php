<section class="simple-cta" id="permohonan">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-12 text-center mb-5">
        <h4>Tata Cara <em class="txt-kuning">Permohonan</em></h4>
      </div>
      <div class="col-lg-3">
        <div class="image">
          <img src="{{ asset('img/1.png') }}">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="image">
          <img src="{{ asset('img/2.png') }}">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="image">
          <img src="{{ asset('img/3.png') }}">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="image">
          <img src="{{ asset('img/4.png') }}">
        </div>
      </div>
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
