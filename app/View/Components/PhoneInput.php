<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class PhoneInput extends Component
{
    public $id;
    public $name;
    public $placeholder;
    public $countries;
    public $selectedCountry;
    public $value;

    public function __construct($id, $name, $placeholder = '', $countries = [], $selectedCountry = null, $value = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->countries = $countries ?: ['+91']; // Default options
        $this->selectedCountry = $selectedCountry;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.phone-input');
    }
}