<?php

namespace App\Model\Department;


use App\Model\Department\Department;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $primaryKey = 'program_id';
    function departments(){
        return $this->hasOne(Department::class,'department_id','department_id');
    }
}
