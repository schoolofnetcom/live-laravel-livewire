<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ComponentePai extends Component
{
    public $users = [];

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function mount() {
        $this->users = User::all();
    }

    // public function refreshChildren() {
    //     $this->emit('refreshChildren');
    // }

    public function render()
    {
        return view('livewire.componente-pai');
    }
}
