<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_roles extends Model
{
    use HasFactory;

    public function tipoUsuario()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
