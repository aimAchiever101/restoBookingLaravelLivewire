<?php

namespace App\Http\Livewire;
 
use App\Models\Staff;

use Livewire\Component;
use Livewire\WithPagination;

class StaffDetails extends Component
{
    use WithPagination;
    protected $paginationTheme='Bootstrap';

    public function render()
    {
        $staffs=Staff::paginate(10);
        return view('livewire.staff-details',['staffs'=>$staffs])
        ->extends("layout.dtemplate");
    }
    public function delete($id){
        Staff::destroy($id);
    }
}
