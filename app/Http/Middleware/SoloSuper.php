<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloSuper
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
        switch (Auth::user()->tipo) {
            case ('1'):
                return $next($request); // si es administrador redirige al Superadmin
            break;
            case ('2'):
                return redirect('home'); // si es administrador redirige al HOME
            break;
            case ('3'):  
                // si es moderador lo dirige 
                return redirect('moderador'); //si es administrador redirige al moderador
           break;
           case ('4'):
            return redirect('user'); // si es un usuario normal redirige a la ruta USER
            break;
           
        }
    }
}
