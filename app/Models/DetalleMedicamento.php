<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleMedicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'idDetalleMedicamento', 'idAntecedentePatologico'
    ];

    protected $table = 'detalle_medicamento';
}
