@extends('layouts.layout')

@section('content')
    <div class="row mb-4 mb-xl-6 mb-xxl-4 gy-3 justify-content-between">
        <div class="col-auto">
            <h2 class="mb-0 text-body-emphasis">Pracheen Kala Kendra Dashaboard</h2>
        </div>

    </div>
    <div class="row gx-3">
        <div class="col-xxl-7">
            <div class="row gx-7 pe-xxl-3">
                <div class="col-12 col-xl-5 col-xxl-12">
                    <div class="row g-0">
                        <div
                            class="col-6 col-xl-12 col-xxl-6 border-bottom border-end border-end-xl-0 border-end-xxl pb-4 pt-4 pt-xl-0 pt-xxl-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                            <h5 class="text-body mb-4">Notifications</h5>
                            <div class="d-md-flex flex-between-center">
                                <div class="echart-booking-value order-1 order-sm-0 order-md-1"
                                     style="height: 54px; width: 90px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                     _echarts_instance_="ec_1721479078783">
                                    <div
                                        style="position: relative; width: 90px; height: 54px; padding: 0px; margin: 0px; border-width: 0px;">
                                        <canvas data-zr-dom-id="zr_0" width="90" height="54"
                                                style="position: absolute; left: 0px; top: 0px; width: 90px; height: 54px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                        <canvas data-zr-dom-id="zr_1" width="90" height="54"
                                                style="position: absolute; left: 0px; top: 0px; width: 90px; height: 54px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                    </div>
                                    <div class=""></div>
                                </div>
                                <div class="mt-4 mt-md-0">
                                    <h3 class="text-body-highlight mb-2">
                                        {{count($notifications)}}
                                    </h3>
                                    <span
                                        class="fs-9 text-body-secondary d-block d-sm-inline mt-1">Latest Notification</span>
                                    <span class="badge badge-phoenix badge-phoenix-primary me-2 fs-10">
                                                 {{ $notifications ? \Carbon\Carbon::parse($notifications->first()?->notification_date)->format('d/ m/ Y') : ''}}

                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-12 col-xxl-6 border-bottom py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                            <h5 class="text-body mb-4">Programs</h5>
                            <div class="d-md-flex flex-between-center">
                                <div class="d-md-flex align-items-center gap-2 order-sm-0 order-md-1">
                                    <svg
                                        class="svg-inline--fa fa-cloud-bolt fs-5 text-warning-light dark__text-opacity-75"
                                        data-bs-theme="light" aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="cloud-bolt" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                              d="M0 224c0 53 43 96 96 96h47.2L290 202.5c17.6-14.1 42.6-14 60.2 .2s22.8 38.6 12.8 58.8L333.7 320H352h64c53 0 96-43 96-96s-43-96-96-96c-.5 0-1.1 0-1.6 0c1.1-5.2 1.6-10.5 1.6-16c0-44.2-35.8-80-80-80c-24.3 0-46.1 10.9-60.8 28C256.5 24.3 219.1 0 176 0C114.1 0 64 50.1 64 112c0 7.1 .7 14.1 1.9 20.8C27.6 145.4 0 181.5 0 224zm330.1 3.6c-5.8-4.7-14.2-4.7-20.1-.1l-160 128c-5.3 4.2-7.4 11.4-5.1 17.8s8.3 10.7 15.1 10.7h70.1L177.7 488.8c-3.4 6.7-1.6 14.9 4.3 19.6s14.2 4.7 20.1 .1l160-128c5.3-4.2 7.4-11.4 5.1-17.8s-8.3-10.7-15.1-10.7H281.9l52.4-104.8c3.4-6.7 1.6-14.9-4.2-19.6z"></path>
                                    </svg>
                                    <!-- <span class="fa-solid fa-cloud-bolt fs-5 text-warning-light dark__text-opacity-75" data-bs-theme="light"></span> Font Awesome fontawesome.com -->
                                    <div class="d-flex d-md-block gap-2 align-items-center mt-1 mt-md-0">
                                        <p class="fs-9 mb-0 mb-md-2 text-body-tertiary text-nowrap">Days Left</p>
                                        <h4 class="text-body-highlight mb-0">
                                            @php
                                                $today = \Carbon\Carbon::today();
                                                 $programmeDate = \Carbon\Carbon::parse($upcomingProgrammes->first()?->programme_date);
                                                 $daysLeft = $today->diffInDays($programmeDate);
                                            @endphp
                                            {{$daysLeft}}

                                        </h4>
                                    </div>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <h3 class="text-body-highlight mb-2">{{count($upcomingProgrammes)}}</h3><span
                                        class="badge badge-phoenix badge-phoenix-success me-2 fs-10">
                                         {{ \Carbon\Carbon::parse($upcomingProgrammes->first()?->programme_date)->format('d/ m/ Y')}}
                                        </span>
                                    <span class="fs-9 text-body-secondary text-nowrap d-block d-sm-inline mt-1">Latest Program Coming</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 col-xl-12 col-xxl-6 border-bottom-xl border-bottom-xxl-0 border-end border-end-xl-0 border-end-xxl py-4 pe-4 pe-sm-5 pe-xl-0 pe-xxl-5">
                            <h5 class="text-body mb-4">Members</h5>
                            <div class="d-md-flex flex-between-center">
                                <div class="echart-commission order-sm-0 order-md-1"
                                     style="height: 54px; width: 54px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                     _echarts_instance_="ec_1721479078784">
                                    <div
                                        style="position: relative; width: 54px; height: 54px; padding: 0px; margin: 0px; border-width: 0px;">
                                        <canvas data-zr-dom-id="zr_0" width="54" height="54"
                                                style="position: absolute; left: 0px; top: 0px; width: 54px; height: 54px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                    </div>
                                    <div class=""></div>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <h3 class="text-body-highlight mb-2">{{count($members)}}</h3>

                                    <span class="fs-9 text-body-secondary d-block d-sm-inline mt-1">(Executive Boards, General Body)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-12 col-xxl-6 py-4 ps-4 ps-sm-5 ps-xl-0 ps-xxl-5">
                            <h5 class="text-body mb-4">Pages</h5>
                            <div class="d-md-flex flex-between-center">
                                <div class="chart-cancel-booking order-sm-0 order-md-1"
                                     style="height: 54px; width: 78px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                     _echarts_instance_="ec_1721479078785">
                                    <div
                                        style="position: relative; width: 78px; height: 54px; padding: 0px; margin: 0px; border-width: 0px;">
                                        <canvas data-zr-dom-id="zr_0" width="78" height="54"
                                                style="position: absolute; left: 0px; top: 0px; width: 78px; height: 54px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                    </div>
                                    <div class=""></div>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <h3 class="text-body-highlight mb-2">{{count($pages)}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-xxl-12">
                    <div class="card h-100"
                         data-list="{&quot;valueNames&quot;:[&quot;country&quot;,&quot;users&quot;,&quot;status&quot;],&quot;page&quot;:4}">
                        <div class="card-header border-0 d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="text-body-highlight">Announcements/ News</h3>
                                <p class="mb-0 text-body-tertiary">Latest News</p>
                            </div>

                        </div>
                        <div class="card-body py-0">
                            <div class="table-responsive scrollbar mt-3">
                                <table class="table fs-10 mb-0">
                                    <thead>
                                    <tr>
                                        <th class="sort ps-0 align-middle" data-sort="country" style="min-width: 100px">
                                            Title
                                        </th>
                                        <th class="sort align-middle" data-sort="users" style="min-width: 115px">
                                            File
                                        </th>
                                        <th class="sort text-end align-middle" data-sort="status">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list" id="table-country-wise-visitors">
                                    @foreach($notifications->take(5) as $key => $notification)
                                       <tr>
                                        <td class="py-2 white-space-nowrap ps-0 country">
                                            <a class="d-flex align-items-center text-primary py-md-1 py-xxl-0"
                                               href="{{asset('storage/'.$notification->notification_file)}}">
                                                <p class="mb-0 ps-3 fw-bold fs-9">
                                                    {{ \Illuminate\Support\Str::words($notification->notification_title, 6, '...') }}
                                                </p>
                                            </a>
                                        </td>
                                        <td class="py-2 align-middle users">
                                            <a href="{{asset('storage/'.$notification->notification_file)}}" target="_blank">View File</a>

                                        </td>

                                        <td class="py-2 align-middle text-end status">
                                            <h6>{{\Carbon\Carbon::parse($notification->notification_date)->format('d/m/Y')}}</h6>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mt-9">
        <div class="row  mb-4">
            <div class="col-md-12"
                 style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Upcoming Programs</h2>
            </div>
        </div>
        <div id="orderTable">
            <div
                class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs-9 mb-0">
                        <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">PROGRAMME NAME</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">PROGRAMME IMAGE</th>
                            <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:10%;">PROGRAMME STATUS</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">LOCATION</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">DATE</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">TIME</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @foreach($upcomingProgrammes->take(5) as $key => $programme)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{asset('storage/'.$programme->programme_image)}}" target="_blank">
                                        <img src="{{asset('storage/'.$programme->programme_image)}}" title="{{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}" alt="{{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}" style="height: 50px; width: 50px;">

                                    </a>
                                </td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                        <span class="badge badge-phoenix fs-10 badge-phoenix-{{ \Carbon\Carbon::parse($programme->programme_date)->isPast() ? 'danger' : 'success' }}"><span class="badge-label">
                                                 <i class="fa fa-{{ \Carbon\Carbon::parse($programme->programme_date)->isPast() ? 'xmark' : 'check' }}"></i>
                                            </span>
                                        </span>
                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">{{$programme->programme_location}}</td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{--                                        {{ \Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')->isPast()?'Expired':\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y') }}--}}
                                    {{\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')}}

                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{ \Carbon\Carbon::parse($programme->programme_time)->format('h:i A') }}

                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item" href="{{route('programme.edit',['id'=>$programme->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="{{route('programme.delete',['id'=>$programme->id])}}">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
