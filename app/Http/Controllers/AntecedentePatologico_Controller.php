<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\AntecedentePatologico;
use App\Models\Alergia;
use App\Models\Quirurgica;
use App\Models\Traumatismo;
use App\Models\Transfusion;
use App\Models\SustanciaPsicoactiva;
use App\Models\padecimiento;
use App\Models\DetalleMedicamento;
use App\Models\Medicamento;
use App\Models\PadecimientoHF;

class AntecedentePatologico_Controller extends Controller
{
    public function store(Request $request){
        $antecedentePA = new AntecedentePatologico();
        $antecedentePA->antecedente_patologico_hospitalizacion = $request->antecedente_patologico_hospitalizacion;
        $antecedentePA->antecedente_patologico_quirugicas = $request->antecedente_patologico_quirugicas;
        $antecedentePA->antecedente_patologico_trumatismo = $request->antecedente_patologico_trumatismo;
        $antecedentePA->antecedente_patologico_trasnfusion = $request->antecedente_patologico_trasnfusion;
        $antecedentePA->antecedente_patologico_consumo_de_sustancia_psicoactiva = $request->antecedente_patologico_consumo_de_sustancia_psicoactiva;
        $antecedentePA->antecedente_patologico_alergias = $request->antecedente_patologico_alergias;
        $antecedentePA->idHistoriaClinica = $request->idHistoriaClinica;
        $antecedentePA->created_at = Carbon::now('America/Mexico_City');
        $antecedentePA->updated_at = $request->updated_at;
        $antecedentePA->save();
        return $antecedentePA;
    }

    public function update(Request $request, $id){
        if(AntecedentePatologico::where('idAntecedenteNoPatologico', $id)->exists()){
            $antecedentePA = AntecedentePatologico::find($id);
            $antecedentePA->antecedente_patologico_hospitalizacion = $request->antecedente_patologico_hospitalizacion;
            $antecedentePA->antecedente_patologico_quirugicas = $request->antecedente_patologico_quirugicas;
            $antecedentePA->antecedente_patologico_trumatismo = $request->antecedente_patologico_trumatismo;
            $antecedentePA->antecedente_patologico_trasnfusion = $request->antecedente_patologico_trasnfusion;
            $antecedentePA->antecedente_patologico_consumo_de_sustancia_psicoactiva = $request->antecedente_patologico_consumo_de_sustancia_psicoactiva;
            $antecedentePA->antecedente_patologico_alergias = $request->antecedente_patologico_alergias;
            $antecedentePA->idHistoriaClinica = $request->idHistoriaClinica;
            $antecedentePA->created_at = $request->created_at;
            $antecedentePA->updated_at = Carbon::now('America/Mexico_City');
            $antecedentePA->save();

            return response()->json([
                'message' => 'Antecedente Patologico Actualizado correctamente',
                'antecedente Patologico' => $antecedentePA
            ], 202);
        }
        else{
            return response()->json([
                'message' => 'Antecedente Patologico not found'
            ], 404);
        }
    }

    public function getAntecedentePatologico($id){
        if(AntecedentePatologico::where('antecedente_patologico')->exists()){
            return DB::table('antecedente_ginecobstetrico')->where('idHistoriaClinica', $id)->get();
        }
        else{
            return response()->json([
                'message' => "AntecedentePatologico not found"
            ], 404);
        }
    }

    public function store_alergia(Request $request){
        $alergia = new Alergia();
        $alergia->alergia_tipo = $request->alergia_tipo;
        $alergia->idAntecedentePatologico = $request->idAntecedentePatologico;
        $alergia->created_at = Carbon::now('America/Mexico_City');
        $alergia->updated_at = $request->updated_at;
        $alergia->save();
        return $alergia;
    }

    public function update_alergia(Request $request, $id){
        if(Alergia::where('idAlergia', $id)->exists()){
            $alergia = Alergia::find($id);
            $alergia->alergia_tipo = $request->alergia_tipo;
            $alergia->idAntecedentePatologico = $request->idAntecedentePatologico;
            $alergia->created_at = $request->created_at;
            $alergia->updated_at = Carbon::now('America/Mexico_City');
            $alergia->save();
            return response()->json([
                "message" => "Alergía updated successfully"
            ]);
        }
        else{
            return response()->json([
                "message" => "Alergia not found"
            ]);
        }
    }

    public function post_Quirurgica(Request $request){
        $quirurgica = new Quirurgica();
        $quirurgica->quirurgico_causa = $request->quirurgico_causa;
        $quirurgica->quirurgico_fecha = $request->quirurgico_fecha;
        $quirurgica->quirurgico_secuela = $request->quirurgico_secuela;
        $quirurgica->idAntecedentePatologico = $request->idAntecedentePatologico;
        $quirurgica->created_at = Carbon::now('America/Mexico_City');
        $quirurgica->updated_at = $request->updated_at;
        $quirurgica->save();
        return $quirurgica;
    }

    public function update_Quirurgicas(Request $request, $id){
        if(Quirurgica::where('idQuirurgico', $id)->exists()){
            $quirurgica = Quirurgica::find($id);
            $quirurgica->quirurgica_causa = $request->quirurgica_causa;
            $quirurgica->quirurgico_fecha = $request->quirurgico_fecha;
            $quirurgica->quirurgico_secuela = $request->quirurgico_secuela;
            $quirurgica->idAntecedentePatologico = $request->idAntecedentePatologico;
            $quirurgica->created_at = $request->created_at;
            $quirurgica->quirurgica_causa = Carbon::now('America/Mexico_City');
            $quirurgica->save();
            return response()->json([
                "message" => "Quirurgica updated successfully",
                "quirurgica" => $quirurgica,
            ]);
        }
        else{
            return response()->json([
                "message" => "Quirurgica not found",
            ]);
        }
    }

    public function store_traumatismo(Request $request){
        $traumatismo = new Traumatismo();
        $traumatismo->traumatismo_tipo = $request->traumatismo_tipo;
        $traumatismo->traumatismo_causa = $request->traumatismo_causa;
        $traumatismo->traumatismo_fecha = $request->traumatismo_fecha;
        $traumatismo->traumatismo_secuela = $request->traumatismo_secuela;
        $traumatismo->idAntecedentePatologico = $request->idAntecedentePatologico;
        $traumatismo->created_at = Carbon::now('America/Mexico_City');
        $traumatismo->updated_at = $request->updated_at;
        $traumatismo->idAntecedentePatologico = $request->idAntecedentePatologico;
        $traumatismo->save();
        return $traumatismo;
    }

    public function store_transfusion(Request $request){
        $transfusion = new Transfusion();
        $transfusion->idTransfusion = $request->idTransfusion;
        $transfusion->transfusion_causa = $request->transfusion_causa;
        $transfusion->transfusion_fecha = $request->transfusion_fecha;
        $transfusion->idAntecedentePatologico = $request->idAntecedentePatologico;
        $transfusion->created_at = Carbon::now('America/Mexico_City');
        $transfusion->updated_at = $request->updated_at;
        $transfusion->save();
        return $transfusion;
    }

    public function store_sustancia_psicoactiva(Request $request){
        $sustancia = new SustanciaPsicoactiva();
        $sustancia->sustancia_psicoactiva_alcohol = $request->sustancia_psicoactiva_alcohol;
        $sustancia->sustancia_psicoactiva_alcohol_frecuencia = $request->sustancia_psicoactiva_alcohol_frecuencia;
        $sustancia->sustancia_psicoactiva_alcohol_cantidad = $request->sustancia_psicoactiva_alcohol_cantidad;
        $sustancia->sustancia_psicoactiva_tabaco = $request->sustancia_psicoactiva_tabaco;
        $sustancia->sustancia_psicoactiva_tabaco_frecuencia = $request->sustancia_psicoactiva_tabaco_frecuencia;
        $sustancia->sustancia_psicoactiva_tabaco_cantidad = $request->sustancia_psicoactiva_tabaco_cantidad;
        $sustancia->sustancia_psicoactiva_otra = $request->sustancia_psicoactiva_otra;
        $sustancia->sustancia_psicoactiva_otra_tipo = $request->sustancia_psicoactiva_otra_tipo;
        $sustancia->sustancia_psicoactiva_otra_ultimo_consumo = $request->sustancia_psicoactiva_otra_ultimo_consumo;
        $sustancia->sustancia_psicoactiva_otra_frecuencia = $request->sustancia_psicoactiva_otra_frecuencia;
        $sustancia->idAntecedentePatologico = $request->idAntecedentePatologico;
        $sustancia->created_at = Carbon::now('America/Mexico_City');
        $sustancia->updated_at = $request->updated_at;
        $sustancia->save();
        return $sustancia;
    }

    public function store_padecimiento(Request $request){
        $padecimiento = new padecimiento();
        $padecimiento->padecimiento = $request->padecimiento;
        $padecimiento->padecimiento_estatus = $request->padecimiento_estatus;
        $padecimiento->idAntecedentePatologico = $request->idAntecedentePatologico;
        $padecimiento->created_at = Carbon::now('America/Mexico_City');
        $padecimiento->updated_at = $request->updated_at;
        $padecimiento->save();
        return $padecimiento;
    }

    public function getPadecimientos($id){
        return DB::table('padecimiento')->where('idAntecedentePatologico', $id)->get();
    }

    public function getPadecimientos_HF($id){
        return DB::table('padecimiento_hf')->where('idAntecedentePatologico', $id)->get();
    }

    public function store_padecimiento_heredofamiliar(Request $request){
        $padecimiento = new PadecimientoHF();
        $padecimiento->padecimiento_hf_parentesco = $request->padecimiento_hf_parentesco;
        $padecimiento->padecimiento = $request->padecimiento;
        $padecimiento->idAntecedentePatologico = $request->idAntecedentePatologico;
        $padecimiento->created_at = Carbon::now('America/Mexico_City');
        $padecimiento->updated_at = $request->updated_at;
        $padecimiento->save();
        return $padecimiento;
    }

    public function store_DetalleMedicamento(Request $request){
        $detalle = new DetalleMedicamento();
        $detalle->idAntecedentePatologico = $request->idAntecedentePatologico;
        $detalle->created_at = Carbon::now('America/Mexico_City');
        $detalle->updated_at = $request->updated_at;
        $detalle->save();
        return $detalle;
    }

    public function store_Medicamento(Request $request){
        $medicamento = new Medicamento();
        $medicamento->medicamento_nombre = $request->medicamento_nombre;
        $medicamento->medicamento_frecuencia_consumo = $request->medicamento_frecuencia_consumo;
        $medicamento->medicamento_inicio_de_consumo = $request->medicamento_inicio_de_consumo;
        $medicamento->idDetalleMedicamento = $request->idDetalleMedicamento;
        $medicamento->created_at = Carbon::now('America/Mexico_City');
        $medicamento->updated_at = $request->updated_at;
        $medicamento->save();
        return $medicamento;
    }



}
