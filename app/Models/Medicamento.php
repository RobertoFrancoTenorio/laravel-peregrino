<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicamento_nombre',
        'medicamento_frecuencia_consumo',
        'medicamento_inicio_de_consumo',
        'idDetalleMedicamento'
    ];

    protected $table = 'medicamento';
}
