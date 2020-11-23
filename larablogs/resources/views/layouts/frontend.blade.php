<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Laravel's Blog</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
   <!--  <link rel="stylesheet" href="{{ asset('app/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/main.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    @include('includes.header') <!-- s-header -->


    <!-- s-content
    ================================================== -->
    @yield('content')
    <!-- end s-content -->


    <!-- s-extra
    ================================================== -->
     <!-- end s-extra -->

    <!-- s-footer
    ================================================== -->
    @include('includes.footer')
     <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b59467ebacc609c"></script>

</body>

</html>                  