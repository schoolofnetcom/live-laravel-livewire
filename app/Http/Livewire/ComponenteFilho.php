<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    public $user;
    protected $listeners = [
        'refreshChildren' => '$refresh',
        'refreshParent' => 'refreshParent'
    ];

    // public function refreshChildren() {

    // }

    public function refreshParent() {
        // $this->emit('refreshParent');
        $this->emitUp('refreshParent');
    }

    public function mount($user) {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
