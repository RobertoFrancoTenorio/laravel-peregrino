<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\HitoriaClinica;
use App\Models\Androgenico;
use App\Models\AntecedenteProstatico;
use App\Models\ExamenProstata;
use App\Models\AntecedenteGinecobstetrico;

class HitoriaClinica_Controller extends Controller
{
    public function store(Request $request){
        $historiaClinica = new HitoriaClinica();
        $historiaClinica->idHistoriaClinica = $request->idHistoriaClinica;
        $historiaClinica->idPaciente  = $request->idPaciente;
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

    public function store_Androgenico(Request $request){
        $androgenico = new Androgenico();
        $androgenico->androgenico_vida_sexual_activa = $request->androgenico_vida_sexual_activa;
        $androgenico->androgenico_inicio_vida_sexual = $request->androgenico_inicio_vida_sexual;
        $androgenico->androgenico_no_comp_sexuales = $request->androgenico_no_comp_sexuales;
        $androgenico->androgenico_metodo_anticonceptivo = $request->androgenico_metodo_anticonceptivo;
        $androgenico->androgenico_tipo_relaciones = $request->androgenico_tipo_relaciones;
        $androgenico->androgenico_ets = $request->androgenico_ets;
        $androgenico->androgenico_metodo_anticonceptivo_hormonal = $request->androgenico_metodo_anticonceptivo_hormonal;
        $androgenico->androgenico_pac_metodo_anticonceptivo_hormonal_diu = $request->androgenico_pac_metodo_anticonceptivo_hormonal_diu;
        $androgenico->created_at = Carbon::now('America/Mexico_City');
        $androgenico->updated_at = $request->updated_at;
        $androgenico->idAntecedentePatologico = $request->idAntecedentePatologico;
        $androgenico->save();
        return $androgenico;
    }

    public function store_Prostatico(Request $request){
        $antecedente = new AntecedenteProstatico();
        $antecedente->ExamenProstata = $request->ExamenProstata;
        $antecedente->idHistoriaClinica = $request->idHistoriaClinica;
        $antecedente->created_at = Carbon::now('America/Mexico_City');
        $antecedente->updated_at = $request->updated_at;

        $antecedente->save();
        return $antecedente;
    }

    public function update_Prostatico(Request $request, $id){
        if(AntecedenteProstatico::where('idAntecedenteProstatico', $id)->exists()){
            $antecedente = AntecedenteProstatico::find($id);
            $antecedente->ExamenProstata = $request->ExamenProstata;
            $antecedente->idHistoriaClinica = $request->idHistoriaClinica;
            $antecedente->created_at = $request->created_at;
            $antecedente->updated_at = Carbon::now('America/Mexico_City');

            $antecedente->save();
            return response()->json([
                "message" => "Record updated successfully",
                "antecedente_prostatico" => $antecedente
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Antecedente Prostatico not found"
            ], 404);
        }
    }

    public function getAntecedenteProstatico($id){
        return DB::table('antecedente_prostatico')->where('idHistoriaClinica', $id)->get();
    }

    public function store_Antecedente_Examen_Prostata(Request $request){
        $examen = new ExamenProstata();
        $examen->idAntecedenteProstatico = $request->idAntecedenteProstatico;
        $examen->fecha_ultimo_Examen_Prostatico = $request->fecha_ultimo_Examen_Prostatico;
        $examen->observaciones_ultimo_examen_prostatico = $request->observaciones_ultimo_examen_prostatico;
        $examen->created_at = Carbon::now('America/Mexico_City');
        $examen->updated_at = $request->updated_at;
        $examen->save();
        return $examen;
    }

}
