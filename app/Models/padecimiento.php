<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class padecimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'padecimiento', 'padecimiento_estatus', 'idAntecedentePatologico'
    ];

    protected $table = 'padecimiento';
}
