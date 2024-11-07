<?php

namespace App\Http\Controllers\UserTwo;

use App\Http\Controllers\Controller;
use App\Models\WskenyirTable;
use Illuminate\Http\Request;

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
        $table = WskenyirTable::all();
        dd($table);
        return view('general.wstable');
    }
}
