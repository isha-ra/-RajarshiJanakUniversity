<?php

namespace App\Imports;

use App\Model\StafftypeModel\Stafftype;
use Maatwebsite\Excel\Concerns\ToModel;

class StafftypeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Stafftype([
            'name'=>$row[1],
            'established_date'=>$row[2],

        ]);
    }
}
