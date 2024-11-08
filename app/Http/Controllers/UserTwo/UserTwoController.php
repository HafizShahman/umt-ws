<?php

namespace App\Http\Controllers\UserTwo;

use App\Http\Controllers\Controller;
use App\Models\WskenyirTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTwoController extends Controller
{
    public function mainboard()
    {
        return view('general.mainboard');
    }
    public function chart()
    {
        return view('general.chart');
    }
    public function table(Request $request)
    {
        
        // dd($table);
        if ($request->ajax()) {

            $table = WskenyirTable::all();

            return datatables()->of($table)->make(true);

        }
        return view('general.wstable');
    }
}
