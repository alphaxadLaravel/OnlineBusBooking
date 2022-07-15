<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bus;
use Livewire\WithPagination;

class BusesList extends Component
{    
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $buses_list = Bus::orderBy('id', 'DESC')->paginate(8);
        return view('livewire.buses-list',['buses_list'=>$buses_list]);
    }
}
