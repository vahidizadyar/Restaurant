@extends('layouts.app', ['activePage' => 'galleryIndex', 'pageTitle' => 'Add Slide'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('gallery.store') }}" autocomplete="off" class="form-horizontal"
                          enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Slide') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('gallery.index') }}"
                                           class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Url') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                                   name="url" id="input-title" type="text"
                                                   placeholder="{{ __('Url') }}" value="{{ old('url') }}"
                                                   required="true" aria-required="true"/>
                                            @if ($errors->has('url'))
                                                <span id="name-error" class="error text-danger"
                                                      for="input-title">{{ $errors->first('url') }}</span>
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
                                                placeholder="{{ __('Content') }}" value="{{ old('content') }}"
                                                style="height: 150px !important;" required></textarea>
                                            @if ($errors->has('content'))
                                                <span id="content-error" class="error text-danger"
                                                      for="input-content">{{ $errors->first('content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                    <div class="col-sm-7">
                                        <input class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}"
                                               name="file" id="input-content" type="file" required>
                                        @if ($errors->has('file'))
                                            <span id="files-error" class="error text-danger"
                                                  for="input-files">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" id="submit-all"
                                        class="btn btn-primary">{{ __('Add Slide') }}</button>
                            </div>
                        </div>
                    </form>
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
