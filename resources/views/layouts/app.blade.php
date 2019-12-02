<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{(isset($pageTitle)) ? $pageTitle : ''}}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('material/img/favicon.png') }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="{{asset('material/css/font-awesome.min.css')}}">
    <!-- CSS Files -->
    <link href="{{ asset('material/css/material-dashboard.css') }}?v=2.1.1" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{--    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />--}}
</head>
<body class="{{ $class ?? '' }}">
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-background-color="white"
         data-image="{{ asset('material/img/sidebar-1.jpg') }}">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <a href="{{route('main')}}" class="simple-text logo-normal">
                {{ __('Main') }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                @if(auth()->check())
                    @if(auth()->user()->email_verified_at)
                        <li class="nav-item{{ $activePage == 'foods' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('foods.index') }}">
                                <i class="material-icons">menu</i>
                                <p>{{ __('Foods') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'categoryIndex' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <i class="material-icons">content_paste</i>
                                <p>{{ __('Category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'galleryIndex' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('gallery.index') }}">
                                <i class="material-icons">image</i>
                                <p>{{ __('Gallery') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'userIndex' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <i class="material-icons">list</i>
                                <p>{{ __('Users') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="material-icons">power_settings_new</i>
                                <p>{{ __('Edit Profile') }}</p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="material-icons">power_settings_new</i>
                            <p>{{ __('Logout') }}</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="main-panel ps-container ps-theme-default">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('material/js/core/popper.min.js') }}"></script>
<script src="{{ asset('material/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('material/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('material/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('material/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('material/js/plugins/jquery.validate.min.js') }}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('material/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('material/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('material/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('material/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('material/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('material/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('material/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('material/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('material/js/plugins/nouislider.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="{{asset('material/js/core.js')}}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('material/js/plugins/arrive.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
<!-- Chartist JS -->
<script src="{{ asset('material/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('material/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('material/js/material-dashboard.js') }}" type="text/javascript"></script>
<script src="{{ asset('material/js/settings.js') }}"></script>
<link href="{{asset('/css/select2.min.css')}}" rel="stylesheet"/>
<script src="{{asset('/js/select2.min.js')}}"></script>
<script src="{{asset('/js/dropzone.js')}}"></script>
@stack('js')
</body>
</html>
