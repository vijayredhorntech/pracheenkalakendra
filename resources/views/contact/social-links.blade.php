@extends('layouts.layout')
@section('content')


    <form class=" {{$formData['type']==='show'?'d-none':''}}" action="{{$formData['url']}}" method="{{$formData['method']}}"  id="addNewSocialMediaLinks">
         @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add New Social Media Link</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button"
                        onclick="document.getElementById('addNewSocialMediaLinks').classList.add('d-none')">Discard</button>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-4">
                <div class="card mb-3">
                    <div class="card-body">

                        <h4 class="mb-3">Social Media</h4>
                        <select class="form-control mb-5" name="icon">
                            <option value="">---Select Icon---</option>
                            <option value="facebook" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Facebook</option>
                            <option value="twitter" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Twitter</option>
                            <option value="instagram" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Instagram</option>
                            <option value="linkedin" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Linkedin</option>
                            <option value="youtube" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Youtube</option>
                            <option value="whatsapp" {{ isset($socialLink->icon) && $socialLink->icon ? 'selected' : ''}}>Whatsapp</option>
                        </select>

                        <h4 class="mb-3">Link</h4>
                        <input class="form-control mb-5" type="text" name="link" value="{{$socialLink->link ?? old('member_name')}}" placeholder="Link...">
                        @error('link')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="w-full d-flex justify-content-end">
                            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                                {{$formData['type']==='show'?'Create Social Link':'Update Social Link'}}
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
                <h2 class="mb-0">Downloads</h2>
                <button class="btn btn-primary"
                        onclick=" document.getElementById('addNewSocialMediaLinks').classList.toggle('d-none')">
                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                    Add New Social Link
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
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">SOCIAL MEDIA</th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:30%;">LINK</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width:10%">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">

                        @foreach($socialLinks as $key => $social)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="order align-middle white-space-nowrap py-0">{{$loop->iteration}}</td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <h6 class="mb-0  text-body">
                                        <i class="fa-brands fa-{{$social->icon}} mr-2 text-primary"></i> {{ ucfirst($social->icon) }}
                                    </h6>
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8">
                                    <a href="{{$social->link}}" target="_blank" class="mb-0  text-body text-primary">
                                       {{$social->link}}
                                    </a>

                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path></svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                            <a class="dropdown-item" href="{{route('social-link.edit',['id'=>$social->id])}}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="{{route('social-link.delete',['id'=>$social->id])}}">Remove</a>
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

