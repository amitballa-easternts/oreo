<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllreadyLogin
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
        if(Session()->has('loginId') && (url('login')==$request->url() || url('register')==$request->url()))
        {
            return back();
        }
        return $next($request);
    }
}
