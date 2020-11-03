<?php

namespace App\Exports;

use App\Model\Department\Department;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Department::all();
    }
}
