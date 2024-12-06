<div>
    <form wire:submit.prevent="saveMenuItem" class="mb-9">
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">{{ $isEditing ? 'Edit Menu' : 'Add New Menu' }}</h2>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-6">
                <div class="card mb-6">
                    <div class="card-body">
                        <h4 class="mb-3">{{ $isEditing ? 'Edit Menu Item' : 'Create New Menu Item' }}</h4>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" wire:model="title" class="form-control" placeholder="Enter title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" id="link" wire:model="link" class="form-control" placeholder="Enter link (optional)">
                            @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Menu</label>
                            <select id="parent_id" wire:model="parent_id" class="form-control">
                                <option value="">No Parent</option>
                                @foreach ($allMenus as $parentMenu)
                                    <option value="{{ $parentMenu->id }}">{{ $parentMenu->title }}</option>
                                @endforeach
                            </select>
                            @error('parent_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $isEditing ? 'Update Menu Item' : 'Create Menu Item' }}</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="card mb-6">
                    <div class="card-body">
                        <h4 class="mb-3">Menu Items</h4>
                        <ul id="sortable" class="w-100 mx-0 p-0" style="list-style: none">
                            @foreach ($menus as $menu)
                                <li data-id="{{ $menu->id }}" data-parent="{{ $menu->parent_id }}" class="position-relative w-100 mt-2">
                                    <button type="button" class="px-4 py-2 bg-gray-200 font-semibold w-100 border-0 outline-none d-flex justify-content-between" wire:click="editMenuItem({{ $menu->id }})">
                                        {{ $menu->title }}
                                    </button>
                                    <div class="bg-gray-400 w-max-content p-2 position-absolute right-0 top-0" style="right: 0px">
                                        <i class="fa fa-gear"></i>
                                    </div>
                                    @if ($menu->children->isNotEmpty())
                                        <ul class="w-100 nested-sortable" style="list-style: none">
                                            @foreach ($menu->children as $child)
                                                <li data-id="{{ $child->id }}" data-parent="{{ $child->parent_id }}" class="position-relative w-100 mt-2">
                                                    <button type="button" class="px-4 py-2 bg-gray-200 font-semibold w-100 border-0 outline-none d-flex justify-content-between" wire:click="editMenuItem({{ $child->id }})">
                                                        {{ $child->title }}
                                                    </button>
                                                    <div class="bg-gray-400 w-max-content p-2 position-absolute right-0 top-0" style="right: 0px">
                                                        <i class="fa fa-gear"></i>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mainSortable = Sortable.create(document.getElementById('sortable'), {
                group: {
                    name: 'menus',
                    put: true,
                    pull: true,
                },
                animation: 150,
                fallbackOnBody: true,
                swapThreshold: 0.65,
                onEnd: function (evt) {
                    var orderedMenus = [];
                    $('#sortable > li').each(function (index) {
                        var menu = {
                            id: $(this).data('id'),
                            parent_id: $(this).data('parent') || null,
                        };
                        orderedMenus.push(menu);
                    });

                    @this.call('updateMenuOrder', orderedMenus);
                }
            });

            $('.nested-sortable').each(function () {
                Sortable.create(this, {
                    group: 'menus',
                    animation: 150,
                    onEnd: function (evt) {
                        var orderedMenus = [];
                        $('#sortable > li').each(function (index) {
                            var menu = {
                                id: $(this).data('id'),
                                parent_id: $(this).data('parent') || null,
                            };
                            orderedMenus.push(menu);
                        });

                        @this.call('updateMenuOrder', orderedMenus);
                    }
                });
            });
        });
    </script>
</div>
