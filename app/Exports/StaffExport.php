<?php

namespace App\Exports;

use App\Model\StaffModel\Staff;
use Maatwebsite\Excel\Concerns\FromCollection;

class StaffExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Staff::all();
    }
}
