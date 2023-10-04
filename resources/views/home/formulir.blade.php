@extends('home.layouts.main')
@section('content')
  <link rel="stylesheet" href="{{ asset('css/page/informasi-publik.css') }}">

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Formulir Informasi</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="service-details mt-5">

    <section class="top-section mt-0">
      <div class="container">
        {{-- breadcrumb --}}
        @include('home.components.breadcrumb')

        <div class="row title mt-5">
          <div class="col-lg-12 align-self-center">
            <h4 class="mb-3 txt-biru fw-bold">Permohonan Informasi Publik</h4>
            <p>Formulir permohonan informasi publik adalah
              dokumen yang digunakan oleh individu untuk meminta informasi publik dari lembaga pendidikan
              tinggi atau universitas. Formulir ini memungkinkan pihak yang berkepentingan untuk mengajukan permohonan
              secara resmi
              untuk mendapatkan akses ke informasi yang dimiliki oleh institusi. Formulir permohonan informasi publik pada
              PPID kampus penting untuk memastikan transparansi dan akses terhadap informasi yang dimiliki oleh institusi
              pendidikan tinggi, sesuai dengan peraturan dan undang-undang yang berlaku.</p>
          </div>
        </div>
      </div>
    </section>


    <style>
      .accordion {
        margin-bottom: 30px;
      }

      .accordion .content {
        margin-top: 10px;
      }

      table {
        vertical-align: top !important;
      }

      @media (max-width: 768px) {
        .title {
          margin-bottom: 30px;
        }
      }
    </style>

    <section class="top-section list-informasi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            @php
              $arrMekanisme = [
                  'Pemohon datang ke meja layanan informasi, PPID UGM (Bagian Humas dan Protokol UGM) atau mengunjungi laman informasi publik.',
                  'Pemohon mengisi formulir permohonan informasi publik secara langsung atau daring dengan melampirkan KTP/akta pendirian badan publik.',
                  'Petugas layanan mencatat di buku registrasi dan memberitahukan nomor pendaftaran kepada pemohon.',
                  'Jika permohonan disetujui lanjut ke langkah selanjutnya. Jika tidak disetujui PPID memberikan alasan tertulis dan memberikan informasi pengajuan keberatan.',
                  'Jika permohonan disetujui, PPID mengajukan permohonan informasi kepada unit terkait. Hasilnya, unit kerja memberikan data kepada PPID.',
                  'PPID memberikan informasi tertulis kepada pemohon informasi.',
                  'Apabila pemohon telah puas terhadap respon dari PPID maka proses selesai.',
                  'Apabila pemohon tidak puas terhadap respon maka dapat mengajukan keberatan di atasan PPID maka proses selesai, sedangkan apabila tidak puas terhadap respon atasan PPID maka proses berlanjut di komisi informasi.',
              ];
            @endphp

            <article class="accordion">
              <b>Persyaratan Pelayanan</b>
              <div class="content">
                <table>
                  <tr>
                    <td>1.&nbsp;</td>
                    <td>Masyrakat</td>
                  </tr>
                  <tr>
                    <td>2.&nbsp;</td>
                    <td>Fotokopi KTP Pemohon atau fotokopi pendirian akte lembaga publik/ormas bagi pemohon atas nama</td>
                  </tr>
                </table>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>Sistem Mekanisme dan Prosedur</b>
              <div class="content">
                <table>
                  @foreach ($arrMekanisme as $item)
                    <tr>
                      <td>{{ $loop->iteration }}.&nbsp;</td>
                      <td>{{ $item }}</td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </article>


            <article class="accordion mt-3">
              <b>Jangka Waktu Penyelesaian</b>
              <div class="content">
                <p>Waktu penyelesaian dilaksanakan paling lambat 10 (sepuluh) hari kerja sejak diterimanya permintaan,
                  Pejabat Pengelola Informasi dan Dokumentasi (PPID) akan menyampaikan pemberitahuan yang berisikan
                  informasi yang diminta berada di bawah penguasaannya atau tidak, PPID dapat memperpanjang waktu paling
                  lambat 7 (tujuh) hari kerja.</p>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>Biaya Tarif</b>
              <div class="content">
                <p>Biaya administrasi pelayanan gratis, kecuali biaya pengganti penggandaan apabila informasi diberikan
                  dalam versi cetak (apabila diperlukan versi cetak).Informasi Publik.</p>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>Produk Layanan</b>
              <div class="content">
                <p>Informasi Publik.</p>
              </div>
            </article>

            <article class="accordion mt-3">
              <b>Pengaduan, Saran dan Masukan</b>
              <div class="content">
                <table>
                  <tr>
                    <td>1.&nbsp;</td>
                    <td>Pengaduan, saran, dan masukan dapat disampaikan secara tertulis melalui surat yang ditujukan
                      kepada: Pejabat Pengelola Informasi dan Dokumentasi (PPID) UGM Bagian Humas dan Protokol UGM, Gedung
                      Pusat UGM, Lantai 1 Sayap Selatan Bulaksumur, Yogyakarta.</td>
                  </tr>
                  <tr>
                    <td>2.&nbsp;</td>
                    <td>Menyampaikan pengaduan, saran, dan masukan langsung melalui:
                      <br>Telepon: +62 274 6491936
                      <br>Email: ppid@ugm.ac.id
                      <br>Laman: aspirasi.ugm.ac.id
                    </td>
                  </tr>
                </table>
              </div>
            </article>

            <div class="col-12 mt-5">
              <a class="btn py-3 px-4 bg-biru text-white" href="#">BUAT PERMOHONAN</a>
            </div>

            <script>
              $('table tr td').addClass('align-top')
            </script>
          </div>
        </div>
      </div>
    </section>














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

    <script>
      $(document).ready(function() {
        // Hapus class tertentu dari elemen
        $('.is-open').removeClass('is-open');
        $('.accordion-body').css('height', '0');
      });
    </script>
  @endsection
