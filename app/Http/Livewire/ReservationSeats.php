<?php

namespace App\Http\Livewire;
use App\Models\Reserved;

use Livewire\Component;

use Livewire\WithPagination;

class ReservationSeats extends Component
{
    use WithPagination;
    protected $paginationTheme='Bootstrap';

    public function render()
    {
        // at render
        $reserveds=Reserved::paginate(10);
        return view('livewire.reservation-seats',['reserveds'=>$reserveds])
        ->extends("layout.dtemplate");
    }
    public function delete($id){
        Reserved::destroy($id);
    }
}
