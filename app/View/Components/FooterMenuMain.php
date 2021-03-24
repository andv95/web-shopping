<?php

namespace App\View\Components;

use App\Models\Admin\MenuItem;
use Illuminate\View\Component;

class FooterMenuMain extends Component
{
    public $menus;
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
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
        return view('components.footer-menu-main');
    }
}
