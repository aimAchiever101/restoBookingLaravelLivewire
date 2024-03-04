<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reserved;
use Illiminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Reservation extends Component
{
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $rdate;
    public $gnum;
    public $timing;
    public $message;



    public function render()
    {
        return view('livewire.reservation')
        ->extends("layout.template");
    }
    public function reservation(){
        // dd($this->timing);

        $records= Reserved::whereDate("rdate",$this->rdate)
        ->whereTime("timing","=",$this->timing)
        ->sum("gnum");
        // dd($records);
        if(60-intval($records)>=$this->gnum){

        $user= new Reserved();
        $user->user_id=Auth::user()->id;
        $user->fname=$this->fname;
        $user->lname=$this->lname;
        $user->email=$this->email;
        $user->phone=$this->phone;
        $user->rdate=$this->rdate;
        $user->gnum=$this->gnum;
        $user->timing=$this->timing;
        $user->save();
        $this->message="your rervations are made.";
        $this->reset(["fname","lname","email","phone","rdate","gnum"]);
        return redirect()->intended("dashboard");
        // return redirect()->route("payment_request");


        }
        else
        {
            $remain=60-intval($records);

            $this->message="reservations are full at this hour,$remain seats are available";

            
        }
       
        
        
    
    


            
    }


    
}
