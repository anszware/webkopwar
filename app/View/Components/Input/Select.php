<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $name;
    public $options;
    public $value;
    /**
     * Create a new component instance.
     */
     public function __construct($name, $label = null, $options = [], $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.select');
    }
}
