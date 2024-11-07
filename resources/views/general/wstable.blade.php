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
                    <div class="layout-top-spacing mt-9">
                        <div class="layout-spacing">
                            <div class="widget-content widget-content-area br-6">
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
    <script>
        $(document).ready(function() {
            $('#wstable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("uttable") }}', // Adjust this to your route
                columns: [
                    { data: null, render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1; // Row counter
                    }},
                    { data: 'id', name: 'id' },
                    { data: 'timestamp', name: 'timestamp', render: function(data) {
                        return moment(data).format('DD-MMM-YYYY hh:mm:ss a'); // Format timestamp
                    }},
                    { data: 'latitude', name: 'latitude' },
                    { data: 'longitude', name: 'longitude' },
                    { data: 'baro_press', name: 'baro_press' },
                    { data: 'rel_hum', name: 'rel_hum' },
                    { data: 'sol_rad', name: 'sol_rad' },
                    { data: 'L_Voltage', name: 'L_Voltage' },
                    { data: 'B_Voltage', name: 'B_Voltage' },
                    { data: 'turbidity', name: 'turbidity' },
                    { data: 'WATER_lvl', name: 'WATER_lvl' },
                    { data: 'w_temp', name: 'w_temp' },
                    { data: 'wind_direction', name: 'wind_direction' },
                    { data: 'wind_speed', name: 'wind_speed' },
                    { data: 'chlorophyll', name: 'chlor ophyll' },
                    { data: 'conductivity', name: 'conductivity' },
                    { data: 'DO', name: 'DO' },
                    { data: 'DO_sat', name: 'DO_sat' },
                    { data: 'ph', name: 'ph' },
                    { data: 'air_temp', name: 'air_temp' },
                    { data: 'rain', name: 'rain' },
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                scrollX: true
            });
        });
    </script>
@endsection

