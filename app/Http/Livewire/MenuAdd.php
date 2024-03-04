<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MenuSet;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Auth;




class MenuAdd extends Component
{
   
    public $dish;
    public $price;
    use WithFileUploads;
    public $image;
    public $message;
    public function render()
    {
        return view('livewire.menu_add')
        ->extends("layout.dtemplate");
    }
    public function menu_add(){
        $user= new MenuSet();
        $this->validate(['image'=>'image|max:1024']);

        $name= $this->image->StorePublicly("menu","public");
        $user->image=$name;
        $user_id=Auth::user()->id;
        $user->dish=$this->dish;
        $user->price=$this->price;
        $user->save();
        $this->message="menu is added";
        $this->reset(["image","dish","price"]);
        

    }
}
