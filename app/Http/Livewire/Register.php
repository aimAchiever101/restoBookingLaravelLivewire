<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $state;
    public $email;
    public $phone;
    public $password;
    public $cpassword;
    public $message;
    public $usertype;


    public function render()
    {
        // dd("register");
       
        return view('livewire.register')->extends("layout.template");
    }
    public function register(){
        $user= new User();
        $user->name=$this->name;
        $user->state=$this->state;
        $user->email=$this->email;
        $user->phone=$this->phone;
        $user->password=Hash::make($this->password);
        $user->cpassword=$this->cpassword;
        $user->save();
        $this->message="registration is complete";
        $this->reset(["name","state","email","password"]);

        return redirect()->intended('login');
     

    }

    
}
