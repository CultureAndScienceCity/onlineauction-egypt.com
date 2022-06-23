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
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/etlinefont.css')}}">
    <link href="{{URL::asset('css/style.css')}}" type="text/css"  rel="stylesheet"/>
    <link rel="stylesheet" href="{{URL::asset('css/signup.css')}}">

</head>


	<body  data-spy="scroll" data-target="#main-menu">



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
								<a href="index.html">
									<img src="images/l.png" alt="Company logo" width="180px" height="20px"/>
								</a>
							</div>
                            <!--End Logo -->
							<div class="clear-toggle"></div>
							<div id="main-menu" class="collapse scroll navbar-right">
								<ul class="nav">

                                    <li><a href="file:///C:/graduation project/home/index.html">Home</a></li>

                                    <li><a href="file:///C:/graduation project/about/index.html">About</a>
                                    </li>
                                    <li><a href="file:///C:/graduation project/category/index.html">Categories</a>
                                    </li>
                                    <li><a href="file:///C:/graduation project/instructions/indrx.html">Instructions</a>
                                    </li>
                                    <li><a href="file:///C:/graduation project/home/contact.html">Contact</a></li>
                                    <li><a href="file:///C:/graduation project/home/login.html">Log in</a></li>
								</ul>
							</div><!-- end main-menu -->
						</div>
					</div>
				</div>
			</header>
    <!--End Navigation-->


           <!-- log in -->
    <section id="login" class="log-in">
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
<!--End Footer-->

    <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

 </body>
</html>

