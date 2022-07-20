<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";

    protected $fillable = [
        'sub_admin_id',
        'companyName',
        'status',
    ];
    public function bus(){
        return $this->hasMany(Bus::class);
    } 
    public function sub_admin(){
        return $this->belongsTo(SubAdmin::class);
    } 
}
