<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SustanciaPsicoactiva extends Model
{
    use HasFactory;

    public $fillable = [
        'idSustanciaPsicoactiva',
        'sustancia_psicoactiva_alcohol',
        'sustancia_psicoactiva_alcohol_frecuencia',
        'sustancia_psicoactiva_alcohol_cantidad',
        'sustancia_psicoactiva_tabaco',
        'sustancia_psicoactiva_tabaco_frecuencia',
        'sustancia_psicoactiva_tabaco_cantidad',
        'sustancia_psicoactiva_otra',
        'sustancia_psicoactiva_otra_tipo',
        'sustancia_psicoactiva_otra_ultimo_consumo',
        'sustancia_psicoactiva_otra_frecuencia',
        'idAntecedentePatologico'
    ];

    public $table = 'sustancia_psicoactiva';
}
