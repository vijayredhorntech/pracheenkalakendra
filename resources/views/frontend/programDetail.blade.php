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

                            <h1 class="title">{{$programme->programme_title}}</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                            <span><span>{{$programme->programme_title}}</span></span>

                        </div>

                    </div>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <section class="cmt-row about-section bg-img1 clearfix">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-sm-12">
                    <div >
                        <h2>Programme Description</h2>
                    </div>
                    <p>{{$programme->programme_description}}</p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div >
                        <h2>Programme Details</h2>
                    </div>
                      <div class="mt-4 d-flex ">
                          <h5> Venue: </h5>
                          <p> &nbsp  {{$programme->programme_location}}</p>
                      </div>
                      <div class=" d-flex ">
                          <h5> Date: </h5>
                          <p> &nbsp  {{\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')}}</p>
                      </div>

                      <div class=" d-flex ">
                          <h5> Time: </h5>
                          <p> &nbsp   {{ \Carbon\Carbon::parse($programme->programme_time)->format('h:i A') }}</p>
                      </div>

                </div>

               <div class="col-lg-12 col-sm-12">
                   <div class="row">
                       <div >
                           <h2>Programme Artists</h2>
                       </div>
                       @forelse($programme->programArtists as $artist)
                           <div class="col-md-3" style="position: relative; margin-top: 20px">
                               <div class="swing" style="background-color: #561304; display: flex; flex-direction: column;">
                                   <img src="{{asset('storage/'.$artist->image)}}" style="width: 100%; height: 200px">
                                   <div style="background-color: #561304; height: auto; flex-grow: 1; display: flex; flex-direction: column; align-items: center; color: white; padding: 5px 10px">
                                       <p style="color: white; font-weight: 600; text-align: justify">
                                           {{$artist->name}}
                                       </p>
                                       <p style="color: white; font-weight: 600; font-size: 12px; text-align: justify">
                                           {{$artist->description}}
                                       </p>
                                   </div>
                               </div>
                           </div>
                       @empty
                           <div class="col-md-12">
                               <p>No artists available</p>
                           </div>
                       @endforelse
                   </div>
               </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="row" style="padding-bottom: 20px">
                    <div >
                        <h2>Images</h2>
                    </div>
                    @forelse($programme->programImages as $image)
                        <div class="col-md-3" style="position: relative; margin-top: 20px">
                            <img src="{{asset('storage/'.$image->programme_images)}}" style="width: 100%; height: 200px">
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p>No images available</p>
                        </div>
                    @endforelse
                </div>
                </div>

            </div><!-- row end -->
        </div>
    </section>
@endsection

@push('scripts')
@endpush






