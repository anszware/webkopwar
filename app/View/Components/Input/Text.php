<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
     public $label;
    public $name;
    public $value;
    public $type;
    public $placeholder;

    /**
     * Create a new component instance.
     */
     public function __construct($name, $label = null, $value = null, $type = 'text', $placeholder = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.text');
    }
}
