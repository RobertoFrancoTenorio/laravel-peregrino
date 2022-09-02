<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
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
            'idPaciente' => $this->idPaciente,
            'pac_Nombres' => $this->pac_Nombre,
            'pac_Primer_Apellido' => $this->pac_Primer_Apellido,
            'pac_Segundo_Apellido' => $this->pac_Segundo_Apellido,
            'pac_Nombre_Completo' => $this->pac_Nombre_Completo,
            'pac_CURP' => $this->pac_CURP,
            'pac_f_nacimiento' => $this->pac_f_nacimiento,
            'pac_tipo' => $this->pac_tipo,
            'pac_Email' => $this->pac_Email,
            'pac_Telefono' => $this->pac_Telefono,
            'pac_Celular' => $this->pac_Celular,
            'pac_Estado_Civil' => $this->pac_Estado_Civil,
            'pac_Escolaridad' => $this->pac_Escolaridad,
            'pac_Pais' => $this->pac_Pais,
            'paciente' => $this->pac_Sexo,
            'pac_Estado' => $this->pac_Estado,
            'pac_Municipio' => $this->pac_Municipio,
            'pac_Localidad' => $this->pac_Localidad,
            'pac_dir_CP' => $this->pac_dir_CP,
            'pac_dir_calle' => $this->pac_dir_calle,
            'pac_dir_colonia' => $this->pac_dir_colonia,
            'pac_dir_comentario' => $this->pac_dir_comentario,
            'id_titular' => $this->id_titular,
            'Parentezco' => $this->Parentezco,
            'user_reg' => $this->user_reg,
            'activo' => $this->activo,
            'empresa' => $this->empresa,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
