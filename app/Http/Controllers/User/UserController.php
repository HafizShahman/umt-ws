<?php

namespace App\Http\Controllers\User;

use App\Exports\ExportTableData;
use App\Http\Controllers\Controller;
use App\Models\WskenyirTable;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    // public function mainboard()
    // {
    //     return view('general.mainboard');
    // }
    // public function chart()
    // {
    //     return view('general.chart');
    // }
    // public function table()
    // {
    //     return view('general.table');
    // }
    public function wstable(Request $request)
    {
        $query = $request->input('search');
        $table = WskenyirTable::paginate(20);

        return view('general.wstable', compact('table', 'query'));
    }
    public function export()
    {
        return Excel::download(new ExportTableData, 'data.xlsx');
    }
}
