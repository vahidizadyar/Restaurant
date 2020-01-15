@extends('website.masterDetail',[ 'pageTitle' => 'Darbar Restaurant | '.$category->title.' Foods ' ])
@section('content')
    <div class="content menu-list menu-list-container">
        <div class="container">

            <p>
                What’s On the menu
                Allergies?<br>
                Our food is prepared in our busy kitchens (not a big factory with segregated production lines) so we really can’t guarantee any of our food is allergen-free.<br>
                In order to ensure your safety, if you do have any allergies or intolerances it is important that you tell us before you order each and every time you visit.
            </p>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="menu-list-image-block text-center">
                        <img class="img-responsive" src="{{asset('images/'.$category->photo)}}" alt="">

                        <div class="menu-list-detail flx-align-self">

                        </div>
                    </div>
                </div>
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
                <div class="col-sm-12 col-md-12">
                    <div class="height-of-menu-list"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
