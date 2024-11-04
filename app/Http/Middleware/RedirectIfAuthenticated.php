<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
                return redirect()->route('superadmindashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 2) {
                return redirect()->route('umtadmindashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 3) {
                return redirect()->route('dasboard');
            } else {
                return $next($request);
            }
        }
    }
}