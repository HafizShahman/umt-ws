<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $upd['last_logout_at'] = Carbon::now();
        DB::table('users')->where('id', Auth::user()->id)->update($upd);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
