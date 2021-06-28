<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_telefonos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'tipo_telefono','numero', 'entidad_id', 'entidad', 'creado_por', 'actualizado_por'
    ];
}
