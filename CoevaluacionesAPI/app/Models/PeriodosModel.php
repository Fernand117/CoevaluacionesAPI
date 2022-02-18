<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodosModel extends Model
{
    use HasFactory;
    protected $table= 'periodos';
    protected $fillabel= [
        'periodo', 'estado'
    ]; 
}
