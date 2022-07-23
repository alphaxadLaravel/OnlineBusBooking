<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravellerTransaction extends Model
{
    use HasFactory;

    protected $table = "traveller_transactions";

    protected $fillable = [
        'traveller_id',
        'traveller_booking_id',
        'payment_mean',
        'payment_number',
        'status',
    ];

}
