<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        "idPaciente",
        "pac_Nombre","pac_Primer_Apellido","pac_Segundo_Apellido","pac_Nombre_Completo",
        "pac_CURP","pac_f_nacimiento","pac_tipo","pac_Email","pac_Telefono","pac_Celular",
        "pac_Estado_Civil","pac_Escolaridad","pac_Pais","pac_Estado","pac_Municipio",
        "pac_Localidad","pac_dir_CP","pac_dir_calle","pac_dir_colonia","pac_dir_comentario",
        "id_titular","Parentezco",
    ];

    protected $table = "paciente";
    protected $primaryKey = 'idPaciente';

}
