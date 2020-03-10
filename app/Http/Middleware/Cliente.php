<?php

namespace App\Http\Middleware;

use Closure;

class Cliente
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

        //Usuario cliente
        if(!(auth()->user()->id_rol == 3)){
            return redirect('/');
        }

        return $next($request);
    }
}
