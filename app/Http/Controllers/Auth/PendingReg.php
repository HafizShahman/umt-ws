<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendingReg extends Controller
{
    
    public function pendingreg()
    {
        $user = DB::table('users')->where('id',Auth::user()->id)->first();
        // dd($user);

        return view('pending_account.pendinguser', compact('user'));
    }
}
