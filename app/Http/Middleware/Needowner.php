<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Needowner
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
        $currentuser = $request->route('user');
        // if(is_string($currentuser)){
        //     $currentuser = User::where('id', $currentuser)->first();
        // }

        
        if (auth()->user()->id != $currentuser->id){
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
