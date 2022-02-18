<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradosModel extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $fillabel = [
        'grado', 'estado'
    ];
}
