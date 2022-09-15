<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quirurgica extends Model
{
    use HasFactory;

    protected $fillable = [
        'quirurgico_causa', 'quirurgico_fecha', 'quirurgico_secuela',
        'created_at', 'updated_at'
    ];

    protected $table = 'quirurgico';
}
