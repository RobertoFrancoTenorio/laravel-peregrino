<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospitalizacion;
use Carbon\Carbon;

class Hospitalizacion_Controller extends Controller
{
    public function store(Request $request){
        $hospitalizacion = new Hospitalizacion();
        $hospitalizacion->hospitalizacion_causa = $request->hospitalizacion_causa;
        $hospitalizacion->hospitalizacion_fecha = $request->hospitalizacion_fecha;
        $hospitalizacion->hospitalizacion_secuela = $request->hospitalizacion_secuela;
        $hospitalizacion->idAntecedentePatologico = $request->idAntecedentePatologico;
        $hospitalizacion->created_at = Carbon::now('America/Mexico_City');
        $hospitalizacion->updated_at = $request->updated_at;
        $hospitalizacion->save();
        return $hospitalizacion;
    }

    public function update(Request $request, $id){
        if(Hospitalizacion::where('idHospitalizacion', $id)->exists()){
            $hospitalizacion = Hospitalizacion::find($id);
            $hospitalizacion->hospitalizacion_causa = $request->hospitalizacion_causa;
            $hospitalizacion->hospitalizacion_fecha = $request->hospitalizacion_fecha;
        $hospitalizacion->idAntecedentePatologico = $request->idAntecedentePatologico;
        $hospitalizacion->hospitalizacion_secuela = $request->hospitalizacion_secuela;
            $hospitalizacion->created_at = $request->created_at;
            $hospitalizacion->updated_at = Carbon::now('America/Mexico_City');
            $hospitalizacion->save();
            return response()->json([
                "message" => "Hospitalizacion updated successfully",
                "hospitalizacion" => $hospitalizacion,
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Hospitalizacion not found"
            ], 404);
        }
    }
}
