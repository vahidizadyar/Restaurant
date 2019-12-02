@extends('website.masterDetail',[ 'pageTitle' => 'Darbar Rrestaurant | '.$category->title.' Foods ' ])
@section('content')
    <div class="content menu-list menu-list-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="menu-list-image-block text-center">
                        <img class="img-responsive" src="{{asset('images/menu-list-img-1.jpg')}}" alt="">
                        <div class="overlay"></div>
                        <div class="menu-list-detail flx-align-self">
                            <h4 class="white">{{$category->foods[0]->title}}</h4>
                            <div class="price">
                                <h5>£{{$category->foods[0]->price}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="menu-list-title">
                        <h3>{{$category->title}}</h3>
                    </div>
                    <ul>
                        @for($i=1;$i<count($category->foods);$i++)
                            <li>
                                <div class="price-item-main">
                                    <h4 class="list-item-title"
                                        style="margin-bottom: 0 !important;">{{$category->foods[$i]->title}}</h4>
                                    <div class="price-list-dotted-separator"></div>
                                    <div class="list-item-price">£{{$category->foods[$i]->price}}</div>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="height-of-menu-list"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
