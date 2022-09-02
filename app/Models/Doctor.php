<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'doc_nombre', 'doc_primer_apellido', 'doc_segundo_apellido', 'doc_cedula',
        'doc_curp', 'doc_estado', 'doc_municipio', 'doc_dir_colonia', 'doc_dir_calle',
        'doc_dir_numero', 'doc_dir_cp', 'doc_celular_principal', 'doc_horario_ini',
        'doc_horario_fin', 'doc_email', 'doc_nombre_completo', 'activo', "doc_especialidades",
        'created_at', 'updated_at'
    ];

    protected $table = 'doctor';

    public function doctor(){
        return $this->hasMany('App\Models\MetodoDeContacto');
    }
}
