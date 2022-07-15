<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Agent;
use Livewire\WithPagination;


class AgentsList extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $agents_list = Agent::orderBy('id', 'DESC')->paginate(8);
        return view('livewire.agents-list',['agents_list'=>$agents_list]);
    }
}
