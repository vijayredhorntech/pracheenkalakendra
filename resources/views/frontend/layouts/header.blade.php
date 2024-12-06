<div class="navs_part">
    <div class="head_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <a href="{{route('index')}}"> <img src="{{asset('assets/frontend/img/logos (1).png')}}"
                                                       class="logos"></a>
                </div>
                <div class="col-md-5">
                    <div class="socila_icons">
                        @php
                               $socials = App\Models\SocialLink::all();
                        @endphp
                         @foreach($socials as $social)
                            <a href="{{$social->link}}" style="background-color: #b60001; color: white; padding: 5px; margin-right: 5px; border-radius: 5px;">
                                    <i class="fa fa-{{$social->icon}}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">

            <button onclick="openNav()" class="navbar-toggler" id="openNavBtn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button onclick="closeNav()" style="background-color: transparent; border: none; outline: none;"
                    id="closeNavBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span style="font-weight: bold;">X </span>
            </button>


            <x-navbar />
        </div>
    </nav>
</div>
