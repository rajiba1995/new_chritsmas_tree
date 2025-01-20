<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TooltipButton extends Component
{
    public string $buttonClass;
    public string $borderClass;
    public string $action;
    public int|string $itemId;
    public string $key;
    public string $icon;
    public string $tooltip;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $buttonClass,
        string $borderClass,
        string $action,
        int|string $itemId,
        string $key,
        string $icon,
        string $tooltip
    ) {
        $this->buttonClass = $buttonClass;
        $this->borderClass = $borderClass;
        $this->action = $action;
        $this->itemId = $itemId;
        $this->key = $key;
        $this->icon = $icon;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tooltip-button');
    }
}
