<?php

namespace App\Http\Controllers\Staff;

use App\Model\ExperienceModel\Experience;
use App\Model\StaffModel\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiencesController extends Controller
{
    public function addexperience($id)
    {
        $staff =Staff::find($id);
        return view('backend.staff.addexperience',compact('staff'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'staff_id' => 'required',

            'designation' => 'required',

            'year_from' => 'required',
            'year_to' => 'required',
            'previous_organization' => 'required',

        ]);

        $experiences = new Experience();
        $experiences->staff_id =$request->staff_id;
        $experiences->designation=$request->designation;
        $experiences->year_from=$request->year_from;
        $experiences->year_to=$request->year_to;

        $experiences->previous_organization=$request->previous_organization;





        if ($experiences->save()) {

            $request->session()->flash('success_msg', 'Experience added Successfully');
            return redirect()->back();

        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
            return redirect()->back();

        }
        return redirect()->action('Staff\StafftypeController@addexperience');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::get();
        return view('backend.staff.experiences',compact('experiences'));
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
        $experiences = Experience::find($id);
        return view('backend.staff.editexperience',compact('experiences'));
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


        $experiences = Experience::find($id);
        $experiences->staff_id= $request->staff_id;


        $experiences->designation = $request->designation;
        $experiences->year_from = $request->year_from;
        $experiences->year_to = $request->year_to;
        $experiences->previous_organization = $request->previous_organization;









        if($experiences->save())
        {
            $request->session()->flash('success_msg', 'Experiences edit Successfully');
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
