@extends('layouts.app', ['activePage' => 'foods', 'pageTitle' => 'Add Food'])
{{--{{dd($food->category)}}--}}
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('foods.update', $food->id) }}" autocomplete="off" class="form-horizontal"
                          enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Food') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('foods.index') }}"
                                           class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                                   name="title" id="input-title" type="text"
                                                   placeholder="{{ __('Name') }}"
                                                   value="{{ old('title' , $food->title) }}" required="true"
                                                   aria-required="true"/>
                                            @if ($errors->has('title'))
                                                <span id="name-error" class="error text-danger"
                                                      for="input-title">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price (£)') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                   name="price" id="input-price" type="text"
                                                   placeholder="{{ __('Price') }}"
                                                   value="{{ old('price', $food->price) }}" required/>
                                            @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger"
                                                      for="input-price">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                            <select
                                                class=" category-select form-control {{ $errors->has('category') ? ' is-invalid' : '' }}"
                                                name="category[]" multiple="multiple" required>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{ (collect($food->category)->contains('id',$category->id)) ? 'selected' : '' }}>{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('price'))
                                                <span id="category-error" class="error text-danger"
                                                      for="input-category">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}"
                                             style="height: 200px;">
                                            <textarea
                                                class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}"
                                                name="content" id="input-content" type="text"
                                                placeholder="{{ __('Content') }}"
                                                style="height: 150px !important;" required>{{ old('content', $food->content) }}</textarea>
                                            @if ($errors->has('content'))
                                                <span id="content-error" class="error text-danger"
                                                      for="input-content">{{ $errors->first('content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Images ( You can upload multiple )') }}</label>
                                    <div class="col-sm-7">
                                        <input class="form-control {{ $errors->has('files') ? ' is-invalid' : '' }}"
                                               name="files[]" id="input-content" type="file" multiple>
                                        @if ($errors->has('files'))
                                            <span id="files-error" class="error text-danger"
                                                  for="input-files">{{ $errors->first('files') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" id="submit-all"
                                        class="btn btn-primary">{{ __('Edit Food') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Images') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="row">

                            @foreach($food->photos as $photo)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">image</i>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('photo.delete',$photo->id)}}" method="post">
                                                    @csrf
                                                    <img src="{{asset('images/foods/'.$photo->url)}}" style="width: 150px;height: 150px">
                                                    <button class="btn btn-danger btn-link" type="submit" onclick="confirm('{{ __("Are you sure you want to delete this Image?") }}') ? this.parentElement.submit() : ''">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.category-select').select2();
    });
</script>

