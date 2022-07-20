<?php

namespace App\Http\Livewire;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Company;
use Livewire\Component;

class BusRoutes extends Component
{
    public function render()
    {
            
        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();
        
        $buses = Bus::where('company_id', $company->id)->get();

        $routes_available = BusRoute::where('bus_id', $buses->id)->get();
        return view('livewire.bus-routes');
    }
}
