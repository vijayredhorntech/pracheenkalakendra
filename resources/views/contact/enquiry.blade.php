@extends('layouts.layout')
@section('content')

    @if($changeStatus!==null)
        <form  action="{{route('enquiry.enquiry-status-update',['id'=>$changeStatus->id])}}" method="POST">
                @csrf
                <div class="row g-3 flex-between-end mb-5">
                    <div class="col-auto">
                        <h2 class="mb-2">Update Status</h2>
                    </div>
                    <div class="row g-5">
                        <div class="col-12 col-xl-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="mb-3">Status</h4>
                                    <select class="form-control mb-5" type="text" name="status" value="{{$bannerStat->title ?? old('title')}}" >
                                        <option value="pending" {{$changeStatus->status==='pending'?'selected disabled':''}}>Pending</option>
                                        <option value="resolved" {{$changeStatus->status==='resolved'?'selected disabled':''}}>Resolved</option>
                                        <option value="notResolved" {{$changeStatus->status==='notResolved'?'selected disabled':''}}>Not Resolved</option>
                                    </select>
                                    <h4 class="mb-3">Remark</h4>
                                    <textarea class="form-control mb-5" rows="3" name="remark" placeholder="Remark...">
                                    </textarea>
                                    <div class="w-full d-flex justify-content-end">
                                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                            Update Status
                                        </button></div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
    @else
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                    <h2 class="mb-0">All {{ucfirst($type)}}</h2>
                </div>
            </div>
            <div id="orderTable">
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        @if($type==='subscription')
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">EMAIL</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">SUBSCRIBED AT</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">

                                @forelse($enquiryData as $key => $data)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <h6 class="mb-0  text-body">
                                                {{ $data->email }}
                                            </h6>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <p class="mb-0 text-body">
                                                {{ $data->created_at->format('d-m-Y H:i:s') }}
                                            </p>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        @else

                                <form  action="{{route('enquiry.show')}}" method="GET" style="display: flex; justify-content: end; gap:5px; padding-top: 10px; width: 100%">
                                    @csrf
                                    <select class="form-control mb-5 w-max-content" type="text" name="status"  >
                                        <option value="all" {{$status==='all'?'selected':''}}>All</option>
                                        <option value="pending" {{$status==='pending'?'selected':''}} >Pending</option>
                                        <option value="resolved" {{$status==='resolved'?'selected':''}}>Resolved</option>
                                        <option value="notResolved" {{$status==='notResolved'?'selected':''}} >Not Resolved</option>
                                    </select>

                                        <button class="btn btn-primary mb-sm-0 py-2.5" style="height: max-content " type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </form>
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">NAME</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">EMAIL</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">PHONE</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">SUBJECT</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">STATUS</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">REMARK</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">

                                @forelse($enquiryData as $key => $data)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <h6 class="mb-0  text-body">
                                                {{ ucfirst($data->name) }}
                                            </h6>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <p class="mb-0  text-body">
                                                {{ $data->email }}
                                            </p>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <p class="mb-0  text-body">
                                                {{ $data->mobile }}
                                            </p>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <p class="mb-0  text-body">
                                                {{ $data->subject }}
                                            </p>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <a href="{{ route('enquiry.change-enquiry-status', ['id' => $data->id]) }}" class="mb-0 text-body" style="text-decoration: none">
                                            <span
                                                class="px-4 text-md py-1 text-white font-bold rounded-[3px]"
                                                style="background-color:
                                                       {{ $data->status === 'pending' ? 'red' : ($data->status === 'resolved' ? 'green' : 'orange') }}">
                                                {{ $data->status === 'pending' ? 'Pending' : ($data->status === 'resolved' ? 'Resolved' : 'Not Resolved') }}
                                            </span>
                                            </a>

                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <p class="mb-0  text-body">
                                                {{ $data->remark??'No Action Yet' }}
                                            </p>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Data Found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif








@endsection

