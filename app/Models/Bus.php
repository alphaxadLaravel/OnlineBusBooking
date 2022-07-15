<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = "buses";

    protected $fillable = [
        'bus',
        'region_from',
        'region_to',
        'price',
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
}
