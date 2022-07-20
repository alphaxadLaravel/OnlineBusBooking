<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $credit;
    public $money;
    public $branch;

    public $seat;
    public $A1;

    public function checkout(){
        // for ($i=0; $i < count($this->selected); $i--) { 
        //     dd($this->selected[$i]);
        // }

        foreach ($this->selected as $key => $value) {
            dd($value);
        }
    }

    public function render()
    {
        if($this->branch == "Credit Card"){
            $this->credit = true;
            $this->money = "";
        }else if($this->branch =="Airtel Money" || $this->branch == "M-Pesa"){
            $this->money = true;
            $this->credit = "";
        }
        return view('livewire.checkout');
    }
}
