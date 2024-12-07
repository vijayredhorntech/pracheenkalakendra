@extends('layouts.layout')
@section('content')


    <form class=" {{$formData['type']==='show'?'d-none':''}}" action="{{$formData['url']}}" method="{{$formData['method']}}"  id="addNewStat">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Stats</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewStat').classList.add('d-none')">Discard</button>
            </div>

            <div class="row g-5">
                <div class="col-12 col-xl-4">
                    <div class="card mb-3">
                        <div class="card-body">

                            <h4 class="mb-3">Stat Title</h4>
                            <input class="form-control mb-5" type="text" name="title" value="{{$bannerStat->title ?? old('title')}}" placeholder="Link...">
                            <h4 class="mb-3">Stat Description</h4>
                            <input class="form-control mb-5" type="text" name="description" value="{{$bannerStat->description ?? old('description')}}" placeholder="Link...">
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="w-full d-flex justify-content-end">
                                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                    {{$formData['type']==='show'?'Create Banner Stat':'Update Banner Stat'}}
                                </button></div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>










    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Banner Stats</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewStat').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                    Add New Stat
                </button>
            </div>
        </div>
        <div id="orderTable">
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs-9 mb-0">
                        <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">TITLE</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">DESCRIPTION</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">STATUS</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @forelse($bannerStats as $key => $stat)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                         {{ ucfirst($stat->title) }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <p class="mb-0  text-body">
                                        {{ $stat->description }}
                                    </p>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{route('bannerStats.changeStatus',['id'=>$stat->id])}}" class="mb-0  text-body" style="text-decoration: none">
                                        <span class="px-4 text-md py-1 bg-{{ $stat->status===1?'success':'danger' }} text-white font-bold rounded-[3px]">{{ $stat->status===1?'Active':'Not Active' }}</span>
                                    </a>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item" href="{{route('bannerStats.edit',['id'=>$stat->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="{{route('bannerStats.delete',['id'=>$stat->id])}}">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

