<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MetodoDeContacto_Resource extends JsonResource
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
            'id' => $this->id,
            'doc_metodo' => $this->doc_metodo,
            'doc_telefono_aux' => $this->doc_telefono_aux,
            'doc_horario' => $this->doc_horario,
            'idDoctor' => $this->idDoctor,
        ];
    }
}
