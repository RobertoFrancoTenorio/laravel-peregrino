<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActividadFisica_Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'idActividadFisica' => $this->idActividadFisica,
            'frecuencia' => $this->frecuencia,
            'nombreActividad' => $this->nombreActividad,
            'id_antecedente_no_patologico' => $this->id_antecedente_no_patologico,
            'estatusActividadFisica' => $this->estatusActividadFisica,
        ];
    }
}
