<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ActividadFisica;

class AntecedenteNoPatologico extends Model
{
    use HasFactory;

    protected $fillable = [
        'idAntecedenteNoPatologico', 'mascota', 'NumeroHabitaciones',
        'NumeroHabitantes', 'ConsumoDeAlimentosCapeados', 'GruposAlimenticios',
        'CantidadDeComidasAlDia', 'ConsumoDePan'
    ];

    protected $table = "AntecedenteNoPatologico";
    protected $primaryKey = 'idAntecedenteNoPatologico';

    public function AntecedenteNoPatologico(){
        return $this->hasMany('App\Models\ActividadFisica');
    }
}
