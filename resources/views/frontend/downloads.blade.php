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

                            <h1 class="title">Download</h1>

                        </div><!-- /.page-title-captions -->

                        <div class="breadcrumb-wrapper">

                                <span>

                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home</a>

                                </span>

                            <span class="cmt-bread-sep"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            n
                            <span><span>Download</span></span>

                        </div>

                    </div>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div>

    <section class="cmt-row about-section bg-img1 clearfix">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-12">
                    <div>
                        <table width="100%" border="1">
                            <tr>
                                <td height="46"><div align="center"><strong>S.NO</strong></div></td>
                                <td><div align="center"><strong>Subject</strong></div></td>
                                <td><div align="center"><strong>Download / View</strong> </div></td>
                            </tr>

                            @forelse($downloads as $download)
                                <tr>
                                    <td height="43"><div align="center"><strong>{{$loop->iteration}}</strong></div></td>
                                    <td><div align="center"></div>{{$download->title}}  <strong style="color:red;"> {{$download->new_or_not?'(NEW)':''}}</strong> </td>
                                    <td><div align="center"><a href="{{route('page',[$download->title, $download->download_file])}}" target="_blank"><strong>Download/View</strong></a></div></td>
                                </tr>
                                @empty
                            @endforelse
                        </table>
                    </div>
                </div>

            </div><!-- row end -->

        </div>

    </section><br>


@endsection

@push('scripts')
@endpush.
