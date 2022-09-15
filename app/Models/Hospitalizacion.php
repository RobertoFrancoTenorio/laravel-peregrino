<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'idHospitalizacion',
        'hospitalizacion_causa', 'hospitalizacion_fecha',
        'hospitalizacion_secuela', 'idAntecedentePatologico'
    ];

    protected $table = 'hospitalizacion';
}
