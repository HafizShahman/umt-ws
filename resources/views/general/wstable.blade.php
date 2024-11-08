@extends('layouts.app2')
<style type="text/css">
    .table-responsive {

        overflow-x: auto;
        /* Enable horizontal scrolling */

    }

    .table td,
    .table th {
        white-space: nowrap;
        /* Prevent text from wrapping */
    }

    .pagination {
        margin: 20px 0;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-link {
        color: #007bff;
        /* Bootstrap primary color */
        background-color: #fff;
        border: 1px solid #007bff;
    }

    .pagination .page-link:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .active .page-link {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }

    .pagination .disabled .page-link {
        color: #6c757d;
        /* Bootstrap secondary color */
        background-color: #fff;
        border: 1px solid #dee2e6;
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
                    <div class="layout-top-spacing mt-9">
                        <div class="layout-spacing">
                            <div class="widget-content widget-content-area br-6">
                                <div class="row justify-content-between">
                                    <div class="col-3">
                                        <form method="GET" action="{{ route('uttable') }}">
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                placeholder="Search by name">
                                            <button type="submit" class="btn btn-secondary">Search</button>
                                        </form>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ route('exporttable') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Export Data</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="table-responsive nowarp">
                                    <table id="wstable" class="table display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Timestamp</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                {{-- <th>Accumulative Rainfall</th> --}}
                                                <th>Barometric Pressure</th>
                                                <th>Relative Humidity</th>
                                                <th>Solar Radiation</th>
                                                <th>Station Voltage</th>
                                                <th>Bouy Voltage</th>
                                                <th>Turbidity</th>
                                                <th>Water Level</th>
                                                <th>Water Temp</th>
                                                <th>Wind Direction</th>
                                                <th>Wind Speed</th>
                                                <th>Chlorophyll</th>
                                                <th>Conductivity</th>
                                                <th>Dissolved Oxygen</th>
                                                <th>Dissolved Oxygen Saturation</th>
                                                <th>PH</th>
                                                <th>Air Temp</th>
                                                <th>Rainfall</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $num = 1;
                                            @endphp
                                            @foreach ($table as $row)
                                                <tr>
                                                    <td>{{ $num++ }}</td>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ Carbon\Carbon::parse($row->timestamp)->format('d-M-Y h-i-s a') }}
                                                    <td>{{ $row->latitude }}</td>
                                                    <td>{{ $row->longitude }}</td>
                                                    {{-- <td>{{ $row->hour_rainfall }}</td> --}}
                                                    <td>{{ $row->baro_press }}</td>
                                                    <td>{{ $row->rel_hum }}</td>
                                                    <td>{{ $row->sol_rad }}</td>
                                                    <td>{{ $row->L_Voltage }}</td>
                                                    <td>{{ $row->B_Voltage }}</td>
                                                    <td>{{ $row->turbidity }}</td>
                                                    <td>{{ $row->WATER_lvl }}</td>
                                                    <td>{{ $row->w_temp }}</td>
                                                    <td>{{ $row->wind_direction }}</td>
                                                    <td>{{ $row->wind_speed }}</td>
                                                    <td>{{ $row->chlorophyll }}</td>
                                                    <td>{{ $row->conductivity }}</td>
                                                    <td>{{ $row->DO }}</td>
                                                    <td>{{ $row->DO_sat }}</td>
                                                    <td>{{ $row->ph }}</td>
                                                    <td>{{ $row->air_temp }}</td>
                                                    <td>{{ $row->rain }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $table->links('vendor.pagination.bootstrap-5') }} <!-- Pagination Links -->
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
@endsection
