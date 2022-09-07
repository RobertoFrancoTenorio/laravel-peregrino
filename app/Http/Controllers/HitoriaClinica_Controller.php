<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\HitoriaClinica;

class HitoriaClinica_Controller extends Controller
{
    public function store(Request $request){
        $historiaClinica = new HitoriaClinica();
        $historiaClinica->idHistoriaClinica = $request->idHistoriaClinica;
        $historiaClinica->id_paciente  = $request->id_paciente;
        $historiaClinica->id_register = $request->id_register;
        $historiaClinica->created_at = Carbon::now('America/Mexico_City');
        $historiaClinica->updated_at = $request->updated_at;
        $historiaClinica->save();
        return $historiaClinica;
    }

    public function update(Request $request, $id){
        if(HitoriaClinica::where('idHistoriaClinica', $id)->exists()){
            $historiaClinica = HitoriaClinica::find($id);
            $historiaClinica->id_paciente  = $request->id_paciente;
            $historiaClinica->id_register = $request->id_register;
            $historiaClinica->created_at = $request->created_at;
            $historiaClinica->updated_at = Carbon::now('America/Mexico_City');

            $historiaClinica->save();
            return response()->json([
                "message" => "Record updated successfully",
                "paciente" => $historiaClinica
            ], 202);
        }
        else{
            return response()->json([
                'message' => "HistoriaClinica not found"
            ], 404);
        }
    }
}
