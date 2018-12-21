<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        dd($request);
        if (Auth::guard($guard)->check()) {

            if(Auth::user()->status == 0){
                return redirect('/home');
            } else {

            return redirect('/dashboard');
            }
        }

        return $next($request);
    }
}
