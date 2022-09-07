<?php

namespace App\Http\Controllers;
use App\Models\MetodoDeContacto;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MetodoDeContacto_Controller extends Controller
{
    public function store(Request $request){
        $metodo = new MetodoDeContacto();
        $metodo->doc_metodo = $request->doc_metodo;
        $metodo->estatus_metodo_de_contacto = $request->estatus_metodo_de_contacto;
        $metodo->doc_telefono_aux = $request->doc_telefono_aux;
        $metodo->doc_horario = $request->doc_horario;
        $metodo->idDoctor = $request->idDoctor;
        $metodo->updated_at = $request->updated_at;
        $metodo->created_at = Carbon::now('America/Mexico_City');
        $metodo->save();
    }

    public function update(Request $request, $id){
        if(MetodoDeContacto::where('id',$id)->exists()){
            $metodo = MetodoDeContacto::find($id);

            $metodo->doc_metodo = $request->doc_metodo;
            $metodo->doc_telefono_aux = $request->doc_telefono_aux;
            $metodo->doc_horario = $request->doc_horario;
            $metodo->estatus_metodo_de_contacto = $request->estatus_metodo_de_contacto;
            $metodo->updated_at = Carbon::now('America/Mexico_City');
            $metodo->created_at = $request->created_at;

            $metodo->save();

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

    public function getMetodosDeContactoDoctor($id){
        return DB::table('metododecontacto')->where('idDoctor', $id)->where('estatus_metodo_de_contacto', 'activo')->get();
    }
}
