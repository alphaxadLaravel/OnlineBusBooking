<?php

namespace App\Http\Livewire;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class BusRoutes extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $subadmin = session()->get('subadmin')['id'];

        $company = Company::where('sub_admin_id', $subadmin)->first();

        $routes_available = BusRoute::where('company_id', $company->id)->orderBy('id', 'DESC')->paginate(5);
        return view('livewire.bus-routes', ['routes_available' => $routes_available]);
    }
}
