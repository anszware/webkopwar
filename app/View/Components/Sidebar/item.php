<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     */
     public $href;
    public $icon;
    public $active;

    public function __construct($href, $icon = null)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->active = request()->is(ltrim($href, '/'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.item');
    }
}
