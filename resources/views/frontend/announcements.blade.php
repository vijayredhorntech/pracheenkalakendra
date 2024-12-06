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

                            <h1 class="title">Announcements/ News</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>Announcements/ News</span></span>

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
                            <h3 style="font-family: FELIXTI !important;font-weight: 600;font-size: 25px;color: rgb(154, 41, 18); border-bottom: 1px solid rgb(154, 41, 18); width: max-content">
                                Announcements/ News</h3>

                            <table class="table table-striped mb-3">
                                <thead>
                                <tr style="background-color: #561304; color: white; font-size: 15px">

                                    <th style="width: 10%;text-align: center;">Date</th>
                                    <th style="width: 75%;text-align: center;">Title</th>
                                    <th style="width: 15%;text-align: center;"> Documents</th>

                                </tr>
                                </thead>

                                <tbody>
                              @forelse($announcements as $announcement)
                                <tr>

                                    <td>
                                        {{\Carbon\Carbon::parse($announcement->notification_date)->format('d/m/Y')}}
                                    </td>
                                    <td>
                                            {{$announcement->notification_title}}
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{{asset('storage/'. $announcement->notification_file)}}" target="_blank" style="font-size: 12px;" tabindex="0">View Document</a>
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
@endpush.
