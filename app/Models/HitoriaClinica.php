<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HitoriaClinica extends Model
{
    use HasFactory;

    protected $fillable = [
        'idHistoriaClinica', 'id_paciente', 'id_register',
        'created_at', 'updated_at',
    ];

    protected $table = "historiaclinica";
    protected $primaryKey = 'idHistoriaClinica';
}
