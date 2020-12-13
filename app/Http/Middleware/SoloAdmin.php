<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloAdmin
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
        if(Auth::user()->fullacces == 'yes'):
            return $next($request); // si es administrador redirigo al HOME
        endif;
        return redirect('/user'); // si es un usuario normal redirigea la ruta USER 
    }
}
