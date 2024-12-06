<li class="  text-danger">
    <div class="flex items-center justify-between bg-gray-200 mb-4 py-2 px-4 rounded-md">
        <a href="{{ $menu->link }}"  style="color: #9a2912; font-weight: bold; font-size: 18px">{{ $menu->title }}</a>
        <div class="mt-2 d-flex justify-content-end gap-4">
            <button wire:click="editMenu({{ $menu->id }})" class="btn btn-info mb-2 mb-sm-0">Edit</button>
            <button wire:click="deleteMenu({{ $menu->id }})" class="btn btn-primary mb-2 mb-sm-0">Delete</button>
        </div>
    </div>
    @if($menu->children->isNotEmpty())
        <ul class="pl-4 mt-2 space-y-1">
            @foreach($menu->children as $child)
                <livewire:menu-item :menu="$child" :menus="$menus" :key="$child->id" />
            @endforeach
        </ul>
    @endif
</li>
