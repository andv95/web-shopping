<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;


class CreateSessionCart
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
        
        // if($request->session()->has('Cart') != null){
        //     return $next($request);
        // }else{
        //     $request->session()->push('Cart',null);
        //     // dd($request->session()->has('Cart'));
        //     return $next($request);
        // }
        return $next($request);
    }
}
