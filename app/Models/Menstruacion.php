<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menstruacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'idMenstruacion', 'menstruacion_frecuencia', 'menstruacion_cantidad',
        'menstruacion_duracion', 'menstruacion_presencia_De_Dolor',
        'menstruacion_fecha_Ultima', 'menstruacion_otras_secreciones', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'menstruacion';
}
