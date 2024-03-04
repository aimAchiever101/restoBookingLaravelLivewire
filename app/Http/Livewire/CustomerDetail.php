<?php

namespace App\Http\Livewire;


use App\Models\User;


use Livewire\Component;

use Livewire\WithPagination;

class CustomerDetail extends Component
{
    use WithPagination;
    protected $paginationTheme='Bootstrap';


    public function render()
    {

        // at render
        $customers=User::paginate(10);
        return view('livewire.customer_detail',['customers'=>$customers])
        ->extends("layout.dtemplate");
    }

    public function delete($id){
        User::destroy($id);
    }
    
}
