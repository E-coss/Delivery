<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Users_roles;

class DashboardController extends Controller
{
    public function index() {
        
        return view('admin.dashboard');
    }

    public function G_User(){
        $user_roles=[];
        foreach(Auth::user()->roles as $role)
        {
            $user_roles[] = $role->id;
        }
        
        if(in_array(1, $user_roles) or in_array(2, $user_roles ) ){
            $datos=[];
            $resultado= Users_roles::Where('role_id',1)->count();
            $datos[1]=$resultado;
            $resultado= Users_roles::Where('role_id',2)->count();
            $datos[2]=$resultado;
            $resultado= Users_roles::Where('role_id',3)->count();
            $datos[3]=$resultado;
            return response()->json(['datos' => $datos]);
        }
    }
}
