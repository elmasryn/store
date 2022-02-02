<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/color-01.css">
    @livewireStyles()
    @stack('css')
</head>

<body class="@yield('body-class', 'home-page home-01')">



    @include('layouts.header')

        {{$slot}}

    @include('layouts.footer')



    <script src="/frontend/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="/frontend/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/jquery.flexslider.js"></script>
    <script src="/frontend/js/chosen.jquery.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/jquery.countdown.min.js"></script>
    <script src="/frontend/js/jquery.sticky.js"></script>
    <script src="/frontend/js/functions.js"></script>

    @livewireScripts()
    @stack('js')

</body>

</html>
<!-- 
 developing by : Mohamed Elmasry
 Github        : https://github.com/elmasryn
 Email         : elmasry_n@hotmail.com 
-->