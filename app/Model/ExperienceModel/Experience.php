<?php

namespace App\Model\ExperienceModel;

use App\Model\StaffModel\Staff;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    Protected $primaryKey='experience_id';
    function staff(){
        return $this->hasOne(Staff::class,'staff_id','staff_id');
    }
}
