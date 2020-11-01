<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Farm Trips.') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('css/demo_1/style.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" />
  </head>

  @if (Auth::user())
    <body class="header-fixed">
        @include('layouts.header')
        <div class="page-body">
            @include('layouts.sidebar')
            <div class="page-content-wrapper">
                <div class="page-content-wrapper-inner">
                    <div class="content-viewport">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('vendors/js/core.js')}}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{ asset('vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('js/charts/chartjs.addon.js')}}"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('js/template.js')}}"></script>
    <script src="{{ asset('js/dashboard.j')}}s"></script>
    </body>
@else
    <body>
        <div class="authentication-theme auth-style_1">
            <div class="row">
                <div class="col-12 logo-section">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('images/logo.svg')}}" alt="logo" />
                    </a>
                </div>
            </div>
            @yield('content')

            <div class="auth_footer">
                <p class="text-muted text-center">© farmer Trips 2020</p>
            </div>
        </div>

    <script src="{{ asset('vendors/js/core.js')}}"></script>
    <script src="{{ asset('vendors/js/vendor.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('js/template.js')}}"></script>
    </body>
@endif
</html>