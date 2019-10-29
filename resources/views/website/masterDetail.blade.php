<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{(isset($pageTitle)) ? $pageTitle : ''}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--=== Add By Designer ===-->
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    <link href="{{asset('fonts/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/star-rating-svg.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font-family: 'Poppins', sans-serif;  -->
    <!-- font-family: 'Great Vibes', cursive; -->
    <!-- font-family: 'Open Sans', sans-serif; -->
    <!-- font-family: 'Montserrat', sans-serif; -->
    <!-- font-family: 'Playfair Display', serif; -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,7007CGreat+Vibes7COpen+Sans7CMontserrat:400,7007CPlayfair+Display" rel="stylesheet">

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
    </script>
    <!--=== Windows Phone JS Code End ===-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="demo">
<!-- Loader Start -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Loader End -->
<!-- Header Start -->
<header class="header clearfix">
    <div class="header-home header-relative">
        <div class="header-container">
            <div class="fxb-row header-main-row">
                <div class="header-left fxb-col fxb fxb-start-x fxb-center-y fxb-basis-50 fxb-basis-auto">
                    <div class="header-logo">
                        <a class="logo-anch" href="index.html">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="header-center fxb-col fxb fxb-center-x fxb-center-y fxb-basis-auto fxb-shrink-0 hidden-sm hidden-xs">
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="header-right fxb-col fxb fxb-end-x fxb-center-y fxb-basis-50 fxb-lg-basis-auto fxb-lg-shrink-0">
                    <!-- Navigation Start -->
                    <nav class="mainNav visible-sm visible-xs">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                                    @endguest

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Naviagation End -->
                </div>
            </div>
        </div>
    </div>
    <div class="dn-stickyRelativeHelper hidden-xs hidden-sm" style="height:152px"></div>
</header>
<!-- Header End -->
@yield('content')

<!-- Footer Start -->
<footer class="footer padding-top-120 padding-bottom-100 clearfix">
    <div class="container">
        <!-- Footer Top Start -->
        <div class="f-top clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="head-chef">
                        <p>Chef Taylor Bonnyman, working in
                            collaboration with Head Chef
                            Marguerite Keogh, offer elegant &
                            playful modern British cooking.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-2 col-lg-1">
                    <div class="f-nav">
                        <ul>
                            <li><a href="{{route('main')}}">Home</a></li>
{{--                            <li><a href="menu–stretched.html">menu</a></li>--}}
{{--                            <li><a href="reservation-form-and-content.html">Reservation</a></li>--}}
{{--                            <li><a href="blog-main.html">blog</a></li>--}}
{{--                            <li><a href="full-shop-width.html">Shop</a></li>--}}
{{--                            <li><a href="contact-google-map.html">Contact</a></li>--}}
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="f-social-follower">
{{--                        <a class="btn btn-default" href="reservation-form.html" role="button">online reservation</a>--}}
                        <div class="f-follower">
                            <h6>follow</h6>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-4">
{{--                    <div class="f-address-contact">--}}
{{--                        <!-- <a href="tel:+4 1800 555 1234" class="telephone">+4 1800 555 1234</a>--}}
{{--                        <a href="mailto:bookatable@restaurant.com" class="mail">bookatable@restaurant.com</a> -->--}}
{{--                        <p>+4 1800 555 1234</p>--}}
{{--                        <span>bookatable@restaurant.com</span>--}}

{{--                        <div class="f-address">--}}
{{--                            <ul>--}}
{{--                                <li>49 Featherstone Street</li>--}}
{{--                                <li>LONDON</li>--}}
{{--                                <li>EC1Y 8SY</li>--}}
{{--                                <li>UNITED KINGDOM</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2i0AUD0nKbc9Av4Kkrvwj7MvLBKdh4vs"></script>

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
<script src="{{asset('js/jquery.star-rating-svg.js')}}"></script>

</body>
</html>
