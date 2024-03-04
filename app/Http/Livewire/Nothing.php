<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Nothing extends Component
{
    public function render()
    {
        return view('livewire.nothing')->extends("layout.template");
    }
}
