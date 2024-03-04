<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MenuSet;

use Illuminate\Support\Facades\Auth;

// use Livewire\WithPagination;

class Menu extends Component
{
    public $search;
    protected $queryString=['search'];
    // use WithPagination;
   

    
    public function render()
    {
        $records=MenuSet::where('dish','like', '%'.$this->search.'%')->paginate(10);

        // $records=MenuSet::all();
        // dd($records);

        return view('livewire.menu',["records"=>$records])
        ->extends("layout.template");
    }
}
