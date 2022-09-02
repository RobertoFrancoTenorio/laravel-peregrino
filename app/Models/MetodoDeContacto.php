<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoDeContacto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'doc_metodo', 'doc_telefono_aux', 'doc_horario', 'idDoctor', 'estatus_metodo_de_contacto'
    ];

    protected $table = 'metododecontacto';
}
