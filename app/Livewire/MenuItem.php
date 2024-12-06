<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Menu;

class MenuItem extends Component
{
    public $menu;
    public $menus;

    public function mount(Menu $menu, $menus)
    {
        $this->menu = $menu;
        $this->menus = $menus;
    }

    public function render()
    {
        return view('livewire.menu-item');
    }

    public function editMenu($id)
    {
        $this->dispatch('editMenu', $id);
    }

    public function deleteMenu($id)
    {
        $this->dispatch('deleteMenu', $id);
    }
}
