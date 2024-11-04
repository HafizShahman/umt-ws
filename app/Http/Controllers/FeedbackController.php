<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Month;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $userfeedback = Feedback::all();
        $curYear = date('Y');
        $curMonth = date('m');

        $curMonthfull = date('M');

        // $userstar = DB::select(
        //     'select
        //     star,
        //     count(star) as countstar
        //     from feedback
        //     group by star'
        // );

        $userstar = DB::table('feedback')->select('star')
            ->selectRaw('count(star) as countstar')
            ->whereRaw('MONTH(created_at) = ' . $curMonth)
            ->groupBy('star')->get();

        // dd($userstar);

        // $recommend = DB::select(
        //     'select
        //     recommend,
        //     count(recommend) as countrecommend
        //     from feedback
        //     group by recommend'
        // );

        $recommend = DB::table('feedback')->select('recommend')
            ->selectRaw('count(recommend) as countrecommend')
            ->whereRaw('MONTH(created_at) = ' . $curMonth)
            ->groupBy('recommend')->get();

        $comment = DB::table('feedback')
            ->selectRaw('count(id) as countcomment')->whereNotNull('feedback')
            ->whereRaw('MONTH(created_at) = ' . $curMonth)
            ->first();

        $commentnull = DB::table('feedback')
            ->selectRaw('count(id) as countcomment')->whereNull('feedback')
            ->whereRaw('MONTH(created_at) = ' . $curMonth)
            ->first();

        $month = Month::all();
        // 1star
        $stat1 = DB::table('feedback')
            ->select('star')
            ->selectRaw('count(star) as countstar')
            ->selectRaw('MONTH(created_at) month')
            ->where('star', '1 Star')->whereRaw('YEAR(created_at) =' . $curYear)
            ->groupBy('month', 'star')->get();

        $fdb1 = [];
        foreach ($stat1 as $st1) {
            $fdb1[$st1->month] = $st1;
        }

        // 2star
        $stat2 = DB::table('feedback')
            ->select('star')
            ->selectRaw('count(star) as countstar')
            ->selectRaw('MONTH(created_at) month')
            ->where('star', '2 Star')->whereRaw('YEAR(created_at) =' . $curYear)

            ->groupBy('month', 'star')->get();

        $fdb2 = [];
        foreach ($stat2 as $st2) {
            $fdb2[$st2->month] = $st2;
        }

        // 3star
        $stat3 = DB::table('feedback')
            ->select('star')
            ->selectRaw('count(star) as countstar')
            ->selectRaw('MONTH(created_at) month')
            ->where('star', '3 Star')->whereRaw('YEAR(created_at) =' . $curYear)

            ->groupBy('month', 'star')->get();

        $fdb3 = [];
        foreach ($stat3 as $st3) {
            $fdb3[$st3->month] = $st3;
        }

        // 4star
        $stat4 = DB::table('feedback')
            ->select('star')
            ->selectRaw('count(star) as countstar')
            ->selectRaw('MONTH(created_at) month')
            ->where('star', '4 Star')->whereRaw('YEAR(created_at) =' . $curYear)

            ->groupBy('month', 'star')->get();

        $fdb4 = [];
        foreach ($stat4 as $st4) {
            $fdb4[$st4->month] = $st4;
        }

        // 5star
        $stat5 = DB::table('feedback')
            ->select('star')
            ->selectRaw('count(star) as countstar')
            ->selectRaw('MONTH(created_at) month')
            ->where('star', '5 Star')->whereRaw('YEAR(created_at) =' . $curYear)

            ->groupBy('month', 'star')->get();

        $fdb5 = [];
        foreach ($stat5 as $st5) {
            $fdb5[$st5->month] = $st5;
        }

        // dd($stat1);


        // dd($comment);

        return view(
            'dashboard',
            [
                'userstar' => $userstar,
                'recommend' => $recommend,
                'month' => $month,
                'fdb1' => $fdb1,
                'fdb2' => $fdb2,
                'fdb3' => $fdb3,
                'fdb4' => $fdb4,
                'fdb5' => $fdb5
            ],
            compact('userfeedback', 'comment', 'commentnull', 'curYear', 'curMonthfull')
        );
    }
    // public function profile()
    // {
    //     return view('profile.show');
    // }

    public function feedbacktable()
    {
        return view('feedbacktable');
    }

    public function feedback(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'improve' => 'required',
                'recommend' => 'required'
            ],
            [
                'name.required' => 'Please enter your name',
                'improve.required' => 'Please Select Which Are The Most Satisfy',
                'recommend.required' => 'Please Select Either You Are Recommending Us Or Not?',
            ]
        );

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->mrn = $request->mrn;
        $feedback->star = $request->rating;
        $feedback->improve = $request->improve;
        $feedback->recommend = $request->recommend;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        // dd($feedback); 

        // return Redirect()->route('mainpage')->with('status', 'Item has been added successfully!');
        Alert::success('Thank You For Your Feedback!', 'We always do our best!');
        // return back();
        // return view('thankyou');
        return Redirect()->route('mainpage');
    }
}
