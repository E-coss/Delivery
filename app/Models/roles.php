<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User','users_roles','user_id','role_id');
    }
}
