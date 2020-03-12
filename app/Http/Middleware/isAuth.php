<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;


use Closure;

class isAuth
{
    
    public function handle($request, Closure $next)
    {
        if ( ! \App\Auth::check($request)) {
            return redirect('/');
        }

        return $next($request);
    }
}
