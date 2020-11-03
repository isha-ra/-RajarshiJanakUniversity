<?php

namespace App\Http\Controllers\Staff;
use App\Model\EducationModel\Education;


use App\Model\StaffModel\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function addeducation($id)
    {
        $staff =Staff::find($id);
        return view('backend.staff.addeducation',compact('staff'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'staff_id' => 'required',

            'description' => 'required',

            'major_subject' => 'required',
            'completed_year' => 'required',
            'organization' => 'required',

        ]);

        $education = new Education();
        $education->staff_id =$request->staff_id;
        $education->description=$request->description;
        $education->major_subject=$request->major_subject;
        $education->completed_year=$request->completed_year;

        $education->organization=$request->organization;





        if ($education->save()) {

            $request->session()->flash('success_msg', 'Education  added Successfully');
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
//        $education=Education::where('education_id','$education->education_id')->find($id);
        $education = Education::find($id);
        return view('backend.staff.editeducation',compact('education'));
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


        $education = Education::find($id);
        $education->staff_id= $request->staff_id;


        $education->description = $request->description;
        $education->major_subject = $request->major_subject;
        $education->organization = $request->organization;
        $education->completed_year = $request->completed_year;









        if($education->save())
        {
            $request->session()->flash('success_msg', 'Education edit Successfully');
            return redirect()->back(
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
        //
    }
}
