@extends('layouts.guestLayout')
@section('content')

    <div class="col mx-auto">
        <div class="auth-form-box">
            <div class="text-center"><a class="d-flex flex-center text-decoration-none mb-4" href="{{route('login')}}">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{asset('assets/images/pracheenKalaLogo.png')}}" alt="Pracheen Kala Kendra" width="300"></div>
                </a>
                <h4 class="text-body-highlight">Forgot your password?</h4>
                <p class="text-body-tertiary mb-5">Enter your email below and we will <br class="d-md-none">send you <br class="d-none d-xxl-block">a reset link</p>
                <form class="d-flex align-items-center mb-5">
                    <input class="form-control flex-1" id="email" type="email" placeholder="Email">
                    <a href="{{route('reset-password')}}" class="btn btn-primary ms-2">
                        Send
                        <svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg><!-- <span class="fas fa-chevron-right ms-2"></span> Font Awesome fontawesome.com --></a>
                </form>
            </div>
        </div>
    </div>




@endsection
