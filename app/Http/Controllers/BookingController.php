<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //public book car
    public function userData($id){

        request()->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        request()->session()->put('fullname', request('fullname'));
        request()->session()->put('email', request('email'));
        request()->session()->put('phone', request('phone'));

        $single_bus = BusRoute::where('id','=', $id)->get();

        return view('common.payment',['single_bus'=>$single_bus]);
    }
}
