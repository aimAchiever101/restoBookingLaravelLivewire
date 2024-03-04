<?php

namespace App\Http\Livewire;
use App\Models\Data;

use Livewire\Component;
use Livewire\WithPagination;

class DailyDetails extends Component
{
    use WithPagination;
    protected $paginationTheme='Bootstrap';
    public function render()
 
    {
        $datas=Data::paginate(20);
        return view('livewire.daily-details',['datas'=>$datas])
        ->extends("layout.dtemplate");
    }
    public function delete($id){
        Data::destroy($id);

    }

}
