<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cesarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCesarea', 'cesarea_cantidad', 'cesarea_ultima_fecha',
        'cesarea_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'cesarea';
}
