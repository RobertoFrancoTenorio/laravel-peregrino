<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Androgenico extends Model
{
    use HasFactory;

    protected $fillable = [
        'androgenico_vida_sexual_activa',
        'androgenico_inicio_vida_sexual',
        'androgenico_no_comp_sexuales',
        'androgenico_metodo_anticonceptivo',
        'androgenico_tipo_relaciones',
        'androgenico_ets',
        'androgenico_metodo_anticonceptivo_hormonal',
        'androgenico_pac_metodo_anticonceptivo_hormonal_diu',
        'idAntecedentePatologico'
    ];

    protected $table = 'androgenico';
}
