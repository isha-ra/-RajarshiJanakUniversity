<?php

namespace App\Http\Middleware;

use Sentinel;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request,Closure $next)
    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }

        if(Sentinel::check())
        {
//            dd($next);
            return $next($request);
        }else
        {
            return route('login');
        }
    }
}
