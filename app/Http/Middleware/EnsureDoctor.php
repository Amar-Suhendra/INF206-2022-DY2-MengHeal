<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureDoctor
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
        if (!Auth()->check() || Auth()->user()->level_access !== 0 && Auth()->user()->new_user !== 1) {
            if (Auth()->user()->level_access === 1) {
                return redirect('admin');
            } elseif (Auth()->user()->level_access === null) {
                return redirect('');
            }
            return redirect('change-password');
        }
        return $next($request);
    }
}
