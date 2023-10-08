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
  <link rel="icon" href="/admin-assets/assets/images/favicon.ico" type="image/x-icon">

  <!-- vendor css -->
  <link rel="stylesheet" href="/admin-assets/assets/css/style.css">


</head>

<body class="">

  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->


  <div class="auth-wrapper">
    <div class="auth-content text-center">
      <img src="/admin-assets/assets/images/logo.png" alt="" class="img-fluid mb-4">
      <div class="card borderless">
        <div class="row align-items-center ">
          <div class="col-md-12">
            <div class="card-body">
              <h4 class="mb-3 f-w-400">Signin</h4>
              <hr>
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="Email" placeholder="Email address">
              </div>
              <div class="form-group mb-4">
                <input type="password" class="form-control" id="Password" placeholder="Password">
              </div>
              <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
              </div>
              <button class="btn btn-block btn-primary mb-4"
                onclick="return window.location.href='/dashboard'">Signin</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- [ auth-signin ] end -->
  <!-- Required Js -->
  <script src="/admin-assets/assets/js/vendor-all.min.js"></script>
  <script src="/admin-assets/assets/js/plugins/bootstrap.min.js"></script>
  <script src="/admin-assets/assets/js/pcoded.min.js"></script>

  <!-- Apex Chart -->
  <script src="/admin-assets/assets/js/plugins/apexcharts.min.js"></script>


  <!-- custom-chart js -->

</body>

</html>
