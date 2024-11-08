<?php

namespace App\Exports;

// use App\Models\ExportTable;
use App\Models\WskenyirTable;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportTableData implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return WskenyirTable::all();
    }

    // public function headings(): array
    // {
    //     return [
    //         'ID',
    //         'Timestamp',
    //         'Latitude',
    //         'Longitude',
    //         'Barometric Pressure',
    //         'Relative Humidity',
    //         'Solar Radiation',
    //         'L Voltage',
    //         'B Voltage',
    //         'Turbidity',
    //         'Water Level',
    //         'Water Temperature',
    //         'Wind Direction',
    //         'Wind Speed',
    //         'Chlorophyll',
    //         'Conductivity',
    //         'Dissolved Oxygen (DO)',
    //         'DO Saturation',
    //         'pH',
    //         'Air Temperature',
    //         'Rain'
    //     ];
    // }
}
