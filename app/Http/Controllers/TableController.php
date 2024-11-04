<?php

namespace App\Http\Controllers;

use App\Models\Improvement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TableController extends Controller
{
    public function update_table()
    {
        $improve = Improvement::all();
        $improvetrash = Improvement::onlyTrashed()->get();


        return view('table', compact('improve', 'improvetrash'));
    }

    public function save_update_table(Request $request)
    {
        $improve = new Improvement();
        $improve->improvement = $request->improvement;
        $improve->save();

        Alert::success('New data successfully saved');
        return Redirect()->route('update_table');
    }

    public function edit_update_table(Request $request)
    {
        $improveid = $request->iid;

        $upd = array();
        $upd['improvement'] = $request->improvement;
        DB::table('improvements')->where('id', $improveid)->update($upd);

        Alert::success('New data successfully saved');
        return Redirect()->route('update_table');
    }
    public function SoftDelete($id)
    {
        $delete = Improvement::find($id)->delete();
        return Redirect()->back()->with('success', 'Category Soft Delete Successfully');
    }

    public function Restore($id)
    {
        $restore = Improvement::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success', 'Category Restore Successfully');
    }

    public function Pdelete($id)
    {
        $pdelete = Improvement::onlyTrashed()->find($id)->forcedelete();
        return Redirect()->back()->with('success', 'Category Permenantly Deleted');
    }
}
