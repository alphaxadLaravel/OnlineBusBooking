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
}
