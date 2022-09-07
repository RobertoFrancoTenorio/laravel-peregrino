<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HitoriaClinica_Resource extends JsonResource
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
            'idHistoriaClinica' => $this->idHistoriaClinica,
            'id_paciente' => $this->id_paciente,
            'id_register' => $this->id_register,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
