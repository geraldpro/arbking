<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Config;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role = Auth::user()->role->id;
        if($role != Config::get('constants.roles.admin')){
            return redirect(Config::get('constants.role_name.' . $role) . '/dashboard'); 
        }
        return $next($request);
    }
}
