<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'idGestacion', 'gestacion_cantidad', 'gestacion_cantidad'
        , 'gestacion_ultima_fecha', 'gestacion_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'gestacion';
}
