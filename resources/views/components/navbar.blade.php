<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav w-100 justify-content-around" id="navList">
        @foreach ($items as $item)
            @if (isset($item['submenu']))
                <li class="nav-item dropdown seven_nav">
                    <a class="nav-link dropdown-toggle" href=" {{ route('page',$item['link']) }}" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $item['title'] }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($item['submenu'] as $subitem)
                            @if (isset($subitem['submenu']))
                                <li class="dropdown-submenu nav-item dropdown main-mainu">
                                    <a class="dropdown-item nav-link dropdown-toggle show" href="{{ route('page',$subitem['link']) }}">
                                        {{ $subitem['title'] }}
                                    </a>
                                    <ul class="nav-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($subitem['submenu'] as $subsubitem)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('page',$subsubitem['link']) }}">
                                                    {{ $subsubitem['title'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="dropdown-submenu nav-item dropdown main-mainu">
                                    <a class="dropdown-item nav-link show" href="{{ route('page', $subitem['link']) }}">
                                        {{ $subitem['title'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="nav-item ten_nav">
                    <a class="nav-link" aria-current="page" href="{{ route('page',$item['link']) }}">{{ $item['title'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>

{{--nothign--}}
