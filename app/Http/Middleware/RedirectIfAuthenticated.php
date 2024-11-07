<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
                $upd['last_login_at'] = Carbon::now();
                DB::table('users')->where('id', Auth::user()->id)->update($upd);
                return redirect()->route('superadminmainboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 2) {
                $upd['last_login_at'] = Carbon::now();
                DB::table('users')->where('id', Auth::user()->id)->update($upd);
                return redirect()->route('umtadmindashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 3) {
                $upd['last_login_at'] = Carbon::now();
                DB::table('users')->where('id', Auth::user()->id)->update($upd);
                return redirect()->route('useronedashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 4) {
                $upd['last_login_at'] = Carbon::now();
                DB::table('users')->where('id', Auth::user()->id)->update($upd);
                return redirect()->route('usertwodashboard');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == null) {
                return redirect()->route('pending_approve');
            } else {
                return $next($request);
            }
        }
        
    }
}
