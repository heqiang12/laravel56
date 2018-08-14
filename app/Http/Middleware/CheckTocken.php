<?php

namespace App\Http\Middleware;

use Closure;

class CheckTocken
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
        if($request->session()->get('username') ==''){
            return redirect()->to('login');
        }
        // var_dump($request->session()->get('username'));die();
        return $next($request);
    }
}
