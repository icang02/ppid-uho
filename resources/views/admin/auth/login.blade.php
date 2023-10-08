<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Admin | PPID UHO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="">
  <meta name="author" content="ppid-uho" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

  <!-- vendor css -->
  <link rel="stylesheet" href="{{ asset('admin-assets/assets/css/style.css') }}">


</head>

<body>

  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->


  <div class="auth-wrapper">
    <div class="auth-content text-center">
      <img src="{{ asset('img/ppid.png') }}" alt="" width="200"
        class="img-fluid mb-4 shadow rounded-lg px-2 py-1">
      <div class="card borderless">
        <div class="row align-items-center ">
          <div class="col-md-12">
            <div class="card-body">
              <h4 class="mb-3 f-w-700">A D M I N</h4>
              <hr>

              @if (session('error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif

              <form action="{{ route('authenticate') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="Email username" required>
                </div>
                <div class="form-group mb-4">
                  <input type="password" name="password" class="form-control" id="Password" placeholder="Password"
                    required>
                </div>
                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Simpan kredensial.</label>
                </div>
                <button type="submit" class="btn btn-block btn-primary mb-4">Login</button>
              </form>
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
