<!Doctype html>

<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Online Auction</title>
    <!-- <link rel="icon" href="Images/1.png" width="200px" /> -->
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
    <link rel="stylesheet" href="{{URL::asset('public/css/style1.css')}}">

</head>


	<body  data-spy="scroll" data-target="#main-menu">



  <!--Start Page loader-->
  <div id="pageloader">
        <div class="loader">
          <img src="public/images/2.gif" alt='loader' />
        </div>
   </div>
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
                               
                                    @endguest
                                    <li><a href="{{URL('instruction')}}">Instructions</a>
                                    </li>
                                        <li><a href="{{route('contactus')}}">Contact</a></li>
                                    <li><a href="{{route('Addproduct')}}">Categories</a>
                                    </li>
    
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->


        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">
                            <div class="container">
                                <div class="big">Online Auction</div>
                                <div class="small">Are you ready to participate in this auction</div>
                                <a href="file:///C:/graduation project/category/index.html" class="middle btn btn-white">VIEW CATEGORIES</a>
                            </div>
                        </div>
                        <img src="public/images/slider/1.jpg" alt="">
                    </li>

                    <li class="secondary">
                        <div class="slider-text-wrapper">
                            <div class="container">
                                <div class="big">Online Auction </div>
                                <div class="small">Are you ready to participate in this auction</div>
                                <a href="{{route('Addproduct')}}" class=" middle btn btn-white">VIEW CATEGORIES</a>
                            </div>
                         </div>
                        <img src="public/images/slider/2.jpg" alt="">
                    </li>

                    <li class="third">
                        <div class="slider-text-wrapper">
                            <div class="container">
                                <div class="big">Online Auction </div>
                                <div class="small">Are you ready to participate in this auction</div>
                                <a href="file:///C:/graduation project/category/index.html" class="middle btn btn-white">VIEW CATEGORIES</a>
                             </div>
                        </div>
                        <img src="public/images/slider/3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Slider  -->

       <!--Start Contact-->
       <!-- <section id="contact" class="section parallax">
        <div class="overlay"></div>

       <div class="container">
         <div class="row">

               <div class="title-box text-center white">
                  <h2 class="title">Contact</h2>
               </div>
           </div> -->

             <!--Start contact form-->
             <!-- <div class="col-md-8 col-md-offset-2 contact-form">

                  <div class="contact-info text-center">
                     <p>111-536-9179</p>
                     <p>onlineauction@gmail.com </p>
                     <p>Please complete the form below to send a message to us, </p>

                  </div>

                   <form method="post">
                      <div class="row">
                          <div class="col-md-4">
                              <input class="form-control" id="name" placeholder="Full Name" type="text">
                          </div>
                          <div class="col-md-4">
                              <input class="form-control" id="email" placeholder="Your Email" type="email">
                          </div>
                          <div class="col-md-4">
                              <input class="form-control" id="subject" placeholder="Subject" type="text">
                          </div>
                          <div class="col-md-12">
                              <textarea class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                          </div>
                          <div class="col-md-12 text-right">
                              <button type="submit" class="btn btn-green">SEND MESSAGE</button>
                          </div>
                      </div>
                  </form>
             </div>
            <!-End contact form-->
        <!-- </div>  -->
        <!-- /.container-->
    <!-- </section>  -->
    <!--End Contact-->
    <!-- log in -->
    <!-- <section id="login" class="log-in">
        <img src="images/slider/11.jpg" alt="" style="filter: blur(10px);">
        <div class="overlay"></div>
        <div class="slider-text-wrapper">
            <div class="container-fluid">
                <div class="title-box text-center white">
                    <h2 class="title">LOG IN</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <form id="loginForm" enctype="multipart/form-data" method="post">
                            <div class="form-group">

                                 <input type="text" placeholder="Username" name="username" class="border-bottom w-100" id="inputEmail" >
                            </div>
                            <div class="form-group">

                                <input type="password" placeholder="Password" name="password" class="border-bottom w-100" id="inputPassword" >
                            </div>
                           <div>
                            <button type="submit" class="btn btn-success btn-block" onclick="myInput()"><a href="index.html">LOG IN</a></button>
                           </div>
                        </form>
                        <br>
                        <br>
                        <div class=" col-10 link">
                            <span> Forget your password</span>
                            <a href="fopass.html">ClicK here </a>
                        </div>
                        <br>
                        <div class=" col-10 link">
                            <span> Don't have an account ?</span>
                            <a href="sign-up.html">Sign up </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>

</section> -->
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

    <!--Plugins-->
	<script type="text/javascript" src="{{URL::asset('public/js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/easing.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.easypiechart.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.appear.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/jquery.mixitup.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/custom.js')}}"></script>

 </body>
</html>

