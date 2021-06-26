<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        return $next($request)
        ->header('Acess-Control-Allow-Origin','http://127.0.0.1:8000')
        ->header('Acess-Control-Allow-Headers','X-REQUESTED-WITH');
    }
}
