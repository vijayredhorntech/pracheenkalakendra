@extends('layouts.layout')
@section('content')

    <form class="mb-9 {{$formData['type']==='show'?'d-none':''}}" id="addNewProgramDiv" action="{{$formData['url']}}" method="{{$formData['method']}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Programme</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewProgramDiv').classList.add('d-none')">Discard
                </button>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="mb-3">Programme Title <span class="text-danger">*</span></h4>
                        <input class="form-control mb-5" type="text" name="programme_title"
                               value="{{$programme->programme_title ?? old('programme_title')}}"
                               placeholder="Programme title...">
                        <div class="mb-6">
                            <h4 class="mb-3"> Programme Description <span class="text-danger">*</span></h4>
                            <textarea class="form-control mb-5" rows="5" name="programme_description"
                                      id="mce_0" placeholder="Programme description...">
                                        {{$programme->programme_description ?? old('programme_description')}}
                                    </textarea>
                        </div>
                        <div class="mb-6">
                            <h4 class="mb-3"> Programme Artists</h4>
                            <div id="mainContainerOfRows">
{{--                                make copy of this row--}}
                                <div class="row gx-3 position-relative">
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Name <span class="text-danger">*</span>
                                            </h5>
                                            <input class="form-control mb-xl-3" name="name[]" type="text"
                                                   value="{{$programme->name ?? old('name')}}"
                                                   placeholder="Name...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Description <span
                                                    class="text-danger">*</span></h5>
                                            <input class="form-control mb-xl-3" name="description[]" type="text"
                                                   value="{{$programme->description ?? old('description')}}"
                                                   placeholder="Designation...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-4">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Image <span class="text-danger">*</span>
                                            </h5>
                                            <input class="form-control mb-xl-3" name="image[]" type="file">
                                        </div>
                                    </div>
                                    <div class="position-absolute top-0 d-flex justify-content-end" style="right: 0px">
                                        <button id="removeRow" type="button" class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                            <span class="badge-label">
                                                  <i class="fa fa-xmark"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-12 d-flex justify-content-end">
                                <button id="addMoreButton" class="btn btn-success mb-2 mb-sm-0" type="button">
                                    Add More....
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row gx-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Programme Location <span
                                                    class="text-danger">*</span></h5>
                                            <input class="form-control mb-xl-3" name="programme_location" type="text"
                                                   value="{{$programme->programme_location ?? old('programme_location')}}"
                                                   placeholder="Programme Location...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Programme Date <span
                                                    class="text-danger">*</span></h5>
                                            <input class="form-control mb-xl-3" name="programme_date" type="date"
                                                   value="{{ old('programme_date', isset($programme) ? \Carbon\Carbon::parse($programme->programme_date)->format('Y-m-d') : null) }}"
                                                   placeholder="Programme Date...">
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Programme Time <span
                                                    class="text-danger">*</span></h5>
                                            <input class="form-control mb-xl-3" name="programme_time" type="time"
                                                   value="{{ old('programme_time', isset($programme) ? \Carbon\Carbon::parse($programme->programme_time)->format('H:i') : null) }}"
                                                   placeholder="Programme Time...">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-3">Programme Banner Image <span
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
                                                    <input id="imageInput" type="file" name="programme_image"
                                                           style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0"
                                                           accept="image/png, image/gif, image/jpeg"/>
                                                </div>
                                                <div style="display: flex; gap: 10px">
                                                    <img id="imageToDisplay"
                                                         style="height: 50px; width: 50px; display: none" src="" alt="">
                                                    @if($formData['type']==='edit')
                                                        <img src="{{asset('storage/'.$programme->programme_image)}}"
                                                             title="{{$programme->programme_title}}"
                                                             alt="{{$programme->programme_title}}"
                                                             style="height: 50px; width: 50px;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Programme Images </h5>
                                        </div>
                                        <div class="">
                                            <div class="form-control mb-1"
                                                 style="height: 100px; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center">
                                                <button class="btn btn-link p-0" type="button">Browse from device
                                                </button>
                                                <img class="mt-3 me-2" src="{{asset('assets/images/image-icon.png')}}"
                                                     width="40" alt="">
                                                <input id="programmeImages" type="file" name="programme_images[]"
                                                       style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0"
                                                       multiple accept="image/png, image/gif, image/jpeg"/>
                                            </div>


                                            <div style="display: flex; gap: 10px">
                                                <div id="programImagesToDisplay"
                                                     style="display: flex; gap: 10px; flex-wrap: wrap;"></div>
                                                @if($formData['type']==='edit')
                                                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                        @forelse($programme->programImages as $image)
                                                            <img src="{{asset('storage/'.$image->programme_images)}}"
                                                                 title="{{$programme->programme_title}}"
                                                                 alt="{{$programme->programme_title}}"
                                                                 style="height: 50px; width: 50px;">
                                                        @empty
                                                            <p>No images found</p>
                                                        @endforelse
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-6 col-xl-12 d-flex justify-content-end">
                                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                            {{$formData['type']==='show'?'Create Programme':'Update Programme'}}
                                        </button>
                                    </div>

                                </div>
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
                <h2 class="mb-0">Programme</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewProgramDiv').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas"
                         data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                         data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                    </svg>
                    Add New Programme
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
                                PROGRAMME NAME
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                                PROGRAMME BANNER IMAGE
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                                PROGRAMME IMAGE
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">
                                PROGRAMME ARTISTS
                            </th>
                            <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                style="width:10%;">PROGRAMME STATUS
                            </th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type"
                                style="width:10%;">LOCATION
                            </th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type"
                                style="width:10%;">DATE
                            </th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type"
                                style="width:10%;">TIME
                            </th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">
                                ACTION
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @foreach($programmes as $key => $programme)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        {{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{asset('storage/'.$programme->programme_image)}}" target="_blank">
                                        <img src="{{asset('storage/'.$programme->programme_image)}}"
                                             title="{{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}"
                                             alt="{{ \Illuminate\Support\Str::words($programme->programme_title, 6, '...') }}"
                                             style="height: 50px; width: 50px;">

                                    </a>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <div style="display: flex; gap: 10px;">
                                        @forelse($programme->programImages as $image)
                                            <div class="position-relative">
                                                <a href="{{asset('storage/'.$image->programme_images)}}"
                                                   target="_blank">
                                                    <img src="{{asset('storage/'.$image->programme_images)}}"
                                                         title="{{$programme->programme_title}}"
                                                         alt="{{$programme->programme_title}}"
                                                         style="height: 50px; width: 50px;">
                                                </a>
                                                <div class="position-absolute top-0 right-0">
                                                    <a href="{{route('programme.images-delete',['id'=>$image->id])}}">
                                                          <span class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                                              <span class="badge-label">
                                                       <i class="fa fa-xmark"></i>
                                                   </span>
                                                   </span>
                                                    </a>
                                                </div>
                                            </div>
                                        @empty
                                            <p>No images found</p>
                                        @endforelse
                                    </div>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <div style="display: flex; gap: 10px;">
                                        @forelse($programme->programArtists as $artist)
                                            <div class="position-relative">
                                                <a href="{{asset('storage/'.$artist->image)}}"
                                                   target="_blank">
                                                    <img src="{{asset('storage/'.$artist->image)}}"
                                                         title="{{$artist->name}}"
                                                         alt="{{$artist->name}}"
                                                         style="height: 50px; width: 50px;">
                                                </a>
                                                <div class="position-absolute top-0 right-0">
                                                    <a href="{{route('programme.artist-delete',['id'=>$artist->id])}}">
                                                          <span class="badge badge-phoenix fs-10 badge-phoenix-danger">
                                                              <span class="badge-label">
                                                       <i class="fa fa-xmark"></i>
                                                   </span>
                                                   </span>
                                                    </a>
                                                </div>
                                            </div>
                                        @empty
                                            <p>No artist found</p>
                                        @endforelse
                                    </div>
                                </td>
                                <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                        <span
                                            class="badge badge-phoenix fs-10 badge-phoenix-{{ \Carbon\Carbon::parse($programme->programme_date)->isPast() ? 'danger' : 'success' }}"><span
                                                class="badge-label">
                                                 <i class="fa fa-{{ \Carbon\Carbon::parse($programme->programme_date)->isPast() ? 'xmark' : 'check' }}"></i>
                                            </span>
                                        </span>
                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{ \Illuminate\Support\Str::words($programme->programme_location, 4, '...') }}
                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{--                                        {{ \Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')->isPast()?'Expired':\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y') }}--}}
                                    {{\Carbon\Carbon::parse($programme->programme_date)->format('d/m/Y')}}

                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{ \Carbon\Carbon::parse($programme->programme_time)->format('h:i A') }}

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
                                               href="{{route('programme.edit',['id'=>$programme->id])}}">Edit</a>
                                            <a class="dropdown-item"
                                               href="{{route('view-programme',['id'=>$programme->id])}}">View</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger"
                                               href="{{route('programme.delete',['id'=>$programme->id])}}">Remove</a>
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

