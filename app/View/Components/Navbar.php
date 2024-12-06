<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu;

class Navbar extends Component
{
    public $items;

    public function __construct()
    {
        $this->items = $this->getMenuItems();
    }

    private function getMenuItems()
    {
        // Fetch top-level menu items
        $menus = Menu::whereNull('parent_id')->with('children.allChildren')->get();

        return $this->formatMenuItems($menus);
    }

    private function formatMenuItems($menus)
    {
        $formattedItems = [];

        foreach ($menus as $menu) {
            $item = [
                'title' => $menu->title,
                'link' => $menu->link,
                'submenu' => $this->formatMenuItems($menu->children),
            ];

            if (!$item['submenu']) {
                unset($item['submenu']);
            }

            $formattedItems[] = $item;
        }

        return $formattedItems;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
