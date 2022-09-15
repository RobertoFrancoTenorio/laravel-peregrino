<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HitoriaClinica extends Model
{
    use HasFactory;

    protected $fillable = [
        'idHistoriaClinica', 'idPaciente', 'id_register',
        'created_at', 'updated_at',
    ];

    protected $table = "historia_clinica";
    protected $primaryKey = 'idHistoriaClinica';
}
