<?php

namespace App\Http\Controllers;

use App\Models\AgentBoking;
use App\Models\Traveller;
use App\Models\TravellerBoking;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //show ticket here
    public function showTicket($id)
    {
        $traveller_ticket = TravellerBoking::where('traveller_id', $id)->get();

        return view('common.my_ticket', ['traveller_ticket' => $traveller_ticket]);
    }

    // view ticket
    public function viewTicket()
    {
        $validate = request()->validate([
            'phone' => 'required|numeric|digits:10'
        ]);

        $traveller_id = Traveller::where('phone', request('phone'))->first();

        $traveller_ticket = TravellerBoking::where('traveller_id', $traveller_id->id)->get();

        return view('common.my_ticket', ['traveller_ticket' => $traveller_ticket]);

    }

    // agentBooking
    public function agentTickect($id)
    {
        $agent_ticket = AgentBoking::where('agent_id', $id)->get();

        return view('common.my_ticket', ['agent_ticket' => $agent_ticket]);
    }

}
