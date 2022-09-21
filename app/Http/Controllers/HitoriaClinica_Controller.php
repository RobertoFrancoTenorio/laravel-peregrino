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
use App\Models\Menstruacion;
use App\Models\Gestacion;
use App\Models\Parto;
use App\Models\Aborto;
use App\Models\Cesarea;
use App\Models\TamisDeMama;
use App\Models\Papanicolau;

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


    public function postOrEdit_Androgenico(Request $request, $id){
        if(isset($request->idAntecedenteProstatico)){
            return response()->json([
                "message" => "Androgenico no tiene id",
            ], 202);
        }
        else{
            return response()->json([
                "message" => "Androgenico si tiene id"
            ], 404);
        }
        /* if(AntecedenteProstatico::where('idAntecedenteProstatico', $id)->exists()){
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
            $antecedente = self::store_Androgenico($request);
            return response()->json([
                'message' => "Antecedente Prostatico guardado",
                'antecedente' => $antecedente
            ], 202);
        } */
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
        $androgenico->idHistoriaClinica = $request->idHistoriaClinica;
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

    public function store_Antecedente_Ginecobstetrico(Request $request){
        $antecedente = new AntecedenteGinecobstetrico();
        $antecedente->menarquia = $request->menarquia;
        $antecedente->papanicolau = $request->papanicolau;
        $antecedente->tamisDeMama = $request->tamisDeMama;
        $antecedente->gestacion = $request->gestacion;
        $antecedente->aborto = $request->aborto;
        $antecedente->parto = $request->parto;
        $antecedente->cesarea = $request->cesarea;
        $antecedente->idHistoriaClinica = $request->idHistoriaClinica;
        $antecedente->created_at = Carbon::now('America/Mexico_City');
        $antecedente->updated_at = $request->updated_at;
        $antecedente->save();
        return $antecedente;
    }

    public function store_Menstruacion(Request $request){
        $menstruacion = new Menstruacion();
        $menstruacion->menstruacion_frecuencia = $request->menstruacion_frecuencia;
        $menstruacion->menstruacion_cantidad = $request->menstruacion_cantidad;
        $menstruacion->menstruacion_duracion = $request->menstruacion_duracion;
        $menstruacion->menstruacion_presencia_De_Dolor = $request->menstruacion_presencia_De_Dolor;
        $menstruacion->menstruacion_fecha_Ultima = $request->menstruacion_fecha_Ultima;
        $menstruacion->menstruacion_otras_secreciones = $request->menstruacion_otras_secreciones;
        $menstruacion->created_at = Carbon::now('America/Mexico_City');
        $menstruacion->updated_at = $request->updated_at;
        $menstruacion->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $menstruacion->save();
        return $menstruacion;
    }

    public function store_Gestacion(Request $request){
        $gestacion = new Gestacion();
        $gestacion->gestacion_cantidad = $request->gestacion_cantidad;
        $gestacion->gestacion_ultima_fecha = $request->gestacion_ultima_fecha;
        $gestacion->gestacion_observacion = $request->gestacion_observacion;
        $gestacion->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $gestacion->created_at = Carbon::now('America/Mexico_City');
        $gestacion->updated_at = $request->updated_at;
        $gestacion->save();
        return $gestacion;
    }

    public function store_Parto(Request $request){
        $parto = new Parto();
        $parto->parto_cantidad = $request->parto_cantidad;
        $parto->parto_ultima_fecha = $request->parto_ultima_fecha;
        $parto->parto_observacion = $request->parto_observacion;
        $parto->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $parto->created_at = Carbon::now('America/Mexico_City');
        $parto->updated_at = $request->updated_at;
        $parto->save();
        return $parto;
    }

    public function store_Aborto(Request $request){
        $aborto = new Aborto();
        $aborto->aboto_cantidad = $request->aboto_cantidad;
        $aborto->aborto_ultima_fecha = $request->aborto_ultima_fecha;
        $aborto->aborto_observacion = $request->aborto_observacion;
        $aborto->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $aborto->created_at = Carbon::now('America/Mexico_City');
        $aborto->updated_at = $request->updated_at;
        $aborto->save();
        return $aborto;
    }

    public function store_Cesarea(Request $request){
        $cesarea = new Cesarea();
        $cesarea->cesarea_cantidad = $request->cesarea_cantidad;
        $cesarea->cesarea_ultima_fecha = $request->cesarea_ultima_fecha;
        $cesarea->cesarea_observacion = $request->cesarea_observacion;
        $cesarea->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $cesarea->created_at = Carbon::now('America/Mexico_City');
        $cesarea->updated_at = $request->updated_at;
        $cesarea->save();
        return $cesarea;
    }

    public function store_TamisDeMama(Request $request){
        $tamis = new TamisDeMama();
        $tamis->tamis_fecha = $request->tamis_fecha;
        $tamis->tamis_observacion = $request->tamis_observacion;
        $tamis->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $tamis->created_at = Carbon::now('America/Mexico_City');
        $tamis->updated_at = $request->updated_at;
        $tamis->save();
        return $tamis;
    }

    public function store_Papanicolau(Request $request){
        $Papanicolau = new Papanicolau();
        $Papanicolau->papanicolau_fecha = $request->papanicolau_fecha;
        $Papanicolau->papanicolau_observacion = $request->papanicolau_observacion;
        $Papanicolau->idAntecedenteGinecobstetrico = $request->idAntecedenteGinecobstetrico;
        $Papanicolau->created_at = Carbon::now('America/Mexico_City');
        $Papanicolau->updated_at = $request->updated_at;
        $Papanicolau->save();
        return $Papanicolau;
    }

    public function getHistoriaClinica($id){
        return DB::table('historia_clinica')->where('idPaciente', $id)->get();
    }

    public function getHistoriaClinica_Antecedente_Patologico($id){
        return DB::table('antecedente_patologico')->where('idHistoriaClinica', $id)->get();
    }

    public function getAntecedenteProstatico($id){
        return DB::table('antecedente_prostatico')->where('idHistoriaClinica', $id)->get();
    }

}
