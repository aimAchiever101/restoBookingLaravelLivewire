<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Staff;

class NewStaff extends Component
{
    public $name;
    public $phone;
    public $aadhar;
    public $occupation;
    public $salary;
    public $sdate;

    public function render()
    {
        return view('livewire.new-staff')
        ->extends("layout.dtemplate");
    }
    public function staff(){
        $staff= new Staff();
        $staff->name=$this->name;
        $staff->phone=$this->phone;
        $staff->aadhar=$this->aadhar;
        $staff->occupation=$this->occupation;
        $staff->salary=$this->salary;
        $staff->sdate=$this->sdate;
        $staff->save();
        $this->message="details are added";
        $this->reset(["name","phone","aadhar","occupation","salary","sdate"]);
    }
}
