<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Bus;
use App\Models\Company;
use App\Models\User;

class AgentController extends Controller
{
    //Add new Agent here
    public function addNewAgent()
    {
        // user_id 	bus_id 	fullname 	phone 	email 	status
        request()->validate([
            'bus_name' => 'required|string',
            'fullname' => 'required|string',
            'email' => 'required|string|unique:agents|unique:users',
            'phone' => 'required|digits:10|unique:agents',
        ]);

        $new_user = User::Create([
            'email' => request('email'),
            'password' => "1234",
            'role' => "Agent",
        ]);


        Agent::Create([
            'user_id' => $new_user->id,
            'bus_id' =>request('bus_name'),
            'fullname' => request('fullname'),
            'phone'  => request('phone'),
            'email'  => request('email'),
        ]);

        session()->flash('agent','');
        return redirect('/agents_list');
    }

    public function goAdAgent(){
        
        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();
        
        $buses = Bus::where('company_id', $company->id)->get();

        return view('admin.add_agent',['buses'=>$buses]);
    }
    
}
