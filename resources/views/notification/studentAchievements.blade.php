@extends('layouts.layout')
@section('content')

    <form class="mb-9 {{$formData['type']==='show'?'d-none':''}}" id="addNewAchievement" action="{{$formData['url']}}" method="{{$formData['method']}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Student Achievement</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewAchievement').classList.add('d-none')">Discard
                </button>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Title <span
                                                    class="text-danger">*</span></h5>
                                            <input class="form-control mb-xl-3" name="title" type="text"
                                                   value="{{$achievement->title ?? old('title')}}"
                                                   placeholder="Title....">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Description <span
                                                    class="text-danger">*</span></h5>
                                            <textarea class="form-control mb-xl-3" name="description" type="text"
                                                   placeholder="Description..." rows="5">
                                                {{$achievement->description ?? old('title')}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-3">Image <span
                                                    class="text-danger">{{$formData['type']==='show'?'*':''}}</span>
                                            </h5>
                                            <div class="mb-6">
                                                <div class="form-control mb-1"
                                                     style="height: 100px; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center">
                                                    <button class="btn btn-link p-0" type="button">Browse from device
                                                    </button>
                                                    <img class="mt-3 me-2"
                                                         src="{{asset('assets/images/image-icon.png')}}" width="40"
                                                         alt="">
                                                    <input id="imageInput" type="file" name="image"
                                                           style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0"
                                                           accept="image/png, image/gif, image/jpeg"/>
                                                </div>
                                                <div style="display: flex; gap: 10px">
                                                    <img id="imageToDisplay"
                                                         style="height: 50px; width: 50px; display: none" src="" alt="">
                                                    @if($formData['type']==='edit')
                                                        <img src="{{asset('storage/'.$achievement->image)}}"
                                                             title="{{$achievement->title}}"
                                                                 alt="{{$achievement->title}}"
                                                             style="height: 50px; width: 50px;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6 col-xl-12 d-flex justify-content-end">
                                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                            {{$formData['type']==='show'?'Create Achievement':'Update Achievement'}}
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </form>


    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-md-12"
                 style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Students Achievements</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewAchievement').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas"
                         data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                         data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                    </svg>
                    Add New Achievement
                </button>
            </div>
        </div>
        <div id="orderTable">
            <div
                class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs-9 mb-0">
                        <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order"
                                style="width:10%;">SR.NO
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                               TITLE
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                                DESCRIPTION
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                                IMAGE
                            </th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">
                                ACTION
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @foreach($achievements as $key => $achievement)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{ \Illuminate\Support\Str::words($achievement->title, 6, '...') }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{ \Illuminate\Support\Str::words($achievement->description, 6, '...') }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{asset('storage/'.$achievement->image)}}" target="_blank">
                                        <img src="{{asset('storage/'.$achievement->image)}}"
                                             title="{{ \Illuminate\Support\Str::words($achievement->title, 6, '...') }}"
                                             alt="{{ \Illuminate\Support\Str::words($achievement->title, 6, '...') }}"
                                             style="height: 50px; width: 50px;">

                                    </a>
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true"
                                                 focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                 data-fa-i2svg="">
                                                <path fill="currentColor"
                                                      d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                            <!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com -->
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item"
                                               href="{{route('studentAchievements.edit',['id'=>$achievement->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger"
                                               href="{{route('studentAchievements.delete',['id'=>$achievement->id])}}">Remove</a>
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
            document.getElementById('imageInput').addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        document.getElementById('imageToDisplay').src = e.target.result;
                        document.getElementById('imageToDisplay').style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
            document.getElementById('programmeImages').addEventListener('change', function (event) {
                const files = event.target.files;
                const displayContainer = document.getElementById('programImagesToDisplay');
                displayContainer.innerHTML = ''; // Clear any existing images

                if (files) {
                    Array.from(files).forEach(file => {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.height = '50px';
                            img.style.width = '50px';
                            img.alt = 'Uploaded Image';
                            displayContainer.appendChild(img); // Append each image to the container
                        };
                        reader.readAsDataURL(file);
                    });
                }
            });

        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addMoreButton = document.getElementById('addMoreButton');
                const container = document.getElementById('mainContainerOfRows'); // Update this selector to target your main container
                const rowSelector = '.row.gx-3.position-relative';

                // Function to add a new row
                addMoreButton.addEventListener('click', function () {
                    const rowToClone = container.querySelector(rowSelector); // Select the first row as a template
                    const clonedRow = rowToClone.cloneNode(true);

                    // Clear input values in the cloned row
                    const inputs = clonedRow.querySelectorAll('input');
                    inputs.forEach(input => (input.value = ''));

                    // Add event listener to the remove button of the new row
                    const removeButton = clonedRow.querySelector('#removeRow');
                    removeButton.addEventListener('click', removeRow);

                    // Append the cloned row to the container
                    container.appendChild(clonedRow);
                });

                // Function to remove a row
                function removeRow(event) {
                    const rows = container.querySelectorAll(rowSelector);

                    // Ensure at least one row remains
                    if (rows.length > 1) {
                        const row = event.target.closest(rowSelector);
                        row.remove();
                    } else {
                        alert('At least one row is required.');
                    }
                }

                // Add remove functionality to the initial row's remove button
                const initialRemoveButton = container.querySelector('#removeRow');
                if (initialRemoveButton) {
                    initialRemoveButton.addEventListener('click', removeRow);
                }
            });

        </script>
    @endpush

@endsection

