@extends('layouts.guestLayout')
@section('content')
    <div class="col mx-auto">
        <div class="auth-form-box">
            <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="{{route('login')}}">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{asset('assets/images/pracheenKalaLogo.png')}}" alt="Pracheen Kala Kendra" width="300"></div>
                </a>
                <h4 class="text-body-highlight">Reset new password</h4>
                <p class="text-body-tertiary">Type your new password</p>
            </div>
            <form class="mt-5">
                <div class="position-relative mb-2" data-password="data-password"><input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Type new password" data-password-input="data-password-input">
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle">
                           <i class="fa fa-eye show"></i>
                                <i class="fa fa-eye-slash hide"></i>
                    </button></div>
                <div class="position-relative mb-4" data-password="data-password"><input class="form-control form-icon-input pe-6" id="confirmPassword" type="password" placeholder="Cofirm new password" data-password-input="data-password-input">
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle">
                           <i class="fa fa-eye show"></i>
                                <i class="fa fa-eye-slash hide"></i>
                    </button></div><button class="btn btn-primary w-100" type="submit">Set Password</button>

            </form>
            <div class="text-center mt-2"><a class="fs-9 fw-bold" href="{{route('login')}}">Sign in to an existing account</a></div>
        </div>
    </div>
@endsection
