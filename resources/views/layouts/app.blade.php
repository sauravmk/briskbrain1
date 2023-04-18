<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="author" content="Funda of Web IT">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet"  href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet"  href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet"  href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet"  href="{{asset('assets/css/owl.theme.default.min.css')}}">


</head>
<body>

    <div id="app">

       @include('layouts.inc.frontend-navbar')

        <main class="">
            @yield('content')


        </main>

        @include('layouts.inc.frontend-footer')
    </div>
     <!-- Scripts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mySummernote").summernote({
            height: 150,
        });
        $('.dropdown-toggle').dropdown();
    });
</script>
<script>
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button

</script>
</body>
</html>
