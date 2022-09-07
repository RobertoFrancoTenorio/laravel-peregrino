<?php

namespace App\Http\Controllers;
use App\Models\AntecedenteNoPatologico;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntecedenteNoPatologico_Controller extends Controller
{
    public function store(Request $request){
        $antecedente = new AntecedenteNoPatologico();
        $antecedente->mascota = $request->mascota;
        $antecedente->NumeroHabitaciones = $request->NumeroHabitaciones;
        $antecedente->NumeroHabitantes = $request->NumeroHabitantes;
        $antecedente->ConsumoDeAlimentosCapeados = $request->ConsumoDeAlimentosCapeados;
        $antecedente->GruposAlimenticios = $request->GruposAlimenticios;
        $antecedente->CantidadDeComidasAlDia = $request->CantidadDeComidasAlDia;
        $antecedente->ConsumoDePan = $request->ConsumoDePan;
        $antecedente->created_at = Carbon::now('America/Mexico_City');
        $antecedente->updated_at = $request->updated_at;
        $antecedente->save();
        return $antecedente;
    }

    public function update(Request $request, $id){
        if(AntecedenteNoPatologico::where('idAntecedenteNoPatologico',$id)->exists()){
            $antecedente = AntecedenteNoPatologico::find($id);

            $antecedente->mascota = $request->mascota;
            $antecedente->NumeroHabitaciones = $request->NumeroHabitaciones;
            $antecedente->NumeroHabitantes = $request->NumeroHabitantes;
            $antecedente->ConsumoDeAlimentosCapeados = $request->ConsumoDeAlimentosCapeados;
            $antecedente->GruposAlimenticios = $request->GruposAlimenticios;
            $antecedente->CantidadDeComidasAlDia = $request->CantidadDeComidasAlDia;
            $antecedente->ConsumoDePan = $request->ConsumoDePan;
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
}
