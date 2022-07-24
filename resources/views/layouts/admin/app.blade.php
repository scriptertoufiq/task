<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/bootstrap/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/fullcalendar@5.2.0.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/leaflet.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/line-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/MarkerCluster.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/MarkerCluster.Default.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/slick.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/star-rating-svg.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/trumbowyg.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/wickedpicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/theme_assets/css/dropzone/dropzone.css') }}">
    {{-- data tables --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_assets/css/datatables.min.css') }}">
    {{-- toaster css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/img/logo/logo.png')}}">
    <!-- endinject -->

</head>

<body class="layout-light side-menu">
    @auth
        <div class="mobile-search"></div>
        <div class="mobile-author-actions"></div>
    @endauth
    @auth
        @include('layouts.admin.header') 
    @endauth
    <main class="main-content">
        @auth
            @include('layouts.admin.side-bar') 
        @endauth
        @yield('content')
        @auth
            @include('layouts.admin.footer') 
        @endauth
    </main>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    @include('layouts.admin.script')
</body>
</html>
