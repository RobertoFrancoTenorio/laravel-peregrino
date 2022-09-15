<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedenteGinecobstetrico extends Model
{
    use HasFactory;

    protected $fillable = [
        'menarquia', 'papanicolau', 'tamisDeMama', 'gestacion',
        'aborto', 'parto', 'cesarea', 'idHistoriaClinica'
    ];

    protected $table = 'antecedente_ginecobstetrico';
}
