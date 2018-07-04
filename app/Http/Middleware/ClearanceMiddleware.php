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
        if (Auth::user()->hasPermissionTo('Administer roles & permissions'))
        {
            return $next($request);
        }

        if ($request->is('services'))
        {
            if (Auth::user()->hasPermissionTo('view services'))
            {
                return $next($request);                
            } 
            else
            {
                abort('401');
            }
        }
        elseif ($request->is('subscriptions'))
        {
            if (Auth::user()->hasPermissionTo('view subscriptions'))
            {
                return $next($request);                
            } 
            else
            {
                abort('401');
            }
        }

        if ($request->is('services/create'))
        {
            if (Auth::user()->hasPermissionTo('add services'))
            {
                return $next($request);                
            } 
            else
            {
                abort('401');
            }
        }
        elseif ($request->is('subscriptions/create'))
        {
            if (Auth::user()->hasPermissionTo('add subscriptions'))
            {
                return $next($request);                
            } 
            else
            {
                abort('401');
            }
        }

        if ($request->is('services/*/edit'))
         {
            if (Auth::user()->hasPermissionTo('edit services'))
            {
                return $next($request);
            } 
            else
            {
                abort('401');
            }
        }
        elseif ($request->is('subscriptions/*/edit'))
        {
           if (Auth::user()->hasPermissionTo('edit subscriptions'))
           {
               return $next($request);
           } 
           else
           {
               abort('401');
           }
       }

        if ($request->isMethod('Delete'))
        {
            if (Auth::user()->hasPermissionTo('delete services'))
            {
                return $next($request);
            } 
            else 
            {
                abort('401');
            }
        }

        abort('401');
        // return $next($request);
    }
}