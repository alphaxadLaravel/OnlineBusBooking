<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoSeat extends Model
{
    use HasFactory;
    protected $table = "demo_seats";

    protected $fillable = [
        'seat',

    ];
}
