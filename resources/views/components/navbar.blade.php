<div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="nav-list" id="navBarNavList">
        @foreach($items as $item)
            <li class="nav-item">
                <a href="{{ $item['link'] ? route('page', $item['link']) : '#' }}" class="nav-link">
                    {{ $item['title'] }}
                </a>

                @if(isset($item['submenu']) && count($item['submenu']) > 0)
                    <div class="dropdown-content">
                        @foreach($item['submenu'] as $column)
                            <div class="dropdown-column">
                                @if($column['title'] === NULL)
                                    @else
                                       <h3 class="column-title">{{ $column['title'] }}</h3>
                                    @endif
                                @if(isset($column['submenu']) && count($column['submenu']) > 0)
                                    <ul class="submenu" style="padding: 0px; padding-left: 0.5rem; margin-left: 0px">
                                        @foreach($column['submenu'] as $subitem)
                                            <li class="submenu-item">
                                                <a href="{{ $subitem['link'] ? route('page', $subitem['link']) : '#' }}"
                                                   class="submenu-link" style="display: flex; justify-content: space-between; align-items: center">
                                                    {{ $subitem['title'] }}
                                                    @if(isset($subitem['submenu']) && count($subitem['submenu']) > 0)
                                                    <i class="fa fa-angle-down"></i>
                                                    @else
                                                    @endif
                                                </a>
                                                @if(isset($subitem['submenu']) && count($subitem['submenu']) > 0)
                                                    <ul class="nested-submenu">
                                                        @foreach($subitem['submenu'] as $subsubitem)
                                                            <li class="nested-submenu-item">
                                                                <a href="{{ $subsubitem['link'] ? route('page', $subsubitem['link']) : '#' }}"
                                                                   class="submenu-link" style="border-bottom: 0px">
                                                                    {{ $subsubitem['title'] }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>
