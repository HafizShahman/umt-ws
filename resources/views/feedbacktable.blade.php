@extends('layouts.app2')
<style type="text/css">
    #monthtbl1 {
        display: none;
    }

    #monthtbl2 {
        display: none;
    }

    #monthtbl3 {
        display: none;
    }

    #monthtbl4 {
        display: none;
    }

    #monthtbl5 {
        display: none;
    }

    #monthtbl6 {
        display: none;
    }

    #monthtbl7 {
        display: none;
    }

    #monthtbl8 {
        display: none;
    }

    #monthtbl9 {
        display: none;
    }

    #monthtbl10 {
        display: none;
    }

    #monthtbl11 {
        display: none;
    }

    #monthtbl12 {
        display: none;
    }
</style>
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="javascript:void(0);">Feedback Table</a></li>
                            </ol>
                        </nav>
                    </div>
                    <p id="demo"></p>

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4  layout-spacing">
                            <div class="widget widget-content widget-content-area br-6">
                                <label for="inputEmail4" class="text-dark">Select Month *</label>
                                <select id="monthselect" class="form-control" onchange="myFunction()">
                                    <option value="a" id="a" class="" selected>
                                        <b>Select Month</b>
                                    </option>
                                    <option value="January" id="January" class="mon1">
                                        <b>January</b>
                                    </option>
                                    <option value="February" id="February" class="mon2">
                                        <b>February</b>
                                    </option>
                                    <option value="March" id="March" class="mon3">
                                        <b>March</b>
                                    </option>
                                    <option value="April" id="April" class="mon4">
                                        <b>April</b>
                                    </option>
                                    <option value="May" id="May" class="mon5">
                                        <b>May</b>
                                    </option>
                                    <option value="Jun" id="Jun" class="mon6">
                                        <b>Jun</b>
                                    </option>
                                    <option value="July" id="July" class="mon7">
                                        <b>July</b>
                                    </option>
                                    <option value="August" id="August" class="mon8">
                                        <b>August</b>
                                    </option>
                                    <option value="September" id="September" class="mon9">
                                        <b>September</b>
                                    </option>
                                    <option value="October" id="October" class="mon10">
                                        <b>October</b>
                                    </option>
                                    <option value="November" id="November" class="mon11">
                                        <b>November</b>
                                    </option>
                                    <option value="December" id="December" class="mon12">
                                        <b>December</b>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  layout-spacing">
                            @foreach (range(1, 12) as $month)
                                <div class="widget-content widget-content-area br-6" id="monthtbl{{ $month }}">
                                    <table id="html5-extension{{ $month }}" class="table table-hover non-hover"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Name - MRN</th>
                                                <th>Status</th>
                                                <th>Rate</th>
                                                <th>Satisfaction</th>
                                                <th>Recommending</th>
                                                <th>Comments</th>
                                                {{-- <th class="dt-no-sorting">Actions</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $num = 1;
                                                $curYear = date('Y');
                                                
                                                // $userfeedback = Feedback::all()->sortDesc();
                                                $userfeedback = DB::table('feedback')
                                                    ->whereRaw('MONTH(created_at) = ' . $month)
                                                    ->whereRaw('YEAR(created_at) = ' . $curYear)
                                                    ->latest()
                                                    ->get();
                                            @endphp
                                            @foreach ($userfeedback as $row)
                                                <tr>
                                                    <td>{{ $num++ }}</td>
                                                    <td>{{ Carbon\Carbon::parse($row->created_at)->format('d-M-Y') }}
                                                    <td>{{ $row->name . ' - ' . $row->mrn }}</td>
                                                    <td>
                                                        @if (isset($row->mrn))
                                                            @php
                                                                $count = DB::table('feedback')
                                                                    ->select('mrn')
                                                                    ->where('mrn', $row->mrn)
                                                                    ->count();
                                                                // dd($count);
                                                            @endphp
                                                            @if ($count > 1)
                                                                <span class="badge badge-success">Follow up
                                                                    Patient</span>
                                                            @else
                                                                <span class="badge badge-warning">New Patient</span>
                                                            @endif
                                                        @else
                                                            <span class="badge badge-danger">New Patient</span>
                                                        @endif

                                                    </td>
                                                    <td>{{ $row->star }}</td>
                                                    <td>{{ $row->improve }}</td>
                                                    <td>{{ $row->recommend }}</td>
                                                    <td>{{ $row->feedback }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                @include('general.inc.footer')
            </div>
            <!--  END CONTENT AREA  -->
        </div>
    </div>
    <!--  END CONTENT AREA  -->
    @include('general.inc.js')
    @include('general.js.feed_js')
@endsection
