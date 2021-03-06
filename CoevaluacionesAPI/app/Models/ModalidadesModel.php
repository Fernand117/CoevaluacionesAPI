<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadesModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'modalidad';
    protected $fillabel = [
        'Modalidad', 'Clave', 'Estado'
    ];
}
