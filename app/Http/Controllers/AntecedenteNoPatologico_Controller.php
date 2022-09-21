<?php

namespace App\Http\Controllers;
use App\Models\AntecedenteNoPatologico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AntecedenteNoPatologico_Controller extends Controller
{
    public function store(Request $request){
        $antecedente = new AntecedenteNoPatologico();
        $antecedente->pac_mascota = $request->pac_mascota;
        $antecedente->pac_mascota_tipo = $request->pac_mascota_tipo;
        $antecedente->pac_NumeroHabitaciones = $request->pac_NumeroHabitaciones;
        $antecedente->pac_NumeroHabitantes = $request->pac_NumeroHabitantes;
        $antecedente->pac_ConsumoDeAlimentosCapeados = $request->pac_ConsumoDeAlimentosCapeados;
        $antecedente->pac_GruposAlimenticios = $request->pac_GruposAlimenticios;
        $antecedente->pac_CantidadDeComidasAlDia = $request->pac_CantidadDeComidasAlDia;
        $antecedente->pac_ConsumoDePan = $request->pac_ConsumoDePan;
        $antecedente->pac_ConsumoDeSal = $request->pac_ConsumoDeSal;
        $antecedente->pac_ConsumoDeRefresco = $request->pac_ConsumoDeRefresco;
        $antecedente->idHistoriaClinica = $request->idHistoriaClinica;
        $antecedente->observaciones = $request->observaciones;
        $antecedente->created_at = Carbon::now('America/Mexico_City');
        $antecedente->updated_at = $request->updated_at;
        $antecedente->save();
        return $antecedente;
    }

    public function update(Request $request, $id){
        if(AntecedenteNoPatologico::where('idAntecedenteNoPatologico',$id)->exists()){
            $antecedente = AntecedenteNoPatologico::find($id);

            $antecedente->pac_mascota = $request->pac_mascota;
            $antecedente->pac_mascota_tipo = $request->pac_mascota_tipo;
            $antecedente->pac_NumeroHabitaciones = $request->pac_NumeroHabitaciones;
            $antecedente->pac_NumeroHabitantes = $request->pac_NumeroHabitantes;
            $antecedente->pac_ConsumoDeAlimentosCapeados = $request->pac_ConsumoDeAlimentosCapeados;
            $antecedente->pac_GruposAlimenticios = $request->pac_GruposAlimenticios;
            $antecedente->pac_CantidadDeComidasAlDia = $request->pac_CantidadDeComidasAlDia;
            $antecedente->pac_ConsumoDePan = $request->pac_ConsumoDePan;
            $antecedente->pac_ConsumoDeSal = $request->pac_ConsumoDeSal;
            $antecedente->pac_ConsumoDeRefresco = $request->pac_ConsumoDeRefresco;
            $antecedente->observaciones = $request->observaciones;
            $antecedente->idHistoriaClinica = $request->idHistoriaClinica;
            $antecedente->created_at = $request->created_at;
            $antecedente->updated_at = Carbon::now('America/Mexico_City');
            $antecedente->save();

            return response()->json([
                "message" => "Record updated successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Article not found"
            ], 404);
        }
    }

    public function getAntecedenteNoPatologico($id){
        return DB::table('antecedente_no_patologico')->where('idHistoriaClinica', $id)->get();
    }
}
