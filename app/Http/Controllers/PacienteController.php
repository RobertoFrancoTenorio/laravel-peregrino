<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function store(Request $request){
        $paciente = new Paciente;
        $paciente->idPaciente = $request->idPaciente;
        $paciente->pac_Nombres = $request->pac_Nombres;
        $paciente->pac_Primer_Apellido = $request->pac_Primer_Apellido;
        $paciente->pac_Segundo_Apellido = $request->pac_Segundo_Apellido;
        $paciente->pac_Nombre_Completo = $request->pac_Nombre_Completo;
        $paciente->pac_CURP = $request->pac_CURP;
        $paciente->pac_f_nacimiento = $request->pac_f_nacimiento;
        $paciente->pac_tipo = $request->pac_tipo;
        $paciente->pac_Email = $request->pac_Email;
        $paciente->pac_Telefono = $request->pac_Telefono;
        $paciente->pac_Celular = $request->pac_Celular;
        $paciente->pac_Estado_Civil = $request->pac_Estado_Civil;
        $paciente->pac_Escolaridad = $request->pac_Escolaridad;
        $paciente->pac_Pais = $request->pac_Pais;
        $paciente->pac_Sexo = $request->pac_Sexo;
        $paciente->pac_Estado = $request->pac_Estado;
        $paciente->pac_Municipio = $request->pac_Municipio;
        $paciente->pac_Localidad = $request->pac_Localidad;
        $paciente->pac_dir_CP = $request->pac_dir_CP;
        $paciente->pac_dir_calle = $request->pac_dir_calle;
        $paciente->pac_dir_colonia = $request->pac_dir_colonia;
        $paciente->pac_dir_comentarios = $request->pac_dir_comentarios;
        $paciente->id_titular = $request->id_titular;
        $paciente->Parentezco = $request->Parentezco;
        $paciente->user_reg = $request->user_reg;
        $paciente->activo = $request->activo;
        $paciente->empresa = $request->empresa;
        $paciente->updated_at = $request->updated_at;
        $paciente->created_at = Carbon::now();
        $paciente->save();
        return $paciente;
        //return Paciente::insert($request->all());
    }

    public function update(Request $request, $id){
        if(Paciente::where('idPaciente', $id)->exists()){
            $paciente = Paciente::find($id);
            $paciente->pac_Nombres = $request->pac_Nombres;
            $paciente->pac_Primer_Apellido = $request->pac_Primer_Apellido;
            $paciente->pac_Segundo_Apellido = $request->pac_Segundo_Apellido;
            $paciente->pac_Nombre_Completo = $request->pac_Nombre_Completo;
            $paciente->pac_CURP = $request->pac_CURP;
            $paciente->pac_f_nacimiento = $request->pac_f_nacimiento;
            $paciente->pac_tipo = $request->pac_tipo;
            $paciente->pac_Email = $request->pac_Email;
            $paciente->pac_Telefono = $request->pac_Telefono;
            $paciente->pac_Celular = $request->pac_Celular;
            $paciente->pac_Estado_Civil = $request->pac_Estado_Civil;
            $paciente->pac_Escolaridad = $request->pac_Escolaridad;
            $paciente->pac_Pais = $request->pac_Pais;
            $paciente->pac_Sexo = $request->pac_Sexo;
            $paciente->pac_Estado = $request->pac_Estado;
            $paciente->pac_Municipio = $request->pac_Municipio;
            $paciente->pac_Localidad = $request->pac_Localidad;
            $paciente->pac_dir_CP = $request->pac_dir_CP;
            $paciente->pac_dir_calle = $request->pac_dir_calle;
            $paciente->pac_dir_colonia = $request->pac_dir_colonia;
            $paciente->pac_dir_comentarios = $request->pac_dir_comentarios;
            $paciente->id_titular = $request->id_titular;
            $paciente->Parentezco = $request->Parentezco;
            $paciente->user_reg = $request->user_reg;
            $paciente->activo = $request->activo;
            $paciente->empresa = $request->empresa;
            $paciente->updated_at = $request->updated_at;
            $paciente->created_at = $request->created_at;

            $paciente->save();
            return response()->json([
                "message" => "Record updated successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Paciente not found"
            ], 404);
        }
    }

    public function index(){
        return Paciente::all();
    }

    public function getAdicionales($id){
        return DB::table('paciente')->where('id_titular', $id)->get();
    }

    public function getPacienteData($id){
        return DB::table('paciente')->where('idPaciente', $id)->get();
    }
}
