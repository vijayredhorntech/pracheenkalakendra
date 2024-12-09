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

                            <h1 class="title">All Programme</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>All Programme</span></span>

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
                            <h3 style="font-family: FELIXTI !important;font-weight: 600;font-size: 25px;color: rgb(154, 41, 18); border-bottom: 1px solid rgb(154, 41, 18); width: max-content">Current/ Forthcoming Programmes</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr style="background-color: #561304; color: white; font-size: 15px">
                                    <th>Sr.NO</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th class="des-control">Location</th>
                                    <th class="des-control">Artists</th>
                                    <th>Date</th>
                                </tr>
                                </thead>


                                <tbody>

                                @forelse($events as $event)
                                  <tr><td>{{$loop->iteration}}</td>
                                    <td style="cursor:pointer;">
@php
    // Get the file extension
    $extension = pathinfo($event->programme_image, PATHINFO_EXTENSION);
@endphp

<a href="{{ asset('storage/' . $event->programme_image) }}" target="_blank">
    @if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png']))
        <img src="{{ asset('storage/' . $event->programme_image) }}" title="SEMINAR" alt="SEMINAR" tabindex="0" style="height: 50px; width: 50px">
    @elseif(strtolower($extension) == 'pdf')
        View file
    @endif
</a>

                                    </td>
                                    <td>
                                        <a href="{{route('view-programme',['id'=>$event->id])}}" style="color: #b60001">
                                            {{$event->programme_title}}
                                        </a>
                                    </td>
                                    <td>
                                        {{$event->programme_location}}
                                    </td>
                                    <td>
                                        {{$event->programArtists->count()}}
                                    </td>
                                    <td>
                                        <div style="text-align: center">
                                            {{\Carbon\Carbon::parse($event->programme_date)->format('d/m/Y')}} <br> at <br>
                                            {{\Carbon\Carbon::parse($event->programme_time)->format('h:i A')}}
                                        </div>
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
