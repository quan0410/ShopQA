<?php

namespace App\Http\Middleware\admin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->permissions['sale']){
            return $next($request);
        }
        return redirect(route('admin.login.index')) ;
    }
}
