<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedenteProstatico extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAntecedenteProstatico', 'ExamenProstata', 'idHistoriaClinica',
        'created_at', 'updated_at'
    ];

    protected $table = 'antecente_prostatico';
}
