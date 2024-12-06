@extends('layouts.layout')
@section('content')

    <div class="row g-5">
        <form class=" {{$formData['type']==='show'?'d-none':''}}" action="{{$formData['url']}}" method="{{$formData['method']}}" id="addNewEMember">
          @csrf
            <div class="row g-3 flex-between-end">
                <div class="col-auto">
                    <h2 class="mb-2">Add New Member</h2>
                </div>
                <div class="col-auto">
                    <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                            onclick="document.getElementById('addNewEMember').classList.add('d-none')">Discard</button>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                        {{$formData['type']==='show'?'Create Member':'Update Member'}}
                    </button></div>
            </div>

            <div class="row g-5 mt-2">
                <div class="col-12">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-1">
                                                <h5 class="mb-2 text-body-highlight">Name</h5>
                                                <input class="form-control mb-xl-3" type="text" name="member_name"  value="{{$member->member_name ?? old('member_name')}}"  placeholder="Name...">
                                                @error('member_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-1">
                                                <h5 class="mb-2 text-body-highlight">Occupation</h5>
                                                <input class="form-control mb-xl-3" type="text" name="member_occupation" value="{{$member->member_occupation ?? old('member_occupation')}}" placeholder="Occupation...">
                                                @error('member_occupation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-1">
                                                <h5 class="mb-2 text-body-highlight">Designation</h5>
                                                <input class="form-control mb-xl-3" type="text" name="member_designation" value="{{$member->member_designation ?? old('member_designation')}}" placeholder="Designation...">
                                                @error('member_designation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-1">
                                                <h5 class="mb-2 text-body-highlight">Type</h5>
                                                <select class="form-control mb-xl-3" type="text" name="member_type" >
                                                    <option value="executive_board" {{ isset($member->member_type) && $member->member_type ? 'selected' : ''}}>Executive Board</option>
                                                    <option value="general_body" {{ isset($member->member_type) && !$member->member_type ? 'selected' : ''}}>General Body</option>
                                                </select>
                                                @error('member_type')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <div class="row g-5 mt-6">
        <div class="col-12 col-xl-12 " style="padding: 0px 10px">
            <div class="row g-3 mb-4">
                <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                    <h2 class="mb-0">All Members</h2>
                    <button class="btn btn-primary"
                            onclick=" document.getElementById('addNewEMember').classList.toggle('d-none')">
                        <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                        Add New Member
                    </button>
                </div>
            </div>

        </div>


    </div>
    <div class="row g-5">
        <div class="col-12 col-xl-6 " style="padding: 0px 10px">
            <div class="mb-9">
                <div class="row g-3 mb-4">
                    <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                        <h4 class="mb-0">Members of Executive Board </h4>
                    </div>
                </div>

                <div id="orderTable">
                    <div class="px-4 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">NAME</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">OCCUPATION</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">DESIGNATION</th>
                                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">

                                @foreach($executiveMembers as $key => $eMember)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <h6 class="mb-0  text-body">
                                                {{$eMember->member_name}}
                                            </h6>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                               <span class="text-black"> {{$eMember->member_occupation}}</span>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                                {{$eMember->member_designation}}
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                                    <a class="dropdown-item" href="{{route('members.edit',['id'=>$eMember->id])}}">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="{{route('members.delete',['id'=>$eMember->id])}}">Remove</a>
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
        </div>
        <div class="col-12 col-xl-6" style="padding: 0px 10px">
            <div class="mb-9">
                <div class="row g-3 mb-4">
                    <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                        <h4 class="mb-0">Members of General Body </h4>
                    </div>
                </div>
                <div id="orderTable">
                    <div class="px-4 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table table-sm fs-9 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:10%;">SR.NO</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">NAME</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">OCCUPATION</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">DESIGNATION</th>
                                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">

                                @foreach($generalMembers as $key => $gMember)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <h6 class="mb-0  text-body">
                                                {{$gMember->member_name}}
                                            </h6>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            <span class="text-black"> {{$gMember->member_occupation}}</span>
                                        </td>
                                        <td class="customer align-middle white-space-nowrap ps-8">
                                            {{$gMember->member_designation}}
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                            <div class="btn-reveal-trigger position-static">
                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                                    <a class="dropdown-item" href="{{route('members.edit',['id'=>$gMember->id])}}">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="{{route('members.delete',['id'=>$gMember->id])}}">Remove</a>
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

        </div>
    </div>
@endsection




