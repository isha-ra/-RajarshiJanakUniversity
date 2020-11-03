<?php

namespace App\Http\Controllers\Department;

use App\Model\Department\Program;
use App\Model\Department\ProgramRequirement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProgramRequirementController extends Controller
{
    public function addrequirement($id)
    {
        $programs =Program::find($id);
        return view('backend.department.addrequirement',compact('programs'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_requirements = ProgramRequirement::get();
        return view('backend.department.viewprogramrequirement',compact('program_requirements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programs_requirements = new ProgramRequirement();
        $programs_requirements->program_id = $request->program_id;
        $programs_requirements->requirement_name = $request->requirement_name;
        $programs_requirements->description =$request->description;






        if ($programs_requirements->save()) {

            $request->session()->flash('success_msg', 'Programs requirement  Created Successfully');
            return redirect()->back();
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $program_requirements =ProgramRequirement::where('programrequirement_id',$id)->first();
        return view('backend.department.editrequirement',compact('program_requirements'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $program_requirements = ProgramRequirement::find($id);
        $program_requirements->requirement_name = $request->requirement_name;
        $program_requirements->description = $request->description;



        if ($program_requirements->save()) {
            $request->session()->flash('success_msg', 'Program requiremnet update Successfully');
            return redirect()->back();

        } else {
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
        $program_requirement = ProgramRequirement::find($id);
//        $departments = Department::where('staff_id',$id)->get();
//        if(count($departments)>0)
//        {
//            session()->flash('error_msg','Department is assigned to this staff. So, This Staff type cant be deleted');
//            return redirect()->back();
//        }
        if($program_requirement->delete())
        {
            session()->flash('success_msg','Programs Requirement Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }
}
