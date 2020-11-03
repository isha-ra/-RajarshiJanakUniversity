<?php

namespace App\Http\Controllers\Department;

use App\Model\Department\Department;
use App\Model\Department\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::get();
//        $departments =Department::find($id);
//        $programs = Program::where('department_id',$departments->department_id)->get();
  $programs=Program::get();
//        $ct = count($programs);
        return view('backend.department.index',compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments',
            'established_date' => 'required',
            'staff_id'=>'required',
        ]);

        $departments = new Department();
        $departments->name = $request->name;
        $departments->established_date = $request->established_date;
        $departments->staff_id = $request->staff_id;
//        dd($request->all());
        if ($departments->save()) {

            $request->session()->flash('success_msg', 'Department  Created Successfully');
            return redirect()->back();
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments =Department::find($id);
        return view('backend.department.edit',compact('departments'));
    }
    public function update(Request $request, $id)
    {


        $departments =Department::find($id);
        $departments->name = $request->name;
        $departments->established_date = $request->established_date;
        $departments->staff_id = $request->staff_id;

        if($departments->save())
        {
            return redirect()->action(
                'Department\DepartmentsController@index'
            );
        }else{
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departments = Department::find($id);
        $programs = Program::where('department_id',$id)->get();
        if(count($programs)>0)
        {
            session()->flash('error_msg','programs are assigned to this Department. So, This Staff type cant be deleted');
            return redirect()->back();
        }elseif($departments->delete())
        {
            session()->flash('success_msg','Department Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }

}
