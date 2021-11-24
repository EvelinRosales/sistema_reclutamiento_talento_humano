<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table='datos_personales';

    protected $primaryKey='Cod_Personal';

    public $timestamps=false;

    protected $fillable = [
        'Nombres',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Genero',
        'Carnet_Identidad',
        'Num_Celular'

    ];

    protected $guarded =[

    ];
}
