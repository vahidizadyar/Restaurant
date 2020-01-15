@extends('website.masterDetail',[ 'pageTitle' => $food->title ])
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-list clearfix">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{route('main')}}">Home</a></li>
                <li><a href="#">Food</a></li>
                <li class="active">{{$food->title}}</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Content Page Start -->
    <div class="content inner-pg single-shop-content clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="single-shop-left">
                        <div class="single-shop-item">
                            <div id="bx-wrapper" class="bx-wrapper">
                                {{--                                <div class="bx-loading">--}}
                                {{--                                    <span>Loading...</span>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="bx-content">--}}
                                {{--                                    <h2>Aroma Paradise</h2>--}}
                                {{--                                </div>--}}
                                <div class="bx-thumbs">
                                    @for($i=0;$i<count($food->photos);$i++)
                                        @if($i!=0)
                                            <a href="#"
                                               style="background-image:url({{asset('images/foods/'.$food->photos[$i]->url)}})"></a>
                                        @else
                                            <a href="#" class="bx-thumbs-current"
                                               style="background-image:url({{asset('images/foods/'.$food->photos[$i]->url)}})"></a>
                                        @endif
                                    @endfor
                                </div>
                                <div class="bx-container">
                                    @foreach($food->photos as $photo)
                                        <img src="{{asset('images/foods/'.$photo->url)}}" alt="{{$food->title}}"
                                             title="{{$food->title}}"/>
                                    @endforeach
                                </div>
                                <div class="bx-overlay"></div>
                            </div>
                            {{--                            @foreach($food->photos as $photo)--}}
                            {{--                                <div><img src="{{asset('images/foods/'.$photo->url)}}" alt="{{$food->title}}"></div>--}}
                            {{--                            @endforeach--}}
                        </div>
                        {{--                        <div class="single-shop-item-nav">--}}
                        {{--                            @foreach($food->photos as $photo)--}}
                        {{--                                <div><img src="{{asset('images/foods/'.$photo->url)}}" alt="{{$food->title}}"></div>--}}
                        {{--                            @endforeach--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="single-shop-right">
                        <div class="single-shop-title">
                            <h3>{{$food->title}}</h3>
                            <div id="food-rating"></div>
                        </div>
                        <span class="price">£{{$food->price}}</span>
                        <div class="single-shop-item-detail">
                            <h6>{{$food->title}}</h6>
                            <p>{{$food->content}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Page End -->
    <!-- FeedBack Section Start -->
    <div class="feedback">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#reviews" aria-controls="reviews" role="tab"
                                                          data-toggle="tab">reviews</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="reviews">
                    @foreach($comments as $comment)
                        <div class="comment clear">
                            <div class="comment-question">
                                <div class="comment-info">
                                    <span class="comment-name clear">
                                    </span>{{$comment->user->name}}</span>
                                    <br>
                                    <span class="comment-date">{{$comment->created_at->string}}</span>
                                </div>
                                <div class="comment-text">
                                    <pre>{{$comment->content}}</pre>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <h5>Leave a Reply</h5>
                    <form action="{{route('addComment',[$food->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" rows="3" name="content"></textarea>
                        </div>
                        @auth()
                            <button type="submit" class="btn btn-default">post comment</button>
                        @else
                            <button type="submit" class="btn btn-default" disabled>login for post comment</button>
                        @endauth
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FeedBack Section End -->
@stop
<style>
    .comment {
        border: 1px solid #979797;
        padding: 22px 18px;
        margin-bottom: 15px;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -ms-border-radius: 5px;
    }

    .comment-question {
        display: table;
        width: 100%;
    }

    .comment-info {
        vertical-align: top;
        display: table-cell;
        width: 215px;
        position: relative;
    }

    .comment-text {
        vertical-align: middle;
        display: table-cell;
        position: relative;
        line-height: 180%;
        padding-left: 20px;
        border-left: 1px solid #d9d9d9;
    }

    pre {
        background-color: transparent;
    }

    .comment-date {
        color: #82848e;
        padding-left: 23px;
    }

    .comment-name {
        margin-bottom: 7px;
    }
</style>
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script>
    $(document).ready(function () {

        $("#food-rating").starRating({
            initialRating: '{{$food->rank}}',
            starShape: 'rounded',
            starSize: 40,
            emptyColor: 'lightgray',
            hoverColor: 'salmon',
            activeColor: 'crimson',
            useGradient: false,
            callback: function (currentRating, $el) {
                console.log(currentRating);
                sendRate({{$food->id}}, currentRating);
            },
            @auth()
            setReadOnly: true
            @endauth
        });
        @guest()
        $('#food-rating').starRating('setReadOnly', true);

        @endguest
        function sendRate(food_id, rate) {
            $.post('/rate/store',
                {
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    rate: rate,
                    food_id: food_id,
                },
                function (json) {
                    console.log(json);
                    $('#food-rating').starRating('setRating', json.rank);
                    // $("#food-rating").starRating({
                    //     initialRating : json.rank,
                    // });
                });
        }
    });
</script>
