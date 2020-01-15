@extends('website.masterDetail',[ 'pageTitle' => 'Darbar Restaurant | Restaurant Menu' ])
@section('content')
    <div class="content menu-list menu-list-container">
        <div class="container" style="margin-top: 50px !important;margin-bottom: 50px !important;">
            @for($i=0;$i<count($menu) ; $i++)
                @php
                    $category = $menu[$i]
                @endphp
                @if($i%2==0)
                    <div class="row" @if($i>1) style="margin-top: 58px" @endif>

                        <div class="col-sm-6 col-md-6">
                            <div class="menu-list-title">
                                <h3>{{$category->title}}</h3>
                            </div>
                            <ul>
                                @foreach($category->foods as $food)
                                    <li>
                                        <a href="{{route('foodDetail',[$food->slug])}}" style="text-decoration: none">
                                            <div class="price-item-main">
                                                <h4 class="list-item-title"
                                                    style="margin-bottom: 0 !important;">{{$food->title}}</h4>
                                                <div class="price-list-dotted-separator"></div>
                                                <div class="list-item-price">£{{$food->price}}</div>
                                            </div>
                                        </a>
                                        <p style="margin-top: -6px">{{$food->description}}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        @else

                            <div class="col-sm-6 col-md-6">
                                <div class="menu-list-title">
                                    <h3>{{$category->title}}</h3>
                                </div>
                                <ul>
                                    @foreach($category->foods as $food)
                                        <li>
                                            <a href="{{route('foodDetail',[$food->slug])}}" style="text-decoration: none">
                                                <div class="price-item-main">
                                                    <h4 class="list-item-title"
                                                        style="margin-bottom: 0 !important;">{{$food->title}}</h4>
                                                    <div class="price-list-dotted-separator"></div>
                                                    <div class="list-item-price">£{{$food->price}}</div>
                                                </div>
                                            </a>
                                            <p style="margin-top: -6px">{{$food->description}}</p>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                    </div>
                @endif


            @endfor
        </div>
    </div>
@stop
