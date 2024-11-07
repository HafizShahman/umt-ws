<?php

namespace App\Http\Controllers\UserOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserOneController extends Controller
{
    public function mainboard()
    {
        return view('general.mainboard');
    }
    public function chart()
    {
        return view('general.chart');
    }
}
