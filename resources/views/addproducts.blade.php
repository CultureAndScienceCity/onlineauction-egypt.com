<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>category</title>
    <meta name="title" Content="category">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="https://www.pngmart.com/files/8/Auction-PNG-Free-Image.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/assets/templates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/templates/css/style.css')}}">

</head>

<body>
    <div class="site-content">

        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar navbar-expand-lg navigation-area">
                            <!-- Site Branding -->

                            <div class="site-branding">
                                <a class="site-logo" href="{{URL('/')}}">
                                    <img src="public/images/l.png" width="240px" height="20px"
                                        style="padding: 20px" alt="Site Logo">
                                </a>
							</div>
                            <!-- /.site-branding -->
                            <div class="mainmenu-area">
                                <nav class="menu" style="display: block;">
                                    <ul id="nav">
                                            <li><a href="{{URL('/')}}">Home</a></li>

                                    <li><a href="{{URL('about')}}">About</a>
                                        </li>
                                        <li><a href="{{URL('instruction')}}">Instructions</a>
                                        </li>
                                                                            <li><a href="{{route('Addproduct')}}">Categories</a>

                                        <li><a href="{{route('contactus')}}">Contact</a></li>
                                        
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

        <div id="hero-block" class="hero-block bg-overlay bg-image"
            style="background-image: url('https://telecoms.com/wp-content/blogs.dir/1/files/2018/03/Auction-770x285.jpg')">
            <div class="wave-block bg-image"
                style="background-image: url('https://script.viserlab.com/bidlab/assets/templates/basic/images/wave.png')">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center hero-content-main">
                    <div class="col-lg-10">
                        <div class="hero-content-area text-center ptb-120">
                            <div class="hero-title-area">
                            </div>
                            <div class="hero-desc">
                                <p style="font-size: 54px; font-family: 'Rubik', sans-serif; color: white;">Add your own
                                    auction</p>
                            </div>
                            <div class="form-group-btn">
                                <a class="btn btn-default btn-white" href="{{route('Acution')}}">New
                                    Auction</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="auction-categories-block ptb-120">
            <div class="container ml-b-30">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center">
                            <h2 class="title-main" data-animate="hg-fadeInUp">Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($cate as $categoery)

                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="{{route('show',$categoery->id)}}" class="single-auction-cat">
                            <div class="cat-icon">
                                <span><img class="manImg" src="{{url('public/images',$categoery->image)}}"
                                        width="60" height="60" /></span>
                            </div>
                            <h2 class="cat-name">{{$categoery->name}}</h2>
                            {{-- <div class="cat-no">4</div> --}}
                        </a>
                    </div>
                    @endforeach


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
                        <div class="copyright"><p>Copyright © 2022 All Rights reserved by: <a href="file:///C:/graduation project/home/index.html">Online Auction</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

