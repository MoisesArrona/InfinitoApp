<?php

namespace App\Http\Middleware;

use Closure;

class Administrador
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
        //Usuario logeado
        if(!(auth()->check())){
            return redirect('/login');
        }

        //Usuario administrador
        if(!(auth()->user()->id_rol == 1)){
            return redirect('/');
        }

        return $next($request);
    }
}
