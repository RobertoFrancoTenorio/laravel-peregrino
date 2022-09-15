<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfusion extends Model
{
    use HasFactory;

    public $fillable = [
        'idTransfusion', 'transfusion_causa',
        'transfusion_fecha', 'idAntecedentePatologico'
    ];

    public $table = 'transfusion';
}
