<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadFisica extends Model
{
    use HasFactory;

    protected $fillable = [
        'idActividadFisica', 'frecuencia', 'nombreActividad', 'id_antecedente_no_patologico', 'estatusActividadFisica'
    ];
}
