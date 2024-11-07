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
                    <div class="page-hea der">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="javascript:void(0);">WS Table</a></li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  layout-spacing">
                            <div class="widget-content widget-content-area br-6" id="monthtbl">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
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
