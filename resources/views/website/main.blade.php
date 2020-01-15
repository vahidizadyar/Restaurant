@extends('website.master')
@section('header')
    <script src="{{asset('js/jssor/jssor.slider-28.0.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jssor/my-jssor.js')}}" type="text/javascript"></script>
    <link href="{{asset('css/my-jssor.css')}}" rel="stylesheet">
@stop
@section('content')
    <!-- Slider Start -->

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0;left:0;width:980px;height:440px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-003-oval" style="position:absolute;top:0;left:0;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('images/oval.svg')}}" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0;left:0;width:980px;height:440px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-2.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-2.jpeg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-9.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-9.jpeg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-6.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-6.jpeg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-12.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-12.jpeg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-13.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-13.jpeg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('images/slider/slider-14.jpeg')}}" />
                <img data-u="thumb" src="{{asset('images/slider/slider-14.jpeg')}}" />
            </div>

        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort051" style="position:absolute;left:0;bottom:0;width:980px;height:80px;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:180px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora091" style="width:24px;height:40px;top:0;left:-1px;" data-autocenter="2" data-scale="0.75" data-scale-left="0">
            <svg viewbox="-199 -3000 9600 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M-199-2428.1C317.2-2538.7,851.8-2600,1401-2600c4197.3,0,7600,3402.7,7600,7600 s-3402.7,7600-7600,7600c-549.2,0-1083.8-61.3-1600-171.9V-2428.1z"></path>
                <polygon class="a" points="4806.7,1528.5 4806.7,1528.5 4806.7,2707.8 2691.1,5000 4806.7,7292.2 4806.7,8471.5 4806.7,8471.5 1602,5000 "></polygon>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora091" style="width:24px;height:40px;top:0;right:-1px;" data-autocenter="2" data-scale="0.75" data-scale-right="0">
            <svg viewbox="-199 -3000 9600 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M9401,12428.1c-516.2,110.6-1050.8,171.9-1600,171.9c-4197.3,0-7600-3402.7-7600-7600 s3402.7-7600,7600-7600c549.2,0,1083.8,61.3,1600,171.9V12428.1z"></path>
                <polygon class="a" points="7401,5000 4196.3,8471.5 4196.3,8471.5 4196.3,7292.2 6311.9,5000 4196.3,2707.8 4196.3,1528.5 4196.3,1528.5 "></polygon>
            </svg>
        </div>
    </div>

    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
    <!-- Slider End -->
    <!-- Restaurant Section Start -->
    <div class="restaurant-block padding-top-120 padding-bottom-120 section-bg-white section-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="element-block">
                        <div class="min-height-550">
                            <div class="multilayers-item margin-top-80 position-relative">
                                <div class="image-item">
                                    <img class="img-responsive" style="width: 75%;margin-left: -30px;margin-top: 20px;"
                                         src="{{asset('images/restaurant-2.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="multilayers-item padding-left-250" style="margin-left: 24px">
                                <div class="image-item">
                                    <img class="img-responsive" src="{{asset('images/restaurant-1.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="welcome-right padding-left-125">
                        <div class="section-title">
                            <h2>Welcome at</h2>
                            <h3>Darbar restaurant</h3>
                        </div>
                        <h6 class="small-headline">“{{$about->title}}”.</h6>
                        <p>{!! $about->content !!}</p>
                        <a href="{{route('about')}}" class="btn btn-primary scroll">about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Section End -->
    <!-- Restaurant - Menu Section Start -->
    <div id="dannys" class="restaurant-menu dark-bg-color min-height-720 position-relative">
        <div class="menu-left-detail padding-top-150">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="menu-inner-left padding-right-90">
                            <div class="section-title">
                                <h2>Restaurant</h2>
                                <h3 class="white">menu</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <p class="gray">Darbar provides something for everybody, from delectable dining with
                                        a Mediterranean flavour. This led to the creation of a menu focused on dishes
                                        based on honest ingredients, injected with passion and goodness. </p>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <p class="gray">More evolution, or perhaps I mean revolution, as our menu has become
                                        even more adventurous, with Iranian traditional dishes becoming fabulous. We are
                                        perfectionists in everything we do, believe that food deserves respect, and so
                                        our ingredients are fresh and ethically sourced.</p>
                                </div>
                            </div>
                            <a onclick="scroll2menu()" class="btn btn-secondary">what’s on the menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-right-img"></div>
    </div>
    <!-- Restaurant - Menu Section End -->

    <!-- Specialties Section Start -->
    {{--    <div class="specialties-section section-bg-white padding-top-120 padding-bottom-220 section-block">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-sm-12 col-md-6">--}}
    {{--                    <div class="element-block">--}}
    {{--                        <div class="min-height-550">--}}
    {{--                            <div class="multilayers-item margin-minus-left-120 position-relative">--}}
    {{--                                <div class="image-item">--}}
    {{--                                    <img class="img-responsive" src="images/specialties-img1.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="multilayers-item padding-top-275 padding-left-80 z-index">--}}
    {{--                                <div class="image-item">--}}
    {{--                                    <img class="img-responsive" src="images/specialties-img2.jpg" alt="">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-12 col-md-6">--}}
    {{--                    <div class="specialties-right padding-left-125 padding-top-65">--}}
    {{--                        <div class="section-title">--}}
    {{--                            <h2>Chinese</h2>--}}
    {{--                            <h3>specialties</h3>--}}
    {{--                        </div>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-sm-6 col-md-6">--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-sm-6 col-md-6">--}}
    {{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <a href="menu–stretched.html" class="btn btn-primary">view all</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Specialties Section End -->

    <!-- Todays Specialties Start -->
    <div class="todays-specialties">
        <div class="parallax-window" data-parallax="scroll" data-image-src="images/specialties-parra-img.jpg"></div>
        <div class="overlay"></div>
        <div class="specialties-detail">
            <div class="section-title">
                <h2>La creme de la creme</h2>
                <h3 class="white">today’s specialty</h3>
            </div>
            <div class="specialties-over-detail">
                <p>Oven Roasted duck with special sousage</p>
                <span class="price">£25.00</span>
                <a href="#" class="btn read-more">read more</a>
            </div>
        </div>
    </div>
    <!-- Menu List Start -->
    <div id="menulist" class="menu-list clearfix">
        <div class="container">
            <div class="row gutter-0">
                <div class="col-sm-12 col-md-3">
                    <div class="menu-list-left">
                        <div class="menu-list-title">
                            <h4>restaurant</h4>
                            <h2>menu</h2>
                        </div>
                        <ul>
                            @for($x=0;$x<count($foods);$x++)
                                <li id="#{{str_replace(' ','',$foods[$x]->title).'-'.$foods[$x]->id.'-button'}}"
                                    class="category-button {{ ($x !=0) ? '' : 'active' }}"><a
                                        onclick="showCat('#{{str_replace(' ','',$foods[$x]->title).'-'.$foods[$x]->id}}')"
                                        href="javascript:void(0)" class="scroll">{{$foods[$x]->title}}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <div class="menu-list-right" id="menu-list-right-foods">
                        @for($i=0;$i<count($foods);$i++)
                            <ul class="products-list foods-thumb" id="{{str_replace(' ','',$foods[$i]->title).'-'.$foods[$i]->id}}"
                                style="{{ ($i != 0) ? 'display : none' : '' }}">
                                @foreach($foods[$i]->foods->take(6) as $food)
                                    <li class="products-block">
                                        <a href="{{route('foodDetail',[$food->slug])}}" class="product-link">
                                            <img class="img-responsive" style="height: 337px;"
                                                 src="{{(isset($food->photos[0]->url)) ? asset(('images/foods/'.$food->photos[0]->url)) :''}}"
                                                 alt="">
                                            <div class="info-wrapper">
                                                <h2 class="product-title">{{$food->title}}</h2>
                                                <span class="price">£{{$food->price}}</span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                <li class="products-block fancy-pag" style="height: 337px;">
                                    <div class="fancy-inner-block">
                                        <div class="pag-arrows">
                                            <a href="{{route('category',[$foods[$i]->id])}}">next <span
                                                    class="arrow-right"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i></span><span
                                                    class="arrow-left"><i class="fa fa-angle-left"
                                                                          aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu List End -->
    <script>
        function scroll2menu() {
            $('html, body').animate({scrollTop: $("#menulist").offset().top - 100}, 1000);
        }
        jQuery('#rev_slider_1075_1').show().revolution({
            stopLoop: 'off',
            /* ****************** */
            /* settings continued */
            /* ****************** */
        });
    </script>
@stop
