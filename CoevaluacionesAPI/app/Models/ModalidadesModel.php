<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadesModel extends Model
{
    protected $table="modalidades";
    protected $hidden = [
        
        'Modalidad','clave','estatus'
    ];
}
