<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PadecimientoHF extends Model
{
    use HasFactory;

    protected $fillable = [
        'padecimiento_hf_parentesco', 'padecimiento', 'padecimiento_estatus', 'idAntecedentePatologico'
    ];
}
