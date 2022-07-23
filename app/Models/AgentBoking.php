<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentBoking extends Model
{
    use HasFactory;
    protected $table = "agent_bokings";

    protected $fillable = [
        'agent_id',
        'traveller_id',
        'bus_id',
        'seat',
        'price',
        'date',
        'ticket',
        'from',
        'to',
        'status',
    ];
}
