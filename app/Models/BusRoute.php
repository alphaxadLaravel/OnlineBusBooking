<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;
    protected $table = "bus_routes";

    protected $fillable = [
        'bus_id',
        'company_id',
        'travel_date',
        'price',
        'region_from',
        'region_to',
        'depart_time',
        'arrival_time',
        'depart_area',
        'arrival_area',
        'status'
    ];

    public function bus(){
        return $this->belongsTo(Bus::class);
    } 


}
