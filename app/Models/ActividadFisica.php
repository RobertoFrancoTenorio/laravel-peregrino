<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadFisica extends Model
{
    use HasFactory;

    protected $fillable = [
        'idActividadFisica', 'actividad_frecuencia', 'actividad_nombre', 'id_antecedente_no_patologico', 'estatusActividadFisica', 'idAntecedenteNoPatologico'
    ];

    protected $table = "actividad_fisica";

}
