<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table="person";
    protected $fillable = [
        'paterno','materno','nombre','users_id'
    ];

    public function usuarios(){
        return $this->belongsTo(User::class,'users_id','id');
    }
}
