<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAlergia', 'alergia_tipo', 'idAntecedentePatologico',
    ];

    protected $table = 'alergia';
}
