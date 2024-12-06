@extends('layouts.layout')
@section('content')


    <form class="mb-9 {{$formData['type']==='show'?'d-none':''}}" id="addNewDownloadDiv" action="{{$formData['url']}}" method="{{$formData['method']}}" enctype="multipart/form-data">
       @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Download Link</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewDownloadDiv').classList.add('d-none')">Discard</button>
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button></div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-4">
                <div class="card mb-3">
                    <div class="card-body">

                        <h4 class="mb-3">Title</h4>
                        <input class="form-control mb-5" name="title" type="text" value="{{$download->title ?? old('title')}}" placeholder="Title...">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <h4 class="mb-3">New or Not</h4>
                        <select class="form-control mb-5" name="new_or_not" type="text">
                            <option value="1"{{ isset($download->new_or_not) && $download->new_or_not ? 'selected' : ''}}>New</option>
                            <option value="0"{{ isset($download->new_or_not) && !$download->new_or_not ? 'selected' : ''}}>Not New</option>
                        </select>
                        <h4 class="mb-3">Files</h4>
                        <div class="mb-6">
                            <div class="form-control mb-5" style="height: 100px; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center">
                                <button class="btn btn-link p-0" type="button">Browse from device</button>
                                <img class="mt-3 me-2" src="{{asset('assets/images/image-icon.png')}}" width="40" alt="">
                                <input id="imageInput" type="file" name="download_file" style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0"  />
                            </div>
                            <div style="display: flex; gap: 10px">
                                <a href="" id="imageToDisplay" style="height: 100px; width: 100px; display: none" alt="" target="_blank">View File</a>
                                @if($formData['type']==='edit')
                                    <a href="{{asset('storage/'.$download->download_file)}}" target="_blank">View Old File</a>
                                @endif
                            </div>
                            @error('download_file')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full d-flex justify-content-end">
                            <button  class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                {{$formData['type']==='show'?'Create Download':'Update Download'}}
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>

    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Downloads</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewDownloadDiv').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                    Add New Downloads
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
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">FILE</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">




                        @foreach($downloads as $key => $download)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{$download->title}} <span class="badge bg-danger ms-2">{{$download->new_or_not?'New':''}}</span>
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{asset('storage/'.$download->download_file)}}" target="_blank">View File</a>
                                </td>

                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item" href="{{route('downloads.edit',['id'=>$download->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{route('downloads.delete',['id'=>$download->id])}}">Remove</a>
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
    @push('scripts')
        <script>
            document.getElementById('imageInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('imageToDisplay').href = e.target.result;
                        document.getElementById('imageToDisplay').style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endpush

@endsection

