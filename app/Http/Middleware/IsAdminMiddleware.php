<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Auth::check() || Auth::user()->roles != '1'){
            return redirect()->route('/');
        }
        return $next($request);
    }
}
