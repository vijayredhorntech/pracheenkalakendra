<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Menu Manager</h2>

    <form wire:submit.prevent="saveMenu" class=" row">
        <input type="hidden" wire:model="menuId">

        <div class="d-flex flex-column col-4 mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
            <input placeholder="Menu Title....." type="text" id="title" wire:model="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="d-flex flex-column col-4 mb-4">
            <label for="linkType" class="block text-sm font-medium text-gray-700">Link Type:</label>
            <select id="linkType" wire:model="linkType" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="manual">Manual Link</option>
                <option value="page">Select Page</option>
            </select>
        </div>

        <div id="manualLink" class="d-none d-flex flex-column col-4 mb-4">
            <label for="link" class="block text-sm font-medium text-gray-700">Manual Link:</label>
            <input placeholder="Add Link....." type="text" id="link" wire:model="link" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <div id="pageLink" class="d-none d-flex flex-column col-4 mb-4">
            <label for="page" class="block text-sm font-medium text-gray-700">Select Page:</label>
            <select id="page" wire:model="pageId" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">None</option>
                @foreach($pages as $page)
                    <option value="{{ $page->slug }}">{{ $page->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column col-4 mb-4">
            <label for="parent" class="block text-sm font-medium text-gray-700">Parent Menu:</label>
            <select id="parent" wire:model="parentId" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">None</option>
                @foreach($menus as $menu)
                    @include('components.menu-option', ['menu' => $menu, 'prefix' => ''])
                @endforeach
            </select>
            @error('parentId') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="d-flex flex-column col-4 mb-4">
            <label for="" class="block text-sm font-medium text-gray-700">&nbsp</label>
            <button type="submit" class="btn btn-primary mb-2 mb-sm-0">Save Menu</button>

        </div>

    </form>

    <h3 class="text-xl font-semibold mt-6 mb-4">Menu List</h3>
    <ul class="space-y-2 w-full">
        @foreach($menus as $menu)
            <livewire:menu-item :menu="$menu" :menus="$menus" :key="$menu->id" />
        @endforeach
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const linkTypeSelect = document.getElementById('linkType');
        const manualLinkDiv = document.getElementById('manualLink');
        const pageLinkDiv = document.getElementById('pageLink');

        function updateLinkFields() {
            if (linkTypeSelect.value === 'manual') {
                manualLinkDiv.classList.remove('d-none');
                pageLinkDiv.classList.add('d-none');
            } else if (linkTypeSelect.value === 'page') {
                manualLinkDiv.classList.add('d-none');
                pageLinkDiv.classList.remove('d-none');
            }
        }

        // Initial update based on the current selection
        updateLinkFields();

        // Update on change
        linkTypeSelect.addEventListener('change', updateLinkFields);
    });
</script>
