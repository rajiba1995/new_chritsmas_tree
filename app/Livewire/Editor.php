<?php
namespace App\Livewire;

use Livewire\Component;

class Editor extends Component
{
    public $content = '';

    public function updatedContent($value)
    {
        // Handle content updates
    }

    public function save()
    {
        // Save the content to the database
        dd($this->content);
    }

    public function render()
    {
        return view('livewire.editor');
    }
}

