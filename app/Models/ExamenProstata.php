<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenProstata extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_ultimo_Examen_Prostatico',
        'observaciones_ultimo_examen_prostatico',
        'idAntecedenteProstatico',
    ];

    protected $table = "examen_prostatico";
}
