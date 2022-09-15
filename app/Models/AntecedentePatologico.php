<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentePatologico extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAntecedentePatologico', 'antecedente_patologico_hospitalizacion', 'antecedente_patologico_quirugicas',
        'antecedente_patologico_trumatismo', 'antecedente_patologico_trasnfusion',
        'antecedente_patologico_consumo_de_sustancia_psicoactiva', 'antecedente_patologico_alergias', 'idHistoriaClinica'
    ];

    protected $table = 'antecedente_patologico';
}
