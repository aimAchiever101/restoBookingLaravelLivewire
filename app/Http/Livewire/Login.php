<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $message="";
    public function render()
    {
        
        return view('livewire.login')->extends("layout.template");
    }
    public function login(){
        // dd("hello");

        // dd($this->email);
        // dd($this->password);

        if(Auth::attempt(["email"=>$this->email,"password"=>$this->password])){
            // dd("hell0");

            if(Auth::user()->user_type=="user"){


                return redirect()->intended('dashboard');
            }
            else if(Auth::user()->user_type=="admin"){

                return redirect()->intended('admin-dashboard');
            }
            else{

                $this->message="Invalid email or password";
            }
        }
        else{
            dd("not matched");
        }
    }
}
