<?php

namespace App\Model\EducationModel;

use App\Model\StaffModel\Staff;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    Protected $primaryKey='education_id';
    function staff(){
        return $this->hasOne(Staff::class,'staff_id','staff_id');
    }


}
