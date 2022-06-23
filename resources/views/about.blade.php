<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <link rel="stylesheet" href="{{URL::asset('public/af/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/af/assets/templates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/af/assets/templates/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/af/assets/templates/css/style.css')}}">
    <link rel="shortcut icon" href="https://www.pngmart.com/files/8/Auction-PNG-Free-Image.png" type="image/x-icon">
<body>

    <div class="container">
        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar navbar-expand-lg navigation-area">
                            <!-- Site Branding -->
                            <div class="site-branding">
                                <a class="site-logo" href="{{URL('/')}}">
                                    <img src="{{asset('public/images/l.png')}}" width="240px" height="90px"
                                        style="padding: 20px" alt="Site Logo">
                                </a>
                            </div><!-- /.site-branding -->
                            <div class="mainmenu-area">
                                <nav class="menu" style="display: block;">
                                    <ul id="nav">
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
        <br><br><br>
        <div class="our-us">
            <div class="question-1">
                <h1 class="question">WHO WE ARE?</h1>
                <p class="answer">Our site is one of the most popular and famous destinations for online auctions.
                    A typical online auction on it often includes a Buy It Now price, which lets the buyer purchase
                    the item for a set price before the listing's end date.</p>
            </div>
            <br><br><br>
            <div class="question-2">
                <h1 class="question">WHY CHOOSE US?</h1>
                <p class="answer">Here’s a quick look at the benefits of choosing us.

                    *Larger reach: Online auctions reach buyers from around the world. If you’re worried about
                    your stuff being given away, online auctions provide the reach to find the right buyer for
                    each and every item.

                    *Convenience: Buyers can bid when and where they want and bid on multiple auctions in the same
                    day.

                    *Provide more details: You, the seller, can review online item descriptions to ensure accuracy.

                    *Less onsite activity: Your stuff will still be picked up, just not all at once. Pickup by
                    appointment is a beautiful thing.

                    *No moving: Items are pictured, sold and picked up from the same location. That’s more money
                    in your pocket that you would have spent on moving costs.</p>
            </div>
        </div>
        <br><br><br>

        <div class="team-area">
            <div class="container-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Our Team</h2>
                            <p>Meet Our telented Team Member</p>
                        </div>
                    </div>

                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG_20210724_042330_211.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>walaa shehata</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">walaashehata@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220217-WA0074.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>afnan mamdouh</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">afnanmamdouh572@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220217-WA0021.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>sama ayman</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">samaayman945@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220221-WA0000.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>haba yasser</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">hebayasser5116@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    .<br><br><br>
                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220219-WA0096.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>yara yasser</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">yara.yasser20006@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/-6041894855547926161_121.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>youssef mousa</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">youssefmousa@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220217-WA0070.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>mahmoud salah</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">mahmoud.salah.25112000@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single Team Item ==-->
                    <div class="col-md-3">
                        <div class="single-team">
                            <div class="team-img">
                                <img src="{{asset('public/af/images/IMG-20220217-WA0051.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>mahmoud ahmed</h3>
                                    <p>Web Developer</p>
                                </div>
                                <p class="team-text">mahmoudahmedmahmoudelkhososy@gmail.com</p>
                            </div>
                        </div>
                    </div>
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
        <script src="{{URL::asset('public/af/assets/templates/js/jquery.js')}}"></script>
        <script src="{{URL::asset('public/af/assets/templates/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('public/af/assets/templates/js/main.js')}}"></script>
</body>

</html>
