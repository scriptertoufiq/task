<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Droid Font CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/droid.css') }}">
    <!-- Material Design Iconic Font CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    {{-- toaster css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/img/logo/logo.png') }}">
    <!-- endinject -->

</head>
<body>
        {{-- @include('layouts.frontend.app') --}}
    <div class="wrapper">
        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')
        @include('layouts.frontend.script')
    </div>

</body>
</html>
