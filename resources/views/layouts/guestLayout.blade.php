<!DOCTYPE html>

<html data-navbar-horizontal-shape="default" data-navigation-type="default" dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/pracheenKalaLogo.png')}}">
    <title>Pracheek Kala Kendra</title>
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


</head>
<body class="relative">
<main class="main" id="top">

    <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
        <div class="bg-holder bg-auth-card-overlay" style="background-image:url({{asset('assets/images/loginBackground.png')}});"></div>
        <!--/.bg-holder-->
        <div class="row flex-center position-relative min-vh-100 g-0 py-5">
            <div class="col-11 col-sm-10 col-xl-8">
                <div class="card border border-translucent auth-card">
                    <div class="card-body pe-md-0">
                        <div class="row align-items-center gx-0 gy-7">
                            <div class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                                <div class="bg-holder" style="background-image:url({{asset('assets/images/loginimage1.png')}});"></div>
                                <!--/.bg-holder-->
                                <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                    <h3 class="mb-3 text-body-emphasis fs-7">Pracheen Kala Kendra Authentication</h3>
                                    <p class="text-body-tertiary">Pracheen Kala Kendra, Chandigarh is the premier educational organization which is doing yeoman service for the promotion, preservation and dissemination of Indian classical arts of music, dance and fine arts (painting) since its inception in 1956.</p>

                                </div>
                                <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15">
                                    <img class="auth-title-box-img d-dark-none" src="{{asset('assets/images/loginimage2white.png')}}" alt="">
                                    <img class="auth-title-box-img d-light-none" src="{{asset('assets/images/loginimage2dark.png')}}" alt=""></div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>
</html>
