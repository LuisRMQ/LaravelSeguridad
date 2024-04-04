<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario tiene el role_id == 2
        if (auth()->check() && auth()->user()->role_id == 2) {
            // Si el usuario tiene el role_id == 2, redirigirlo a una página de error o cualquier otra página que desees
            return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
        }

        // Si el usuario no tiene el role_id == 2, permitir el acceso a la ruta
        return $next($request);
    }
}

