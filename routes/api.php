<?php

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MetodoDeContacto_Controller;
use App\Models\metododecontacto;
use App\Models\Doctor;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\MetodoDeContacto_Resource;

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
