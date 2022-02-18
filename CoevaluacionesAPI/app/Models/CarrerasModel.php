<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrerasModel extends Model
{
    use HasFactory;
    protected $table='carreras';
    protected $fillabe=[
        'nombre','clave','estado'
    ];
}
