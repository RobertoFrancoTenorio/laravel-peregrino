<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DoctorController extends Controller
{
    public function index(){
        return Doctor::all();
    }

    public function store(Request $request){
        $doctor = new Doctor();
        $doctor->id = $request->id;
        $doctor->doc_nombre = $request->doc_nombre;
        $doctor->doc_primer_apellido = $request->doc_primer_apellido;
        $doctor->doc_segundo_apellido = $request->doc_segundo_apellido;
        $doctor->doc_cedula = $request->doc_cedula;
        $doctor->doc_curp = $request->doc_curp;
        $doctor->doc_estado = $request->doc_estado;
        $doctor->doc_municipio = $request->doc_municipio;
        $doctor->doc_dir_colonia = $request->doc_dir_colonia;
        $doctor->doc_dir_calle = $request->doc_dir_calle;
        $doctor->doc_dir_numero = $request->doc_dir_numero;
        $doctor->doc_dir_cp = $request->doc_dir_cp;
        $doctor->doc_celular_principal = $request->doc_celular_principal;
        $doctor->doc_horario_ini = $request->doc_horario_ini;
        $doctor->doc_horario_fin = $request->doc_horario_fin;
        $doctor->doc_email = $request->doc_email;
        $doctor->doc_nombre_completo = $request->doc_nombre_completo;
        $doctor->activo = $request->activo;
        $doctor->doc_especialidades = $request->doc_especialidades;
        $doctor->doc_especialidades = $request->doc_especialidades;
        $doctor->created_at = Carbon::now();
        $doctor->updated_at = $request->updated_at;
        $doctor->save();
        return $doctor;
    }

    public function show($id){
        return Doctor::show($id);
    }

    public function update(Request $request, $id){
        if(Doctor::where('id', $id)->exists()){
            $doctor = Doctor::find($id);
            $doctor->doc_nombre = $request->doc_nombre;
            $doctor->doc_primer_apellido = $request->doc_primer_apellido;
            $doctor->doc_segundo_apellido = $request->doc_segundo_apellido;
            $doctor->doc_cedula = $request->doc_cedula;
            $doctor->doc_curp = $request->doc_curp;
            $doctor->doc_estado = $request->doc_estado;
            $doctor->doc_municipio = $request->doc_municipio;
            $doctor->doc_dir_colonia = $request->doc_dir_colonia;
            $doctor->doc_dir_calle = $request->doc_dir_calle;
            $doctor->doc_dir_numero = $request->doc_dir_numero;
            $doctor->doc_dir_cp = $request->doc_dir_cp;
            $doctor->doc_celular_principal = $request->doc_celular_principal;
            $doctor->doc_horario_ini = $request->doc_horario_ini;
            $doctor->doc_horario_fin = $request->doc_horario_fin;
            $doctor->doc_email = $request->doc_email;
            $doctor->doc_nombre_completo = $request->doc_nombre_completo;
            $doctor->activo = $request->activo;
            $doctor->doc_especialidades = $request->doc_especialidades;
            $doctor->doc_especialidades = $request->doc_especialidades;
            $doctor->created_at = $request->created_at;
            $doctor->updated_at = Carbon::now();
            $doctor->save();
            return response()->json([
                "message" => "Doctor updated successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Doctor not found"
            ], 404);
        }
    }

    public function getDocByCURP($curp){
        return DB::table('doctor')->where('doc_curp', $curp)->get();
    }

    public function validaCurpDoctor($curp){
        if (DB::table('doctor')->where('doc_curp', $curp)->exists()) {
            return true;
        }
        else{
            return false;
        }
    }
}
