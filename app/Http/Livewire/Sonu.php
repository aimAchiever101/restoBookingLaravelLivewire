<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sonu extends Component
{
    public function render()
    {
        return view('livewire.sonu')->extends("layout.template");
    }
}
