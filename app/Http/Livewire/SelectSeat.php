<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectSeat extends Component
{
    public $a1;
    public $b1;
    public $b2;

    public function render()
    {
        dd($this->b1);
        return view('livewire.select-seat');
    }
}
