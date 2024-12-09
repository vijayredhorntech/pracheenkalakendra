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

                            <h1 class="title">Students Achievements</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>Students Achievements</span></span>

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
                            <h3 style="font-family: FELIXTI !important;font-weight: 600;font-size: 25px;color: rgb(154, 41, 18); border-bottom: 1px solid rgb(154, 41, 18); width: max-content">Students Achievements</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color: #561304; color: white; font-size: 15px">
                                    <th>Sr.NO</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                                </thead>


                                <tbody>

                                @forelse($achievements as $achievement)
                                    <tr><td>{{$loop->iteration}}</td>
                                        <td style="cursor:pointer;">
                                            <a href="{{ asset('storage/' . $achievement->image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $achievement->image) }}" title="{{$achievement->title}}" alt="{{$achievement->title}}" tabindex="0" style="height: 50px; width: 50px">
                                            </a>

                                        </td>
                                        <td>
                                            {{$achievement->title}}
                                        </td>
                                        <td>
                                            {{$achievement->description}}
                                        </td>




                                    </tr>
                                @empty
                                @endforelse
                                </tbody>


                            </table>












                        </div>


                    </div>

                </div>



            </div><!-- row end -->

        </div>

    </section>


@endsection

@push('scripts')
@endpush
