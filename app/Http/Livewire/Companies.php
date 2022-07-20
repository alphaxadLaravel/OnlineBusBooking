<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Companies extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $companies = Company::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.companies', ['companies' => $companies]);
    }
}
