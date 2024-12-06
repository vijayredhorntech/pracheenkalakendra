@extends('layouts.layout')
@section('content')


    <form class=" {{$formData['type']==='show'?'d-none':''}}" action="{{$formData['url']}}" method="{{$formData['method']}}"  id="addNewContactDetails">
       @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Contact Page</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewContactDetails').classList.add('d-none')">Discard</button>
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                    {{$formData['type']==='show'?'Create Contact Page':'Update Contact Page'}}
                </button></div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="card mb-3">
                    <div class="card-body">

                        <h4 class="mb-3">Office Name</h4>
                        <input class="form-control mb-5" type="text" name="office_name" value="{{$contact->office_name ?? old('office_name')}}"  placeholder="Office Name...">
                        @error('office_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <h4 class="mb-3">Office Location</h4>
                        <input class="form-control mb-5" type="text" name="office_location" value="{{$contact->office_location ?? old('office_location')}}" placeholder="Office Location...">
                        @error('office_location')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <h4 class="mb-3">Location Map</h4>
                        <input class="form-control mb-5" type="text" name="office_map" value="{{$contact->office_map ?? old('office_map')}}" placeholder="Location Map...">
                        @error('office_map')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror


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
                                        <div id="phoneContainer">
                                            <div>
                                                <div class="">
                                                    <h5 class="mb-2 text-body-highlight">Phone</h5>
                                                    <input class="form-control mb-xl-3" type="text" name="office_phone" value="{{$contact->office_phone ?? old('office_phone')}}" placeholder="Phone...">
                                                    @error('office_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div id="emailContainer">
                                            <div>
                                                <div class="">
                                                    <h5 class="mb-2 text-body-highlight">Email</h5>
                                                    <input class="form-control mb-xl-3" type="text" name="office_email" value="{{$contact->office_email ?? old('office_email')}}" placeholder="Email...">
                                                    @error('office_email')
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
            </div>
        </div>
    </form>










    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-md-12" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 10px; width: 100%">
                <h2 class="mb-0">Contact Detail</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewContactDetails').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                    Add New Contact Detail
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
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:20%;">OFFICE NAME</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">LOCATION</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">MAP</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">EMAIL</th>
                            <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:10%;">PHONE</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @foreach($allContacts as $key => $contact)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    {{$contact->office_name}}
                                </td>

                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">{{$contact->office_location}}</td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    <iframe src="{{$contact->office_map}}"  style="border:0; height: 100px; width: 100px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                  {{$contact->office_email}}
                                </td>
                                <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                    {{$contact->office_phone}}
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item" href="{{route('contact.edit',['id'=>$contact->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="{{route('contact.delete',['id'=>$contact->id])}}">Remove</a>
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
            document.getElementById('addMorePhoneBtn').addEventListener('click', function() {
                var phoneContainer = document.getElementById('phoneContainer');
                var clone = document.createElement('div');

                clone.innerHTML = `
        <div>
            <div class="">
                <h5 class="mb-2 text-body-highlight">Phone</h5>
                <input class="form-control mb-xl-3" type="text" placeholder="Phone...">
            </div>
            <div class="" style="display: flex; justify-content: end">
                <button type="button" class="btn btn-primary removePhoneBtn">
                    <i class="fa fa-xmark"></i>
                </button>
            </div>
        </div>
    `;

                phoneContainer.appendChild(clone);

                var removeBtns = document.querySelectorAll('.removePhoneBtn');
                removeBtns.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        btn.parentElement.parentElement.remove();
                    });
                });
            });
            document.getElementById('addMoreEmailBtn').addEventListener('click', function() {
                var emailContainer = document.getElementById('emailContainer');
                var clone = document.createElement('div');

                clone.innerHTML = `
        <div>
            <div class="">
                <h5 class="mb-2 text-body-highlight">Email</h5>
                <input class="form-control mb-xl-3" type="text" placeholder="Email...">
            </div>
            <div class="" style="display: flex; justify-content: end">
                <button type="button" class="btn btn-primary removeEmailBtn">
                    <i class="fa fa-xmark"></i>
                </button>
            </div>
        </div>
    `;

                emailContainer.appendChild(clone);

                var removeBtns = document.querySelectorAll('.removeEmailBtn');
                removeBtns.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        btn.parentElement.parentElement.remove();
                    });
                });
            });
        </script>
    @endpush

@endsection

