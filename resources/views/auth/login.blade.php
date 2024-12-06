@extends('layouts.guestLayout')
@section('content')
    <div class="col mx-auto">
        <div class="auth-form-box">
            <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4"
                                             href="{{route('login')}}">
                    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img
                            src="{{asset('assets/images/pracheenKalaLogo.png')}}" alt="Pracheen Kala Kendra"
                            width="300"></div>
                </a>
                <h3 class="text-body-highlight">Sign In</h3>
                <p class="text-body-tertiary">Get access to your account</p>
            </div>



            <form action="{{route('signIn')}}">
                @csrf
                <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                    <div class="form-icon-container">
                        <input class="form-control form-icon-input" name="email" id="email" type="email"
                                                            placeholder="name@example.com">
                        <svg class="svg-inline--fa fa-user text-body fs-9 form-icon" aria-hidden="true" focusable="false"
                             data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                        </svg>
                        <!-- <span class="fas fa-user text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                    <div class="form-icon-container" data-password="data-password">
                        <input class="form-control form-icon-input pe-6" id="password" name="password" type="password"
                               placeholder="Password" data-password-input="data-password-input">
                        <svg class="svg-inline--fa fa-key text-body fs-9 form-icon" aria-hidden="true" focusable="false"
                             data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                  d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                        </svg>
                        <!-- <span class="fas fa-key text-body fs-9 form-icon"></span> Font Awesome fontawesome.com -->
                        <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                data-password-toggle="data-password-toggle">
                            <i class="fa fa-eye show"></i>
                            <i class="fa fa-eye-slash hide"></i>
                        </button>

                    </div>
                    @error('password')
                    <div class="text-danger">{{$message}}</div>
                    @enderror


                </div>
                <div class="row flex-between-center mb-7">
                    <div class="col-auto">
                        <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox"
                                                            checked="checked"><label class="form-check-label mb-0"
                                                                                     for="basic-checkbox">Remember
                                me</label></div>
                    </div>
                    <div class="col-auto"><a class="fs-9 fw-semibold" href="{{route('forget-password')}}">Forgot
                            Password?</a></div>
                </div>
                @if(session('error'))
                    <div class="text-danger">{{session('error')}}</div>
                @endif
                <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
            </form>
        </div>
    </div>

@endsection
