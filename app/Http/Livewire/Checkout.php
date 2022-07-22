<?php

namespace App\Http\Livewire;

use App\Models\Traveller;
use App\Models\TravellerBoking;
use Livewire\Component;

class Checkout extends Component
{
    public $credit;
    public $money;
    public $branch;
    public $bus;

    // Checkout Details here
    public $fullname;
    public $email;
    public $phone;

    public $seat;

    public $selected = [];
    public function checkout()
    {
        $this->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        // get the Bus details here
        $bus_id = 

        // add to traveller
       $new_traveller = Traveller::Create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => 'booked',
        ]);

        // traveller_id 	bus_id 	seat 	price 	date 	ticket 	from 	to 
        for ($i = 0; $i < count($this->selected); $i++) {
            TravellerBoking::create([
                'seat' => $this->selected[$i],
                'traveller_id' => $new_traveller->id,
                'bus_id' => 1,
                'price' => '45000',
                'date' => session()->get('date'),
                'from' => session()->get('from'),
                'to' => session()->get('to'),
                'ticket' => 'booked',
            ]);
            session()->get('from');
            // request()->session()->put('searched', $buses);
            request()->session()->put('date', request('date'));
            request()->session()->put('from', request('from'));
            request()->session()->put('to', request('to'));
        }
    }

    public function mount($buses)
    {
        $this->bus = $buses;
    }

    public function render()
    {
        if ($this->branch == "Credit Card") {
            $this->credit = true;
            $this->money = "";
        } else if ($this->branch == "Airtel Money" || $this->branch == "M-Pesa") {
            $this->money = true;
            $this->credit = "";
        }
        return view('livewire.checkout');
    }
}
