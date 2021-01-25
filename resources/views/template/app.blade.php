<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CSZ PORTAL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
	<!--isotope script-->
	<script src="{{ asset('addons/isotope/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('addons/slick/slick.min.js') }}"></script>
	<script src="{{ asset('addons/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('addons/rellax-master/rellax.min.js') }}"></script>
	<!--popup script-->
	<script src="{{ asset('addons/Magnific-Popup/jquery.magnific-popup.js') }}"></script>
	<!--count script-->
	<script src="{{ asset('addons/jquery.countTo.js') }}"></script>
	<script src="{{ asset('addons/jquery.smooth-scroll.min.js') }}"></script>
	<!-- Main template script -->
	<script src="{{ asset('js/script.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <!-- CSS assets -->
		<link href="{{ asset('css/bootstrap.min.css" rel="stylesheet') }}">
		<link href="{{ asset('addons/Magnific-Popup/magnific-popup.css" rel="stylesheet') }}">
		<!-- LOAD slick slider assets -->
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/slick/slick.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('addons/slick/slick-theme.css') }}"/>
    <!-- Main theme stylesheet -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet" type="text/css">
</head>
<body>



  @yield('content')




</body>
</html>
