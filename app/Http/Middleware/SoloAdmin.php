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
        switch (Auth::user()->tipo) {
            case ('1'):
                   return redirect('superAdmin'); // si es administrador redirige al Superadmin
            break;
            case ('2'):
                return $next($request); // si es administrador redirige al HOME
            break;
            case ('3'):
                return redirect('moderador'); //si es administrador redirige al moderador
           break;
           case ('4'):
            return redirect('user'); // si es un usuario normal redirige a la ruta USER
            break;
        
           
        }
        //if(Auth::user()->fullacces == 'yes'):
       //     return $next($request); // si es administrador redirigo al HOME
       // endif;
        //return redirect('/user');  si es un usuario normal redirigea la ruta USER 
    }
}
