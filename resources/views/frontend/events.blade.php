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



                    <div class="row">

                        @forelse($events as $event)
                            <div class="col-md-4" style="position: relative; margin-top: 20px">
                                @if(\Carbon\Carbon::parse($event->programme_date)->gt(\Carbon\Carbon::now()))
                                    <div style="position: absolute; box-shadow: 0px 0px 10px 2px black;  top: 10px; right: 10px; height: 20px; width: 20px; border-radius: 50%; background-color: white;display: flex; justify-content: center; align-items: center">
                                        <div style="height: 15px; width: 15px; border-radius: 50%; background-color: green;">

                                        </div>
                                    </div>
                                @endif



                                <div class="swing" style="background-color: #561304; display: flex; flex-direction: column;">
                                    <a href="{{route('view-programme',['id'=>$event->id])}}">
                                        <img src="{{ asset('storage/' . $event->programme_image) }}" style="width: 100%; height: 250px">
                                    </a>

                                    <div style="background-color: #561304; height: auto; flex-grow: 1; display: flex; flex-direction: column;  color: white; padding: 5px 10px">
                                        <a href="{{route('view-programme',['id'=>$event->id])}}">
                                        <p style="color: white; font-weight: 600; text-align: justify;  line-height: 10px; margin-top: 15px">
                                            {{ \Illuminate\Support\Str::words($event->programme_title, 4, '...') }}
                                        </p>
                                        </a>
                                        <p style="color: white; font-weight: 600; font-size: 12px; text-align: justify;  line-height: 10px">
                                            {{ \Illuminate\Support\Str::words($event->programme_description, 8, '...') }}.....
                                        </p>
                                    </div>
                                    <div style="display: flex; justify-content: end;padding: 0px 10px; margin-top: 0px">
                                        <p style="font-size: 10px; color: white">{{\Carbon\Carbon::parse($event->programme_date)->format('d/m/Y')}} </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <p>No artists available</p>
                            </div>
                        @endforelse
                    </div>


{{--            <div class="row align-items-center">--}}

{{--                <div class="col-lg-12 col-sm-12">--}}


{{--                    <div class="row">--}}

{{--                        <div class="col-md-12">--}}
{{--                            <h3 style="font-family: FELIXTI !important;font-weight: 600;font-size: 25px;color: rgb(154, 41, 18); border-bottom: 1px solid rgb(154, 41, 18); width: max-content">Current/ Forthcoming Programmes</h3>--}}
{{--                            <table class="table table-striped">--}}
{{--                                <thead>--}}
{{--                                <tr style="background-color: #561304; color: white; font-size: 15px">--}}
{{--                                    <th>Sr.NO</th>--}}
{{--                                    <th>Image</th>--}}
{{--                                    <th>Title</th>--}}
{{--                                    <th class="des-control">Location</th>--}}
{{--                                    <th class="des-control">Artists</th>--}}
{{--                                    <th>Date</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}


{{--                                <tbody>--}}

{{--                                @forelse($events as $event)--}}
{{--                                  <tr><td>{{$loop->iteration}}</td>--}}
{{--                                    <td style="cursor:pointer;">--}}
{{--@php--}}
{{--    // Get the file extension--}}
{{--    $extension = pathinfo($event->programme_image, PATHINFO_EXTENSION);--}}
{{--@endphp--}}

{{--<a href="{{ asset('storage/' . $event->programme_image) }}" target="_blank">--}}
{{--    @if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png']))--}}
{{--        <img src="{{ asset('storage/' . $event->programme_image) }}" title="SEMINAR" alt="SEMINAR" tabindex="0" style="height: 50px; width: 50px">--}}
{{--    @elseif(strtolower($extension) == 'pdf')--}}
{{--        View file--}}
{{--    @endif--}}
{{--</a>--}}

{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{route('view-programme',['id'=>$event->id])}}" style="color: #b60001">--}}
{{--                                            {{$event->programme_title}}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$event->programme_location}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{$event->programArtists->count()}}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div style="text-align: center">--}}
{{--                                            {{\Carbon\Carbon::parse($event->programme_date)->format('d/m/Y')}} <br> at <br>--}}
{{--                                            {{\Carbon\Carbon::parse($event->programme_time)->format('h:i A')}}--}}
{{--                                        </div>--}}
{{--                                    </td>--}}


{{--                                </tr>--}}
{{--                                @empty--}}
{{--                                @endforelse--}}
{{--                                </tbody>--}}


{{--                            </table>--}}












{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}



{{--            </div>--}}

        </div>

    </section>


@endsection

@push('scripts')
@endpush
