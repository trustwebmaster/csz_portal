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
    <div id="app">

        <header id="header" class="site-header header--sticky header--not-sticked site-header--absolute">
            <div class="site-header-main-wrapper clearfix">
                <div class="container siteheader-container">
                        <div class="flex-col flex-basis-auto">
                            <div class="flex-row site-header-row site-header-main">
                                <!-- left column - logo -->
                                <div class="flex-col flex flex-start-x flex-center-y flex-basis-auto flex-grow-0 flex-sm-half site-header-col-left">
                                    <div class="logo-container">
                                            <div class="site-logo">
                                                    <a href="index.html" class="site-logo-anch">
                                                            <img class="logo-img-sticky site-logo-img-sticky" src="{{asset('img-assets/logo-landing2.png')}}" alt="logo" title="membership">
                                                            <img class="logo-img site-logo-img" src="{{asset('img-assets/logo-landing2.png')}}" alt="logo" title="membership" width="196" height="36">
                                                    </a>
                                            </div>
                                    </div>
                                </div>

                                <!-- right column - navigation menu -->
                                <div class="flex-col flex flex-end-x flex-center-y flex-basis-auto flex-sm-half site-header-col-right site-header-main-right">
                                        <div class="main-menu-wrapper">
                                            <div class="sh-component menu-wrapper">

                                                 <div class="mm__menuWrapper">
                                                     <div class="mm__mainMenu-trigger">
                                                         <a href="#" class="mm__menuBurger">
                                                             <span></span>
                                                             <span></span>
                                                             <span></span>
                                                         </a>
                                                     </div><!--/.mm__mainMenu-trigger-->

                                                     <ul class="mm__mainMenu clearfix">
                                                         <li><a class="mm__menu-link" href="index.html#home"><span>Home</span></a></li>
                                                         <li><a class="mm__menu-link" href="index.html#about"><span>About</span></a></li>
                                                         <li><a class="mm__contact active" href="{{ route('login') }}"><span>LOGIN</span></a></li>

                                                     </ul><!--/.mm__mainMenu-->

                                                 </div><!--/.mm__menuWrapper-->


                                            </div>
                                            <!--sign up button-->
                                            <div class="mm__ctaButton sh-component">
                                                @guest
                                                 <a href="{{ route('register') }}" class="btn btn--round btn--fullblack"><span>Sign up</span></a>
                                                 @else
                                                 <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                                @endguest
                                             </div>
                                            <!--cart icon-->

                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </header>
        {{--  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
