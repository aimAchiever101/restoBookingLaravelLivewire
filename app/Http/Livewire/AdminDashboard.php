<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Data;



use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AdminDashboard extends Component
{
    public $fname;
    public $email;
    public $user;

    // staff details
    public $cdate;
    public $present;
    public $absent;
    public $sale;
  



    public function render()
    {
          return view('livewire.admin-dashboard')
            ->extends("layout.dtemplate");
    
    }
    public function mount(){
        $this->name=Auth::user()->name;
        $this->email=Auth::user()->email;
     

    }
    public function user_info(){
        $user->name=$this->name;
        $user->email=$this->email;
        $user->save();

    }
    public function staff_info(){
        $data= new Data();
        $data->cdate=$this->cdate;
        $data->present=$this->present;
        $data->absent=$this->absent;
        $data->sale=$this->sale;
        $data->save();
        $this->message="todays data has been added succesfully.";
        $this->reset(["cdate","present","absent","sale"]);
    }
}
