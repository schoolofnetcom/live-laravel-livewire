<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Hooks extends Component
{
    public $name;
    public $lastname;
    public $hydrate;
    public $updated;
    public $updating;
    public $newName;

    public function mount() {
        $this->name = "Thiago";
        $this->lastname = 'Valls';
    }

    // executado sempre que uma propriedade é alterada
    public function hydrate($field) {
        // dd($field);
        $this->hydrate = 'HYDRATE executado as ' . now();
    }

    // executado sempre que uma propriedade é alterada via wire:model
    public function updated($field) {
        // dd($field);
        $this->updated = 'UPDATED executado as ' . now();
    }

    // executado sempre que uma propriedade é alterada via wire:model
    public function updating($field) {
        // dd($field);
        $this->updating = 'UPDATING executado as ' . now();
        // sleep(2);
    }

    public function updatedName() {
        $this->newName = 'APENAS NAME executado as ' . now();
    }

    public function render()
    {
        return view('livewire.hooks');
    }
}
