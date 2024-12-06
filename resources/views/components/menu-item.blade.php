@php
    $children = $menu->children;
    if (isset($submenu)){
        $liClasses = 'dropdown-submenu nav-item dropdown  main-mainu';
    } else {
        $liClasses = 'nav-item dropdown ';
    }
@endphp

<li class="{{ $liClasses }}">
    <a class="nav-link dropdown-toggle" href="{{ $menu->link }}" id="navbarDropdownMenuLink{{ $menu->id }}" role="button"
       data-bs-toggle="dropdown" aria-expanded="false">
        {{ $menu->title }}
    </a>
    @if($children->isNotEmpty())
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink{{ $menu->id }}">
            @foreach($children as $child)
                @include('components.menu-item', ['menu' => $child, 'submenu'=>true])
            @endforeach
        </ul>
    @endif
</li>
