<?php

namespace App\Http\Middleware;

use Closure;

class loginmiddleware
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
        if(!$request->session()->has('uid')){
            
            return redirect('/login');
        }
        return $next($request);
    }
}
