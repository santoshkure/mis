<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="fix-header fix-sidebar" data-gr-c-s-loaded="true">

<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        @include('layouts.nav')
    </div>

    @include('ProjectMgt::layouts.sidebar')

    <div class="page-wrapper">
        @yield('content')
    </div>
</div>

<div class="footer">
    @include('layouts.footer')
</div>


<!-- script for design -->
<script src="{{ asset('js/jquery.min.js') }} "></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }} "></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<!--stickey kit -->
<script src="{{ asset('js/sticky-kit.min.js') }}"></script>
<!--table entire and search -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<!--charts -->
<script src="{{ asset('js/chart/raphael-min.js') }}"></script>
<script src="{{ asset('js/chart/morris.js') }}"></script>
<script src="{{ asset('js/dashboard1-init.js') }}"></script>

<!--Custom JavaScript -->

<script src="{{ asset('js/custom.min.js') }}"></script>
</body>
</html>
