<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    use HasFactory;
    protected $table = "travellers";

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'status ',
    ];
}
