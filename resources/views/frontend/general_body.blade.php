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

                            <h1 class="title">Members Of General Body</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right"
                                                           aria-hidden="true"></i></span>

                            <span><span>Members Of General Body</span></span>

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


                    <div class="col-lg-12 col-sm-12">

                        <div class="row">

                            @forelse($generals as $general)

                             <div class="col-md-6">
                                <div class="foxbox">
                                    <p class="fa_address"><strong>{{$general->member_name}}, {{$general->member_occupation}} {{$general->member_designation}}, Pracheen Kala
                                            Kendra</strong></p>
                                </div>
                            </div>
                                @empty
                            @endforelse


                        </div>
                    </div>


                </div>


            </div><!-- row end -->

        </div>

    </section>

@endsection

@push('scripts')
@endpush.
