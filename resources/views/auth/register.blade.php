@extends('website.masterDetail',['pageTitle' => 'Darbar Restaurant | Register'])
@section('content')
    <div class="content">
        <div class="container">
            <div class="reservation-form">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-centered">
                        <form class="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}"
                                       value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <div id="name-error" class="error text-danger pl-3" for="name"
                                         style="display: block;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}"
                                       value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div id="email-error" class="error text-danger pl-3" for="email"
                                         style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="{{ __('Password...') }}"
                                       required>
                                @if ($errors->has('password'))
                                    <div id="password-error" class="error text-danger pl-3" for="password"
                                         style="display: block;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control"
                                       placeholder="{{ __('password Confirmation') }}"
                                       required>
                                @if ($errors->has('password_confirmation'))
                                    <div id="password_confirmation-error" class="error text-danger pl-3"
                                         for="password_confirmation"
                                         style="display: block;">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit"
                                        class="btn btn-primary btn-link btn-lg">{{ __('Register') }}</button>
                                <span>
                                    {{ __('(A fresh verification link will be sent to your email address after registration.)') }}
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
