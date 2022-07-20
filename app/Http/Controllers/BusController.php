<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Company;

class BusController extends Controller
{
    //add new Bus here
    public function addNewBus()
    {
        request()->validate([
            'bus' => 'required|string|unique:buses',
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

        // get the subadmin details
        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();

        Bus::Create([
            'company_id' =>$company->id,
            'bus'=> request('bus'),
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

    // go add routes here
    public function goAddroutes(){

        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();
        
        $buses = Bus::where('company_id', $company->id)->get();

        return view('admin.add_routes',['buses'=>$buses]);
    }

    public function newRoute(){
        request()->validate([
            'bus' => 'required|string',
            'date' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'region_from' => 'required|string',
            'region_to' => 'required|string',
            'time_left' => 'required|string',
            'pickup' => 'required|string',
            'time_arrival' => 'required|string',
            'arrival' => 'required|string',
        ]);


        $check_route = BusRoute::where('bus_id',request('bus'))->where('travel_date',request('date'))->first();
        
        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();

        if($check_route){
            session()->flash('exist');
            return redirect('/bus_route');
        }else{

            if(request('region_from') == request('region_to') ){
                session()->flash('region');
            return redirect('/bus_route');
            }else{

                if(request('date') < now()){
                    session()->flash('date');
                    return redirect('/bus_route');
                }else{
                    BusRoute::Create([
                        'company_id'=> $company->id,
                        'bus_id'=> request('bus'),
                        'travel_date'=> request('date'),
                        'price'=> request('price'),
                        'region_from'=> request('region_from'),
                        'region_to'=> request('region_to'),
                        'depart_time'=> request('time_left'),
                        'arrival_time'=> request('time_arrival'),
                        'depart_area'=> request('pickup'),
                        'arrival_area'=> request('arrival'),
                    ]);

                    session()->flash('routed');
                    return redirect('/routes_available');
                }
               
            }
            
        }


    }
}
