<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = "buses";

    protected $fillable = [
        'company_id',
        'bus',
        'wifi',
        'AC',
        'food',
        'essentials',
        'snacks',
        'safety',
        'about',
        'photo',
        'status'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    } 

    public function busRoute(){
        return $this->hasMany(BusRoute::class);
    } 

    public function agent(){
        return $this->hasMany(Agent::class);
    } 

    public function bus(){
        return $this->hasMany(TravellerBoking::class);
    }

}
