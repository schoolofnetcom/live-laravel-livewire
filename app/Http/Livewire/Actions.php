<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Actions extends Component
{
    public $boolean = false;
    public $users = [];

    public function changeStatus() {
        $this->boolean = true;
    }

    public function listUsers() {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
