@extends('layouts.app')

@section('content')

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Start Logo -->
                <div class="logo-nav">
                    <a href="index.html">
 <img src="{{asset('public/images/l.png')}}" width="230px" height="20px"
                                        style="padding: 20px" alt="Site Logo">                    </a>
                </div>
                <!--End Logo -->
                <div class="clear-toggle"></div>
                <div id="main-menu" class="collapse scroll navbar-right">
                    <ul id="nav">
                                    <li><a href="{{URL('/')}}">Home</a></li>

                                    <li><a href="{{URL('/about')}}">About</a>
                                    </li>
                                    @guest
                                    <li >
                                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li >



                                            <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>

                                    </li>
                                @endguest
                                    <li><a href="{{route('Addproduct')}}">Categories</a>
                                    </li>
                                    <li><a href="{{URL('instruction')}}">Instructions</a>
                                    </li>
                                        <li><a href="{{route('contactus')}}">Contact</a></li>

                                    <!--<li class="dropdown-trigger">
                                    <a href="javascript:void(0)">Account</a>
                                    <ul class="dropdown-content">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#r">Register</a>
                                        </li>
                                    </ul>-->
                                    </li>
                                </ul>
                </div><!-- end main-menu -->
            </div>
        </div>
    </div>
</header>
<!--End Navigation-->


<!-- log in -->
<section id="login" class="log-in">
<img src="{{url('public/images/slider/111.jpg')}}" alt="" style="filter: blur(10px);">
<div class="overlay"></div>
<div class="slider-text-wrapper">
<div class="container-fluid">
    <div class="title-box text-center white">
        <h2 class="title">Forget Your Password</h2>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                     <br>
            <br>

            <br>

        </div>
    </div>

</div>
</div>
</div>

</section>
<!-- end log in-->
<!--Start Footer-->
<footer>
<div class="container">
<div class="row">
<!--Start copyright-->
<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="copyright"><p>Copyright © 2022 All Rights reserved by: <a href="index.html">Online Auction</a>
  </p></div>
</div>
<!--End copyright-->

<!--start social icons-->
<div class="col-md-6 col-sm-6 col-xs-6">
    <div class="social-icons">
        <ul>
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
     </div>
</div>
<!--End social icons-->
</div> <!-- /.row-->
</div> <!-- /.container-->
</footer>

@endsection
