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

                            <h1 class="title">{{$slug}}</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>{{$slug}}</span></span>

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

                        <div class="col-md-12">
                         
                            <iframe src="{{$path}}" style="width:100%; height: 1000px" frameborder="0"></iframe>

                        </div>


                    </div>

                </div>



            </div><!-- row end -->

        </div>

    </section>


@endsection

@push('scripts')
@endpush
