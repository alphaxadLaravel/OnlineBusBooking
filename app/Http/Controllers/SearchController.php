<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //the search function is here
    public function searching(Request $request)
    {

        request()->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
        ]);

        if (request('from') == request('to')) {

            session()->flash('regions', '');
            return redirect('/');
        } else {

            if (request('date') < now()) {
                session()->flash('dates', '');
                return redirect('/');
            } else {
                $buses = BusRoute::where(['region_from' => request('from'), 'region_to' => request('to'), 'travel_date' => request('date')])->get();

                if ($buses->isEmpty()) {
                    session()->flash('route', '');
                    return redirect('/');
                } else {

                    request()->session()->put('searched', $buses);
                    request()->session()->put('date', request('date'));
                    request()->session()->put('from', request('from'));
                    request()->session()->put('to', request('to'));
                    return view('common.bus_listing', ['buses' => $buses]);

                }
            }
        }
    }

    public function singleBus($id)
    {
        $buses = BusRoute::where('id', '=', $id)->first();
        return view('common.single_bus', ['buses' => $buses]);
    }

    public function selectSeat($id)
    {
        $single_bus = BusRoute::where('id', '=', $id)->get();
        return view('common.select_seat', ['single_bus' => $single_bus]);
    }
}
