<?php

namespace App\Http\Controllers;
use App\Models\ActividadFisica;

use Illuminate\Http\Request;

class ActividadFisica_Controller extends Controller
{
    public function store(Request $request){
        $actividad = new ActividadFisica();
        $actividad->frecuencia = $request->frecuencia;
        $actividad->nombreActividad = $request->nombreActividad;
        $actividad->id_antecedente_no_patologico = $request->id_antecedente_no_patologico;
    }
}
