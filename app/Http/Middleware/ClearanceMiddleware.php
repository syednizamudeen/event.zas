<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        
        if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
    {
            return $next($request);
        }

        if ($request->is('services/create'))//If user is creating a services
         {
            if (!Auth::user()->hasPermissionTo('add services'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }

        if ($request->is('services/*/edit')) //If user is editing a services
         {
            if (!Auth::user()->hasPermissionTo('edit services')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a services
         {
            if (!Auth::user()->hasPermissionTo('delete services')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}