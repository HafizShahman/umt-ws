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
    public function table()
    {
        $table = DB::table('wskenyir_table')->limit(10)->get();
        dd($table);
        return view('general.wstable');
    }
}
