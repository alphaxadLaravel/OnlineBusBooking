<?php

namespace App\Http\Livewire;

use App\Models\Demo;
use App\Models\DemoSeat;
use Livewire\Component;

class Demos extends Component
{
    

    public $selected = [];

    public function select()
    {
        
        for ($i = 0; $i < count($this->selected); $i++) {
            Demo::create([
                'demo' => $this->selected[$i],
                'status'=>'booked'
            ]);
        }

        return "success..";
        
    }
    
    public function render()
    {
        $seat = Demo::all()->pluck('demo');
        $kiti = DemoSeat::all();
 
        return view('livewire.demos',['seat'=>$seat,'kiti'=>$kiti]);
    }
}
