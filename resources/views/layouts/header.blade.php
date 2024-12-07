<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <p class="navbar-vertical-label">DASHBOARD</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='dashboard'?'active':''}}" data-bs-toggle="" href="{{route('dashboard')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                 <i class="fa fa-dashboard"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Dashboard</span>
                                </span>
                            </div>
                        </a></div>
                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">NOTIFICATIONS</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='notification.show'?'active':''}}" data-bs-toggle="" href="{{route('notification.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Notifications</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='programme.show'?'active':''}}" data-bs-toggle="" href="{{route('programme.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-gift"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Programmes</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='downloads.show'?'active':''}}" data-bs-toggle="" href="{{route('downloads.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-download"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Downloads</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">MENU</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='create-menu'?'active':''}}" data-bs-toggle="" href="{{route('create-menu')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Create Menu</span>
                                </span>
                            </div>
                        </a>
                    </div>

                </li>


                <li class="nav-item">
                    <p class="navbar-vertical-label">PAGES</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='create-page'?'active':''}}" data-bs-toggle="" href="{{route('create-page')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Create Page</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='show-page'?'active':''}}" data-bs-toggle="" href="{{route('show-page')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">All Pages</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">CONTACT</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='social-link.show'?'active':''}}" data-bs-toggle="" href="{{route('social-link.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-globe"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Social Links</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='contact.show'?'active':''}}" data-bs-toggle="" href="{{route('contact.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Contact Page</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">OTHER PAGES</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='members.show'?'active':''}}" data-bs-toggle="" href="{{route('members.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-users"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Members</span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1 {{Route::currentRouteName()==='bannerStats.show'?'active':''}}" data-bs-toggle="" href="{{route('bannerStats.show')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-chart-simple"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Banner Stats</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="navbar-vertical-label">LOG OUT</p>
                    <hr class="navbar-vertical-line"/>
                    <div class="nav-item-wrapper">
                        <a aria-expanded="false" class="nav-link label-1" data-bs-toggle="" href="{{route('login')}}" role="button">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa fa-right-from-bracket"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Logout</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>





    <div class="navbar-vertical-footer">
        <button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
            <span class="uil uil-left-arrow-to-left fs-8"></span><span
                class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
    </div>
</nav>
<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">

        {{--       left nav images and menu toggler div here--}}
        <div class="navbar-logo">
            <button aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"
                    class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                    data-bs-target="#navbarVerticalCollapse" data-bs-toggle="collapse" type="button"><span
                    class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{route('dashboard')}}">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img alt="phoenix" src="{{asset('assets/images/pracheenKalaLogo.png')}}" class="w-100"/>
                    </div>
                </div>
            </a>
        </div>


        {{--       middle search form div here--}}
        <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
             style="width:25rem;">
            <form class="position-relative" data-bs-display="static" data-bs-toggle="search"><input aria-label="Search"
                                                                                                    class="form-control search-input fuzzy-search rounded-pill form-control-sm"
                                                                                                    placeholder="Search..."
                                                                                                    type="search"/>
                <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                 data-bs-dismiss="search">
                <button aria-label="Close" class="btn btn-link p-0"></button>
            </div>

        </div>


        {{--        right side nav profile and other div here--}}
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input
                        class="form-check-input ms-0 theme-control-toggle-input" data-theme-control="phoenixTheme"
                        id="themeControlToggle" type="checkbox" value="dark"/><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" data-bs-placement="left"
                        data-bs-title="Switch theme" data-bs-toggle="tooltip" for="themeControlToggle"
                        style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" data-bs-placement="left"
                        data-bs-title="Switch theme" data-bs-toggle="tooltip" for="themeControlToggle"
                        style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
            </li>


            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link lh-1 pe-0"
                   data-bs-auto-close="outside" data-bs-toggle="dropdown" href="#!"
                   id="navbarDropdownUser" role="button">
                    <div class="avatar avatar-l">
                        <img alt="" class="rounded-circle" src="{{asset('assets/images/user.jpg')}}"/>
                    </div>
                </a>
                <div aria-labelledby="navbarDropdownUser"
                     class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl">
                                    <img alt="" class="rounded-circle" src="{{asset('assets/images/user.jpg')}}"/>
                                </div>
                                <h6 class="mt-2 text-body-emphasis">Admin</h6>
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar">
                            <ul class="nav d-flex flex-column mb-2 pb-1">

                                <li class="nav-item"><a class="nav-link px-3 d-block" href="{{route('dashboard')}}"><span
                                            class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-footer py-2 border-top border-translucent ">

                            <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{route('login')}}">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</nav>




