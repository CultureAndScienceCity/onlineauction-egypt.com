<!DOCTYPE html>
<html>

<head>
    <meta charset="UtF-8">
    <title>create aucation form</title>
    <link rel="stylesheet" href="{{asset('public/wl/category.css')}}">
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/style.css')}}">
</head>

<body>
    <div class="container">

        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar navbar-expand-lg navigation-area">
                            <!-- Site Branding -->
                            <div class="site-branding">
                                <a class="site-logo" href="file:///C:/graduation project/home/index.html">
                                    <img src="public/images/l.png" width="240px" height="90px"
                                        style="padding: 20px" alt="Site Logo">
                                </a>
                            </div><!-- /.site-branding -->
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

    </div>
    <div class="wrapper">
        <div class="title">
            create aucation
        </div>
        @if(session()->has('message'))
<p class="alert {{ session('alert-class') }}" style="background:green">{{ session('message') }}</p>
@endif
        <form class="form" action="{{route('addnewproduct')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="inputfield">
                <label>Category</label>
                <div class="custom_select">
                    <select name="categories">
                    @foreach($categories as $categori)
                    <option value="{{$categori->id}}">{{$categori->name}}</option>
                    @endforeach

                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>Photo</label>
                <input type="file" class="input" name="image">
            </div>
            <div class="inputfield">
                <label>Title</label>
                <input type="text" class="input" name="Title">
            </div>
            <div class="inputfield">
                <label>Describtion</label>
                <textarea class="textarea" name="Describtion"></textarea>
            </div>
            <div class="inputfield">
                <label>Starting Price</label>
                <input type="text" class="input" name="Price">
            </div>


            <div class="inputfield">
                <label>Address</label>
                <textarea class="textarea" name="Address"></textarea>
            </div>
            <div class="inputfield">
                <label>Photo ID</label>
                <input type="file" class="input" name="Photo">
            </div>
            <div class="inputfield terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agreed to <a href="file:///C:/graduation project/term/index.html">terms&conditions</a> </p>
            </div>
            <div class="inputfield">
                <button type="submit" class="btn btn-success btn-block" onclick="myInput()">Done</button>
                <!-- <input type="submit" value="Done" class="btn"> -->
            </div>
</form>
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




    <script src="{{asset('public/wl/assets/templates/js/jquery.js')}}"></script>
    <script src="{{asset('public/wl/assets/templates/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/wl/assets/templates/js/main.js')}}"></script>
</body>

</html>
