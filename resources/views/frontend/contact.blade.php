@push('styles')

@endpush


@extends('frontend.layouts.layout')

@section('content')
    <div class="cmt-page-title-row">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="title-box">

                        <div class="page-title-heading">

                            <h1 class="title">Contact Us</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>Contact Us</span></span>

                        </div>

                    </div>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </div>
    <section class="cmt-row about-section bg-img1 clearfix">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        @forelse($contacts as $contact)
                        <div class="col-md-4">
                            <div class="contact-us-info-withmap">
                                <h2>{{$contact->office_name}}</h2>
                                <ul class="contact-us-infoo">
                                    <li class="first-child"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$contact->office_location}}</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> {{$contact->office_phone}}</li>
                                    <li class="last-child"><i class="fa fa-envelope" aria-hidden="true"></i> {{$contact->office_email}}</li>
                                </ul>
                                <iframe src="{{$contact->office_map}}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        @empty
                        @endforelse

                    </div>

                </div>
            </div><!-- row end -->
        </div>

    </section>
@endsection

@push('scripts')
@endpush.
