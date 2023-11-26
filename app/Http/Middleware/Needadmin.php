<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Needadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        if (auth()->user()->username != 'dreamlight7274'){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
