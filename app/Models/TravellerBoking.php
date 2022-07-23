<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravellerBoking extends Model
{
    use HasFactory;
    
    protected $table = "traveller_bokings";

    protected $fillable = [
        'seat',
        'traveller_id',
        'bus_id',
        'price',
        'date',
        'from',
        'to',
        'ticket',
        'status',
    ];
    
    public function traveller(){
        return $this->belongsTo(Traveller::class);
    } 
    public function bus(){
        return $this->belongsTo(Bus::class);
    }
}
