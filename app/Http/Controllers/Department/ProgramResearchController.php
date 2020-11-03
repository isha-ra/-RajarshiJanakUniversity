<?php

namespace App\Http\Controllers\Department;

use App\Model\Department\Program;
use App\Model\Department\ProgramResearch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProgramResearchController extends Controller
{
    public function addresearch($id)
    {
        $programs =Program::find($id);
        return view('backend.department.addresearch',compact('programs'));
    }    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $program_researches = ProgramResearch::where('program_id',$id)->get();
        return view('backend.department.viewresearch',compact('program_researches'));
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
        $program_researches = new ProgramResearch();
        $program_researches->program_id = $request->program_id;
        $program_researches->title = $request->title;
        $program_researches->staff_id = $request->staff_id;




        if ($program_researches->save()) {

            $request->session()->flash('success_msg', 'Programs research  Created Successfully');
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
        $program_researches =ProgramResearch::find($id);
        return view('backend.department.editresearch',compact('program_researches'));
//
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


        $program_researches =ProgramResearch::find($id);
        $program_researches->title = $request->title;
        $program_researches->staff_id = $request->staff_id;



        if($program_researches->save())
        {
            $request->session()->flash('success_msg', 'Programs research  edit  Successfully');

            return redirect()->back();
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
        $program_researches = ProgramResearch::find($id);
//        $departments = Department::where('staff_id',$id)->get();
//        if(count($departments)>0)
//        {
//            session()->flash('error_msg','Department is assigned to this staff. So, This Staff type cant be deleted');
//            return redirect()->back();
//        }
        if($program_researches->delete())
        {
            session()->flash('success_msg','Programs Research Deleted Successfully ');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }
    }
}
