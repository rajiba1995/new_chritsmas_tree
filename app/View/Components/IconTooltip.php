<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconTooltip extends Component
{
    public $icon;
    public $tooltip;

    public function __construct($icon, $tooltip)
    {
        $this->icon = $icon;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon-tooltip');
    }
}
