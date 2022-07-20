<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAdmin extends Model
{
    use HasFactory;
    protected $table = "sub_admins";

    protected $fillable = [
        'user_id',
        'fullname',
        'phone',
        'email',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 

}
