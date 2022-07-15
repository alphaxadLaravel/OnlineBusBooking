<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    //Add new Agent here
    public function addNewAgent()
    {
        request()->validate([
            'agent' => 'required|string',
            'email' => 'required|string|unique:agents',
            'password' => 'required|min:3',
            'phone' => 'required|digits:10|unique:agents,phoneNumber',
        ]);

        Agent::Create([
            'fullname' => request('agent'),
            'phoneNumber'  => request('phone'),
            'email'  => request('email'),
            'password'  => request('password'),
        ]);

        session()->flash('agent','');
        return redirect('/agents_list');
    }
    
}
