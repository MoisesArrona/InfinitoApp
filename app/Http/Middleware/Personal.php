<?php

namespace App\Http\Middleware;

use Closure;

class Personal
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
        if(!(auth()->check())) {
            return redirect('/login');
        }

        //Usuario personal
        if(!(auth()->user()->id_rol == 2)) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
