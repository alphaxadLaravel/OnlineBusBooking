<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\AgentBoking;
use App\Models\AgentTransaction;
use App\Models\Bank;
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
    public $dated;

    public function lipia()
    {
        $this->validate([
            'fullname' => 'required',
            'email' => 'required|unique:travellers',
            'phone' => 'required|unique:travellers|numeric|digits:10',
            'number' => 'required|numeric|digits:10',
        ]);

        $chek_money = Branch::where('phone', $this->number)->where('pin', $this->pin)->where('branch', $this->branch)->first();
       
        if(session()->get('user')['role'] == 'Agent'){
            if ($chek_money) {

                $total_cost = count($this->selected) * $this->bus->price;
    
                if ($chek_money->amount >= $total_cost) {
    
                    $new_traveller = Traveller::Create([
                        'fullname' => $this->fullname,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'status' => 'booked..',
                    ]);
    
    
                    for ($i = 0; $i < count($this->selected); $i++) {
    
                        $tiketi = Str::random(5);

                        $agent = session()->get('user')['id'];
                        $agent_id = Agent::where('user_id', $agent)->first();


                        // agent_id 	traveller_id 	bus_id 	seat 	price 	date 	ticket 	 	payment_number 	from 	to 	status 	
    

    
                        $booking = AgentBoking::create([
                            'seat' => $this->selected[$i],
                            'status' => 'booked',
                            'agent_id' => $agent_id->id,
                            'traveller_id' => $new_traveller->id,
                            'bus_id' => $this->bus->bus_id,
                            'price' => $this->bus->price,
                            'date' => $this->bus->travel_date,
                            'payment_mean' => $this->branch,
                            'payment_number' => $this->number,
                            'ticket' => 'TKT-' . $tiketi,
                            'from' => $this->bus->region_from,
                            'to' => $this->bus->region_to,
                        ]);
                    }
    
                    $new_amount = $chek_money->amount - $total_cost;
    
                    Branch::where('phone', $this->number)->update([
                        'amount' => $new_amount
                    ]);
    
                    $bank = Bank::where('card', '10001000')->first();
    
                    $profit = $bank->amount + $total_cost;
    
                    Bank::where('card', '10001000')->update([
                        'amount' => $profit
                    ]);

                } else {

                }
    
                session()->flash('booked', '');
                return  redirect('/agent/' . $agent_id->id);
            } else {
                session()->flash('account');
            }
        }else{
            if ($chek_money) {

                $total_cost = count($this->selected) * $this->bus->price;
    
                if ($chek_money->amount >= $total_cost) {
    
                    $new_traveller = Traveller::Create([
                        'fullname' => $this->fullname,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'status' => 'booked..',
                    ]);
    
    
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
    
                    TravellerTransaction::create([
                        'traveller_id' => $new_traveller->id,
                        'traveller_booking_id' => $booking->id,
                        'payment_mean' => $this->branch,
                        'payment_number' => $this->number,
                    ]);
    
                    $new_amount = $chek_money->amount - $total_cost;
    
                    Branch::where('phone', $this->number)->update([
                        'amount' => $new_amount
                    ]);
    
                    $bank = Bank::where('card', '10001000')->first();
    
                    $profit = $bank->amount + $total_cost;
    
                    Bank::where('card', '10001000')->update([
                        'amount' => $profit
                    ]);
                } else {
                }
    
                session()->flash('booked', '');
                return  redirect('/ticketi/' . $new_traveller->id);
            } else {
                session()->flash('account');
            }
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
