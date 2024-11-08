@extends('layouts.app2')
<style type="text/css">
    .wstable th .wstable td {
        margin: 10px;
    }

    .table-responsive {

        overflow-x: auto;
        /* Enable horizontal scrolling */

    }

    .table td,
    .table th {

        white-space: nowrap;
        /* Prevent text from wrapping */

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
                                <form method="GET" action="{{ route('uttable') }}">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        placeholder="Search by name">
                                    <button type="submit" class="btn btn-secondary">Search</button>
                                </form>
                                <div class="table-responsive nowarp">
                                    <table id="wstable" class="display nowrap" style="width:100%">
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
                                {{ $table->links() }} <!-- Pagination Links -->
                                <form action="{{ route('exporttable') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Export Data</button>
                                </form>
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
