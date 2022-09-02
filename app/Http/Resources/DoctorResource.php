<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
            "id" => $this->id,
            'doc_nombre' => $this->doc_nombre,
            'doc_primer_apellido' => $this->doc_primer_apellido,
            'doc_segundo_apellido' => $this->doc_segundo_apellido,
            "doc_nombre_completo" => $this->doc_nombre_completo,
            "doc_email" => $this->doc_email,
            "doc_cedula" => $this->doc_cedula,
            "doc_curp" => $this->doc_curp,
            "activo" => $this->activo,
            "doc_estado" => $this->doc_estado,
            "doc_municipio" => $this->doc_municipio,
            "doc_dir_colonia" => $this->doc_dir_colonia,
            "doc_dir_calle" => $this->doc_dir_calle,
            "doc_dir_numero" => $this->doc_dir_numero,
            "doc_dir_cp" => $this->doc_dir_cp,
            "doc_dir_cp" => $this->doc_dir_cp,
            "doc_celular_principal" => $this->doc_celular_principal,
            "doc_horario_ini" => $this->doc_horario_ini,
            "doc_horario_fin" => $this->doc_horario_fin,
            "doc_especialidades" => $this->doc_especialidades,
        ];
    }
}
