@extends('website.masterDetail',['pageTitle' => 'Darbar Restaurant | Login'])

@section('content')
    <div class="content">
        <div class="container">
            <div class="reservation-form">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-centered">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
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
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Login') }}</button>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-6 text-center">
                                <a href="{{ route('register') }}" class="text-light">
                                    <small>{{ __('Create new account') }}</small>
                                </a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="{{ route('password.request') }}" class="text-light">
                                    <small>{{ __('Forgot Password ?') }}</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
