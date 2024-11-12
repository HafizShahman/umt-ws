<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function user_list()
    {
        $usertable = DB::table('users')
            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
            ->select('users.*', 'roles.name as rolename')
            ->get();


        return view('admin.userlist', compact('usertable'));
    }

    public function adminassignrole(Request $request)
    {

        $upd['role_id'] = $request->roleid;
        DB::table('users')->where('id', $request->userid)->update($upd);

        return Redirect()->route('superadminuser_list');
    }
    
    public function deleteuser(Request $request){
        DB::table('users')->where('id', $request->userid)->delete();
        return Redirect()->route('superadminuser_list');

    }
}
