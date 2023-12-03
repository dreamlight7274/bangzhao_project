<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Needcreator
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
        $currentpost = $request->route('post');
        if (auth()->user()->id != $currentpost->user_id){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
