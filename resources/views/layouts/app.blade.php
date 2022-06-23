<!Doctype html>

<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Login</title>
    <link rel="shortcut icon" href="https://www.pngmart.com/files/8/Auction-PNG-Free-Image.png" type="image/x-icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


     <!--styles -->
    <link href="{{URL::asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{URL::asset('public/css/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('public/css/etlinefont.css')}}">
    <link href="{{URL::asset('public/css/style.css')}}" type="text/css"  rel="stylesheet"/>
    <link rel="stylesheet" href="{{URL::asset('public/css/signup.css')}}">

</head>


	<body  data-spy="scroll" data-target="#main-menu">
        {{--
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                    </li>
   
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     --}}
     @yield('content')
     <script type="text/javascript" src="public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="public/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="public/js/easing.js"></script>
    <script type="text/javascript" src="public/js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="public/js/jquery.appear.js"></script>
    <script type="text/javascript" src="public/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="public/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="public/js/custom.js"></script>
</body>
</html>
