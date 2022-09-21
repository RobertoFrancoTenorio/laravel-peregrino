<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aborto extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAborto', 'aboto_cantidad', 'aborto_ultima_fecha',
        'aborto_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'aborto';
}
