<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{(isset($pageTitle)) ? $pageTitle : ''}}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favlogo.png')}}" type="image/x-icon"/>

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
    <div class="header-home header-relative">
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
                                    <a href="/menu">menu</a>
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
                                        <a href="/menu">menu</a>
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

                    <p class="center-x" style="font-family: 'Poppins', sans-serif;
font-size: 11px;
line-height: 11px;
color:
#fff;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 2px;text-align: center">CONNECT</p>

                    <p style="margin-top: 15px;margin-bottom: 20px;"><a style="text-align:left!important;font-size: 13px" href="mailto: admin@darbarrestaurant.co.uk">Email: admin@darbarrestaurant.co.uk</a></p>
                    <p style="text-align: left">Address: 135 Cheetham Hill Rd,Manchester<br>M8 8LY</p>
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
<script src="{{asset('js/jquery.star-rating-svg.js')}}"></script>
<script type="text/javascript">
    //Map
    // When the window has finished loading create our google map below
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
