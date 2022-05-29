<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdmin
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
        if (!Auth()->check() || Auth()->user()->level_access !== 1 && Auth()->user()->new_user !== null) {
            if (Auth()->user()->level_access === 0) {
                return redirect('');
            }
            return redirect('doctor');
        } else {
            return redirect('change-password');
        }
        return $next($request);
    }
}
