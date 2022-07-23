<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\Traveller;
use App\Models\TravellerBoking;
use App\Models\TravellerTransaction;
use Livewire\Component;
use Illuminate\Support\Str;

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

    public $number;

    public $seat;
    public $pin;

    public $card;

    public $selected = [];

    public function lipia()
    {


        $this->validate([
            'fullname' => 'required',
            'email' => 'required|unique:travellers',
            'phone' => 'required|unique:travellers|numeric|digits:10',
            'number' => 'required|numeric|digits:10',
        ]);

        $chek_money = Branch::where('phone', $this->number)->where('pin', $this->pin)->where('branch', $this->branch)->first();

        if ($chek_money) {
            $total_cost = count($this->selected) * $this->bus->price ;
            dd($total_cost);
        } else {
            session()->flash('account');
        }

        $new_traveller = Traveller::Create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'status' => 'booked..',
        ]);


        // traveller_id 	bus_id 	seat 	price 	date 	ticket 	from 	to 	status
        for ($i = 0; $i < count($this->selected); $i++) {

            $tiketi = Str::random(5);

            $booking = TravellerBoking::create([
                'seat' => $this->selected[$i],
                'status' => 'booked',
                'traveller_id' => $new_traveller->id,
                'bus_id' => $this->bus->bus_id,
                'price' => $this->bus->price,
                'date' => $this->bus->travel_date,
                'ticket' => 'TKT-' . $tiketi,
                'from' => $this->bus->region_from,
                'to' => $this->bus->region_to,
            ]);
        }



        // traveller_id 	traveller_booking_id 	payment_mean 	payment_number
        TravellerTransaction::create([
            'traveller_id' => $new_traveller->id,
            'traveller_booking_id' => $booking->id,
            'payment_mean' => $this->branch,
            'payment_number' => $this->number,
        ]);
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
