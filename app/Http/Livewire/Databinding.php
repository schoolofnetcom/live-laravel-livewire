<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Databinding extends Component
{
    public $name = 'Luiz';
    public $select = 'Laravel';
    public $show = false;

    public function render()
    {
        return view('livewire.databinding');
    }
}
