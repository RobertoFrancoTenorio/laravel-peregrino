<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamisDeMama extends Model
{
    use HasFactory;

    protected $fillable = [
        'idTamisDeMama', 'tamis_fecha', 'tamis_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'tamis_de_mama';
}
