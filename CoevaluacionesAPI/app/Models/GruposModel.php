<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposModel extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillabel = [
        'grupo', 'estado'
    ];
}
