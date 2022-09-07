<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AntecedenteNoPatologico_Resource extends JsonResource
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
            'idAntecedenteNoPatologico' => $this->idAntecedenteNoPatologico,
            'mascota' => $this->mascota,
            'NumeroHabitaciones' => $this->NumeroHabitaciones,
            'NumeroHabitantes' => $this->NumeroHabitantes,
            'ConsumoDeAlimentosCapeados' => $this->ConsumoDeAlimentosCapeados,
            'GruposAlimenticios'  => $this->GruposAlimenticios,
            'CantidadDeComidasAlDia' => $this->CantidadDeComidasAlDia,
            'ConsumoDePan' => $this->ConsumoDePan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
