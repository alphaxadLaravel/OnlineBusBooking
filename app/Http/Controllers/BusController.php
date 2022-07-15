<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    //add new Bus here
    public function addNewBus()
    {
        request()->validate([
            'bus' => 'required|string|unique:buses',
            'region_from' => 'required|string',
            'region_to' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'wifi' => 'required|string',
            'AC' => 'required|string',
            'food' => 'required|string',
            'essentials' => 'required|string',
            'snacks' => 'required|string',
            'safety' => 'required|string',
            'about' => 'required|string',
            'photo' => 'required|mimes:jpg,png,jpeg,webp|max:5048',
        ]);

        // Chukua picha, ibadili jina na ipeleke katika public directory
        
        $photoName = time().'.'.request('photo')->extension();  

        request('photo')->move(public_path('buses'), $photoName);

        $path = 'buses/'.$photoName;

        Bus::Create([
            'bus'=> request('bus'),
            'region_from'=> request('region_from'),
            'region_to'=> request('region_to'),
            'price'=> request('price'),
            'wifi'=> request('wifi'),
            'AC'=> request('AC'),
            'food'=> request('food'),
            'essentials'=> request('essentials'),
            'snacks'=> request('snacks'),
            'safety'=> request('safety'),
            'about'=> request('about'),
            'photo'=> $path,
        ]);

        session()->flash('bus','');
        return redirect('/bus_list');
    }
}
