<?php

namespace App\Http\Controllers\UmtAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UmtAdminController extends Controller
{
    public function index()
    {
        $usertable = DB::table('users')
            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
            ->select('users.*', 'roles.name as rolename')
            ->get();


        return view('umtadmin.dashboard', compact('usertable'));
    }

    public function assignrole(Request $request)
    {

        $upd['role_id'] = $request->roleid;
        DB::table('users')->where('id', $request->userid)->update($upd);

        return Redirect()->route('umtadmindashboard');
    }
}
