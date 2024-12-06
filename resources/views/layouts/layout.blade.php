<!DOCTYPE html>

<html data-navbar-horizontal-shape="default" data-navigation-type="default" dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/pracheenKalaLogo.png')}}">
    <title>Pracheen Kala Kendra</title>
    <meta content="#ffffff" name="theme-color"/>
    <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="{{asset('assets/css/css2.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/simplebar.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/line.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/theme-rtl.min.css')}}" id="style-rtl" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/theme.min.css')}}" id="style-default" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/user-rtl.min.css')}}" id="user-style-rtl" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/user.min.css')}}" id="user-style-default" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="{{asset('assets/css/leaflet.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/MarkerCluster.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/MarkerCluster.Default.css')}}" rel="stylesheet"/>
    @livewireStyles
</head>
<body>
<main class="main" id="top">
    @include('layouts.header')
    <div class="content">

        <div class="w-full d-flex">
            @if($errors->any())
                <div class="w-full">
                    <div class="col-auto">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="fas fa-check-circle me-2" data-fa-transform="shrink-2"></span>
                            <strong>Error!</strong>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif



            @if(session('success'))
                <div class="w-full">
                    <div class="col-auto">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fas fa-check-circle me-2" data-fa-transform="shrink-2"></span>
                            <strong>Success!</strong> {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
            @if(session('error'))
                <div class="w-full">
                    <div class="col-auto">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="fas fa-check-circle me-2" data-fa-transform="shrink-2"></span>
                            <strong>Error!</strong> {{session('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        @yield('content')
{{--        {{ $slot }}--}}
        @include('layouts.footer')
    </div>
</main>


<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/anchor.min.js')}}"></script>
<script src="{{asset('assets/js/is.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/lodash.min.js')}}"></script>
<script src="{{asset('assets/js/list.min.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/js/dayjs.min.js')}}"></script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<script src="{{asset('assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/js/leaflet-tilelayer-colorfilter.min.js')}}"></script>
<script src="{{asset('assets/js/phoenix.js')}}"></script>
<script src="{{asset('assets/js/echarts.min.js')}}"></script>
<script src="{{asset('assets/js/ecommerce-dashboard.js')}}"></script>


@stack('scripts')
@livewireScripts
</body>
</html>
