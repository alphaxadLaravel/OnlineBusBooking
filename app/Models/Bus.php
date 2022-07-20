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

}
