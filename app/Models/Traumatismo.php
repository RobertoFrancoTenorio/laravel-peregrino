<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traumatismo extends Model
{
    use HasFactory;

    protected $fillable = [
        'traumatismo_causa', 'traumatismo_fecha', 'traumatismo_secuela',
        'traumatismo_tipo', 'idAntecedentePatologico',
        'created_at', 'updated_at'
    ];

    protected $table = 'traumatismo';
}
