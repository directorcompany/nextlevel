<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Header
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
        if (ENV('APP_ENV') == 'local') 
        return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers',' Origin, Content-Type, Accept, Authorization, X-Request-With')
        ->header('Access-Control-Allow-Credentials',' true');
        
        else return $next($request);
        
    }
}
