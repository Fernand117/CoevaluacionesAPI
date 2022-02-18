<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusModel extends Model
{
    use HasFactory;
    protected $table = 'campus';
    protected $fillabel = [
        'nombre', 'clave', 'estado'
    ];
}
