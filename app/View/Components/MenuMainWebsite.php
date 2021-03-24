<?php

namespace App\View\Components;

use App\Models\Admin\Menu;
use App\Models\Admin\MenuItem;
use Illuminate\View\Component;

class MenuMainWebsite extends Component
{
    public $menus;
    public $slug;

    /**
     * Create a new component instance.
     *
     * @param $slug
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
        $this->menus = MenuItem::getAllBySlugList($slug);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-main-website');
    }
}
