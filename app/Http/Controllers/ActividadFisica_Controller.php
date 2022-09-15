<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\ActividadFisica;

class ActividadFisica_Controller extends Controller
{
    public function store(Request $request){
        $actividad = new ActividadFisica();
        $actividad->actividad_frecuencia = $request->actividad_frecuencia;
        $actividad->actividad_nombre = $request->actividad_nombre;
        $actividad->idAntecedenteNoPatologico = $request->idAntecedenteNoPatologico;
        $actividad->estatusActividadFisica = $request->estatusActividadFisica;
        $actividad->created_at = Carbon::now('America/Mexico_City');
        $actividad->updated_at = $request->updated_at;
        $actividad->save();
        return $actividad;
    }

    public function update(Request $request, $id){
        if(ActividadFisica::where('idActividadFisica', $id)->exists()){
            $actividad = ActividadFisica::find($id);
            $actividad->actividad_frecuencia = $request->actividad_frecuencia;
            $actividad->estatusActividadFisica = $request->estatusActividadFisica;
            $actividad->idAntecedenteNoPatologico = $request->idAntecedenteNoPatologico;
            $actividad->actividad_nombre = $request->actividad_nombre;
            $actividad->created_at = Carbon::now('America/Mexico_City');
            $actividad->updated_at = $request->updated_at;

            $actividad->save();
            return response ()->json([
                "message" => "Actividad updated successfully",
                "actividad" => $actividad
            ], 202);
        }
        else{
            return response()->json([
                "message" => "Actividad not found"
            ], 404);
        }
    }

    public function getActividad($id){
        return DB::table('actividad_fisica')->where('idAntecedenteNoPatologico', $id)->get();
    }
}
