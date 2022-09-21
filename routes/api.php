<?php

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Doctor;
use App\Http\Resources\DoctorResource;

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MetodoDeContacto_Controller;
use App\Http\Controllers\HitoriaClinica_Controller;
use App\Http\Controllers\AntecedenteNoPatologico_Controller;
use App\Http\Controllers\AntecedentePatologico_Controller;
use App\Http\Controllers\AntecedenteGinecobstetrico_Controller;
use App\Http\Controllers\ActividadFisica_Controller;
use App\Http\Controllers\Hospitalizacion_Controller;

#region Paciente
    Route::post('/guardaPaciente', [PacienteController::class, 'store']);

    Route::get('/pacientes', [PacienteController::class, 'index']);

    Route::put('/updatePaciente/{id}', [PacienteController::class, 'update']);

    Route::get('/getAdicionales/{id}', [PacienteController::class, 'getAdicionales']);

    Route::get('/getPacienteData/{id}', [PacienteController::class, 'getPacienteData']);

#endregion

#region Doctor
    Route::get('/doctores', [DoctorController::class, 'index']);

    Route::post('/guardaDoctor', [DoctorController::class, 'store']);

    Route::put('/updateDoctor/{id}', [DoctorController::class, 'update']);

    Route::get('/getDoctor/{id}', function($id){
        return new DoctorResource(Doctor::findOrFail($id));
    });
#endregion

#region Metodos de Contacto
    Route::post('/guardaMetodoDeContacto', [MetodoDeContacto_Controller::class, 'store']);

    Route::get('/getMetodosDeContactoDoctor/{id}', [MetodoDeContacto_Controller::class, 'getMetodosDeContactoDoctor']);

    Route::put('/updateMetodoDeContacto/{id}', [MetodoDeContacto_Controller::class, 'update']);

    Route::delete('/deleteMetodoDeContacto/{id}', [MetodoDeContacto_Controller::class,'delete']);
#endregion


#region Historia Clinica
    Route::post('/postHistoriaClinica', [HitoriaClinica_Controller::class, 'store']);

    Route::post('/postAndrogenicos', [HitoriaClinica_Controller::class, 'store_Androgenico']);

    Route::post('/postAntecedenteProstatico', [HitoriaClinica_Controller::class, 'store_Prostatico']);

    Route::post('/postExamenProstata', [HitoriaClinica_Controller::class, 'store_Antecedente_Examen_Prostata']);

    Route::post('/postAntecedenteGinecobstetrico', [HitoriaClinica_Controller::class, 'store_Antecedente_Ginecobstetrico']);

    Route::post('/postAntecedenteGinecobstetricoMenstruacion', [HitoriaClinica_Controller::class, 'store_Menstruacion']);

    Route::post('/postAntecedenteGinecobstetricoGestacion', [HitoriaClinica_Controller::class, 'store_Gestacion']);

    Route::post('/postAntecedenteGinecobstetricoParto', [HitoriaClinica_Controller::class, 'store_Parto']);

    Route::post('/postAntecedenteGinecobstetricoAborto', [HitoriaClinica_Controller::class, 'store_Aborto']);

    Route::post('/postAntecedenteGinecobstetricoCesarea', [HitoriaClinica_Controller::class, 'store_Cesarea']);

    Route::post('/postAntecedenteGinecobstetricoTamisDeMama', [HitoriaClinica_Controller::class, 'store_TamisDeMama']);

    Route::post('/postAntecedenteGinecobstetricoPapanicolau', [HitoriaClinica_Controller::class, 'store_Papanicolau']);

    Route::get('/getHistoriaClinica/{id}', [HitoriaClinica_Controller::class, 'getHistoriaClinica']);

    Route::get('/getHistoriaClinica_Antecedente_Patologico/{id}', [HitoriaClinica_Controller::class, 'getHistoriaClinica_Antecedente_Patologico']);


#endregion

#region Patologico
    Route::post('/postPatologico', [AntecedentePatologico_Controller::class, 'store']);

    Route::post('/postAlergia', [AntecedentePatologico_Controller::class, 'store_alergia']);

    Route::post('/postQuirurgica', [AntecedentePatologico_Controller::class, 'post_Quirurgica']);

    Route::post('/postTraumatismo', [AntecedentePatologico_Controller::class, 'store_traumatismo']);

    Route::post('/postTransfusion', [AntecedentePatologico_Controller::class, 'store_transfusion']);

    Route::post('/postSustanciaPsicoactiva', [AntecedentePatologico_Controller::class, 'store_sustancia_psicoactiva']);

    Route::post('/postPadecimiento', [AntecedentePatologico_Controller::class, 'store_padecimiento']);

    Route::post('/postPadecimientoHeredoFamiliar', [AntecedentePatologico_Controller::class, 'store_padecimiento_heredofamiliar']);

    Route::post('/postDetalleMedicamento', [AntecedentePatologico_Controller::class, 'store_DetalleMedicamento']);

    Route::post('/postMedicamento', [AntecedentePatologico_Controller::class, 'store_Medicamento']);

    Route::get('/getPadecimientos/{id}', [AntecedentePatologico_Controller::class, 'getPadecimientos']);

    Route::get('/getPadecimientos_HF/{id}', [AntecedentePatologico_Controller::class, 'getPadecimientos_HF']);

#endregion

#region No Patologico
    Route::post('/postNoPatologico', [AntecedenteNoPatologico_Controller::class, 'store']);

    Route::get('/getAntecedenteNoPatologico/{id}', [AntecedenteNoPatologico_Controller::class, 'getAntecedenteNoPatologico']);
#endregion

#region Actividad Fisica
    Route::post('/postActividadFisica', [ActividadFisica_Controller::class, 'store']);
#endregion

#region Hospitalizacion
    Route::post('/postHospitalizacion', [Hospitalizacion_Controller::class, 'store']);
#endregion
