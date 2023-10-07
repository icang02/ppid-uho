@extends('home.layouts.main')

@section('content')
  <!-- ***** Main Banner Area Start ***** -->
  @include('home.components.hero')

  @include('home.components.jenis-informasi')

  @include('home.components.permohonan')

  @include('home.components.konten');

  @include('home.components.qoutes')

  @include('home.components.berita_utama');

  @include('home.components.partner')
@endsection
