<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user_roles=[];
        foreach(Auth::user()->roles as $role)
        {
            $user_roles[] = $role->id;
        }

        if (auth()->check() && in_array(1, $user_roles)) {
            return $next($request);
        }elseif(auth()->check() && in_array(2, $user_roles)){
            return redirect('/admin');
        }
        return redirect('/');
    }
}
