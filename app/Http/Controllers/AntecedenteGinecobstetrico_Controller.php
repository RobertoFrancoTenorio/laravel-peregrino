<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\AntecedenteGinecobstetrico;

class AntecedenteGinecobstetrico_Controller extends Controller
{
    public function store(Request $request){
        $antecedenteGO = new AntecedenteGinecobstetrico();
        $antecedenteGO->menarquia = $request->menarquia;
        $antecedenteGO->papanicolau = $request->papanicolau;
        $antecedenteGO->tamisDeMama = $request->tamisDeMama;
        $antecedenteGO->gestacion = $request->gestacion;
        $antecedenteGO->aborto = $request->aborto;
        $antecedenteGO->parto = $request->parto;
        $antecedenteGO->cesarea = $request->cesarea;
        $antecedenteGO->idHistoriaClinica = $request->idHistoriaClinica;
        $antecedenteGO->created_at = Carbon::now('America/Mexico_City');
        $antecedenteGO->updated_at = $request->updated_at;
        $antecedenteGO->save();
        return $antecedenteGO;
    }

    public function update(Request $request, $id){
        if(AntecedenteGinecobstetrico::where('antecedente_ginecobstetrico', $id)->exists()){
            $antecedenteGO = AntecedenteGinecobstetrico::find($id);
            $antecedenteGO->menarquia = $request->menarquia;
            $antecedenteGO->papanicolau = $request->papanicolau;
            $antecedenteGO->tamisDeMama = $request->tamisDeMama;
            $antecedenteGO->gestacion = $request->gestacion;
            $antecedenteGO->aborto = $request->aborto;
            $antecedenteGO->parto = $request->parto;
            $antecedenteGO->cesarea = $request->cesarea;
            $antecedenteGO->idHistoriaClinica = $request->idHistoriaClinica;
            $antecedenteGO->created_at = $request->created_at;
            $antecedenteGO->updated_at = Carbon::now('America/Mexico_City');
            $antecedenteGO->save();

            return response()->json([
                "message" => "AntecedenteGinecobstetrico updated successfully",
                "anetecedenteGinecobstetrico" => $antecedenteGO
            ], 202);
        }
        else{
            return response()->json([
                "messge" => "AntecedenteGinecobstetrico not found"
            ], 404);
        }
    }

    public function getAntecedenteProstatico($id){
        return DB::table('antecedente_ginecobstetrico')->where('idHistoriaClinica', $id)->get();
    }
}
