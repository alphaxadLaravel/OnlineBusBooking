<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //the search function is here
    public function searching()
    {

        request()->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
        ]);

        if (request('date') < now()) {
            session()->flash('dates');
            return redirect('/home');
        } else {

            $bus_list = BusRoute::where('region_from', request('from'))->where('region_to', request('to'))->where('travel_date', request('date'))->get();
            request()->session()->put('searched', $bus_list);
            $from = request('from');
            $to = request('to');
            return view('common.bus_listing',['bus_list'=>$bus_list,'from'=>$from,'to'=>$to]);
        }
    }

    public function singleBus($id){

        $single_bus = BusRoute::where('id','=', $id)->get();
        return view('common.single_bus',['single_bus'=>$single_bus]);
    }

    public function selectSeat($id){
        
        $single_bus = BusRoute::where('id','=', $id)->get();
        return view('common.select_seat',['single_bus'=>$single_bus]);
    }
}
