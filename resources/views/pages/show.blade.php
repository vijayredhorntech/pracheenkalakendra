@extends('layouts.layout')
@section('content')

    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Pages</h2>
                <a href="{{route('create-page')}}" class="btn btn-primary">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                    Add New Page
                </a>
            </div>
        </div>
        <div id="orderTable">
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs-9 mb-0">
                        <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:10%;">PAGE NAME</th>
                            <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:10%;">SLUG</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:30%;">STATUS</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">
                        @foreach($pages as $key => $page)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{$page->name}}
                                    </h6>
                                </td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                    {{$page->slug}}
                                </td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                    {{ ucfirst($page->status) }}
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a href="{{route('page',['slug'=>$page->slug])}}" class="dropdown-item" target="_blank">View</a>
                                            <a class="dropdown-item" href="{{ route('create-page',$page) }}">Edit</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-success" href="{{ route('toggle-page-status', $page) }}">{{ ucfirst($page->status) }} </a>

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

