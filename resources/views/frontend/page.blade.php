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

                        <h1 class="title">{{$page->name}}</h1>

                    </div><!-- /.page-title-captions -->

                    <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i> Home</a>

                                </span>

                        <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>

                        <span><span>{{$page->name}}</span></span>

                    </div>

                </div>

            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<section class="cmt-row about-section bg-img1 clearfix">
    <div class="container">
        <div class="row align-items-center">
            @php
                // Grouping media items by 'gallery_title' custom property
                $groupedMedia = $page->getMedia('gallery_images')->groupBy(function($media) {
                    return $media->getCustomProperty('gallery_title');
                });
            @endphp

         <div class="row">
            @foreach($groupedMedia as $galleryTitle => $mediaItems)

                    @foreach($mediaItems as $media)
                            <div class="col-md-4" style="position: relative; margin-top: 50px">
                                <div style="position: absolute; top: -80px; left: 10px; {{$loop->iteration>1?'display:none':''}}">
                                    <h2>{{ $galleryTitle }} </h2>
                                </div>
                                <div class="swing" style="background-color: #561304;; height: 90%; display: flex; flex-direction: column;">
                                <img src="{{ $media->getUrl() }}" style="width: 100%">
                                  @if($media->getCustomProperty('caption'))
                                    <div style="background-color: #561304; height: auto; flex-grow: 1; display: flex; justify-content: center; color: white; padding: 5px 10px">
                                        <p style="color: white; font-weight: 600; text-align: justify">
                                            {{ $media->getCustomProperty('caption') }}
                                        </p>
                                    </div>
                                      @endif



                            </div>
                        </div>
                    @endforeach
            @endforeach
                </div>
            <div class="col-lg-12 col-sm-12">
                <p>{!! $page->content !!}</p>
            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection

@push('scripts')
@endpush






