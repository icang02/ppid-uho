<style>
  .breadcrumb hr {
    width: 100% !important;
    margin-top: 10px !important;
  }

  .breadcrumb {
    font-size: 15px !important;
  }

  @media (max-width: 768px) {
    .breadcrumb {
      font-size: 12px !important;
    }
  }
</style>

<div class="breadcrumb">
  <div>
    <a href="{{ url('/') }}" class="text-dark">
      Beranda</a>&nbsp;>&nbsp; {!! $breadcumb ?? '-' !!}
  </div>
  <hr>
</div>
