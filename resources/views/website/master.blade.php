<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Darbar</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favlogo.png')}}" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--=== Add By Designer ===-->
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font-family: 'Poppins', sans-serif;  -->
    <!-- font-family: 'Great Vibes', cursive; -->
    <!-- font-family: 'Open Sans', sans-serif; -->
    <!-- font-family: 'Montserrat', sans-serif; -->
    <!-- font-family: 'Playfair Display', serif; -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,7007CGreat+Vibes7COpen+Sans7CMontserrat:400,7007CPlayfair+Display"
        rel="stylesheet">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/revslider/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/revslider/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/revslider/navigation.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->

    <!-- Slick Slider Start -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-slider/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-slider/slick-theme.css')}}">
    <!-- Slick Slider End -->

    <!-- Date-Picker-Start -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/date-time-pick/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/date-time-pick/classic.time.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/date-time-pick/classic.date.css')}}">
    <!-- Date-Picker-End -->


    <!--=== Windows Phone JS Code Start ===-->
    <script type="text/javascript">
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }

        function showCat(elementId) {
            var elements = document.getElementsByClassName('foods-thumb');
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = "none";
            }
            var buttons = document.getElementsByClassName('category-button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove('active');
            }
            var btn_string = elementId + '-button';
            document.getElementById(btn_string).classList.add('active');
            $(elementId).css("display", "block");
        }
    </script>
    <!--=== Windows Phone JS Code End ===-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/mapbox.css')}}">
    <script src="{{asset('js/mapbox.js')}}"></script>

    <style>
        .mapboxgl-ctrl-logo{
            display: none !important;
        }

    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')

</head>

<body>
<!-- Loader Start -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Loader End -->
<!-- Header Start -->
<header class="header clearfix">
    <div class="header-home">
        <div class="header-container">
            <div class="fxb-row header-main-row">
                <div class="header-left fxb-col fxb fxb-start-x fxb-center-y fxb-basis-50 fxb-basis-auto">
                    <div class="header-logo">
                        <a class="logo-anch" href="/">
                            <p class="center-y"
                               style="font-family: 'Poppins', sans-serif;font-size: 11px;line-height: 11px;color:#fff;text-transform: uppercase;font-weight: 600;letter-spacing: 2px;
">DARBAR RESTAURANT</p>
                        </a>
                    </div>
                </div>

                <div
                    class="header-center fxb-col fxb fxb-center-x fxb-center-y fxb-basis-auto fxb-shrink-0 hidden-sm hidden-xs">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{route('main')}}">Home</a>
                                </li>
                                <li>
                                    <a href="/menu" >menu</a>
                                </li>
                                <li>
                                    <a href="{{route('catering')}}">Catering</a>
                                </li>
                                <li>
                                    <a href="{{route('gallery')}}">Gallery</a>
                                </li>

                                <li>
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                @guest()
                                    <li>
                                        <a href="{{route('login')}}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}">Register</a>
                                    </li>
                                @else
                                    @if(auth()->user()->role == 2)
                                        <li>
                                            <a href="{{route('panel')}}">Panel</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{route('logout')}}">Logout</a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>

                <div
                    class="header-right fxb-col fxb fxb-end-x fxb-center-y fxb-basis-50 fxb-lg-basis-auto fxb-lg-shrink-0">
                    <!-- Navigation Start -->
                    <nav class="mainNav visible-sm visible-xs">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navigation-list clearfix">
                            <div class="close-icon"><span></span></div>

                            <div class="navigation-detail">
                                <ul>
                                    <li>
                                        <a href="{{route('main')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="/menu" >menu</a>
                                    </li>
                                    <li>
                                        <a href="{{route('catering')}}">Catering</a>
                                    </li>
                                    <li>
                                        <a href="{{route('gallery')}}">Gallery</a>
                                    </li>

                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    @guest()
                                        <li>
                                            <a href="{{route('login')}}">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{route('register')}}">Register</a>
                                        </li>
                                    @else
                                        @if(auth()->user()->role == 2)
                                            <li>
                                                <a href="{{route('panel')}}">Panel</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{route('logout')}}">Logout</a>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Naviagation End -->

                    {{--                    <div class="header-cart hidden-sm hidden-xs">--}}
                    {{--                        <a href="#" class="headercartbtn">--}}
                    {{--							<span class="cart-btn-block cart-btn-icon">--}}
                    {{--								<svg class="dn-icon dn-icon-cart" aria-hidden="true" role="img">--}}

                    {{--											<path d="M9.87030717,0.0273037543 L10.1433447,0.0273037543 C10.6416382,0.156996587 10.9010239,0.505119454 11.0921502,0.962457338 C12.0750853,3.37201365 13.0784983,5.76791809 14.0614334,8.17064846 C14.1569966,8.40273038 14.2730375,8.48464164 14.5324232,8.48464164 C16.21843,8.47098976 17.8976109,8.4778157 19.5836177,8.4778157 C19.7133106,8.4778157 19.8430034,8.52559727 19.9726962,8.55290102 L19.9726962,8.6894198 C19.9590444,8.73037543 19.9317406,8.77133106 19.9249147,8.81228669 C19.78157,9.95904437 19.6382253,11.112628 19.4948805,12.2593857 C19.2423208,14.3003413 18.9897611,16.334471 18.7303754,18.3754266 C18.6552901,18.9829352 18.334471,19.4334471 17.8020478,19.7269625 C17.6040956,19.8293515 17.3788396,19.8771331 17.1672355,19.9522184 L2.83276451,19.9522184 C1.97952218,19.7542662 1.39249147,19.2764505 1.27645051,18.3754266 C0.969283276,15.9726962 0.682593857,13.5631399 0.375426621,11.1535836 C0.273037543,10.334471 0.150170648,9.51535836 0.0409556314,8.69624573 L0.0409556314,8.55972696 C0.170648464,8.53242321 0.300341297,8.48464164 0.43003413,8.48464164 C2.12286689,8.4778157 3.81569966,8.4778157 5.50170648,8.48464164 C5.72013652,8.48464164 5.83617747,8.43686007 5.93174061,8.2116041 C6.92150171,5.80204778 7.93174061,3.39931741 8.90784983,0.982935154 C9.09897611,0.505119454 9.37201365,0.170648464 9.87030717,0.0273037543 Z M8.07508532,8.45733788 L11.9317406,8.45733788 C11.2901024,6.91467577 10.668942,5.41296928 10.0409556,3.90443686 C10.0136519,3.9112628 9.97952218,3.9112628 9.95221843,3.91808874 C9.33105802,5.41979522 8.70989761,6.92150171 8.07508532,8.45733788 Z M4.35494881,14.9078498 L4.34812287,14.9078498 C4.34812287,14.0887372 4.35494881,13.2696246 4.34129693,12.4505119 C4.33447099,12.1296928 4.12969283,11.9522184 3.84300341,11.9658703 C3.54266212,11.9795222 3.39931741,12.1569966 3.37201365,12.443686 C3.36518771,12.559727 3.36518771,12.668942 3.36518771,12.7849829 L3.36518771,16.9146758 C3.36518771,17.0989761 3.35836177,17.2832765 3.38566553,17.4607509 C3.42662116,17.6996587 3.59044369,17.8361775 3.83617747,17.8430034 C4.09556314,17.8498294 4.2662116,17.7133106 4.32764505,17.4607509 C4.35494881,17.3515358 4.34812287,17.2354949 4.34812287,17.1194539 C4.35494881,16.3890785 4.35494881,15.6450512 4.35494881,14.9078498 Z M6.43686007,14.8737201 L6.43686007,16.3071672 C6.43686007,16.662116 6.43003413,17.0102389 6.44368601,17.3651877 C6.45733788,17.6518771 6.61433447,17.8293515 6.91467577,17.8498294 C7.19453925,17.8703072 7.38566553,17.6791809 7.41979522,17.3651877 C7.42662116,17.2764505 7.42662116,17.1808874 7.42662116,17.0921502 L7.42662116,12.7235495 C7.42662116,12.6075085 7.42662116,12.4982935 7.40614334,12.3822526 C7.36518771,12.1228669 7.20819113,11.9795222 6.94880546,11.9658703 C6.66894198,11.9590444 6.49829352,12.109215 6.45051195,12.3822526 C6.43003413,12.4914676 6.43686007,12.6075085 6.43686007,12.7235495 L6.43686007,14.8737201 Z M10.4982935,14.9419795 L10.4914676,14.9419795 C10.4914676,14.109215 10.4982935,13.2832765 10.4846416,12.4505119 C10.4778157,12.1296928 10.2730375,11.9522184 9.98634812,11.9658703 C9.68600683,11.9795222 9.54266212,12.1638225 9.51535836,12.443686 C9.50853242,12.5460751 9.50853242,12.6484642 9.50853242,12.7508532 L9.50853242,16.9829352 C9.50853242,17.1331058 9.50170648,17.2832765 9.52901024,17.4266212 C9.56996587,17.6996587 9.74744027,17.8498294 10.0204778,17.8430034 C10.2798635,17.8361775 10.443686,17.6860068 10.4778157,17.4266212 C10.4982935,17.3174061 10.4982935,17.2013652 10.4982935,17.0853242 L10.4982935,14.9419795 Z M12.5802048,14.9078498 L12.5802048,15.7610922 C12.5802048,16.2935154 12.5733788,16.8327645 12.5870307,17.3651877 C12.6006826,17.6791809 12.8054608,17.8703072 13.0853242,17.8498294 C13.3788396,17.8293515 13.5358362,17.6587031 13.556314,17.3651877 C13.5631399,17.2491468 13.5631399,17.1399317 13.5631399,17.0238908 L13.5631399,12.996587 C13.5631399,12.7918089 13.5699659,12.5870307 13.5426621,12.3822526 C13.5085324,12.1228669 13.3515358,11.9726962 13.0853242,11.9658703 C12.8054608,11.9590444 12.6348123,12.1023891 12.5870307,12.3754266 C12.5665529,12.4846416 12.5733788,12.6006826 12.5733788,12.7167235 C12.5802048,13.447099 12.5802048,14.1774744 12.5802048,14.9078498 Z M16.6416382,14.9419795 L16.6416382,14.9419795 C16.6348123,14.1228669 16.6484642,13.3037543 16.6348123,12.4846416 C16.6279863,12.1433447 16.4300341,11.9590444 16.1296928,11.9658703 C15.8498294,11.9726962 15.6791809,12.1569966 15.6587031,12.4846416 C15.6518771,12.5870307 15.6518771,12.6894198 15.6518771,12.7918089 L15.6518771,17.0238908 C15.6518771,17.1604096 15.6450512,17.2969283 15.665529,17.4334471 C15.7064846,17.6928328 15.8634812,17.8430034 16.1296928,17.8498294 C16.4095563,17.8566553 16.5802048,17.7064846 16.6279863,17.4334471 C16.6484642,17.3242321 16.6416382,17.2081911 16.6416382,17.0921502 L16.6416382,14.9419795 Z"></path>--}}

                    {{--								</svg>--}}
                    {{--							</span>--}}
                    {{--                            <span class="cart-btn-block cart-btn-item">--}}
                    {{--								<span class="cart-btn-item-title">ITEM(S)</span>--}}
                    {{--								<span class="cart-btn-item-count">1</span>--}}
                    {{--							</span>--}}
                    {{--                            <span class="cart-btn-block cart-btn-total">--}}
                    {{--								<span class="cart-btn-total-title">Total</span>--}}
                    {{--								<span class="cart-btn-total-count">$111.00</span>--}}
                    {{--							</span>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="cart-down-panel">--}}
                    {{--                            <ul class="cart-list">--}}
                    {{--                                <li class="mini-cart-item">--}}
                    {{--                                    <button type="button" class="close" aria-label="Close">--}}
                    {{--                                        <span aria-hidden="true">&times;</span>--}}
                    {{--                                    </button>--}}
                    {{--                                    <div class="row">--}}
                    {{--                                        <div class="col-sm-8 col-md-8 pad-right">--}}
                    {{--                                            <div class="mini-cart-detail">--}}
                    {{--                                                <a href="#">Oven Roasted duck with special sousage</a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="col-sm-4 col-md-4">--}}
                    {{--                                            <div class="mini-cart-image">--}}
                    {{--                                                <img class="img-responsive" src="images/mini-cart-img.jpg" alt="">--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                            <div class="total">--}}
                    {{--                                <div class="row">--}}
                    {{--                                    <div class="col-sm-6 col-md-6">--}}
                    {{--                                        <div class="total-left">--}}
                    {{--                                            <p>subtotal</p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="col-sm-6 col-md-6">--}}
                    {{--                                        <div class="total-right">--}}
                    {{--                                            <p>$35</p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="mini-cart-btn">--}}
                    {{--                                <a href="cart-page.html" class="btn view-cart">view cart</a>--}}
                    {{--                                <a href="#" class="btn checkout">checkout</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <a href="reservation-form.html" class="hidden-sm hidden-xs btn-default">Reservations</a>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="dn-stickyRelativeHelper hidden-xs hidden-sm" style="height:152px"></div>
</header>
<!-- Header End -->
@yield('content')


<!-- Testimonial Start -->
<div class="testimonial padding-top-120 padding-bottom-135 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-centered">
                <div class="testimonial-slider">
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>The food was super delicious and the service was great. I had a great experience and the host
                            was super nice. I highly recommend this restaurant!</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Marsella Mura</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Price very reasonable n food really lovely. Alot better texture and taste. In my out and
                            about in curry mile my verdict Darbar is above the rest by far compare to Iranian restaurant
                            in Curry mile. Take my word for it you will revisit Darbar again after your first visit.
                            This is my first so and I will be back soon.</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Stephen Ng</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Very delicious food... great taste and perfect price.</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>jenan alwazzan</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Good food, good price and beautiful staff 😉</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>david howard
                        </h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>very nice Persian food and great staff and very nice atmosphere ❤</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Paul Jones</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>First time here the service and the food was fantastic. Plenty of food I ate far too much as
                            it was so delicious. Myself and my friend was there for a good three hours. I will
                            definitely return.
                        </p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Fatema Ahad
                        </h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Very delicious traditional Iranian restaurant. Best in the area. You can taste the real
                            Iranian dishes here. Fresh and hot meals. Very kind and welcoming staff. I come here every
                            time visit Manchester. I highly recommended it.</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Sanaz Salehi</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Gorgeous place , with significant staff and delicious food. customer service is amazing ,
                            their very friendly and welcoming. they served dessert (Persian ice cream) for 4 which was
                            on the house and tasted amazing. Great place would recommend it to anyone who wants have
                            delicious and high quality food. Thank you darbar for your amazing service.</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Sarvi Nabi</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>The best Persian restaurant in Manchester by far. Reasonable prices, fresh ingredients and
                            lovely staff. I’ve had foods there over 100 times and I would recommend the Kobideh, Joje
                            and Chanjeh.</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Parham Majdbadi</h4>
                    </div>
                    <div>
                        <div class="section-title">
                            <h2>Clients</h2>
                            <h3>testimonials</h3>
                        </div>
                        <p>Went with family & Friends excellent food. Extremely helpful, friendly and courteous staff.
                            One of the best Iranian Persian cuisine restaurants in Manchester. By far the best. Will go
                            again definitely. Highly recommend 200%</p>
                        <div class="text-center testi-icon">“</div>
                        <h4>Sadeem Haider</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonical End -->

<!-- Reservations Start -->
{{--<div class="reservation-map clearfix">--}}
{{--    <div class="row gutter-0">--}}
{{--        <div class="col-sm-12 col-md-6">--}}
{{--            <div class="reservation-block padding-right-155 padding-left-155 display-flex vertical-center">--}}
{{--                <div class="reserv-image-block">--}}
{{--                    <div class="reserv-image"></div>--}}
{{--                    <div class="reserv-overlay"></div>--}}
{{--                </div>--}}
{{--                <div class="reservation-detail flx-align-self">--}}
{{--                    <h3 class="white">reservations</h3>--}}
{{--                    <p class="white">49 Featherstone Street LONDON EC1Y 8SY UNITED KINGDOM <br/>+4 1800 555 1234 <br/><a class="white" href="#">bookatable@restaurant.com</a></p>--}}
{{--                    <a href="reservation-form.html" class="btn btn-secondary">ONLINE</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-12 col-md-6">--}}
{{--            <div class="map-block">--}}
{{--                <div class="map">--}}
{{--                    <div id="map"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Reservations End -->

<!-- Newsletter Start -->
{{--<div class="newsletter dark-bg-color pad-top-bottom clearfix">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12 col-md-7 col-centered">--}}
{{--                <div class="section-title">--}}
{{--                    <div class="discount">--}}
{{--                        <h5>15% <br>OFF</h5>--}}
{{--                    </div>--}}
{{--                    <h2>Subscribe to our</h2>--}}
{{--                    <h3>newsletter</h3>--}}
{{--                </div>--}}

{{--                <h5>Subscribe to our newsletter and receive 15% discount from your order.</h5>--}}

{{--                <form action="//YOUR_USERNAME.DATASERVER.list-manage.com/subscribe/post?u=YOUR_API_KEY&id=LIST_ID" method="post" name="mc-embedded-subscribe-form" novalidate class="mail-box clearfix">--}}
{{--                    <div class="input-group stylish-input-group">--}}
{{--                        <input type="text" class="form-control"  placeholder="Your@mail.com" >--}}
{{--                        <div class="btn-default">--}}
{{--                            <button type="submit">subscribe</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="dn__newsletter-message"></div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Newsletter End -->

<!-- Footer Start -->
<footer class="footer padding-top-120 padding-bottom-100 clearfix">
    <div class="container">
        <!-- Footer Top Start -->
        <div class="f-top clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">

                    <p class="center-x" style="font-family: 'Poppins', sans-serif;
font-size: 11px;
line-height: 11px;
color:
#fff;
text-transform: uppercase;
font-weight: 600;
text-align: center">CONNECT</p>

                    <p style="margin-top: 15px;margin-bottom: 20px;"><a style="text-align:left!important;font-size: 13px" href="mailto: admin@darbarrestaurant.co.uk">Email: admin@darbarrestaurant.co.uk</a></p>
                    <p >Address: 135 Cheetham Hill Rd, Manchester<br>M8 8LY</p>
                    <p><a href="tel:0161 832 5383" style="text-align: left!important;">Tel: 0161 832 5383</a></p>
                    <p style="margin-top: 15px">Opening hours:<br>
                        Monday to Friday: 1PM - 11PM<br>
                        Saturday & Sunday: 12PM - 10PM</p>

                </div>

                {{--       <div class="col-sm-12 col-md-2 col-lg-1">
                           <div class="f-nav">
                               <ul>
                                   --}}{{-- <li><a href="{{route('main')}}">Home</a></li>--}}{{--
                                   --}}{{--                            <li><a href="menu–stretched.html">menu</a></li>--}}{{--
                                   --}}{{--                            <li><a href="reservation-form-and-content.html">Reservation</a></li>--}}{{--
                                   --}}{{--                            <li><a href="blog-main.html">blog</a></li>--}}{{--
                                   --}}{{--                            <li><a href="full-shop-width.html">Shop</a></li>--}}{{--
                                   --}}{{--                            <li><a href="contact-google-map.html">Contact</a></li>--}}{{--
                               </ul>
                           </div>
                       </div>
       --}}
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="f-social-follower">
                        {{--                        <a class="btn btn-default" href="reservation-form.html" role="button">online reservation</a>--}}
                        <div class="f-follower">
                            <h6>follow</h6>
                            <ul>
                                <li><a href="https://en-gb.facebook.com/darbar.persian.restaurant"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.tripadvisor.co.uk/Restaurant_Review-g187069-d14080697-Reviews-Darbar_Restaurant-Manchester_Greater_Manchester_England.html"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/darbar.persian.restaurant/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-3 col-lg-5 " style="height: 250px" id="map">

                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="f-bottom clearfix">
            {{--            <p>This Demo is also part of <a href="https://kallyas.net/" title="Kallyas WordPress Theme">Kallyas WordPress Theme</a>. All rights reserved.</p>--}}

            {{--            <ul>--}}
            {{--                <li>copyright © 2016 <span>Kallyas.net</span></li>--}}
            {{--                <li><a href="hogash.com">Hogash.com</a></li>--}}
            {{--            </ul>--}}
        </div>
        <!-- Footer Bottom End -->
    </div>
</footer>
<!-- Footer End -->

<!-- Loader Modernizr - JS -->
<script src="{{asset('js/loader-js/modernizr-2.6.2.min.js')}}"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Google Map API Start -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2i0AUD0nKbc9Av4Kkrvwj7MvLBKdh4vs"></script>

<!-- Isotop Mesonery Start -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="{{asset('js/isotope/packery-mode.pkgd.min.js')}}"></script>

<!-- Parallax Start -->
<script src="{{asset('js/parallax.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('js/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revslider/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION -->
<script type="text/javascript" src="{{asset('js/revslider/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revslider/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revslider/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revslider/revolution.extension.slideanims.min.js')}}"></script>
<!-- Smooth Scroll -->
<script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>
<!-- Slick Sider -->
<script src="{{asset('js/slick.js')}}"></script>
<!-- NavAccordion -->
<script src="{{asset('js/navAccordion.js')}}"></script>
<!-- NavAccordion -->
<script src="{{asset('js/date-time-pick/picker.js')}}"></script>
<script src="{{asset('js/date-time-pick/picker.date.js')}}"></script>
<script src="{{asset('js/date-time-pick/picker.time.js')}}"></script>
<script src="{{asset('js/date-time-pick/legacy.js')}}"></script>
<!-- Main-Script -->
<script src="{{asset('js/ofi.js')}}"></script>
<!-- Main-Script -->
<script src="{{asset('js/script.js')}}"></script>
<script type="text/javascript">
    // //Map
    // // When the window has finished loading create our google map below
    // google.maps.event.addDomListener(window, 'load', init);
    //
    // function init() {
    //     // Basic options for a simple Google Map
    //     // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    //     var mapOptions = {
    //         // How zoomed in you want the map to start at (always required)
    //         zoom: 11,
    //
    //         // The latitude and longitude to center the map (always required)
    //         center: new google.maps.LatLng(40.6700, -73.9400), // New York
    //
    //         // How you would like to style the map.
    //         // This is where you would paste any style found on Snazzy Maps.
    //         styles: [{
    //             "featureType": "all",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
    //         }, {
    //             "featureType": "all",
    //             "elementType": "labels.text.stroke",
    //             "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
    //         }, {
    //             "featureType": "all",
    //             "elementType": "labels.icon",
    //             "stylers": [{"visibility": "off"}]
    //         }, {
    //             "featureType": "administrative",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#000000"}, {"lightness": 20}]
    //         }, {
    //             "featureType": "administrative",
    //             "elementType": "geometry.stroke",
    //             "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
    //         }, {
    //             "featureType": "administrative.country",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "administrative.country",
    //             "elementType": "labels.text",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "administrative.country",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"color": "#ffffff"}]
    //         }, {
    //             "featureType": "administrative.province",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "administrative.locality",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"color": "#ffffff"}]
    //         }, {
    //             "featureType": "landscape",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#000000"}, {"lightness": 20}]
    //         }, {
    //             "featureType": "landscape",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#16191e"}]
    //         }, {
    //             "featureType": "landscape",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"saturation": "-2"}, {"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "landscape.man_made",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#262a31"}]
    //         }, {
    //             "featureType": "landscape.natural",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#21242a"}]
    //         }, {
    //             "featureType": "landscape.natural.landcover",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "poi",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#090a0b"}, {"lightness": 21}]
    //         }, {
    //             "featureType": "poi",
    //             "elementType": "labels.text.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "road.highway",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#ff6b00"}, {"lightness": 17}]
    //         }, {
    //             "featureType": "road.highway",
    //             "elementType": "geometry.stroke",
    //             "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
    //         }, {
    //             "featureType": "road.arterial",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#000000"}, {"lightness": 18}]
    //         }, {
    //             "featureType": "road.arterial",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "road.local",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#000000"}, {"lightness": 16}]
    //         }, {
    //             "featureType": "road.local",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"hue": "#f8ff00"}]
    //         }, {
    //             "featureType": "transit",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#000000"}, {"lightness": 19}]
    //         }, {
    //             "featureType": "transit",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"hue": "#ff0000"}]
    //         }, {
    //             "featureType": "transit.line",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#999966"}]
    //         }, {
    //             "featureType": "transit.station.airport",
    //             "elementType": "geometry.fill",
    //             "stylers": [{"color": "#2c2f35"}]
    //         }, {
    //             "featureType": "water",
    //             "elementType": "geometry",
    //             "stylers": [{"color": "#141619"}, {"lightness": 17}]
    //         }, {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"color": "#0b0d0f"}]}]
    //     };
    //
    //     // Get the HTML DOM element that will contain your map
    //     // We are using a div with id="map" seen below in the <body>
    //     var mapElement = document.getElementById('map');
    //
    //     // Create the Google Map using our element and options defined above
    //     var map = new google.maps.Map(mapElement, mapOptions);
    //
    //     // Let's also add a marker while we're at it
    //     var marker = new google.maps.Marker({
    //         position: new google.maps.LatLng(40.6700, -73.9400),
    //         map: map,
    //         title: 'Snazzy!'
    //     });
    // }

    mapboxgl.accessToken = 'pk.eyJ1IjoiZGFyYmFyLWNvIiwiYSI6ImNrM2g3cWNzZDA5NTQzZG1xMWkzajZiazkifQ.zwa7hD-9EUHRgIOT4P1yhw';

    let a = [-2.239378,53.494519];

    let map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: a,
        animate: true,
        zoom: 14.0
    });

    new mapboxgl.Marker()
        .setLngLat(a)
        .addTo(map);

    map.addControl(new mapboxgl.NavigationControl());
</script>
</body>
</html>
