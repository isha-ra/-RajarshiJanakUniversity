<?php

namespace App\Http\Controllers\Department;

use App\Model\Department\Department;
use App\Model\Department\Program;
use App\Model\Department\ProgramRequirement;
use App\Model\Department\ProgramResearch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProgramController extends Controller
{
    public function programs_detail($id)
    {
        $departments = department::find($id);
        $programs = Program::where('department_id',$departments->department_id)->get();
        return view('frontend.viewprogram',compact('departments','programs'));
    }
    public function programs_intro($id)
    {
//        $departments = department::find($id);
//        $programs = Program::where('department_id',$departments->department_id)->get();
//        return view('frontend.subject',compact('departments','programs'));
        $programs = Program::find($id);
        $programs_requirements= ProgramRequirement::where('program_id',$id)->get();
        $programs_research= ProgramResearch::where('program_id',$id)->get();
//        dd($programs_requirements);
        return view('frontend.subject',compact('programs','programs_requirements','programs_research'));

    }
    public function programs_details($id)
    {

        $programs = Program::find($id);
        $program_requirements= ProgramRequirement::where('program_id',$id)->get();
//        $program_researches= ProgramResearch::where('program_id',$id)->get();

//        dd($programs_requirements);
        return view('backend.department.viewprogram',compact('programs','program_requirements'));

    }

    public function addprograms($id)
    {
        $departments =Department::find($id);
        return view('backend.department.addprograms',compact('departments'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $departments = department::find($id);
        $programs = Program::where('department_id',$departments->department_id)->get();

        return view('backend.department.viewprogram',compact('programs'));
    }
    public function singleprogram($id)
    {
        $program =Program::find($id);
        $program_requirements=ProgramRequirement::where('program_id',$program->program_id)->get();
        $programs_research= ProgramResearch::where('program_id',$program->program_id)->get();


//$programs=Program::where('program_id',$programs->program_id)->get();
        return view('backend.department.single-program',compact('program','program_requirements','programs_research'));

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
        $programs = new Program();
        $programs->department_id = $request->department_id;
        $programs->name = $request->name;
        $programs->description =$request->description;
        $programs->credit_hours=$request->credit_hours;
        $programs->semester=$request->semester;
        $programs->years_to_complete=$request->years_to_complete;



        if ($programs->save()) {

            $request->session()->flash('success_msg', 'Programs  Created Successfully');
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
        $programs =Program::find($id);
        return view('backend.department.programedit',compact('programs'));
    }
    public function update(Request $request, $id)
    {


        $programs =Program::find($id);
        $programs->name = $request->name;
        $programs->description = $request->description;
        $programs->credit_hours = $request->credit_hours;
        $programs->semester = $request->semester;
        $programs->years_to_complete = $request->years_to_complete;


        if($programs->save())
        {
            $request->session()->flash('success_msg', 'Edit Successfully');


            return redirect()->back(
//                'Department\ProgramController@index'
            );
        }else{
            $request->session()->flash('error_msg', 'Oops! Error Occured');
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
        $program = Program::find($id);
//        $departments = Department::where('staff_id',$id)->get();
//        if(count($departm)>0)
//        {
//            session()->flash('error_msg','Department is assigned to this staff. So, This Staff type cant be deleted');
//            return redirect()->back();
//        }
        if($program->delete())
        {
            session()->flash('success_msg','Program,ProgramRequiremnet,ProgramResearch  Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }

    }
}
