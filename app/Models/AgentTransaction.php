<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentTransaction extends Model
{
    use HasFactory;
    protected $table = "agent_bokings";

    protected $fillable = [
        'agent_id',
        'agent_boking_id',
        'payment_mean',
        'payment_number',
        'status',
    ];


    public function agent(){
        return $this->belongsTo(Agent::class);
    } 

    public function agent_boking(){
        return $this->belongsTo(AgentBoking::class);
    } 
   
   

}
