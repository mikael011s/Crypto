<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Crypto') }}</title>

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/animate.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/all.min.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/slick.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/nice-select.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/odometer.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/main.css">
    <link rel="shortcut icon" href="/template-assets/digihyip/images/favicon.png" type="image/x-icon">
</head>
<body>
    @yield('content')

    <a href="#0" class="scrollToTop"><i class="las la-rocket"></i></a>
    <script src="/template-assets/digihyip/js/jquery-3.6.0.min.js"></script>
    <script src="/template-assets/digihyip/js/bootstrap.min.js"></script>
    <script src="/template-assets/digihyip/js/slick.min.js"></script>
    <script src="/template-assets/digihyip/js/nice-select.js"></script>
    <script src="/template-assets/digihyip/js/odometer.min.js"></script>
    <script src="/template-assets/digihyip/js/viewport.jquery.js"></script>
    <script src="/template-assets/digihyip/js/main.js"></script>
</body>
</html>
