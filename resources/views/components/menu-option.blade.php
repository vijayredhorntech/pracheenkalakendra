@php
    $indentation = str_repeat('--', substr_count($prefix, '--'));
@endphp

<option value="{{ $menu->id }}" style="font-weight: bold">{{ $indentation }} {{ $menu->title }}</option>

@if($menu->children->isNotEmpty())
    @foreach($menu->children as $child)
        @include('components.menu-option', ['menu' => $child, 'prefix' => $prefix . '--'])
    @endforeach
@endif
