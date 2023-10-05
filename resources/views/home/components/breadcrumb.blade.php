<style>
  .breadcrumb {
    position: relative;
  }

  .breadcrumb hr {
    position: absolute;
    left: -100%;
    top: 20px;
    width: 4000px;
  }

  .breadcrumb {
    font-size: 0.8rem;
  }

  @media (max-width: 768px) {
    .breadcrumb {
      font-size: 0.7rem;
    }
  }
</style>

<div class="breadcrumb">
  <a href="{{ url('/') }}" class="text-dark">Beranda</a>&nbsp;>&nbsp;<span class="txt-kuning">Permohonan
    Informasi
    Publik</span>
  <hr>
</div>
