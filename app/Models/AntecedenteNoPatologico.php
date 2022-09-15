<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ActividadFisica;

class AntecedenteNoPatologico extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAntecedenteNoPatologico',
        'pac_mascota', 'pac_mascota_tipo', 'pac_NumeroHabitaciones','pac_NumeroHabitantes',
        'pac_ConsumoDeAlimentosCapeados', 'pac_GruposAlimenticios', 'pac_CantidadDeComidasAlDia',
        'pac_CantidadDeComidasAlDia', 'pac_ConsumoDePan', 'pac_ConsumoDeSal', 'pac_ConsumoDeRefresco', 'observaciones',
        'idHistoriaClinica'
    ];

    protected $table = "antecedente_no_patologico";
    protected $primaryKey = 'idAntecedenteNoPatologico';

    public function AntecedenteNoPatologico(){
        return $this->hasMany('App\Models\ActividadFisica');
    }
}
