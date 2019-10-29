@extends('website.masterDetail',[ 'pageTitle' =>'Not Found 404 !'])
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-list clearfix">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{route('main')}}">Home</a></li>
                <li class="active">404 Error</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Content Page Start -->
    <div class="content inner-pg error-pg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-9 col-lg-8 col-centered">
                    <div class="error-content clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="error-left">
                                    <img class="img-responsive" src="{{asset('images/error-img.png')}}" alt="ERROR">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="error-right">
                                    <div class="section-title">
                                        <h3>Oops!</h3>
                                        <h2>ERROR 404.</h2>
                                    </div>

                                    <span>The page cannot be found.</span>
                                    <p>Lets get you back on track. Maybe you were looking for something in <a href="menu–stretched.html">our menu</a> or wanted to <a href="contact-simple.html">say hello.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Page End -->
@stop
