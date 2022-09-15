<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PadecimientoHF;

class PadecimientoHF_Controller extends Controller
{
    public function store(Request $request){
        $antecedenteHF = new PadecimientoHF();
        $antecedenteHF->padecimiento_hf_parentesco = $request->padecimiento_hf_parentesco;
        $antecedenteHF->padecimiento = $request->padecimiento;
        $antecedenteHF->padecimiento_estatus = $request->padecimiento_estatus;
        $antecedenteHF->idAntecedentePatologico = $request->idAntecedentePatologico;
        $antecedenteHF->save();
        return $antecedenteHF;
    }
}
