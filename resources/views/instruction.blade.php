<!DOCTYPE html>
<html>

<head>
    <title> Instructions</title>
    <link rel="stylesheet" href="{{URL::asset('public/ins/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/ins/assets/templates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/ins/assets/templates/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/ins/assets/templates/css/style.css')}}">
    <link rel="shortcut icon" href="https://www.pngmart.com/files/8/Auction-PNG-Free-Image.png" type="image/x-icon">
</head>

<body>
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar navbar-expand-lg navigation-area">
                        <!-- Site Branding -->
                        <div class="site-branding">
                                <a class="site-logo" href="{{URL('/')}}">
                                    <img src="{{asset('public/images/l.png')}}" width="230px" height="20px"
                                        style="padding: 20px" alt="Site Logo">
                                </a>
                        </div><!-- /.site-branding -->
                        <div class="mainmenu-area">
                            <nav class="menu" style="display: block;">
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
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container urf">
        <h1>Instructions</h1>
        <div class="container">
        </div>
        <div class="box">
            <h2>Step 1</h2>
            <br><br><br><br>
            <h3>Create An Account</h3>

        </div>
        <div class="box">
            <h2>Step 2</h2>
            <br><br><br><br>
            <h3>Choose The Category</h3>
        </div>

        <div class="box">
            <h2>Step 3</h2>
            <br><br><br><br>
            <h3>Choose Product</h3>
        </div>



        <div class="box">
            <h2>Step 4</h2>
            <br><br><br><br>
            <h3>Bidding</h3>
        </div>


        <div class="box">
            <h2>Step 5</h2>
            <br><br> <br><br>
            <h3>Choose Payment Method</h3>
        </div>


        <div class="box">
            <h2>Step 6</h2>
            <br><br> <br> <br>
            <h3>Payment And Receipt</h3>
        </div>
    </div>
    </div>

     <footer class="site-footer pd-t-120">
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <aside class="widget widget_about">
                                <h2 class="widget-title">About Us</h2>
                                <div class="widget-content">
                                    <p>Our site is one of the most popular and famous destinations for online auctions.
                                        A typical online auction on it often includes a Buy It Now price, which lets the
                                        buyer purchase
                                        the item for a set price before the listing's end date</p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer-bottom d-flex flex-wrap-reverse justify-content-between align-items-center py-3">
                    <div class="copyright-text text-center">
                        <div class="copyright"><p>Copyright © 2022 All Rights reserved by: <a href="{{URL('/')}}">Online Auction</a>
                    </div>
                </div>
            </div>
        </footer>



    <script src="{{URL::asset('public/ins/assets/templates/js/jquery.js')}}"></script>
    <script src="{{URL::asset('public/ins/assets/templates/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('public/ins/assets/templates/js/main.js')}}"></script>

</body>

</html>
