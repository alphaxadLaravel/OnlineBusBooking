<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    //add new Bus here
    public function addNewBus()
    {
        request()->validate([
            'bus'=> 'required|string|unique:buses',
            'region_from' => 'required|string',
            'region_to' => 'required|string',
            'price' => 'required|string',
            'wifi' => 'required|string',
            'AC' => 'required|string',
            'food' => 'required|string',
            'essentials' => 'required|string',
            'snacks' => 'required|string',
            'safety' => 'required|string',
            'about' => 'required|string',
            'photo' => 'required|string',
        ]);

        dd('Validating...');
    }
}
