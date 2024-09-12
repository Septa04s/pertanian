<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('template/paper')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('template/paper')}}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{$title }} 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('template/paper')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{asset('template/paper')}}/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('template/paper')}}/assets/demo/demo.css" rel="stylesheet" />
  <link href="{{asset('template')}}/tables/css/datatable/dataTables.bootstrap4.min.css"
        rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
    @include('sweetalert::alert')
    @include('layouts.backend.side')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="{{asset('template/paper')}}/javascript:;">Dinas Pertanian</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
          
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')
      <footer class="footer footer-black  footer-white fixed-bottom">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="" target="_blank">Distan Kab.Bekasi</a></li>
                
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Diskominfosantik
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('template/paper')}}/assets/js/core/jquery.min.js"></script>
  <script src="{{asset('template/paper')}}/assets/js/core/popper.min.js"></script>
  <script src="{{asset('template/paper')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{asset('template/paper')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->

  <!-- Chart JS -->
  {{-- <script src="{{asset('template/paper')}}/assets/js/plugins/chartjs.min.js"></script> --}}
  <!--  Notifications Plugin    -->
  {{-- <script src="{{asset('template/paper')}}/assets/js/plugins/bootstrap-notify.js"></script> --}}
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  {{-- <script src="{{asset('template/paper')}}/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! --> --}}
  {{-- <script src="{{asset('template/paper')}}/assets/demo/demo.js"></script> --}}
  {{-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script> --}}
    <script src="{{asset('template')}}/tables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('template')}}/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('template')}}/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>

</html>
