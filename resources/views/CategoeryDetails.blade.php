<!doctype html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category</title>
    <meta name="title" Content="Category">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="https://www.pngmart.com/files/8/Auction-PNG-Free-Image.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/style.css')}}">

    <style>
        li {
            display: inline-block;
            font-size: 1em;
            list-style-type: none;
            padding: .1em;
            text-transform: uppercase;
        }
        .pag nav{
            display: flex;
    justify-content: space-around;

        }
    </style>

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
                                    <img src="{{asset('public/images/l.png')}}" width="230px" height="20px"
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

        <div class="page-title-area bg-white-smoke">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Category Products</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="live-auction-block bg-white-smoke ptb-120">
            <div class="container ml-b-30">
                <div class="row items-two-1199 justify-content-center">
                    @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                        <div class="auction-item">
                            <div class="item-header">
                                <h3 class="heading"><a href="{{route('auc',$product->id)}}">Details</a>
                                </h3>
                                <div class="auction-id">الفئة :
                                    @if($product->categories_id===1)
                                    phones
                                    @elseif($product->categories_id===2)
                                    antiques
                                    @elseif($product->categories_id===3)
                                    watches
                                    @else
                                    @endif
                                </div>
                            </div>
                            <div class="item-img">
                                <a href="{{route('auc',$product->id)}}">
                                    <img src="{{url('public/uploads',$product->product_img)}}" alt="Thumbnail">
                                    <!--<img class="prod2" src="{{url('uploads',$product->product_img)}}" alt="Thumbnail">-->
                                </a>

                            </div>
                            <div class="item-footer" style="padding: 20px 25px 0px;">
                                <div class="item-footer-top">
                                    <div class="bid-price">{{$product->StartingPrice}} EGP</div>
                                    <div class="bid-timer-area">
                                         @if($product->created_at>$product->updated_at)
                                                                                 <div class="text-danger h4 font-weight-bold">مغلق</div>

                                         @else
                                         
                                                                                 <div class="text-danger h4 font-weight-bold">مفتوح</div>

                                         @endif

                                    </div>
                                </div>
                                <div class="bid-button">

                                </div>
                            </div>
                            <div class="item-footer" style="padding: 10px 25px 40px;">
                                <div class="item-footer-top" style="justify-content: center;">
                                    <div class="bid-timer-area">
                                        <p style="text-align: center">الوقت المتبقي</p>
                                        <div id="bid_counter" class="bid-timer" style="padding-right:30px;">
                                            <!--<ul>-->
                                            <!--    <li><span id="days"></span> :</li>-->
                                            <!--    <li><span id="h"></span> </li>-->

                                            <!--</ul>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="bid-button">
                                    @if($product->user_id== Auth::user()->id)
                                                                        <a href="{{route('deletes',$product->id)}}" class="btn btn-default">Delete</a>

                                    
                                    @else
                                                                        <a href="{{route('auc',$product->id)}}" class="btn btn-default">المزايدة الآن</a>

                                    @endif
                                    

<p id="va">{{\Carbon\Carbon::parse($product->created_at)->format('d-m-Y')}}</p>
<p id="va2">{{\Carbon\Carbon::parse($product->updated_at)->format('d-m-Y')}}</p>


</div>
                          
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                    <div class="pag">{{$products->links()}}</div>

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
<script src="{{URL::asset('moment.min.js')}}"></script>
    <script>
        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;
                const daystime=document.getElementById("va").textContent;
                const daystime2=document.getElementById("va2").textContent;


// function getMonday(dd) {
//     console.log(dd)
//     startdate = dd;
// var new_date = moment(startdate, "DD-MM-YYYY H").add('days', 7);

// var day = new_date.format('DD');
// var month = new_date.format('MM');
// var year = new_date.format('YYYY');
// var H = new_date.format('H');


// const news=day + '-' + month + '-' + year + H;

//   return  moment(news)._i;
// }

// const dayse=getMonday(daystime);
//             const countDown = new Date(counday).getTime(),
                x = setInterval(function () {

                    var new_dates = moment(daystime, "DD-MM-YYYY H:m")
                    var new_datecounday = moment(daystime2, "DD-MM-YYYY H:m")

                        distance = new_datecounday - new_dates;
                        var dayc = new_dates.format('DD');
                        var MM = new_dates.format('MM');

                        var dayccounday = new_datecounday.format('DD');
                        var MMcounday = new_datecounday.format('MM');
                     

                        console.log(dayc-dayccounday,new_dates)

  document.getElementById("days").innerText =dayccounday-dayc


                    if (distance < 0) {

                    }
                }, 0)
        }());
    </script>

</body>

</html>
