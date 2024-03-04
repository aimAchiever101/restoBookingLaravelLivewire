<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Reserved;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads;
    public $name;
    public $state;
    public $email;
    public $user;

    public $phone;
    public $rdate;
    public $gnum;
    public $timing;
    

    public function mount(){
        $this->name=Auth::user()->name;
        $this->state=Auth::user()->state;
        $this->email=Auth::user()->email;
        $this->phone=Auth::user()->phone;
        $this->rdate=Auth::user()->rdate;
        $this->gnum=Auth::user()->gnum;
        $this->timing=Auth::user()->timing;
    }
    

    public function render()
    {
        
        return view('livewire.dashboard')
        ->extends("layout.template");
    }
    public function user_info(){
        $user->name=$this->name;
        $user->state=$this->state;
        $user->email=$this->email;
        $user->save();

    }
    // public function reservation_info(){
    //     $user->phone=$this->phone;
    //     $user->rdate=$this->rdate;
    //     $user->gnum=$this->gnum;
    //     $user->phone=$timing->timing;
    //     $user->save();


    // }
    

}
