<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $table = "agents";

    protected $fillable = [
        'user_id',
        'bus_id',
        'fullname',
        'phone',
        'email',
        'password',
        'status'
    ];

    
    public function bus(){
        return $this->belongsTo(Bus::class);
    } 

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agent_booking(){
        return $this->hasMany(AgentBoking::class);
    } 
}
