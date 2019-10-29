@extends('layouts.app', ['activePage'=>'','pageTitle' => 'Panel'])
@section('content')
    <div class="row d-f lex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{ __('Panel') }}</h4>
                    <p class="card-category"> {{ __('Here you can manage Your Website') }}</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span>Welcome To panel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
