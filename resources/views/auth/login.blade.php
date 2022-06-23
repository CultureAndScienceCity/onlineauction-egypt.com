@extends('layouts.app')

@section('content')




    <!--Start Page loader-->
    <!-- <div id="pageloader">
          <div class="loader">
            <img src="images/2.gif" alt='loader' />
          </div>
     </div> -->
         <!-- End Page loader -->


     <!--Start Navigation-->
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
                                  <a href="{{URL('/')}}">
                                      <img src="public/images/l.png" alt="Company logo" width="180px" height="20px"/>
                                  </a>
                              </div>
                              <!--End Logo -->
                              <div class="clear-toggle"></div>
                              <div id="main-menu" class="collapse scroll navbar-right">
                                  <ul class="nav">

                                      <li><a href="{{URL('/')}}">Home</a></li>

                                      <li><a href="{{URL('about')}}">About</a>
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
                                    <li><a href="{{route('Addproduct')}}">Categories</a>
                                    </li>
    
                                @endguest
                                      <li><a href="{{URL('instruction')}}">Instructions</a>
                                      </li>
                                        <li><a href="{{route('contactus')}}">Contact</a></li>

                                  </ul>
                              </div><!-- end main-menu -->
                          </div>
                      </div>
                  </div>
              </header>
      <!--End Navigation-->


             <!-- log in -->
      <section id="login" class="log-in">
          <img src="public/images/slider/11.jpg" alt="" style="filter: blur(10px);">
          <div class="overlay"></div>
          <div class="slider-text-wrapper">
              <div class="container-fluid">
                  <div class="title-box text-center white">
                      <h2 class="title">LOG IN</h2>
                  </div>
                  <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-12"></div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                          <form id="loginForm" action="{{ route('login') }}" method="post">
                              <div class="form-group">
                                  @csrf
                                  <input id="email" type="email" class="border-bottom w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                              </div>
                              <div class="form-group">
                                <input id="password" type="password" class="border-bottom w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              </div>
                             <div>
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                             </div>
                          </form>
                          <br>
                          <br>

                          <br>
                          <div class=" col-10 link">
                              <span> Don't have an account ?</span>
                              <a href="{{ route('register') }}">Sign up </a>
                          </div>

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
                  <div class="copyright"><p>Copyright © 2022 All Rights reserved by: <a href="{{URL('/')}}">Online Auction</a>
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
  <!--End Footer-->

      <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

@endsection
