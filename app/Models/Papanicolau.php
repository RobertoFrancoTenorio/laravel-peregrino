<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papanicolau extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPapanicolau', 'papanicolau_fecha', 'papanicolau_observacion', 'idAntecedenteGinecobstetrico'
    ];

    protected $table = 'papanicolau';
}
