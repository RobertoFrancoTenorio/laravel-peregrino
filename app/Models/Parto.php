<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parto extends Model
{
    use HasFactory;

    protected $fillable = [
        'idParto', 'parto_ultima_fecha', 'parto_cantidad',
        'parto_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'parto';
}
