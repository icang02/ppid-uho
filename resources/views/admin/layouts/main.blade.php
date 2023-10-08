<!DOCTYPE html>
<html lang="en">

<head>
  <title>Halaman Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="">
  <meta name="author" content="Phoenixcoded" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

  <!-- vendor css -->
  <link rel="stylesheet" href="/admin-assets/assets/css/style.css">

  {{-- tiny editor cdn --}}
  <script src="https://cdn.tiny.cloud/1/gpbwgwsn7c6j08npcqbznlniosdnau8smuipab8mhzhy2x9u/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

  {{-- jquery cdn --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <style>
    .fixed-button {
      display: none;
    }

    .pembungkus {
      max-width: 100%;
      overflow: hidden;
      position: relative;
      padding-bottom: 62.5%;
      border-radius: 10px;
      border: 1.5px solid #bcbcbc;
    }

    .pembungkus-img {
      width: 25%;
    }

    .responsive-element {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      background-size: cover;
      cursor: pointer;
      transition: all 0.4s ease;
    }

    @media (max-width: 576px) {
      .pembungkus-img {
        width: 100%;
      }
    }
  </style>
</head>

<body class="">

  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->


  @include('admin.components.sidebar')
  @include('admin.components.header')

  @yield('content')

  <!-- Required Js -->
  <script src="/admin-assets/assets/js/vendor-all.min.js"></script>
  <script src="/admin-assets/assets/js/plugins/bootstrap.min.js"></script>
  <script src="/admin-assets/assets/js/pcoded.min.js"></script>

  <!-- Apex Chart -->
  <script src="/admin-assets/assets/js/plugins/apexcharts.min.js"></script>

  {{-- tiny editor script --}}
  <script>
    tinymce.init({
      selector: 'textarea#tiny',
      plugins: 'tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      // toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      toolbar: 'undo redo | blocks | bold italic underline strikethrough | link | align | tinycomments | numlist bullist outdent indent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [{
          value: 'First.Name',
          title: 'First Name'
        },
        {
          value: 'Email',
          title: 'Email'
        },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
        "See docs to implement AI Assistant"))
    });

    // jquery
    $(document).ready(function() {
      // Hapus class tertentu
      // $('.fixed-button').hide();
    });
  </script>

</body>

</html>
