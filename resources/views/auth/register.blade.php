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
                        <img src="public/images/l.png" alt="Company logo" width="180px" height="20px"/>
                    </a>
                </div>
                <!--End Logo -->
                <div class="clear-toggle"></div>
                <div id="main-menu" class="collapse scroll navbar-right">
                    <ul class="nav">

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
                                    <li><a href="file:///C:/graduation project/category/index.html">Categories</a>
                                    </li>
                                    <li><a href="{{URL('instruction')}}">Instructions</a>
                                    </li>
                                        <li><a href="{{route('contactus')}}">Contact</a></li>
                    </ul>
                </div><!-- end main-menu -->
            </div>
        </div>
    </div>
</header>


<section id="login" class="log-in">
    <div class="overlay"></div>
    <div class="slider-text-wrapper">
        <div class="container-fluid">
            <div class="title-box text-center white">
                <h2 class="title">Sign Up</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="tabs">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form method="post" action="{{ route('register') }}"  id="regForm">
                                @csrf

                                </div>
                                <div class="form-row mt-5">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required placeholder="First name" id="inputFName"  name="F_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" required placeholder="Last name" id="inputLName"  name="L_name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" required placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" required placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" required placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div>
                                        <p id="demo"></p>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="phoneNumber" name="phone_n" placeholder="phone Number" required title="Enter Posstive numbers">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="date" class="form-control" placeholder="Date of Birth" required id="inputDate"  name="B_date">
                                        </div>
                                    </div>


                                       <div>
                                        <button type="submit" class="btn btn-success btn-block text-white bg-color my-4" onclick="myInput()">
                                            {{ __('Register') }}
                                        </button>

                                       </div>
                                    </form>
                                </div>
                                <br>
                                <div class="form-group">

                                    <div class="paragraph">
                                        <span>Already have an account ?</span>
                                        <a href="{{ route('login') }}">LOG IN</a>
                                    </div>
                                </div>
                            </form>
                        </div>


                </div>
            </div>

        </div>
    </div>
    </div>
    <img src="public//images/slider/22.jpg" alt="" style="filter: blur(10px); background-color: #18263a;">
</section>
<script type="text/javascript">
cpass= function (validate) {
var str = document.getElementById('inputPassword').value;
if (str.length < 0) {
    document.getElementById("demo").innerHTML="password length must be 8 character";
    document.getElementById("demo").style.color="green";
    return("too_short")
}else if (str.search(/[0-9]/)==-1){
    document.getElementById("demo").innerHTML="Atleast 1 numeric value must be enter";
    document.getElementById("demo").style.color="green";
    return("no_number")

}else if (str.search(/[a-z]/)== -1){
    document.getElementById("demo").innerHTML="Atleast 1 small letter must be enter";
    document.getElementById("demo").style.color="green";
    return("no_sletter")
}else if (str.search(/[A-Z]/)== -1){
    document.getElementById("demo").innerHTML="Atleast 1 Upper letter must be enter";
    document.getElementById("demo").style.color="green";
    return("no_uletter")
}

}

function Validate() {
    var password = document.getElementById("inputPassword").value;
    var confirmPassword = document.getElementById("confpass").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}

</script>

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
