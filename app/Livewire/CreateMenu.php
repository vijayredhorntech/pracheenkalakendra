<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;

class CreateMenu extends Component
{
    public $title;
    public $link;
    public $parent_id;
    public $menus;
    public $allMenus;
    public $menuIdBeingEdited = null;
    public $isEditing = false;

    public function mount()
    {
        $this->menus = Menu::with('children')->whereNull('parent_id')->get();
        $this->allMenus = Menu::all();  // All menus for the parent dropdown
    }

    public function saveMenuItem()
    {
        $this->validate([
            'title' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
        ]);

        if ($this->isEditing && $this->menuIdBeingEdited) {
            $menu = Menu::find($this->menuIdBeingEdited);
            $menu->update([
                'title' => $this->title,
                'link' => $this->link,
                'parent_id' => $this->parent_id,
            ]);
        } else {
            Menu::create([
                'title' => $this->title,
                'link' => $this->link,
                'parent_id' => $this->parent_id,
            ]);
        }

        // Reset the form fields and state
        $this->resetForm();

        // Refresh the menu list
        $this->mount();
    }

    public function editMenuItem($id)
    {
        $menu = Menu::find($id);
        $this->menuIdBeingEdited = $menu->id;
        $this->title = $menu->title;
        $this->link = $menu->link;
        $this->parent_id = $menu->parent_id;
        $this->isEditing = true;
    }

    public function updateMenuOrder($orderedMenus)
    {
        foreach ($orderedMenus as $index => $menu) {
            Menu::where('id', $menu['id'])->update(['parent_id' => $menu['parent_id']]);
        }

        // Refresh the menu list
        $this->mount();
    }

    public function resetForm()
    {
        $this->reset(['title', 'link', 'parent_id', 'isEditing', 'menuIdBeingEdited']);
    }

    public function render()
    {
        return view('livewire.create-menu')->layout('layouts.layout');
    }
}
