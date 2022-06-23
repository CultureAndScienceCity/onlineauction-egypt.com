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
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/wl/assets/templates/css/style.css')}}">

    <style>
        li {
            display: inline-block;
            font-size: 1em;
            list-style-type: none;
            padding: .1em;
            text-transform: uppercase;
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
                                    <img src="{{URL('public/images/l.png')}}" width="230px" height="20px"
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
                                <h2 class="page-title">Details</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('error'))
        <p class="alert {{ session('alert-class') }}" style="background:red">{{ session('error') }}</p>
        @endif

        <div class="product-details-block ptb-120">
            <div class="container">
                <div class="row">

                <div class="col-lg-6">
                        <div class="product-main-thumb-area"> 
                            <div id="product-main-thumb" class="product-main-thumb">
                                <img src="{{url('public/uploads',$products->product_img)}}" alt="big-1" class="w-100">
                            </div>
                            <div class="product-slider-area">
                                <div class="owl-carousel single-product-slider carousel-nav-align-center">
                                    <div class="active-gallery">
                                        <img src="{{url('public/uploads',$products->product_img)}}" alt="thumbnail" />
                                    </div>
                                    <div class="active-gallery">
                                        <img src="{{url('public/uploads',$products->product_img)}}" alt="thumbnail" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="auction-item-details md-mrt-55">
                            <h3 class="heading">{{$products->title}}</h3>
                            <div class="item-bid-price-time">
                                <div class="bid-price">{{$products->StartingPrice}}</div>

                                <div class="bid-timer-area">
                                  
                                </div>

                                <div class="bid-button">
                                    @if($products->created_at>$products->updated_at)
                                      <a style="color: white" 
                                        class="btn btn-default">
                                          finshed
                                      </a>

                                      @else

                                    <a style="color: white" data-toggle="modal" data-target="#bidModal"
                                        class="btn btn-default">المزايدة الآن</a>
                                        @endif
                                </div>
                            </div>
                            <div class="item-info-area">
                                <div class="filter-info-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#auction_info"
                                                role="tab">المعلومات</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#auction_history" role="tab">المزايدين</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--~./ end filter info tab ~-->

                                <div class="tab-content filter-info-tab-content">
                                    <!--~~~~~ Start Tab Pane ~~~~~-->
                                    <div class="tab-pane fade active show" id="auction_info" role="tabpanel"
                                        data-animate="hg-fadeInUp">
                                        <ul class="item-info">
                                            <li>Start Date : <span>{{$products->created_at}}</span></li>
                                            <li>End Date : <span>{{$products->updated_at}}</span></li>
                                            <li>Description : <span>{{$products->Describtion}}</span></li>

                                            <div id="time"></div>

                                        </ul>
                                    </div>
                                    <!--~./ end tab pane ~-->

                                    <!--~~~~~ Start Tab Pane ~~~~~-->
                                    <div class="tab-pane fade" id="auction_history" role="tabpanel">
                                        <div class="table-responsive auction-history-table" data-animate="hg-fadeInUp">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="history-price">سعر المزايدة</th>
                                                        <th class="history-time">تاريخ المزايدة</th>
                                                        <th class="history-user">اسم المزايد</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 @foreach($AUC_USER as $user)
                                                    <tr>
                                                        <td class="history-price">{{$user->StartingPrice}} Eg</td>
                                                        <td class="history-time">{{$user->created_at}}</td>
                                                        <td class="history-user">{{$user->name}} </td>
                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="bidModal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-white-smoke">

                    <!-- Modal Header -->
                    <div class="modal-header custom_border">
                        <h4 class="modal-title text-muted">زايد الأن</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">×</button>
                    </div>

                    <form action="{{route('add_auc')}}" method="post">
                        @csrf

                    <!-- Modal body -->
                        <div class="modal-body custom_border">
                            <div class="form-group">
                                <label for="amount">أدخل قيمة المزايدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span
                                            class="input-group-text bg-white-smoke custom_border_span text-light">-</span>
                                    </div>
                                    <input id="amount" type="text" class="form-control form-controller"
                                        onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                        placeholder="0.00 EGP" required="required" name="price" value="" autocomplete="off">
                                    <div class="input-group-prepend">
                                        <input type="hidden" name="product_id" value="{{$products->id}}">
                                        <span
                                            class="input-group-text bg-white-smoke custom_border_span text-light">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="amount">أدخل بطاقة الدفع</label>
                                <div class="input-group">
                                    <input id="amount" type="text" class="foramountm-control form-controller"
                                        onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                        placeholder="xxxx xxxx xxxx xxxx xxxx" required="required" name="numbercard" value="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="amount">تاريخ انتهاء البطاقة</label>
                                <div class="input-group">
                                    <input id="amount" type="text" class="form-control form-controller"
                                        onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                        placeholder="mm/yyyy" required="required" name="date_end" value="" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="amount">الكود الموجود خلف البطاقة</label>
                                <div class="input-group">
                                    <input id="amount" type="text" class="form-control form-controller"
                                        onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                        placeholder="xxxx" required="required" name="codecard" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer border-0">
                            <button type="submit" class="btn btn-primary rounded">تم</button>
                        </div>

                    </form>

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
        <script>
            (function () {
                const second = 1000,
                    minute = second * 60,
                    hour = minute * 60,
                    day = hour * 24;
                let today = new Date(),
                    dd = String(today.getDate()).padStart(2, "0"),
                    mm = String(today.getMonth() + 1).padStart(2, "0"),
                    yyyy = today.getFullYear(),
                    nextYear = yyyy + 1,
                    dayMonth = "09/30/",
                    counday = dayMonth + yyyy;

                today = mm + "/" + dd + "/" + yyyy;
                if (today > counday) {
                    counday = dayMonth + nextYear;
                }

                const countDown = new Date(counday).getTime(),
                    x = setInterval(function () {

                        const now = new Date().getTime(),
                            distance = countDown - now;

                        document.getElementById("days").innerText = Math.floor(distance / (day)),
                            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                        if (distance < 0) {

                        }
                    }, 0)
            }());
        </script>

    </div>
    <script src="{{asset('public/wl/assets/templates/js/jquery.js')}}"></script>
    <script src="{{asset('public/wl/assets/templates/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/wl/assets/templates/js/main.js')}}"></script>

</body>

</html>
