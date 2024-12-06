<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;
use App\Models\Page; // Import Page model
use Illuminate\Validation\Rule;

class MenuManager extends Component
{
    public $menus;
    public $menuId;
    public $title;
    public $link;
    public $linkType = 'manual'; // Default to manual link
    public $parentId;
    public $pageId; // For page selection
    public $pages; // List of pages

    protected $listeners = ['editMenu', 'deleteMenu'];

    public function mount()
    {
        $this->loadMenus();
        $this->pages = Page::all(); // Load pages for selection
    }

    public function render()
    {
        return view('livewire.menu-manager');
    }

    public function saveMenu()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'linkType' => 'required|in:manual,page',
            'link' => 'nullable|string|url',
            'pageId' => 'nullable|exists:pages,slug',
            'parentId' => [
                'nullable',
                'exists:menus,id',
                function ($attribute, $value, $fail) {
                    if ($value == $this->menuId) {
                        $fail('Parent menu cannot be the same as the current menu.');
                    }
                },
            ],
        ]);

        $link = $this->linkType === 'page' ? $this->pageId : $this->link;

        $parentId = $this->parentId === '' ? null : $this->parentId;

        Menu::updateOrCreate(
            ['id' => $this->menuId],
            ['title' => $this->title, 'link' => $link, 'parent_id' => $parentId]
        );

        $this->resetInputFields();
        $this->loadMenus(); // Refresh the menu list
    }

    public function editMenu($id)
    {
        $menu = Menu::find($id);
        $this->menuId = $menu->id;
        $this->title = $menu->title;
        $this->linkType = $menu->link && !Page::where('slug', $menu->link)->exists() ? 'manual' : 'page';
        $this->link = $this->linkType === 'manual' ? $menu->link : '';
        $this->pageId = $this->linkType === 'page' ? $menu->link : '';
        $this->parentId = $menu->parent_id;
    }

    public function deleteMenu($id)
    {
        Menu::find($id)->delete();
        $this->loadMenus(); // Refresh the menu list
    }

    private function loadMenus()
    {
        $this->menus = Menu::whereNull('parent_id')->with('allChildren')->get();
    }

    private function resetInputFields()
    {
        $this->menuId = null;
        $this->title = '';
        $this->link = '';
        $this->linkType = 'manual';
        $this->parentId = null;
        $this->pageId = null;
    }
}
