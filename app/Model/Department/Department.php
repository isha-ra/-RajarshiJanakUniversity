<?php

namespace App\Model\Department;

use App\Model\StaffModel\Staff;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';

    function staff(){
        return $this->hasOne(Staff::class,'staff_id','staff_id');
    }
}
