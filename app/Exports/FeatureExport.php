<?php

namespace App\Exports;

use App\Feature;
use Maatwebsite\Excel\Concerns\FromCollection;

class FeatureExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Feature::all();
    }
}
